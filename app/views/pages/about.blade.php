@extends('layouts.master')

@section('sidebar')

<h2>here is some sidbar content</h2>

@stop

@section('content')

	<h1>About Us</h1>

	<p>Here is some stuff about us</p>
	<ul>
		@foreach ($team as $t)
		<li>{{ $t }}</li>
		@endforeach
	</ul>
	
@stop