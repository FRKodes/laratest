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


Route::get('/select-all', function()
{
	$users = User::all();
	return $users;
});

Route::get('/get-one', function()
{
	$user = User::find(1);
	return $user;
});

Route::get('/create-user', function()
{
	// $user = new User;
	// $user->username = "Other user";
	// $user->password = Hash::make("86876876786786876");
	// $user->save();

	User::create([
		'username' => 'NewUser',
		'password' => Hash::make('1234')
	]);

	return User::all();

});

Route::get('/update-user', function()
{
	
	$user = User::find(3);
	$user->username = "AnotherUser";
	$user->save();

	return User::all();
	
});

Route::get('/delete-user', function()
{
	$user = User::find(3);
	$user->delete();

	return User::all();
	
});

Route::get('/order-by', function()
{
	return User::orderBy('username','asc')->take(2)->get();
	
});

Route::get('users','UsersController@index');
Route::get('users/{username}','UsersController@show');
