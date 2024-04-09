<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    public function index(){

        $event = Event::all();

        return view('Welcome',['events'=> $event]);
    }

    public function create() {
        return view('eventes.create');
    }
}
