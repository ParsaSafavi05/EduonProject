<?php
use App\Utilities\Session;
Session::start();
$content = '

<div class="page-title-area bg-8">
<div class="container">
    <div class="page-title-content">
        <h2>Log in</h2>
        <ul>
            <li>
                <a href="index">
                    Home
                </a>
            </li>
            <li class="active">Log in</li>
        </ul>
    </div>
</div>
</div>


<section class="user-area-style ptb-100">
<div class="container">
    <div class="log-in-area">';

    if ($message = Session::flash("Error")) {
        $content .= "<div class='alert alert-danger ltr'>
        <strong>Failed! </strong>$message .
        </div>";
        // Session::remove("Error");
    }
    
    if ($message = Session::flash('Success')) {
        $content .= "<div class='alert alert-success ltr'>
                        <strong>Success! </strong>$message .
                    </div>";
    }

        $content .= '<div class="section-title">
            <h2>Log In</h2>
        </div>
        <div class="contact-form-action">
            <form method="post" action="userLogin">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Email or Phone</label>
                            <input class="form-control" type="text" name="email-phone">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="password" name="password">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="login-action">
                            <span class="log-rem">
                                <input id="remember" type="checkbox">
                                <label for="remember">Remember me!</label>
                            </span>
                            <span class="forgot-login">
                                <a href="./../recoverpassword">Forgot your password?</a>
                            </span>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="default-btn" type="submit">
                            Log In Now
                        </button>
                    </div>
                    <div class="col-12">
                        <p>Have an account? <a href="./../register">Registration Now!</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</section>
';

$this->layout($content);