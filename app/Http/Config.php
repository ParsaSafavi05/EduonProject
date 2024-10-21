<?php 

namespace App\Http;

class Config{
    const FULL_PATH = "http://localhost/public_html/public";
    const CONTROLLERS_PATH = "../app/controllers/";
    const CONTROLLERS_NAMESPACE = 'App\Controllers\\';
    const RESOURCES_PATH = "../resources/";
    const LAYOUT_PATH = "../resources/layout/template.php";
    const DB_HOST = "127.0.0.1";
    const DB_NAME = "eduon_db";
    const DB_USERNAME = "root";
    const DB_PASSWORD = "";
    const CONTROLLER_DIR = __DIR__ . "/../Controllers/";
}