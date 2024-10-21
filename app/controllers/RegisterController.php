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
        ->where('email','=', $email)
        ->get();

        if (count($user) == 0) {
            if (isset($name) && !empty($name)) {
                if (isset($email) && !empty($email)) {
                    if (isset($phone_number) && !empty($phone_number)){
                        if (isset($password) && !empty($password)) {

                            $hashedpassword = password_hash($password, PASSWORD_BCRYPT);

                            $data = [
                                'fullname'=> $name,
                                'email'=> $email,
                                'phone_number'=> $phone_number,
                                'password'=> $hashedpassword,
                                'created_at' => Carbon::now(),
                            ];

                            DB::table('users')->insert($data);

                            Session::flash('Success','Succesfully registered');
                            $this->redirect('login/index');
                        }
                        else {
                            Session::flash('Error', 'password number is empty');
                            $this->redirect('register/index');
                        }
                    }
                    else {
                        Session::flash('Error', 'Phone number is empty');
                        $this->redirect('register/index');
                    }
                } 
                
                else {
                    Session::flash('Error', 'Email is empty');
                    $this->redirect('register/index');
                }
            } 
            
            else {
                Session::flash('Error', 'Name is empty');
                $this->redirect('register/index');
            }
        }
        else {
            Session::flash('Error', 'User already exists');
            $this->redirect('register/index');
        }
    }
}
