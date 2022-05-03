<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/', function () {
    $nomes = ["Joao", "Maria", "Joana", "Bento"];
    $nome = "Um nome qualquer";
    $idade = 45;
    $array =[1,2,3,4,5];
    return view('welcome', ['nomes' => $nomes,'nome' => $nome, 'idade' => $idade, 'array' => $array]);
});
