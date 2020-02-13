@extends('layout.app')

@section('title', 'Contact')

@section('content')
	
	<div>ID : {{ $contact->id }} </div>
	<div>FirstName : {{ $contact->firstname }} </div>
	<div>LastName : {{ $contact->lastname }} </div>
	<div>E-mail : {{ $contact->mail }} </div>
	<div>Phone : {{ $contact->phone }} </div>
	
	<!--
	<div id="app">
		<example-component title="Hello" message="World !"></example-component>
	</div>
	
	<script>
	/*
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': '{{csrf_token()}}'
	    }
	});
	
	$(document).ready(function() {

		console.log('JQuery is on');
		
		$.get('../api/user',

				function(user) {

					console.log('Logged as : ' + user.name);
				});
	});
	*/

	axios.get('../api/user')
			.then(function(response) {

				console.log('Logged as : ' + response.data.name);
			});

	
	/*
	const app = new Vue({
	    el: '#app'
	});

	
	let pusher = new Pusher('5931ff6e3acc9390e4e3', {
    	cluster: 'eu',
      	forceTLS: true,
      	authEndpoint: '/firstlaravel/firstlaravel/public/broadcasting/auth',
        auth: {
          headers: {
            'X-CSRF-Token': '{{ csrf_token() }}'
          }
        }
    });

    let channel = pusher.subscribe('private-contacts.consultation');
    
    channel.bind('ContactConsultationEvent', 
            	    function(data) {
              			console.log('Contact consulted : ' + data.contact.firstname + ' ' + data.contact.lastname);
            		}
	);
	*/
	

	/*
	Echo.private('contacts.consultation')
        .listen('ContactConsultationEvent', (e) => {			
        	console.log('Contact consulted : ' + e.contact.firstname + ' ' + e.contact.lastname);
        });
    */
	
	</script>
	-->
@endsection