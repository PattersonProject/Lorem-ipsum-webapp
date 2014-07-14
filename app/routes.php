<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return "Welcome to developers best friend";
});

	
Route::get('/lorem', function()
{


    return View::make('loremform');

});

Route::post('/lorem', function()
{
	$data = Input::all();
	return View::make('loremresult', $data);
});
