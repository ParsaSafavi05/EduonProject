<?php

$content = "

 <div class='page-title-area bg-4'>
        <div class='container'>
            <div class='page-title-content'>
                <h2>دوره ها</h2>
                <ul>
                    <li>
                        <a href='index.html'>
                            خانه
                        </a>
                    </li>
                    <li class='active'>دوره ها</li>
                </ul>
            </div>
        </div>
    </div>


    <section class='courses-area-style ptb-100'>
        <div class='container'>
            <div class='showing-result'>
                <div class='row align-items-center'>
                    <div class='col-lg-6 col-md-4'>
                        <div class='showing-result-count'>
                            <p> 1-8 از 14 نتیجه</p>
                        </div>
                    </div>
                    <div class='col-lg-3 col-md-4'>
                        <div class='showing-top-bar-ordering'>
                            <select>
                                <option value='1'>پشیفرض</option>
                                <option value='2'>تحصیلی</option>
                                <option value='0'>حسابداری</option>
                                <option value='3'>زبان</option>
                                <option value='4'>معلمی</option>
                                <option value='5'>تحقیقات</option>
                            </select>
                        </div>
                    </div>
                    <div class='col-lg-3 col-md-4'>
                        <form class='search-form flex-form' action='search' id='searchForm'>
                            <input class='form-control' name='search' placeholder=' جستوجوی دوره ها' type='text' ";
if (isset($searchTerm) && !empty($searchTerm)) {
    $content .= "value='$searchTerm'";
}
$content .= ">
                            <button class='search-btn' type='submit'>
                                <i class='bx bx-search'></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class='row'>";
foreach ($courses as $course) {

    if (mb_strlen($course["course_description"]) > 120) {
        $course_short_title = mb_substr($course['course_description'], 0, 128) . '...';
    } else {
        $course_short_title = mb_substr($course['course_description'], 0, 128);
    }
    $content .= "<div class='col-lg-4 col-md-6'>
                    <div class='single-course'>
                        <a href='viewcourse?id=".$course['course_id']."'>
                            <img src='../../public/img/course-img/course-img-1.jpg' alt='Image'>
                        </a>
                        <div class='course-content'>
                            <!--<span class='price'>$39</span> --!>

                            <span class='tag'>" . $course['category_name'] . "</span>
                            <a href='viewcourse?id=". $course['course_id'] ."'>
                                <h3>" . $course['course_title'] . "</h3>
                            </a>
                            <ul class='rating'>";
    for ($i = 0; $i < $course['course_rating']; $i++) {
        $content .= "<li>
                        <i class='bx bxs-star'></i>
                    </li>";
    }
    $content .= "<span>".$course['course_rating']."</span>
                    <a href='single-course.html'>(1 نظر)</a>
                        </li>
                            </ul>
                            <p>$course_short_title</p>
                            <ul class='lessons'>
                                <li>".$course['course_lessons']." درس</li>
                                <li class='float'>".$course['course_students']." شرکت کننده</li>
                            </ul>
                        </div>
                    </div>
                </div>";
}


$content .= "<div class='col-lg-12 col-md-12'>
                    <div class='pagination-area'>

                        <span class='page-numbers current' aria-current='page'>1</span>
                        <a href='courses.html' class='page-numbers'>2</a>
                        <a href='courses.html' class='page-numbers'>3</a>
                        <a href='courses.html' class='page-numbers'>4</a>
                        <a href='courses.html' class='next page-numbers'>
                            <i class='bx bx-chevron-right'></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
";

$this->layout($content);
