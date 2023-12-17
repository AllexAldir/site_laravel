<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
  use HasFactory;

  protected $casts = ['items' => 'array'];//-> informar que o dado será uma array(configuração dos dados)

  protected $dates = ['date']; //-> informar ao laravel que o campo "date" é uma data
}
