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
        $userLoggedIn = Session::get('userLoggedIn');
        $this->view('myaccount/index', ['userLoggedIn' => $userLoggedIn]);
    }

    public function update()
    {
        
    }

    public function logout()
    {
        Session::start();
        Session::remove('userLoggedIn');
        Session::destroy();
        $this->redirect('myaccount/index', ['']);
    }
}
