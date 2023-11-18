@extends('layouts.main')


@section('title', 'Produtos')

@section('content')

  @if ($id_produto !== null)

    <p>Exibindo produto id ou produto: {{$id_produto}}</p>

  @endif


@endsection
