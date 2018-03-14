@extends('layout.app')

@section('title', 'Contact')

@section('content')
	<div>ID : {{ $contact->id }} </div>
	<div>FirstName : {{ $contact->firstname }} </div>
	<div>LastName : {{ $contact->lastname }} </div>
	<div>E-mail : {{ $contact->mail }} </div>
	<div>Phone : {{ $contact->phone }} </div>
@endsection