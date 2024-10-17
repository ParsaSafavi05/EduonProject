<?php

namespace App\Http\Middleware;

use App\Http\BaseController;
use App\Http\Config;

class HandleNotFoundMiddleware extends BaseController
{
    public function handle($request, $next)
    {
        // Call the next middleware/controller
        $response = $next($request);

        // Check if the response indicates a missing resource (404)
        if ($response === false || http_response_code() == 404) {
            $this->handleNotFound();
            return false; // Stop the flow
        }

        return $response;
    }

    protected function handleNotFound()
    {
        // Handle a 404 error in a centralized way
        http_response_code(404);
        require_once Config::RESOURCES_PATH . 'errors/404.php';
        exit(); // Stop further execution
    }
}
