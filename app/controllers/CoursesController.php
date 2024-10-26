<?php

namespace App\Controllers;

use App\Http\BaseController;
use App\Http\Request;
use App\Models\DB;
use App\Utilities\Session;
use Carbon\Carbon;

class CoursesController extends BaseController
{
    public function index()
    {
        $courses = DB::table("courses")
        ->join('categories','courses.course_category','=','categories.category_id')
        ->get();

        $this->view('Courses/index', ['courses' => $courses]);
    }

    public function search()
    {
        $searchTerm = Request::getParam('search');

        if (!empty($searchTerm)) {
            $courses = DB::table("courses")
                ->where('course_title', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('course_description', 'LIKE', '%' . $searchTerm . '%')
                ->getQuery();
        } else {
            $this->redirect('courses/index',[]);
        }

        $this->view('courses/index', ['courses' => $courses, 'searchTerm' => $searchTerm]);
    }

    public function category()
    {
        
    }

    public function viewcourse()
    {
        $course_id = Request::getParam('id');
        $course = DB::table('courses')
        ->join('categories','courses.course_category','=','categories.category_id')
        ->join('teachers','courses.course_teacher','=','teachers.teacher_id')
        ->join('gallery','courses.course_image','=','gallery.image_id')
        ->where('course_id','=', $course_id)
        ->get();

        if ($course) {
            $this->view('courses/viewcourse', ['course' =>$course]);
        }
        else{
            $this->redirect('courses/index', []);
        }

    }
}

