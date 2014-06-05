<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel Test</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				@yield('sidebar')
			</div>
		
			<div class="col-md-6">
				@yield('content')
			</div>

		</div>
	</div>
	<!-- Here are the java script files -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>
