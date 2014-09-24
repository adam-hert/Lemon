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



//To update products in local DB, return import stats.
Route::get('updateproducts', 'LemonController@updateProducts');

//show products from local DB
Route::get('products','LemonController@listproducts');

//show bar graph of price from local DB
Route::get('graph','LemonController@barGraph');



