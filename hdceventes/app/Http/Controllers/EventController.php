<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    public function index(){

        $nome = "Jean";

        $arr = [10,20,30,40,50];
    
        $nomes = ["Jean", "Maria", "João", "Saulo"];
    
        return view('welcome', ['nome' => $nome, 'arr'=> $arr, 'nomes'=> $nomes]);
    

        $event = Event::all();

        return view('Welcome',['events'=> $event]);
    }

    public function create() {
        return view('eventes.create');
    }
}

    

