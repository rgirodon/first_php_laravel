<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateUserController extends Controller {
    
    public function displayForm() {
        
        return view('create_user');
    }
    
    public function handleForm(Request $request) {
        
        return 'Le nom est ' . $request->input('nom');
    }
}
