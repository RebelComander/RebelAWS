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

Route::get('/', "ContactController@test");

Route::get('/something', function () {
	//return "tester";
    return view('something');
});

Route::get('/tester', function () {
	//return "tester";
    return view('tester');
});

Route::post('/contact', "ContactController@send");

Route::get('/magic', 'MagicController@show');
