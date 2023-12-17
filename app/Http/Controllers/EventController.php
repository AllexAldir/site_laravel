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
    //dd($dados->all());
    $event = new Event();

    $event->titulo = $dados->titulo;
    $event->descricao = $dados->descricao;
    $event->cidade = $dados->cidade;
    $event->tipo_evento = $dados->tipo_evento;
    $event->items = $dados->items;
    $event->date = $dados->date;

    $event->save();

    return redirect('/')->with('msg', 'Evento criado com sucesso!');
  }

  public function show(Request $id)
  {

    $data = base64_decode(request('id'));
    //dd($data);
    $registro = Event::find($data); //-> Verifica se o dado posui caso não retorna um erro

    return view('show')->with(['events' => $registro]);
  }
}
