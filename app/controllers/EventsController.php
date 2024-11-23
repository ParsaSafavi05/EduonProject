<?php

namespace App\Controllers;

use App\Http\BaseController;
use App\Http\Request;
use App\Models\DB;
use App\Utilities\Session;
use Carbon\Carbon;

class EventsController extends BaseController
{
    public function index()
    {

        $events = DB::table('events')
        ->join('cities', 'events.event_city', '=', 'cities.city_id')
        ->join('countries', 'cities.country_id', '=', 'countries.country_id')
        ->join('categories', 'events.event_category', '=', 'categories.category_id')
        ->get();

        $speakers = DB::table('teachers')
        ->where('is_speaker', '=', '1')
        ->join('fields', 'teachers.teacher_field', '=', 'fields.field_id')
        ->first(4);

        $this->view('Events/index', [
            'events' => $events,
            'speakers' => $speakers
        
        ]);
    }
}
