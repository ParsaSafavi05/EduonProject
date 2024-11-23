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

    public function single_event()
    {
        
        $event_id = Request::getParam('id');

        $event = DB::table('events')
        ->join('cities', 'events.event_city', '=', 'cities.city_id')
        ->join('countries', 'cities.country_id', '=', 'countries.country_id')
        ->join('categories', 'events.event_category', '=', 'categories.category_id')
        ->where('event_id', '=', $event_id)
        ->first();

        if ($event == true) {
            $this->view('Events/single_event', ['event' => $event]);
        }
        else {
            $this->redirect('errors/404');
        }
    }
}
