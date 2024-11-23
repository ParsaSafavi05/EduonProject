<?php

namespace App\Controllers;

use App\Http\BaseController;
use App\Http\Request;
use App\Models\DB;
use App\Utilities\Session;

class MyaccountController extends BaseController
{
    public function index()
    {
        Session::start();
        $userLoggedIn = Session::get('userLoggedIn');

        $user_info = DB::table('users')
        ->where('user_id', '=', $userLoggedIn)
        ->first();

        $this->view('myaccount/index', [
            'userLoggedIn' => $userLoggedIn,
            'user_info' => $user_info
         ]);
    }

    public function update()
    {
        Session::start();
        $userLoggedIn = Session::get('userLoggedIn');

        $user_info = DB::table('users')
        ->where('user_id', '=', $userLoggedIn)
        ->first();

        $fullname = $user_info['fullname'];
        $email_address = $user_info['email_address'];
        $phone_number = $user_info['phone_number'];
        $password = $user_info['password'];

        $new_fullname = Request::getParam('new_fullname');
        $new_email_address = Request::getParam('new_email_address');
        $new_phone_number = Request::getParam('new_phone_number');
        $new_password = md5(Request::getParam('new_password'));
        $repeat_password = md5(Request::getParam('repeat_password'));

        $update_data = [];

        if ($fullname != $new_fullname) {
            $update_data['fullname'] =$new_fullname;
        }

        if ($email_address != $new_email_address) {
            $update_data['email_address'] = $new_email_address;
        }
    
        if ($phone_number != $new_phone_number) {
            $update_data['phone_number'] = $new_phone_number;
        }
    
        if ($password != $new_password) {
            if ($new_password === $repeat_password) {
                $update_data['password'] = $new_password;
            } else {
                Session::flash('Error', 'رمز عبور با تکرارش برابر نیست.');
            }
        }

        if (!empty($update_data)) {
            DB::table('users')
            ->where('user_id', '=', $userLoggedIn)
            ->update($update_data);
        } else {
            Session::flash('Warning', 'هیچ تغییری انجام نشد.');
        }

        $this->redirect('myaccount/index');
    }

    public function logout()
    {
        Session::start();
        Session::remove('userLoggedIn');
        Session::destroy();
        $this->redirect('myaccount/index', ['']);
    }
}
