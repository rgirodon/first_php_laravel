@extends('layout.app')

@section('title', 'Hello with session')

@section('content')
    <h1>Hello {{ Session::get('name') }} !</h1>
@endsection