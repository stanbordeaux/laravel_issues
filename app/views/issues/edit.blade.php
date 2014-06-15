@extends('layouts.adminMaster')

@section('content')
<h1>Edit {{ $issue->id }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($issue, array('route' => array('issues.update', $issue->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('title', 'Title') }}
		{{ Form::text('title', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('desc', 'Description') }}
		{{ Form::textarea('desc', null, array('class' => 'form-control')) }}
	</div>


<div class="row">
	<div class="col-md-4">
	{{ Form::label('Assign issue', '', ['class' => 'control-label']) }}
	{{ Form::select('user_id', $users, null, ['class' => 'form-control']) }}
	</div>
	<div class="col-md-4">
	{{ Form::label('Priority', '', ['class' => 'control-label']) }}
	{{ Form::select('priority_id', $priorities, null, ['class' => 'form-control']) }}
	</div>
	<div class="col-md-4">
	{{ Form::label('Status', '', ['class' => 'control-label']) }}
	{{ Form::select('status_id', $status, null, ['class' => 'form-control']) }}
	</div>
</div>
	{{ Form::submit('Edit issue!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop