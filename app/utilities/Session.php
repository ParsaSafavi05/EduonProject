<?php

namespace App\Utilities;

class Session
{
    public static function start()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function get($key)
    {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }

    public static function remove($key)
    {
        unset($_SESSION[$key]);
    }

    public static function destroy()
    {
        if (session_status() == PHP_SESSION_ACTIVE) {
            session_destroy();
        }
    }

    public static function flash($key, $value = null)
    {
        if($value){
            $_SESSION['flash'][$key] = $value;
        } else {
            if (isset($_SESSION['flash'][$key])) {
                $message = $_SESSION['flash'][$key];
                unset($_SESSION['flash'][$key]);
                self::destroy();
                return $message;
            }
            return null;
        }
    }
}
