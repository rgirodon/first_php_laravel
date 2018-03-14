@extends('layout.app')

@section('title', 'User')

@section('content')
	<div>ID : {{ $user->id }} </div>
	<div>FirstName : {{ $user->firstname }} </div>
	<div>LastName : {{ $user->lastname }} </div>
@endsection