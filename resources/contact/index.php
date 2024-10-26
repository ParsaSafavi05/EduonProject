<?php

$content = '

    <div class="page-title-area bg-5">
        <div class="container">
            <div class="page-title-content">
                <h2>تماس با ما</h2>
                <ul>
                    <li>
                        <a href="index.html">
                            خانه
                        </a>
                    </li>
                    <li class="active">تماس با ما</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="contact-info-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-contact-info">
                        <i class="flaticon-call"></i>
                        <h3>با ما تماس بگیرید</h3>
                        <a href="tel:+98(913)312-5678">Phone :+98 (913) 312-5678</a>
                        <a href="tel:+98(913)312-6688">Tel :+98 (913) 312-6688</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-contact-info">
                        <i class="flaticon-pin"></i>
                        <h3>آدرس ما</h3>
                        <a href="index">اصفهان، خیابان اول، جنب کوچه 5</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                    <div class="single-contact-info">
                        <i class="flaticon-email"></i>
                        <h3>Email</h3>
                        <a href="/cdn-cgi/l/email-protection#abc3cec7c7c4ebcecfdec4c585c8c4c6"><span
                                class="__cf_email__"
                                data-cfemail="fe969b929291be9b9a8b9190d09d9193">info@eduone.com</span></a>
                        <a href="/cdn-cgi/l/email-protection#334346515f5a50735657465c5d1d505c5e"><span
                                class="__cf_email__"
                                data-cfemail="275752454b4e446742435248490944484a">info@eduone.com</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="main-contact-area pb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-wrap contact-pages mb-0">
                        <div class="contact-form">
                            <div class="section-title">
                                <h2>برای ما پیام بفرستید</h2>
                                <p>برای اطلاعات بیشتر با ما در تماس باشید</p>
                            </div>
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <label>نام</label>
                                            <input type="text" name="name" id="name" class="form-control" required=""
                                                data-error="لطفا نام خود را وارد کنید">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <label>آدرس ایمیل</label>
                                            <input type="email" name="email" id="email" class="form-control" required=""
                                                data-error="بطفا ایمیل خود را وارد کنید">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>موضوع</label>
                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                                required="" data-error="لطفا موضوع خود را وارد کنید">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>پیام</label>
                                            <textarea name="message" class="form-control" id="message" cols="30"
                                                rows="10" required="" data-error="پیام خود را بنویسید"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-two">
                                            ارسال
                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="map-area">
        <iframe
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d107502.89866373962!2d51.67987720851125!3d32.647052403920014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1729800787173!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    </div>

';

$this->layout($content);