<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Here are the issues</h1>
	<ul>
		@foreach ($issues as $issue)
		<li>{{ link_to('issues/$issue->user->id', $issue->username) }}</li>
		@endforeach
	</ul>
</body>
</html>