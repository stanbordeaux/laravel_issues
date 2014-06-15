@extends('layouts.adminMaster')

@section('content')
<h1>Add and assign issue</h1>
{{ Form::open(array('url' => 'issues')) }}

<!-- set the width of the select box  -->

{{ Form::text('title', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Issue title', 'autofocus' => 'autofocus'])}}
<br>

<br>
{{ Form::textarea('desc', null, ['class' => 'form-control', 'placeholder' => 'Issue decription']) }}
<br>
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
<br>
{{ Form::submit('Add issue', ['class' => 'btn btn-lg btn-primary btn-block']) }}
<br>
{{ Form::close() }}

@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

@stop
