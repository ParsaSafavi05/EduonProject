<?php

namespace App\Controllers;

use App\Http\BaseController;
use App\Http\Request;
use App\Models\DB;
use App\Utilities\Session;

class LoginController extends BaseController
{
    public function index()
    {

        Session::start();
        if ($userId = Session::get('userLoggedIn')) {
            $this->redirect('myaccount/index');
        }
        $this->view('login/index', ['']);
    }

    public function userLogin()
    {
        Session::start();
        if (Session::get('userLoggedIn')) {
            $this->redirect('myaccount/index');
        }
        $email_phone = Request::getParam('email-phone');
        $password = Request::getParam('password');
        $hashedpassword = md5($password);

        $user = DB::table('users')
            ->where('email', '=', $email_phone)
            ->get();
        if (!isset($email_phone) || empty($email_phone)) {
            Session::flash('Error', 'ایمیل خالی است');
            $this->redirect('login/index', []);
        } else {
            if (!isset($password) || empty($password)) {
                Session::flash('Error', 'رمز عبور خالی است');
                $this->redirect('login/index', []);
            } else {
                if (count($user) == 0) {
                    Session::flash('Error', 'ایمیل یا رمز عبور نادرست است');
                    $this->redirect('login/index', []);
                } else {
                    if ($hashedpassword !== $user[0]['password']) {
                        Session::flash('Error', 'ایمیل یا رمز عبور نادرست است');
                        $this->redirect('login/index', []);
                    } else {
                        Session::start();
                        Session::set('userLoggedIn', $user[0]['user_id']);

                        $this->redirect('myaccount/index', []);
                    }
                }
            }
        }

        $this->redirect('login/index');
    }
}
