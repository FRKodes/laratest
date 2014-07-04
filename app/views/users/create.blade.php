@extends('layouts.default')

@section('content')
	<h1>Crate a new user</h1>

	{{ Form::open(['route'=>'users.store']) }}
		<div>
			{{ form::label('username','Username:')}}
			{{ form::input('text','username')}}
		</div>

		<div>
			{{ form::label('password','Password:')}}
			{{ form::input('password','password')}}
		</div>

		<div>{{ form::submit('create user')}}</div>

	{{ form::close()}}
@stop