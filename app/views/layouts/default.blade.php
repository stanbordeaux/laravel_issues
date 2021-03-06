<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Stan Bordeaux">
<!--    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">-->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css" rel="stylesheet">
		
    <title>Tiny::DashboardManager</title>

    <!-- Bootstrap core CSS -->
    

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Josefin+Slab:400,700italic' rel='stylesheet' type='text/css'>

    
  </head>

  <body>

  @include('layouts.partials._navigation')

    <div class="container">
      <br>
     
      <div class="starter-template">
        @yield('content')
      </div>

    </div><!-- /.container -->

   
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function(){
        $('.carousel').carousel({
          interval: 5000,
          pause: true
        });
      });
    </script>
		
		<script type="text/javascript">
		 $('#phptip').tooltip('toggle')
</script>
		
	
</body>
</html>
