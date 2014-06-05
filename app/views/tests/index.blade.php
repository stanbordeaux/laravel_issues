@extends('layouts.default')

@section('content')
 
 <h1>Issue Finder</h1>
 	<ul class='list-group'>
		@foreach($issues as $issue)
			<li class='list-group-item'>{{ link_to("{$issue->user->username}/issues/{$issue->id}", $issue->title)}}</li>
		@endforeach
	</ul>
@stop