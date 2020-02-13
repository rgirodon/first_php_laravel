<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HandleParameterController extends Controller
{
    public function sayHello(Request $request) {
        
        $name = $request->query('name');

        $zipcode = $request->query('zipcode');

        return view('hello_with_param', 
                    ['name' => $name, 
                     'zipcode' => $zipcode]);
    }
}
