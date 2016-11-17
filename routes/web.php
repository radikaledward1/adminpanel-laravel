<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function () {
    return view('panel');
});*/

Route::get('/', function () {
	return redirect('login');
});

Route::get('/login', function () {
	return view('login');
});

Route::post('/login', 'logincontroller@auth');

Route::post('/logout', 'logincontroller@signout');

Route::get('/panel', 'panelcontroller@show');

Route::post('/panel/create', 'panelcontroller@create');

Route::post('/panel/delete', 'panelcontroller@delete');
