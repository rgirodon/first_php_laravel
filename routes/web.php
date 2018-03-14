<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    return view('welcome');
});

Route::get('ciao/{name}', function($name) {
    return 'Ciao '.$name.' !';
});

Route::get('hello/{name}', function($name) {
    return view('hello', ['userName'  => $name]);
});

Route::get('hello_with_layout/{name}', function($name) {
    return view('hello_with_layout', ['name'  => $name]);
});

Route::get('hello_with_controller/{name}', 'HelloController@sayHello');

Route::get('awesome_football_player', 'AwesomeFootballPlayerController@random');

Route::get('createUser', 'CreateUserController@displayForm');

Route::post('createUser', 'CreateUserController@handleForm');

Route::get('contact', 'ContactController@displayForm');

Route::post('contact', 'ContactController@handleForm');

Route::get('users', 'UsersController@list');

Route::get('users/{id}', 'UsersController@show');

Route::get('contacts', 'ContactsController@list');

Route::get('contacts/{id}', 'ContactsController@show');
