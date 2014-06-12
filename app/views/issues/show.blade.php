@extends('layouts.adminMaster')

@section('content')

	<h1>{{ $user->username }}</h1>

	<article> 
		@foreach($user->issues as $i)
		{{ $i->desc }} <br>
		@endforeach
	</article>
	
	<p>{{ link_to('/users', 'All users') }}</p>

@stop