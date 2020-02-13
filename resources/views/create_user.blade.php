@extends('layout.app')

@section('title', 'Create User')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h2>Inscription</h2>

    <form action="{{ route('PostCreateUser') }}" method="POST">
    
        {{ csrf_field() }}
        
        <label for="nom">Nom : </label>
        
        <input type="text" name="nom" id="nom" value="{{ old('nom') }}">
        
        <input type="submit" value="Envoyer !">
    </form>
@endsection