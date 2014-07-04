@extends('layouts.default')

@section('titlePage')
	Laratest - {{ $user->username}}
@stop

@section('content')
	<h1>Hello, {{ $user->username}} </h1>
@stop
