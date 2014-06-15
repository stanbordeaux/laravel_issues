<!-- This is the navigation for the site -->
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
        <li>{{ HTML::link('/create', 'Issues')}}</li>
        <li><a href="/register">Register</a></li>
        @if (Auth::guest())
         <li><a href="/login">Login</a></li>
        @else
          <li><a href='/logout'>Logout</a></li>
        @endif
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>
