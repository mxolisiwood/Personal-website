@extends('layouts.default')

@section('title', 'Computer Science Student')

@section('content')

	<p>I am a Student located in Hungary, Eger. 
     Some programming languages I know are C#, JAVA, PHP.</p>

	<p>Please take a look at my <a href="{{ url('resume') }}">resume</a>. If you would like to consult with me about your upcoming or existing website or project, please <a href="{{ url('contact') }}">contact</a> me.</p>

@endsection