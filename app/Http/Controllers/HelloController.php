<?php
namespace App\Http\Controllers;

class HelloController extends Controller {

    public function sayHello($name) {
        
        return view('hello_with_controller', ['name' => $name]);
    }
}

