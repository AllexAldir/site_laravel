<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
  public function index()
  {
    $arrayExemplo = Event::all(); //-> Irá resgatar todos os registros

    return view('welcome', ['arr' => $arrayExemplo]);
  }

  public function events()
  {
    return view('events.create');
  }

  public function store(Request $dados)
  {
    //-> Armazenar dados no banco

    $event = new Event();

    $event->titulo = $dados->titulo;
    $event->descricao = $dados->descricao;
    $event->cidade = $dados->cidade;
    $event->tipo_evento = $dados->tipo_evento;

    $event->save();

    return redirect('/');
  }
}
