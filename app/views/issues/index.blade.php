@extends('layouts.adminMaster')

@section('content')
	<h1>Here are the issues...</h1>

	<ul class="list-group">
		@foreach ($issues as $issue)
		<li class="list-group-item">{{link_to("/user/{$issue->user->id}", $issue->user->username) }}
		<li class="list-group-item"> {{ link_to("/issues/{$issue->id}", $issue->title) }}</li></li>
		@endforeach
	</ul>
@stop
