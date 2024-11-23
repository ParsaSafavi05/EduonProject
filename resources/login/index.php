<?php
use App\Utilities\Session;
Session::start();

$content = '

<div class="page-title-area bg-8">
<div class="container">
    <div class="page-title-content">
        <h2>ورود</h2>
        <ul>
            <li>
                <a href="index">
                    خانه
                </a>
            </li>
            <li class="active">ورود</li>
        </ul>
    </div>
</div>
</div>


<section class="user-area-style ptb-100">
<div class="container">
    <div class="log-in-area">';

    if ($message = Session::flash("Error")) {
        $content .= "<div class='alert alert-danger ltr'>
        <strong>مشکلی پیش آمده! </strong>$message .
        </div>";
    }
    
    if ($message = Session::flash('Success')) {
        $content .= "<div class='alert alert-success ltr'>
                        <strong>موفق! </strong>$message .
                    </div>";
    }

        $content .= '<div class="section-title">
            <h2>ورود</h2>
        </div>
        <div class="contact-form-action">
            <form method="post" action="userLogin">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>ایمیل</label>
                            <input class="form-control" type="text" name="email-phone">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>رمز عبور</label>
                            <input class="form-control" type="password" name="password">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="login-action">
                            <span class="log-rem">
                                <input id="remember" type="checkbox">
                                <label for="remember">مرا به خاطر بسپر!</label>
                            </span>
                            <span class="forgot-login">
                                <a href="./../recoverpassword">رمز عبور خود را فراموش کردید?</a>
                            </span>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="default-btn" type="submit">
                            وارد شوید
                        </button>
                    </div>
                    <div class="col-12">
                        <p>اکانت ندارید? <a href="./../register">همین الان ثبت نام کنید!</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</section>
';

$this->layout($content);