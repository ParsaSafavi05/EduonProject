<?php

$events;

$content = "


<div class='page-title-area bg-24'>
<div class='container'>
    <div class='page-title-content'>
        <h2>رویداد ها</h2>
        <ul>
            <li>
                <a href='index.html'>
                    خانه
                </a>
            </li>
            <li class='active'>رویداد ها</li>
        </ul>
    </div>
</div>
</div>


<section class='event-area-style pt-100 pb-70'>
<div class='container'>
    <div class='section-title'>
        <span>رویداد های آموزشی</span>
        <h2>رویداد های پیش رو   </h2>
    </div>
    <div class='row'>";

    foreach ($events as $event) {
        $content .= "
        
        <div class='col-lg-6 col-sm-6'>
            <div class='single-event'>
                <a href='single_event?id=". $event['event_id'] ."'>
                    <img src='". $event['event_thumbnail'] ."' alt='Image'>
                </a>
                <div class='event-content'>
                    <ul>
                        <li>
                            <i class='bx bx-calendar'></i>
                            ". $event['event_start'] ."
                        </li>
                        <li>
                            <i class='bx bx-time'></i>
                            ". $event['event_time'] ."
                        </li>
                    </ul>
                    <a href='single_event?id=". $event['event_id'] ."'>
                        <h3>
                        ". $event['event_title'] ."
                        <h3/>
                    </a>
                    <span>
                        <i class='bx bxs-location-plus'></i>
                        ". $event['city_name'] .", ". $event['country_name'] ."
                    </span>
                </div>
            </div>
        </div>
        
        ";
    }
        


    $content .= "</div>
</div>
</section>

<section class='teachers-area-style pb-70'>
<div class='container'>
    <div class='section-title'>
        <h2>سخنران های رویداد ها</h2>
    </div>
    <div class='row'>";
    

    foreach ($speakers as $speaker) {
        # code...
    }
        $content .= "<div class='col-lg-3 col-sm-6'>
            <div class='single-teachers'>
                <img src='". $speaker['teacher_image'] ."' alt='Image'>
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
                    <h3>". $speaker['teacher_fullname'] ."</h3>
                    <span>". $speaker['field_name'] ."</span>
                </div>
            </div>
        </div>";

        $content .= "
    </div>
</div>
</section>


<div class='partner-area f5f6fa-bg-color ptb-100'>
<div class='container'>
    <div class='partner-wrap owl-theme owl-carousel'>
        <div class='partner-item'>
            <a href='about.html'>
                <img src='../../public/img/partner-logo/partner-logo-1.png' alt='Image'>
            </a>
        </div>
        <div class='partner-item'>
            <a href='about.html'>
                <img src='../../public/img/partner-logo/partner-logo-2.png' alt='Image'>
            </a>
        </div>
        <div class='partner-item'>
            <a href='about.html'>
                <img src='../../public/img/partner-logo/partner-logo-3.png' alt='Image'>
            </a>
        </div>
        <div class='partner-item'>
            <a href='about.html'>
                <img src='../../public/img/partner-logo/partner-logo-4.png' alt='Image'>
            </a>
        </div>
        <div class='partner-item'>
            <a href='about.html'>
                <img src='../../public/img/partner-logo/partner-logo-5.png' alt='Image'>
            </a>
        </div>
    </div>
</div>
</div>

";

$this->layout($content);