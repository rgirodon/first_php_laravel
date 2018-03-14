<?php

namespace App\Http\Controllers;

use App\Contact;

class ContactsController extends Controller {

    public function list() {
        
        $contacts = Contact::all();
        
        return view('contacts', ['contacts' => $contacts]);
    }
    
    public function show($id) {
        
        $contact = Contact::where('id', $id)->first();
        
        return view('contact_details', ['contact' => $contact]);
    }
}
