@extends('layouts.default')

@section('titlePage')
	Laratest - All users
@stop

@section('content')
	<h1>All Users</h1>

	@if($users->count())

		@foreach ($users as $user)
			<li>{{ link_to("/users/{$user->username}",$user->username) }}</li>
		@endforeach

	@else
		<p>There is nothing man... sorry</p>
	@endif
@stop
