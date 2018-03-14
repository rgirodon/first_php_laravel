@extends('layout.app')

@section('title', 'Create User')

@section('content')
    <form action="{{ url('createUser') }}" method="POST">
    
        {{ csrf_field() }}
        
        <label for="nom">Entrez votre nom : </label>
        
        <input type="text" name="nom" id="nom">
        
        <input type="submit" value="Envoyer !">
    </form>
@endsection