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
	return View::make('hello');
});

Route::get('users', function()
{
	$data= User::all();
	$name = "bob".LEMONSTANDNAME;
    
   // $data->'const' = LEMONSTANDNAME;
    return View::make('users')->with('data', $data)->with('name', $name);
});


Route::get('products', 'LemonController@showProducts');




Route::get('prices','LemonController@showprices');



