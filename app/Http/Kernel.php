<?php

namespace App\Http;

use App\Http\Config;
use App\Http\Middleware\HandleNotFoundMiddleware;
use App\Utilities\Redirect;
use App\Http\Request;

class Kernel
{
    protected $controller = null;
    protected $action = null;
    protected $params = [];
    protected $middleware = [];
    protected $redirectFlag = false; // Flag to prevent redirect loops

    public function __construct()
    {
        try {
            $this->registerMiddleware();

            $url = $this->parseUrl();
            $middlewareResponse = $this->handleMiddleware($url);
            if ($middlewareResponse === false) {
                return;
            }

            // Set controller from URL or default to HomeController
            $controllerClass = $this->getControllerClass($url);

            if (class_exists($controllerClass)) {
                $this->controller = new $controllerClass;
            } else {
                $this->handleNotFound();
                return;
            }

            // Set action from URL or default to 'index'
            if (!$this->setActionMethod($url)) {
                $this->handleNotFound();
                return;
            }

            // Set parameters and call the action method
            $this->params = $url ? array_values($url) : [];

            if (is_callable([$this->controller, $this->action])) {
                call_user_func_array([$this->controller, $this->action], $this->params);
            } else {
                $this->handleNotFound();
                return;
            }
        } catch (\Exception $e) {
            error_log($e->getMessage());
            $this->handleError();
        }
    }

    protected function registerMiddleware()
    {
        $this->middleware[] = new HandleNotFoundMiddleware();
    }

    protected function handleMiddleware($request)
    {
        $next = function ($req) {
            return true;
        };

        foreach (array_reverse($this->middleware) as $middleware) {
            $next = function ($req) use ($middleware, $next) {
                return $middleware->handle($req, $next);
            };
        }

        return $next($request);
    }

    protected function getControllerClass(&$url)
    {
        if (isset($url[0]) && !empty($url[0])) {
            // Capitalize and format to get the controller class name
            $formatUrl = ucfirst($url[0]) . 'Controller';
            return Config::CONTROLLERS_NAMESPACE . $formatUrl;
        } else {
            // Default to HomeController if no controller is specified
            $url[0] = 'home';
            return Config::CONTROLLERS_NAMESPACE . 'HomeController';
        }
    }

    protected function setActionMethod(&$url)
    {
        if (isset($url[1]) && !empty($url[1]) && method_exists($this->controller, $url[1])) {
            $this->action = $url[1];
            unset($url[1]);
            return true;
        } else if (!isset($url[1]) || empty($url[1])) {
            if (method_exists($this->controller, 'index')) {
                $this->action = 'index';

                if (!$this->redirectFlag) {
                    $this->redirectFlag = true;
                    $controllerName = $url[0];
                    $newUrl = '/' . $controllerName . '/index';
                    Redirect::redirect($newUrl);
                }

                return true;
            }
        }

        return false;
    }

    public function parseUrl()
    {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return [];
    }

    protected function handleNotFound()
    {
        $middleware = new HandleNotFoundMiddleware();
        $middleware->handle(null, function () {
            return false;
        });
        Redirect::redirect('error/404');
    }

    protected function handleError()
    {
        http_response_code(500);
        echo "An unexpected error occurred.";
        exit();
    }
}
