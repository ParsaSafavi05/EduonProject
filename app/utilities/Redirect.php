<?php

namespace App\Utilities;

use App\Http\Config;

class Redirect
{
    public static function redirect($url)
    {

        $url = ltrim($url, '/');

        $fullUrl = rtrim(Config::FULL_PATH, '/') . '/' . $url;

        header('Location: ' . $fullUrl);
        exit();
    }
}
