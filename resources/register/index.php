<?php

use App\Utilities\Session;
Session::start();
$content = '

<div class="page-title-area bg-10">
<div class="container">
    <div class="page-title-content">
        <h2>ثبت نام</h2>
        <ul>
            <li>
                <a href="index.html">
                    خانه
                </a>
            </li>
            <li class="active">ثبت نام</li>
        </ul>
    </div>
</div>
</div>';


$content .= '<section class="user-area-style ptb-100">
<div class="container">
    <div class="registration-area">';

if ($message = Session::flash('Error')) {
    $content .= "<div class='alert alert-danger ltr'>
                    <strong>Error! </strong>$message .
                </div>";
}

$content .= '
<div class="section-title">
            <h2>ثبت نام</h2>
        </div>
        <div class="contact-form-action">
        <form method="post" action="registerUser">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>نام و نام خانوادگی</label>
                            <input class="form-control" type="text" name="name">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>آدرس ایمیل</label>
                            <input class="form-control" type="email" name="email">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>شماره تلفن</label>
                            <input class="form-control" type="number" name="phone_number">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>رمز عبور</label>
                            <input class="form-control" type="text" name="password">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <button class="default-btn register" type="submit">
                                    ثبت نام
                                </button>
                            </div>
                            <div class="col-lg-6 text-right">
                                <input id="remember" type="checkbox">
                                <label for="remember">نمایش رمز عبور</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <p>حساب کاربری دارید؟ <a href="../login">وارد شوید!</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</section>

';


$this->layout($content);
