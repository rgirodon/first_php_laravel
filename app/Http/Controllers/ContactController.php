<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;

class ContactController extends Controller {
    
    public function displayForm() {
        
        return view('contact');
    }
    
    public function handleForm(ContactRequest $request) {
        
        return view('confirm_contact');
    }
}
