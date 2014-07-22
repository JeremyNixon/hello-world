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
	return View::make('landing');
});

Route::get('/open-club', function(){
	return View::make('open-club');
});

Route::get('/mixed-club', function(){
	return View::make('mixed-club');
});

Route::get('/women-club', function(){
	return View::make('women-club');
});

Route::get('/open-college', function(){
	return View::make('open-college');
});