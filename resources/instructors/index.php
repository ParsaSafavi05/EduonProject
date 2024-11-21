<?php

$content = "

    <div class='page-title-area bg-2'>
        <div class='container'>
            <div class='page-title-content'>
                <h2>استاد ها</h2>
                <ul>
                    <li>
                        <a href='index.html'>
                            خانه
                        </a>
                    </li>
                    <li class='active'>استاد ها</li>
                </ul>
            </div>
        </div>
    </div>


    <section class='teachers-area-three ptb-100'>
        <div class='container'>
            <div class='section-title'>
                <span>استاد های ما</span>
                <h2>اساتید بین المللی ما</h2>
            </div>
            <div class='row'>";

            foreach ($teachers as $teacher) {
                $content .= "
                
            <div class='col-lg-3 col-sm-6'>
                    <div class='single-teachers'>
                        <img src='".$teacher['teacher_image']."'>
                        <div class='teachers-content'>
                            <ul>
                                <li>
                                    <a href='https://www.instagram.com/' target='_blank'><i
                                            class='bx bxl-instagram'></i></a>
                                </li>
                                <li>
                                    <a href='https://www.facebook.com/' target='_blank'><i
                                            class='bx bxl-facebook'></i></a>
                                </li>
                                <li>
                                    <a href='https://www.linkedin.com/' target='_blank'><i
                                            class='bx bxl-linkedin-square'></i></a>
                                </li>
                            </ul>
                            <h3>".$teacher['teacher_fullname']."</h3>
                            <span>".$teacher['field_name']."</span>
                        </div>
                    </div>
                </div>
                
                ";
            }
                

                $content .= "<div class='col-lg-12 col-md-12'>
                    <div class='pagination-area'>

                        <span class='page-numbers current' aria-current='page'>1</span>
                        <a href='instructors.html' class='page-numbers'>2</a>
                        <a href='instructors.html' class='page-numbers'>3</a>
                        <a href='instructors.html' class='page-numbers'>4</a>
                        <a href='instructors.html' class='next page-numbers'>
                            <i class='bx bx-chevron-right'></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

";

$this->layout($content);