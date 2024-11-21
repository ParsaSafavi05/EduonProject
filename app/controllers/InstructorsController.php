<?php

namespace App\Controllers;

use App\Http\BaseController;
use App\Http\Request;
use App\Models\DB;
use App\Utilities\Session;
use Carbon\Carbon;

class InstructorsController extends BaseController
{
    public function index()
    {

        $teachers = DB::table('teachers')
        ->join('fields', 'teachers.teacher_field', '=', 'fields.field_id')
        ->get();

        $this->view('Instructors/index', ['teachers' => $teachers]);
    }
}
