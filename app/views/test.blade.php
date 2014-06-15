<!doctype html>
<head></head>
<body>
	<h3>here is some stuff</h3>
	
	@foreach($users as $user)
	<li> {{$user->projects->title}}</li>
	@endforeach
</body>