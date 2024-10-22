<?php

namespace App\Http;

use App\Http\Config;
use App\Utilities\Redirect;
use App\Utilities\Session;
use App\Models\DB;

class BaseController
{
    public function view($view, array $data = [])
    {

        $viewPath = Config::RESOURCES_PATH . $view . '.php';

        if (file_exists($viewPath)) {

            extract($data);

            require_once $viewPath;
        } else {
            // The view file is not found, return false so middleware can handle it
            return false;
        }
    }

    public function layout($content)
    {
        Session::start();
        $userId = Session::get("userLoggedIn");
        if ($userId) {
            $user = DB::table("users")
                ->where("user_id", "=", $userId)
                ->get();

            $username = $user[0]['username'];

            $replacements = [
                '{{loginBtn}}' => $username,
                '{{content}}' => $content
            ];
        } else {
            $replacements = [
                '{{loginBtn}}' => 'ورود/ثبت نام',
                '{{content}}' => $content
            ];
        }


        ob_start();

        require_once Config::LAYOUT_PATH;

        $template = ob_get_clean();

        // $replacements = [
        //     '{{userId}}' => $username,
        //     '{{content}}' => $content
        // ];

        echo str_replace(array_keys($replacements), array_values($replacements), $template);
    }

    public function redirect($url, $queryParams = null)
    {
        Redirect::redirect($url, $queryParams);
    }
}
