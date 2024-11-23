<?php

if (!$userLoggedIn) {
    $content = "
     <div class='page-title-area bg-7'>
            <div class='container'>
                <div class='page-title-content'>
                    <h2>داشبورد</h2>
                    <ul>
                        <li>
                            <a href='index'>
                                خانه
                            </a>
                        </li>
                        <li class='active'>داشبورد</li>
                    </ul>
                </div>
            </div>
        </div>
    
    
        <section class='user-area-style ptb-100'>
            <div class='container'>
                <div class='row'>
                    <div class='col-lg-6'>
                        <div class='section-title'>
                            <h2>ورود</h2>
                        </div>
                        <div class='contact-form-action mb-50'>
                            <form method='post' action='../login/userLogin'>
                                <div class='row'>
                                    <div class='col-12'>
                                        <div class='form-group'>
                                            <label>ایمیل</label>
                                            <input class='form-control' type='text' name='name'>
                                        </div>
                                    </div>
                                    <div class='col-12'>
                                        <div class='form-group'>
                                            <label>رمز عبور</label>
                                            <input class='form-control' type='password' name='password'>
                                        </div>
                                    </div>
                                    <div class='col-12'>
                                        <div class='login-action'>
                                            <span class='log-rem'>
                                                <input id='remember' type='checkbox'>
                                                <label for='remember'>مرا به خاطر بسپر!</label>
                                            </span>
                                            <span class='forgot-login'>
                                                <a href='recover-password'>رمز خود را فراموش کردید؟</a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class='col-12'>
                                        <button class='default-btn' type='submit'>
                                            وارد شوید
                                        </button>
                                    </div>
                                    <div class='col-12'>
                                        <p>حساب کاربری ندارید؟<a href='../register'>همین الان ثبت نام کنید!</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class='col-lg-6'>
                        <div class='section-title'>
                            <h2>ثبت نام</h2>
                        </div>
                        <div class='contact-form-action'>
                            <form method='post' action='../register/registerUser'>
                                <div class='row'>
                                    <div class='col-12'>
                                        <div class='form-group'>
                                            <label>نام و نام خانوادگی</label>
                                            <input class='form-control' type='text' name='name'>
                                        </div>
                                    </div>
                                    <div class='col-12'>
                                        <div class='form-group'>
                                            <label>آدرس ایمیل</label>
                                            <input class='form-control' type='email' name='email'>
                                        </div>
                                    </div>
                                    <div class='col-12'>
                                        <div class='form-group'>
                                            <label>شماره تلفن</label>
                                            <input class='form-control' type='text' name='phone_number'>
                                        </div>
                                    </div>
                                    <div class='col-12'>
                                        <div class='form-group'>
                                            <label>رمز عبور</label>
                                            <input class='form-control' type='password' name='password'>
                                        </div>
                                    </div>
                                    <div class='col-12'>
                                        <div class='row align-items-center'>
                                            <div class='col-lg-6 col-sm-6'>
                                                <button class='default-btn register' type='submit'>
                                                    ثبت نام
                                                </button>
                                            </div>
                                            <div class='col-lg-6 col-sm-6 text-right'>
                                                <input id='remember-1' type='checkbox'>
                                                <label for='remember'>نمایش رمز عبور</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='col-12'>
                                        <p>حساب کاربری دارید؟<a href='../login'>وارد شوید!</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    ";
} else {
    $hi = "hi";
    $content = "
    <div class='page-title-area bg-7'>
            <div class='container'>
                <div class='page-title-content'>
                    <h2>داشبورد</h2>
                    <ul>
                        <li>
                            <a href='index'>
                                خانه
                            </a>
                        </li>
                        <li class='active'>داشبورد</li>
                    </ul>
                </div>
            </div>
        </div>
    
    
        <section class='user-area-style ptb-100'>
            <div class='container'>
                <div class='row'>
                    <div class='col-lg-2'></div>
                    <div class='col-lg-8'>
                        <div class='section-title'>
                            <h2>ثبت نام</h2>
                        </div>
                         <div class='contact-form-action'>
        <form method='post' action='registerUser'>
                <div class='row'>
                    <div class='col-12'>
                        <div class='form-group'>
                            <label>نام و نام خانوادگی</label>
                            <input class='form-control' type='text' name='name' value='". $hi ."'>
                        </div>
                    </div>
                    <div class='col-12'>
                        <div class='form-group'>
                            <label>آدرس ایمیل</label>
                            <input class='form-control' type='email' name='email' value='". $hi ."'>
                        </div>
                    </div>
                    <div class='col-12'>
                        <div class='form-group'>
                            <label>شماره تلفن</label>
                            <input class='form-control' type='text' name='phone_number' value='". $hi ."'>
                        </div>
                    </div>
                    <div class='col-12'>
                        <div class='form-group'>
                            <label>رمز عبور جدید</label>
                            <input class='form-control' type='text' name='new_password' value='". $hi ."'>
                        </div>
                    </div>
                    <div class='col-12'>
                        <div class='form-group'>
                            <label>تکرار رمز عبور جدید</label>
                            <input class='form-control' type='text' name='repeat_password' value='". $hi ."'>
                        </div>
                    </div>
                    <div class='col-12'>
                        <div class='row align-items-center'>
                            <div class='col-lg-6'>
                                <button class='default-btn register' type='submit'>
                                    بروزرسانی
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class='col-12'>
                        <div class='row align-items-center'>
                            <div class='col-lg-6'>
                                <a href='logout' class='logout-btn'>
                                    خروج
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
                    </div>
                    <div class='col-lg-2'></div>
                </div>
            </div>
        </section>



   
    
    ";

}

$this->layout($content);