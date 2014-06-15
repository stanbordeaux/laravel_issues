@extends('layouts.default')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Sign in to continue!</h1>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <!-- <form class="form-signin"> -->
                {{ Form::open(['route' => 'sessions.store']) }}

                <!-- <input type="text" class="form-control" placeholder="Email" required autofocus> -->
                {{ Form::text('username', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Username', 'autofocus' => 'autofocus'])}}
                {{ Form::text('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Email'])}}
                {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required'])}}
                <!-- <input type="password" class="form-control" placeholder="Password" required> -->
                {{ Form::submit('Sign in', ['class' => 'btn btn-lg btn-primary btn-block']) }}
                <!-- <button class="btn btn-lg btn-primary btn-block" type="submit"> 
                    Sign in</button>-->
                <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Remember me
                </label>
                <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                <!-- </form> -->
                {{ Form::close() }}
            </div>
            <a href="#" class="text-center new-account">Create an account </a>
        </div>
    </div>
</div>
    
@stop