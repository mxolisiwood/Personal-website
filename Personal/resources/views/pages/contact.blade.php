@extends('layouts.default')

@section('title', 'Contact Me')

@section('content')

	<h1>Get in Touch</h1>

	<p>Reach out and tell me a bit about yourself. Explain in a few words what sort of work you are looking to get done.</p>

	@if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
	@endif

	@if (session('status'))
		<div class="alert alert-success">
			{{ session('status') }}
		</div>
	@endif

	<form method="POST" action="/contact">
	  {{ csrf_field() }}
	  <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Your Name *">
	  <input type="text" name="email" value="{{ old('email') }}" class="form-control" placeholder="Your Email *">
	  <input type="text" name="telephone" value="{{ old('telephone') }}" class="form-control" placeholder="Your Phone Number *">
	  <input type="text" name="website" value="{{ old('website') }}" class="form-control" placeholder="Your Website">
	  <textarea name="details" class="form-control" placeholder="Details of your request *">{{ old('details') }}</textarea>
	  <input type="submit" value="Send" class="btn btn-primary">
	</form>

@endsection