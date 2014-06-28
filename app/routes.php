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

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

Route::get('/about', function()
{
	return View::make('about');
});

Route::get('/', function()
{
	$vars = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, reiciendis dolores ipsa nesciunt, illum odio ullam! Tempora ratione quasi velit odio quo fuga in, dolore, voluptatem recusandae magni omnis aspernatur.";
	return View::make('home')->with('vars', $vars);
});
