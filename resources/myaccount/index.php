<?php
$content = '
 <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="option-inner">
                        <div class="others-option justify-content-center d-flex align-items-center">
                            <div class="option-item">
                                <i class="search-btn bx bx-search"></i>
                                <i class="close-btn bx bx-x"></i>
                                <div class="search-overlay search-popup">
                                    <div class="search-box">
                                        <form class="search-form">
                                            <input class="search-input" name="search" placeholder="Search" type="text">
                                            <button class="search-button" type="submit"><i
                                                    class="bx bx-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-icon">
                                <a href="cart">
                                    <i class="flaticon-shopping-cart"></i>
                                    <span>0</span>
                                </a>
                            </div>
                            <div class="register">
                                <a href="myaccount" class="default-btn">
                                    Login / Register
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="page-title-area bg-7">
        <div class="container">
            <div class="page-title-content">
                <h2>My account</h2>
                <ul>
                    <li>
                        <a href="index">
                            Home
                        </a>
                    </li>
                    <li class="active">My account</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="user-area-style ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2>Log In</h2>
                    </div>
                    <div class="contact-form-action mb-50">
                        <form method="post">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Email or Phone</label>
                                        <input class="form-control" type="text" name="name">
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
                                            <a href="recover-password">Forgot your password?</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="default-btn" type="submit">
                                        Log In Now
                                    </button>
                                </div>
                                <div class="col-12">
                                    <p>Have an account? <a href="../register">Registration Now!</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2>Registration</h2>
                    </div>
                    <div class="contact-form-action">
                        <form method="post" action="../register/registerUser">
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
                                        <input class="form-control" type="text" name="phone_number">
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
                                        <div class="col-lg-6 col-sm-6">
                                            <button class="default-btn register" type="submit">
                                                Register Now
                                            </button>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 text-right">
                                            <input id="remember-1" type="checkbox">
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
        </div>
    </section>
';

$this->layout($content);