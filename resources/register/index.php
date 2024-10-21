<?php

use App\Utilities\Session;
Session::start();
$content = '

<div class="page-title-area bg-10">
<div class="container">
    <div class="page-title-content">
        <h2>Registration</h2>
        <ul>
            <li>
                <a href="index.html">
                    Home
                </a>
            </li>
            <li class="active">Registration</li>
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
            <h2>Registration</h2>
        </div>
        <div class="contact-form-action">
        <form method="post" action="registerUser">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Full name</label>
                            <input class="form-control" type="text" name="name">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Email address</label>
                            <input class="form-control" type="email" name="email">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Mobile no.</label>
                            <input class="form-control" type="number" name="phone_number">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="text" name="password">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <button class="default-btn register" type="submit">
                                    Register Now
                                </button>
                            </div>
                            <div class="col-lg-6 text-right">
                                <input id="remember" type="checkbox">
                                <label for="remember">Show password ?</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <p>Have an account? <a href="../login">Login Now!</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</section>

';


$this->layout($content);
