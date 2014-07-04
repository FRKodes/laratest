@extends('layouts.default')

@section('content')
	<h1>Crate a new user</h1>

	{{ Form::open(['route'=>'users.store']) }}
		<div>
			{{ form::label('username','Username:')}}
			{{ form::input('text','username')}}
			{{ $errors->first('username', '<span class="error">:message</span>')}}
		</div>

		<div>
			{{ form::label('password','Password:')}}
			{{ form::input('password','password')}}
			{{ $errors->first('password', '<span class="error">:message</span>')}}
		</div>

		<div>{{ form::submit('create user')}}</div>

	{{ form::close()}}
@stop