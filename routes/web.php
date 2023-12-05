<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']); //-> Utilizando a estrutura de lógica para o controller
Route::get('/events/create', [EventController::class, 'events']);
Route::post('/events', [EventController::class, 'store']);
Route::get('/searchevents/{id}', [EventController::class, 'show']);

Route::get('/contatos', function () {
  return view('contatos');
});

Route::get('/produtos/{id?}', function ($id = null) {

  return view('produtos', ['id_produto' => $id]); //-> Simulando a passagem do id de um produto
});

Route::get('/busca', function ()
{
  $busca = request('search'); //-> Captura no queryparams

  return view('search',['id_produto' => $busca]);
});
