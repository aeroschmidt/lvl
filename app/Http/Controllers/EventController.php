<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /* Muda de / para a controller*/
    /* Separar os controller em pastas de views*/
    public function index(){
        $events = Event::all();
        return view('welcome', ['events' => $events]);
    }

    public function create(){
        return view('events.create');
    }

    public function contact(){
        return view('contact');
    }

    public function products(){
        $busca = request('search');
        return view('products', ['busca' => $busca]);
    }

    public function product($id = null){
         return view('product', ['id' => $id]);
    }
}
