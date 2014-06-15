<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <title>Tiny DashboardManager</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		  	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('flipclock/js/flipclock.css') }}">

<!--         <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" type="text/css" rel="stylesheet"> -->
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- CSS code from Bootply.com editor -->
          
        <style type="text/css">
/*            .navbar-static-top {
  margin-bottom:20px;
}

i {
  font-size:18px;
}
  
footer {
  margin-top:20px;
  padding-top:20px;
  padding-bottom:20px;
  background-color:#efefef;
}

.nav>li .count {
  position: absolute;
  bottom: 12px;
  right: 8px;
  font-size: 10px;
  font-weight: normal;
  background: rgba(51,200,51,0.55);
  color: rgba(255,255,255,0.9);
  line-height: 1em;
  padding: 2px 4px;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  -ms-border-radius: 10px;
  -o-border-radius: 10px;
  border-radius: 10px;
}*/
        </style>


    </head>
    
    <!-- HTML code from Bootply.com editor -->
    
    <body  >
        
  @include('layouts.partials._navigation')



<!-- Main -->
<div class="container">
  
  <!-- upper section -->
  <div class="row top-buffer">
	<div class="col-md-3">
      <!-- left -->
      <a href="#"><strong><i class="glyphicon glyphicon-hdd"></i> Toolbox</strong></a>
      <hr>
      
      <ul class="nav nav-pills nav-stacked">
        <li><a href="#"><i class="glyphicon glyphicon-flash"></i> Alerts</a></li>
        <li><a href="#"><i class="glyphicon glyphicon-link"></i> Links</a></li>
        <li>{{ HTML::link_nested('issues/create', ' Add Issue', '', '', '<i class="glyphicon glyphicon-tasks"></i>') }}</li>
        <li><a href="#"><i class="glyphicon glyphicon-book"></i> Books</a></li>
        <li><a href="#"><i class="glyphicon glyphicon-hdd"></i> Tools</a></li>
        <li><a href="#"><i class="glyphicon glyphicon-time"></i> Real-time</a></li>
        <li><a href="#"><i class="glyphicon glyphicon-plus"></i> Advanced..</a></li>
      </ul>
      
      <hr>
      
  	</div><!-- /span-3 -->
    <div class="col-md-9">
      	
      <!-- column 2 -->	
      
     
       <a href="#"><strong><i class="glyphicon glyphicon-dashboard"></i> My Dashboard</strong></a>  
            
       
      
	   <div class="row">
	<div class="col-md-12">
			         @yield('content')
              
              
              
                    
              
          	</div><!--/col-->
         
            <!--center-right-->

  
</div><!--/container-->
<!-- /Main -->


<footer class="text-center"></footer>


<div class="modal" id="addWidgetModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Add Widget</h4>
      </div>
      <div class="modal-body">
        <p>Add a widget stuff here..</p>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn">Close</a>
        <a href="#" class="btn btn-primary">Save changes</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dalog -->
</div><!-- /.modal -->



  
        
        <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


        <script type='text/javascript' src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

<script src="{{ URL::asset('flipclock/js/flipclock.min.js') }}"></script>



        
        <!-- JavaScript jQuery code from Bootply.com editor -->
        
        <script type='text/javascript'>
    var clock;
    
    $(document).ready(function() {
      var clock;
      var time = clock.getTime();
      clock = $('.theclock').FlipClock(10, {
            clockFace: 'MinuteCounter',
            countdown: false,

            callbacks: {
              stop: function() {
                $('.message').html('The clock has stopped!')
              }
            }
        });

    });        
        </script>
        
    </body>
</html>