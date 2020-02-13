<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class UsersController extends Controller {
    
    public function list() {
        
        $users = DB::select('select * from user order by lastname, firstname');
                
        return view('users', ['users' => $users]);
    }
    
    public function show($id) {
        
        $user = DB::table('user')->where('id', $id)->first();
        
        return view('user', ['user' => $user]);
    }
}
