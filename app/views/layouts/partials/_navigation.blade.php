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
      <a class="navbar-brand" href="#">Tiny::DashboardManager</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li>{{ HTML::clever_link('/', 'Home') }}</li>
        <li>{{ HTML::clever_link('team', 'Team')}}</li>
        <li>{{ HTML::clever_link('issues', 'Issues')}}</li>
        <li>{{ HTML::clever_link('/register', 'Register')}}</li>
        <li>{{ HTML::clever_link('/admin', 'Dashboard')}}</li>
          @if (Auth::guest())
           <li>{{ HTML::link('/login', 'Login')}}</li>
      </ul>
          @else

      <ul class="nav navbar-nav navbar-right">
       
        <li class="dropdown">
          <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
            <i class="glyphicon glyphicon-user"></i> Admin <span class="caret"></span></a>
          <ul id="g-account-menu" class="dropdown-menu" role="menu">
            <li><a href="#"><i class="glyphicon glyphicon-eye-open"></i> My Profile</a></li>
            <li>{{ HTML::link_nested('/logout', ' Logout', '', '', '<i class="glyphicon glyphicon-log-out"></i>')}} </li>
          </ul>
        </li>
      </ul>
      @endif
    </div><!--/.nav-collapse -->
  </div>
</div>
