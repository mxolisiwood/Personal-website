@extends('layouts.default')

@section('title', 'Page not found')

@section('content')

	<div class="not-found">
		<h1>Whoaa...</h1>
		<p> bruh. This page isn't coming back. MX knows how you feel.</p>
		<img class="img-responsive" src="{{ asset('img/keanu.gif') }}">
	</div>

@endsection