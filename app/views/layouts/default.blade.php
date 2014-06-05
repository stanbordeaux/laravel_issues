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
    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    

    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">

    
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Game Zone</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active">{{ HTML::link('/', 'Home') }}</li>
            <li>{{ HTML::link('/about', 'About')}}</li>
            <li>{{ HTML::link('/contact', 'Contact')}}</li>
            <li>{{ HTML::link('/register', 'Register')}}</li>
            @if (Auth::guest())
             <li>{{ HTML::link('/login', 'Login')}}</li>
            @else
              <li>{{ HTML::link('/logout', 'Logout')}}</li>
            @endif
           <li>{{ HTML::link('/admin', 'Admin')}}</li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
      <br>
     
      
        @yield('content')
     

    </div><!-- /.container -->

   
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function(){
        $('.carousel').carousel();
      });
</script>
  </body>
</html>
