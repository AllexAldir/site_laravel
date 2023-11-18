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
}
