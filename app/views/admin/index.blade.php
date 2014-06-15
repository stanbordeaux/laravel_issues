@extends('layouts.adminMaster')

@section('content')

<style>

	
	
</style>

<div class="row top-buffer">
	<div class="col-md-8">
		<div class="well">
			<h1>Dashboard Manager</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam in quisquam, hic numquam aut, optio officia eligendi, aliquid unde officiis est nam iure distinctio omnis. Natus numquam, incidunt neque id. </p>
		</div>
	</div>
	<div class="col-md-4 col">
		
			<div class="clock">
			<div id="Date"></div>

			<ul>
				<li id="hours"> </li>
			    <li id="point">:</li>
			    <li id="min"> </li>
			    <li id="point">:</li>
			    <li id="sec"> </li>
			</ul>

			</div>
		
	</div>
</div> 
<div class="row top-buffer">
<ul class="nav nav-pills nav-justified" id="myTab">
  <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
  <li><a href="#users" data-toggle="tab">Users table</a></li>
  <li><a href="#messages" data-toggle="tab">Messages</a></li>
  <li><a href="#settings" data-toggle="tab">Settings</a></li>
</ul>

<div class="tab-content top-buffer">
  <div class="tab-pane active" id="home">
  	Home
 </div>
  <div class="tab-pane" id="users">
	<table class="table table-bordered">

	<thead>
		<tr>
			<th>#</th>
			<th>Username</th>
			<th>Email</th>
			<th>Action</th>
		</tr>
	</thead>
		<tbody>
			@foreach ($users as $user)
			<tr>
			<td>{{ $user->id }}</td>
			<td>{{$user->username}} </td>
			<td>{{HTML::mailto("{$user->email}", " $user->email", ['class' => 'glyphicon glyphicon-envelope']) }} </td>
			<td>{{link_to("edit/{$user->id}", 'Edit', ['class' => "btn btn-primary btn-sm "])}} {{link_to("delete/{$user->id}", 'Delete',  ['class' => "btn btn-danger btn-sm"])}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
  </div>
 
  <div class="tab-pane" id="messages">messages</div>
  <div class="tab-pane" id="settings">Settings</div>
</div>

</div>				

<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	// Create two variable with the names of the months and days in an array
	var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ]; 
	var dayNames= ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]

	// Create a newDate() object
	var newDate = new Date();
	// Extract the current date from Date object
	newDate.setDate(newDate.getDate());
	// Output the day, date, month and year    
	$('#Date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());

	setInterval( function() {
		// Create a newDate() object and extract the seconds of the current time on the visitor's
		var seconds = new Date().getSeconds();
		// Add a leading zero to seconds value
		$("#sec").html(( seconds < 10 ? "0" : "" ) + seconds);
		},1000);
		
	setInterval( function() {
		// Create a newDate() object and extract the minutes of the current time on the visitor's
		var minutes = new Date().getMinutes();
		// Add a leading zero to the minutes value
		$("#min").html(( minutes < 10 ? "0" : "" ) + minutes);
	    },1000);
		
	setInterval( function() {
		// Create a newDate() object and extract the hours of the current time on the visitor's
		var hours = new Date().getHours();
		// Add a leading zero to the hours value
		$("#hours").html(( hours < 10 ? "0" : "" ) + hours);
	    }, 1000);
		
}); 
</script>
	
<script type="text/javascript">
	$('#admin-tab a').click(function (e) {
  		e.preventDefault()
  		$(this).tab('show')
	})
</script>
@stop