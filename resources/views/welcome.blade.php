@extends('layouts.main')


@section('title', 'Produtos')

@section('content')

@php
  foreach ($arr as $val)
  {
    dd($val->titulo . "\n" . $val->descricao . "\n" .$val->cidade);
  }
@endphp

@endsection
