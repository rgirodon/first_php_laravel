@extends('layout.app')

@section('title', 'Random awesome football player')

@section('content')
    <h1>This guy was an awesome football player : {{ $player1 }} !</h1>
    <h1>This guy was also an awesome football player : {{ $player2 }} !</h1>
@endsection