@extends('layout.app')

@section('title', 'Hello with param')

@section('content')
    <h1>Hello {{ $name }} !</h1>
    <p>Zip Code : {{ $zipcode }}</p>
@endsection