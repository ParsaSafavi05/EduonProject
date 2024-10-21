<?php

namespace App\Controllers;

use App\Http\BaseController;
use App\Models\DB;
use App\Utilities\Session;

class MyaccountController extends BaseController
{
    public function index()
    {
        Session::start();
        $this->view('myaccount/index', ['']);
    }
}
