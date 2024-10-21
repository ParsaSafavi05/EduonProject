<?php

namespace App\Controllers;

use App\Http\BaseController;
use App\Models\DB;
use App\Utilities\Session;

class HomeController extends BaseController
{
    public function index()
    {
        $this->view("home/index");
    }
}
