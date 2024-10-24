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
        ->join('category','courses.course_category','=','category.category_id')
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
}

