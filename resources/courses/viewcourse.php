<?php

$content = "
    <div class='page-title-area bg-25'>
        <div class='container'>
            <div class='page-title-content'>
                <h2>دوره</h2>
                <ul>
                    <li>
                        <a href='index.html'>
                            خانه
                        </a>
                    </li>
                    <li class='active'>دوره</li>
                </ul>
            </div>
        </div>
    </div>


    <section class='single-course-area ptb-100'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-8'>
                    <div class='single-course-content'>
                        <h3>".$course[0]['course_title']."</h3>
                        <div class='row align-items-center'>
                            <div class='col-lg-4 col-sm-4'>
                                <div class='course-rating'>
                                    <img src='../../public/img/single-course/rating-img-1.jpg' alt='Image'>
                                    <h4><a href='instructors.html'>مدرس</a></h4>
                                    <span>".$course[0]['teacher_fullname']."</span>
                                </div>
                            </div>
                            <div class='col-lg-4 col-sm-4'>
                                <div class='course-rating pl-0 text-center'>
                                    <h4>دسته بندی:</h4>
                                    <span>".$course[0]['category_name']."</span>
                                </div>
                            </div>
                            <div class='col-lg-4 col-sm-4'>
                                <div class='course-rating star pl-0'>
                                    <h4>نظرات</h4>
                                    <div class='product-review'>
                                        <div class='rating'>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star-half'></i>
                                        </div>
                                        <a href='single-course.html' class='rating-count'>2 reviews</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src='../../public/img/single-course/".$course[0]['image_url']."' alt='Image'>
                    </div>
                    <div class='tab single-course-tab'>
                        <ul class='tabs'>
                            <li>
                                <a href='javascript:;'>Overview</a>
                            </li>
                            <li>
                                <a href='javascript:;'>Curriculum</a>
                            </li>
                            <li>
                                <a href='javascript:;'> Instructor</a>
                            </li>
                            <li>
                                <a href='javascript:;'>Reviews</a>
                            </li>
                        </ul>
                        <div class='tab_content'>
                            <div class='tabs_item'>
                                <h3>توضیحات دوره</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida. Risus commodo viverra maecenas When an unknown printer took a galley of
                                    type and scrambled it to make a type specimen book. It has svived not only five
                                    centuries, but also the leap into electronic typesetting, remaining essentially.</p>
                                <h3>Certification Online</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis sit amet,
                                    consectetur adipiscing elit, sed do eiusmod tempor.</p>
                                <h3>چیز های که یاد میگیرید</h3>
                                <ul class='course-list'>
                                    <li>
                                        <i class='bx bx-check'></i>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    </li>
                                    <li>
                                        <i class='bx bx-check'></i>
                                        Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </li>
                                    <li>
                                        <i class='bx bx-check'></i>
                                        Quis ipsum suspendisse ultrices gravida.
                                    </li>
                                    <li>
                                        <i class='bx bx-check'></i>
                                        Risus commodo viverra maecenas accumsan lacus vel facilisis.
                                    </li>
                                </ul>
                                <h3>این دوره برای چه کسانی است</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis sit amet,
                                    consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class='tabs_item'>
                                <div class='curriculum-content'>
                                    <h3>Education introduction</h3>
                                    <div class='curriculum-list'>
                                        <h4>Section 1</h4>
                                        <ul>
                                            <li>
                                                <a href='instructors.html' class='meet-title'>
                                                    <i class='bx bx-right-arrow'></i>
                                                    Introduction
                                                </a>
                                                <a href='single-course.html' class='meet-time'>
                                                    <span class='min'>01 hour</span>
                                                    <span class='preview'>Preview</span>
                                                </a>
                                            </li>
                                            <li class='transparent'>
                                                <a href='instructors.html' class='meet-title'>
                                                    <i class='bx bx-right-arrow'></i>
                                                    Environment setup
                                                </a>
                                                <a href='single-course.html' class='meet-time'>
                                                    <span class='min'>02 hours</span>
                                                    <span class='preview'>Preview</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href='instructors.html' class='meet-title'>
                                                    <i class='bx bx-right-arrow'></i>
                                                    Quiz one
                                                </a>
                                                <a href='single-course.html' class='meet-time'>
                                                    <span class='min'>01 min</span>
                                                    <span class='preview'>4 question</span>
                                                    <i class='bx bxs-lock-alt'></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class='curriculum-list'>
                                        <h4>Section 2</h4>
                                        <ul>
                                            <li>
                                                <a href='instructors.html' class='meet-title'>
                                                    <i class='bx bx-right-arrow'></i>
                                                    Utility modules
                                                </a>
                                                <a href='single-course.html' class='meet-time'>
                                                    <span class='min'>03 hours</span>
                                                    <i class='bx bxs-lock-alt'></i>
                                                </a>
                                            </li>
                                            <li class='transparent'>
                                                <a href='instructors.html' class='meet-title'>
                                                    <i class='bx bx-right-arrow'></i>
                                                    Express framework
                                                </a>
                                                <a href='single-course.html' class='meet-time'>
                                                    <span class='min'>05 min</span>
                                                    <i class='bx bxs-lock-alt'></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href='instructors.html' class='meet-title'>
                                                    <i class='bx bx-right-arrow'></i>
                                                    Web module
                                                </a>
                                                <a href='single-course.html' class='meet-time'>
                                                    <span class='min'>01 hour</span>
                                                    <i class='bx bxs-lock-alt'></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class='curriculum-list'>
                                        <h4>Section 3</h4>
                                        <ul>
                                            <li>
                                                <a href='instructors.html' class='meet-title'>
                                                    <i class='bx bx-right-arrow'></i>
                                                    Video introduction
                                                </a>
                                                <a href='single-course.html' class='meet-time'>
                                                    <span class='min'>30 min</span>
                                                    <i class='bx bxs-lock-alt'></i>
                                                </a>
                                            </li>
                                            <li class='transparent'>
                                                <a href='instructors.html' class='meet-title'>
                                                    <i class='bx bx-right-arrow'></i>
                                                    Web module
                                                </a>
                                                <a href='single-course.html' class='meet-time'>
                                                    <span class='min'>05 hours</span>
                                                    <i class='bx bxs-lock-alt'></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class='tabs_item'>
                                <div class='instructor-content'>
                                    <div class='row align-items-center'>
                                        <div class='col-lg-4'>
                                            <div class='advisor-img'>
                                                <img src='../../public/img/instructor-img.jpg' alt='Image'>
                                            </div>
                                        </div>
                                        <div class='col-lg-8'>
                                            <div class='advisor-content'>
                                                <a href='single-course.html'>
                                                    <h3>Anna Dew</h3>
                                                </a>
                                                <span>Agile Project Expert</span>
                                                <p>Jone Smit is a celebrated photographer, author, and writer who brings
                                                    passion to everything he does.</p>
                                                <ul>
                                                    <li>
                                                        <a href='https://www.facebook.com/' target='_blank'>
                                                            <i class='bx bxl-facebook'></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href='https://www.twitter.com/' target='_blank'>
                                                            <i class='bx bxl-twitter'></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href='https://www.youtube.com/' target='_blank'>
                                                            <i class='bx bxl-youtube'></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href='https://www.behance.com/' target='_blank'>
                                                            <i class='bx bxl-behance'></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='tabs_item'>
                                <div class='review-content'>
                                    <h3>Course rating</h3>
                                    <ul class='rating-star'>
                                        <li>
                                            <i class='bx bxs-star'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star'></i>
                                        </li>
                                        <li>
                                            <i class='bx bxs-star'></i>
                                        </li>
                                    </ul>
                                    <span>5.00 average based on 1 rating</span>
                                    <div class='rating-bar-content'>
                                        <div class='single-bar'>
                                            <p class='start'>Star</p>
                                            <div class='rating-bar'>
                                                <div class='skills html'></div>
                                            </div>
                                            <p class='percent'>90%</p>
                                        </div>
                                        <div class='single-bar'>
                                            <p class='start'>Star</p>
                                            <div class='rating-bar'>
                                                <div class='skills css'></div>
                                            </div>
                                            <p class='percent'>80%</p>
                                        </div>
                                        <div class='single-bar'>
                                            <p class='start'>Star</p>
                                            <div class='rating-bar'>
                                                <div class='skills js'></div>
                                            </div>
                                            <p class='percent'>65%</p>
                                        </div>
                                        <div class='single-bar'>
                                            <p class='start'>Star</p>
                                            <div class='rating-bar'>
                                                <div class='skills php'></div>
                                            </div>
                                            <p class='percent'>60%</p>
                                        </div>
                                    </div>
                                    <div class='course-reviews-content'>
                                        <h3>Reviews</h3>
                                        <ul class='course-reviews'>
                                            <li>
                                                <img src='../../public/img/course-reviews-img.jpg' alt='Image'>
                                                <h3>Anna Dew</h3>
                                                <span>Cover all my needs</span>
                                                <p>The course identify things we want to change and then figure out the
                                                    things that need to be done to create the desired outcome. The
                                                    course helped me in clearly define problems and generate a wider
                                                    variety of quality solutions. Support more structures analysis of
                                                    options.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-lg-4'>
                    <div class='account-wrap'>
                        <ul>
                            <li>
                                قیمت <span class='bold'>".$course[0]['course_price']."</span>
                            </li>
                            <li>
                                شروع <span>".$course[0]['start_date']."</span>
                            </li>
                            <li>
                                پایان <span>".$course[0]['end_date']."</span>
                            </li>
                            <li>
                                دسته بندی <span>".$course[0]['category_name']."</span>
                            </li>
                            <li>
                                تعداد باقیمانده: <span>".$course[0]['course_limit'] - $course[0]['course_students']."</span>
                            </li>
                            <li>
                                نعداد رزرو شده: <span>".$course[0]['course_students']."</span>
                            </li>
                            <li>
                                سایت: <a href='../home/index'>eduon.com</a>
                            </li>
                        </ul>
                        <a href='contact.html' class='default-btn'>Book now</a>
                        <div class='social-content'>
                            <p>
                                Share this course
                                <i class='bx bxs-share-alt'></i>
                            </p>
                            <ul>
                                <li>
                                    <a href='https://www.facebook.com/' target='_blank'>
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href='https://www.twitter.com/' target='_blank'>
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href='https://www.instagram.com/' target='_blank'>
                                        <i class='bx bxl-instagram'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href='https://www.behance.com/' target='_blank'>
                                        <i class='bx bxl-behance'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class='courses-area-style pb-70'>
        <div class='container'>
            <div class='section-title'>
                <h2>دوره های مرتبط</h2>
            </div>
            <div class='row'>
                <div class='col-lg-4 col-md-6'>
                    <div class='single-course'>
                        <a href='single-course.html'>
                            <img src='../../public/img/course-img/course-img-1.jpg' alt='Image'>
                        </a>
                        <div class='course-content'>
                            <span class='tag'>Education</span>
                            <a href='single-course.html'>
                                <h3>Developing strategies for online teaching and learning</h3>
                            </a>
                            <ul class='rating'>
                                <li>
                                    <i class='bx bxs-star'></i>
                                </li>
                                <li>
                                    <i class='bx bxs-star'></i>
                                </li>
                                <li>
                                    <i class='bx bxs-star'></i>
                                </li>
                                <li>
                                    <i class='bx bxs-star'></i>
                                </li>
                                <li>
                                    <i class='bx bxs-star'></i>
                                </li>
                                <li>
                                    <span>0.5</span>
                                    <a href='single-course.html'>(1 rating)</a>
                                </li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adip iscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. </p>
                            <ul class='lessons'>
                                <li>0 Lessons</li>
                                <li class='float'>44 Students</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class='col-lg-4 col-md-6'>
                    <div class='single-course'>
                        <a href='single-course.html'>
                            <img src='../../public/img/course-img/' alt='Image'>
                        </a>
                        <div class='course-content'>
                            <span class='price'>$59</span>
                            <span class='tag'>Accounting</span>
                            <a href='single-course.html'>
                                <h3>Introduction to cybersecurity for teachers</h3>
                            </a>
                            <ul class='rating'>
                                <li>
                                    <i class='bx bxs-star'></i>
                                </li>
                                <li>
                                    <i class='bx bxs-star'></i>
                                </li>
                                <li>
                                    <i class='bx bxs-star'></i>
                                </li>
                                <li>
                                    <i class='bx bxs-star'></i>
                                </li>
                                <li>
                                    <i class='bx bxs-star'></i>
                                </li>
                                <li>
                                    <span>0.5</span>
                                    <a href='single-course.html'>(3 rating)</a>
                                </li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adip iscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. </p>
                            <ul class='lessons'>
                                <li>0 Lessons</li>
                                <li class='float'>24 Students</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class='col-lg-4 col-md-6 offset-md-3 offset-lg-0'>
                    <div class='single-course'>
                        <a href='single-course.html'>
                            <img src='../../public/img/course-img/course-img-3.jpg' alt='Image'>
                        </a>
                        <div class='course-content'>
                            <span class='price'>$29</span>
                            <span class='tag'>Language</span>
                            <a href='single-course.html'>
                                <h3>English: spelling, punctuation, and grammar</h3>
                            </a>
                            <ul class='rating'>
                                <li>
                                    <i class='bx bxs-star'></i>
                                </li>
                                <li>
                                    <i class='bx bxs-star'></i>
                                </li>
                                <li>
                                    <i class='bx bxs-star'></i>
                                </li>
                                <li>
                                    <i class='bx bxs-star'></i>
                                </li>
                                <li>
                                    <i class='bx bxs-star'></i>
                                </li>
                                <li>
                                    <span>0.5</span>
                                    <a href='single-course.html'>(5 rating)</a>
                                </li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adip iscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. </p>
                            <ul class='lessons'>
                                <li>0 Lessons</li>
                                <li class='float'>39 Students</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";

$this->layout($content);