<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    /* Muda de / para a controller*/
    /* Separar os controller em pastas de views*/
    public function index(){
        $nomes = ["Joao", "Maria", "Joana", "Bento"];
        $nome = "Um nome qualquer";
        $idade = 45;
        $array =[1,2,3,4,5];
        return view('welcome', ['nomes' => $nomes,'nome' => $nome, 'idade' => $idade, 'array' => $array]);
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
