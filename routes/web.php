<?php

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

//use Symfony\Component\Routing\Route;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('index');
});

Route::get('/novocliente', 'ClienteControlador@create');

Route::get('/clientes', 'ClienteControlador@index');

Route::post('/clientes', 'ClienteControlador@store');

Route::get('/clientes/excluir/{id}', 'ClienteControlador@destroy');
