@extends('layout.app')

@section('title', 'Contacts')

@section('content')
	<table class="table table-hover">
        <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">FirstName</th>
          <th scope="col">LastName</th>
          <th scope="col">Mail</th>
          <th scope="col">Phone</th>
        </tr>
        </thead>
        <tbody>
        
        @foreach ($contacts as $contact)
        <tr>
          
          <td><a href="{{ url('contacts/'.$contact->id) }}">{{ $contact->id }}</a></td>
          
          <td>{{ $contact->firstname }}</td>
          
          <td>{{ $contact->lastname }}</td>
          
          <td>{{ $contact->mail }}</td>
          
          <td>{{ $contact->phone }}</td>
        </tr>
        @endforeach
        
        
        </tbody>
	</table>
@endsection