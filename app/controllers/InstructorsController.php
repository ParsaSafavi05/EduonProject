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
        $this->view('Instructors/index', ['']);
    }
}
