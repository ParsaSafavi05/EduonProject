<?php 

namespace App\Http;

class Config{
    const FULL_PATH = "http://localhost/public_html/public";
    const CONTROLLERS_PATH = "../app/controllers/";
    const CONTROLLERS_NAMESPACE = 'App\\Controllers\\';
    const RESOURCES_PATH = "../resources/";
    const LAYOUT_PATH = "../resources/layout/template.php";
    const DB_HOST = "ip_address";
    const DB_NAME = "your_db";
    const DB_USERNAME = "username";
    const DB_PASSWORD = "password";
    const CONTROLLER_DIR = __DIR__ . "/../Controllers/";
}