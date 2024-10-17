<?php

namespace App\Utilities;

use App\Http\Config;
class Redirect
{
    public static function redirect($url, array $queryParams = [])
{

    $url = ltrim($url, '/');

    $fullUrl = rtrim(Config::FULL_PATH, '/') . '/' . $url;

    if (!empty($queryParams)) {
        $queryString = http_build_query($queryParams);
        $fullUrl .= '?' . $queryString;
    }

    header('Location: ' . $fullUrl);
    exit();
}
}