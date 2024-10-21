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
        if (Session::get('userLoggedIn')) {
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
        $hashedpassword = password_hash($password, PASSWORD_BCRYPT);

        $user = DB::table('users')
            ->where('email', '=', $email_phone)
            ->get();
        if (isset($email_phone) && !empty($email_phone)) {
            if (isset($password) && !empty($password)) {
                if (count($user) != 0) {
                    if ($password === $user[0]['password']) {
                        Session::start();
                        Session::set('userLoggedIn', $user[0]['user_id']);

                        $this->redirect('myaccount/index', []);
                    } else {
                        Session::flash('Error', 'Email or password is wrong');
                        $this->redirect('login/index', []);
                    }
                } else {
                    Session::flash('Error', 'email or password is wrong');
                    $this->redirect('login/index', []);
                }
            } else {
                Session::flash('Error', 'Password is empty');
                $this->redirect('login/index', []);
            }
        } else {
            Session::flash('Error', 'Email is empty');
            $this->redirect('login/index', []);
        }

        $this->redirect('login/index');
    }
}
