<?php

namespace App\Controllers;

use App\Http\BaseController;
use App\Http\Request;
use App\Models\DB;
use App\Utilities\Session;
use Carbon\Carbon;

class RegisterController extends BaseController
{
    public function index()
    {
        Session::start();
        if (Session::get("userLoggedIn")) {
            $this->redirect("myaccount/index");
        }
        $this->view('register/index', ['']);
    }

    public function registerUser()
    {
        Session::start();
        $name = Request::getParam('name');
        $email = Request::getParam('email');
        $phone_number = Request::getParam('phone_number');
        $password = Request::getParam('password');

        $user = DB::table('users')
        ->where('email_address','=', $email)
        ->get();

        if ($user !== null) {
            if (isset($name) && !empty($name)) {
                if (isset($email) && !empty($email)) {
                    if (isset($phone_number) && !empty($phone_number)){
                        if (isset($password) && !empty($password)) {

                            $hashedpassword = md5($password);
                            $data = [
                                'fullname'=> $name,
                                'email_address'=> $email,
                                'phone_number'=> $phone_number,
                                'password'=> $hashedpassword,
                                'created_at' => Carbon::now()->toDateTimeString(),
                            ];

                            DB::table('users')
                            ->insert($data);

                                Session::flash('Success','با موفقیت ثبت نام شدید');
                                $this->redirect('login/index');
                        }
                        else {
                            Session::flash('Error', 'رمز عبور خالی است');
                            $this->redirect('register/index');
                        }
                    }
                    else {
                        Session::flash('Error', 'شماره تماس خالی است');
                        $this->redirect('register/index');
                    }
                } 
                
                else {
                    Session::flash('Error', 'ایمیل خالی');
                    $this->redirect('register/index');
                }
            } 
            
            else {
                Session::flash('Error', 'نام خالی است');
                $this->redirect('register/index');
            }
        }
        else {
            Session::flash('Error', 'کاربر وجود دارد');
            $this->redirect('register/index');
        }
    }
}
