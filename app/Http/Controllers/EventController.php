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

    public function store(Request $request){
        $event = new Event();
        $event->title = $request->title;
        $event->city = $request->city;
        $event->description = $request->description;
        $event->private = $request->private;

        //Image upload
        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")). "." . $extension;;

            $requestImage->move(public_path('img/events'), $imageName);

            $event->image = $imageName;
        }

        $event->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');

    }

    public function show($id) {

        $event = Event::findOrFail($id);

        return view('events.show', ['event' => $event]);

    }
    
}
