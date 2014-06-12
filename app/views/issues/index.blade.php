@extends('layouts.adminMaster')

@section('content')
	@include('issues.counter', array('issueCount' => $issueCount, 'issues' => $issues))
	<div class="row">
		<div class="col-md-12">
	<h2>Here are the issues</h2>
	
<div class="well">Current Issues <span class="badge pull-right">{{ $issueCount }}</span></div>
			
<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>#</td>
			<td>Title</td>
	
			<td>Assigned</td>
			<td>Priority</td>
			<td>Status</td>
			<td>Actions</td>
		</tr>
	</thead>
	<tbody>
	@foreach($issues as $issue)
		<tr>
			<td>{{ $issue->id }}</td>
			<td>{{ $issue->title }}</td>
		
			<td>{{ $issue->user->username }}</td>
			<td>{{ $issue->priority->priority }}</td>
			<td>{{ $issue->status->status }}</td>
			<td>{{ HTML::link_nested("issues/{$issue->id}/edit", ' ', ['class' => 'btn btn-primary btn-xs'], '', '<i class="glyphicon glyphicon-pencil"></i>') }}  {{ HTML::link_nested("issues/{$issue->id}", ' ', ['class' => 'btn btn-danger btn-xs'], '', '<i class="glyphicon glyphicon-remove"></i>') }}</td>

		</tr>
	@endforeach
	</tbody>
</table>
		</div> <!--end col-->
</div> <!-- end row -->
@stop
