<?php

class Userscontroller extends \BaseController {

	public function index()
	{
		$users = User::all();
		return View::make('users.index', ['users'=>$users]);
	}

	public function show($username)
	{
		$user = User::whereUsername($username)->first();
		return View::make('users.show',['user'=>$user]);
	}

	public function create()
	{
		return View::make('users.create');
	}

	public function store(){
		// return Input::all();

		$user = new User;
		$user->username = Input::get('username');
		$user->password = Hash::make(Input::get('password'));
		$user->save();

		// return Redirect::to('/users');
		return Redirect::route('users.index');


	}

}
