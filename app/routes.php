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

Route::get('/select-from-db', function()
{
	$users = DB::table('users')->get();
	return $users;
});

Route::get('/select-one-from-db', function()
{
	$user = DB::table('users')->find(1);
	dd($user);
});

Route::get('/where-some', function()
{
	$user = DB::table('users')->where('username', '!=', 'tony')->get();
	return $user;
});
