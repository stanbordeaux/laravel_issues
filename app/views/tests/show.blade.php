@extends('layouts.default')

@section('content')
 
 <h1>Issue Finder</h1>
 	<ul class='list-group'>
	 	<h3>Issues for {{link_to("{$user->username}", $user->username)}}</h3>
		@foreach($issues as $i)
			<li class='list-group-item'>{{ $i->desc }}</li>
		@endforeach
	</ul>
@stop