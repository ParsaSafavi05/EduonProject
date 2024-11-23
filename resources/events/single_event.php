<?php

$content = "


<div class='page-title-area bg-25'>
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


<section class='single-event-area ptb-100'>
<div class='container'>
    <div class='row'>
        <div class='col-lg-8'>
            <div class='single-event-content'>
                <h3 class='title'>". $event['event_title'] ."</h3>
                <ul class='post-details'>
                    <li>
                        <i class='bx bx-calendar'></i>
                         پست شده در تاریخ: ".$event['posted_at']."
                    </li>
                    <li>
                        <i class='bx bx-comment'></i>
                        <a href='comments'>2 Comments</a>
                    </li>
                </ul>
                <img src='". $event['event_image'] ."' alt='Image'>
                <h3 class='mb-2'>توضیحات رویداد</h3>
                <p>". $event['event_description'] ."</p>
            </div>
            <div class='map-area'>
                <iframe
                    src='https://www.google.com/maps/". $event['event_location_url'] ."'></iframe>
            </div>
        </div>
        <div class='col-lg-4'>
            <div class='account-wrap'>
                <ul>
                    <li>
                        قیمت: <span class='bold'>". $event['event_price'] ." تومان  </span>
                    </li>
                    <li>
                        شروع: <span>". $event['event_start'] ."</span>
                    </li>
                    <li>
                        پایان: <span>". $event['event_end'] ."</span>
                    </li>
                    <li>
                        دسته بندی دوره: <span>". $event['category_name'] ."</span>
                    </li>
                    <li>
                        ضرفیت: <span>". $event['event_slots'] ."</span>
                    </li>
                    <li>
                        ضرفیت باقی مانده: <span>". $event['event_slots'] - $event['event_booked_slots'] ."</span>
                    </li>
                    <li>
                        وبسایت: <a href='javascript:;'>www.eduon.com</a>
                    </li>
                </ul>
                <a href='events/book' class='default-btn'>رزرو کنید</a>
            </div>
        </div>
    </div>
</div>
</section>

";


$this->layout($content);