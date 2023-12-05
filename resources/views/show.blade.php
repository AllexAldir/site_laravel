@extends('layouts.main')

@section('title', 'Show')

@section('content')
  @foreach ($events as $event)
    <li>{{$event}}</li>
  @endforeach
@endsection
