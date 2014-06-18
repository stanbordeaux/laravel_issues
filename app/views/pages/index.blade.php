@extends('layouts.default')


@section('content')
	
	@include('layouts.partials._carousel')

    <!-- <h1>{{ Auth::check() ? "Welcome " .Auth::user()->username : "Welcome, please consider becoming a member!" }}</h1> -->
   <div class="row top-buffer">
    <h3> WE DESIGN DEVELOP AND DEPLOY</h3>
</div>

      <div class="row row-flex row-wrap top-buffer">
        <div class="col-lg-4">
					<div class="thumbnail">
          <img class="img-circle img-thumbnail" src="http://lorempixel.com/output/fashion-q-c-140-140-7.jpg" alt="Generic placeholder image">
						<div class="caption">
          <h2>Professional Offices</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
						</div>
					</div>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
					<div class="thumbnail">
          <img class="img-circle img-thumbnail" src="http://lorempixel.com/output/people-q-c-140-140-10.jpg" alt="Generic placeholder image">
					<div class="caption">
          <h2>Professional Team</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p>
          	<!-- <a class="btn btn-default" href="#" role="button">View details &raquo;</a> -->
			{{ HTML::link('team', ' View details', ['class' => 'btn btn-primary']) }}
          </p>
						</div>
					</div>
        </div><!-- /.col-lg-4 -->
					
				<div class="col-lg-4">
					<div class="thumbnail">
						<img class="img-circle img-thumbnail" src="http://lorempixel.com/output/people-q-c-140-140-4.jpg" alt="Generic placeholder image">
						<div class="caption">
						<h2>Professional Design</h2>
						<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
						<p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
					</div>
				</div>
</div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


@stop