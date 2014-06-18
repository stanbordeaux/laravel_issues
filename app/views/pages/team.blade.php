@extends('layouts.default')

@section('content')
	<div class="well well-sm">
	<div class="row top-buffer">
		
			<div class="col-md-6 col-md-offset-3">
				<h1>Our Team</h1>
				 
				<h3>At your service</h3>
			</div>
		</div>
		</div>
        <div class="row top-buffer">

            <div class="col-md-4 col-md-offset-2">
                <a href="#">
                    <img class="img-responsive img-thumbnail" src="http://lorempixel.com/output/people-q-c-200-200-8.jpg" alt="">
                </a>
            </div>

            <div class="col-md-4">
                <h3>Tilbo Black</h3>
                <h4>Web Development</h4>
													
               <!-- Modal -->
							<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" 
								 aria-labelledby="myModalLabel" aria-hidden="true">
								 <div class="modal-dialog">
										<div class="modal-content">
											 <div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" 
														 aria-hidden="true">×
													</button>
													<h4 class="modal-title" id="myModalLabel">
														 Tilbo Black
													</h4>
											 </div>
											 <div class="modal-body">
													<a href="#">
																	<img class="img-responsive img-thumbnail" src="http://lorempixel.com/output/people-q-c-100-100-8.jpg" alt="">
															</a>
													 <ul class="list-group">
														 <h4>Web Development Professional</h4>
												 <li class="list-group-item">CMS Development</li>
												 <li class="list-group-item"><a href="#" id="phptip"  data-toggle="tooltip" title="PHP: Web development programming for dynamic content">PHP</a></li>
												 <li class="list-group-item">Database administration</li>
												</ul>
											 </div>
											 <div class="modal-footer">
													<button type="button" class="btn btn-default" 
														 data-dismiss="modal">Close
													</button>

											 </div>
										</div><!-- /.modal-content -->
								 </div><!-- /.modal-dialog -->
							</div><!-- /.modal -->
							
               <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal1">View profile</button>
            </div>

        </div>

        <hr>

        <div class="row">

            <div class="col-md-4 col-md-offset-2">
                <a href="#">
                    <img class="img-responsive img-thumbnail" src="http://lorempixel.com/output/people-q-c-200-200-3.jpg" alt="">
                </a>
            </div>

            <div class="col-md-4">
                <h3>Vern Smith</h3>
                <h4>Graphic Design</h4>
               <!-- Modal -->
							<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" 
								 aria-labelledby="myModalLabel" aria-hidden="true">
								 <div class="modal-dialog">
										<div class="modal-content">
											 <div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" 
														 aria-hidden="true">×
													</button>
													<h4 class="modal-title" id="myModalLabel">
														 Vern Smith
													</h4>
											 </div>
											 <div class="modal-body">
													<a href="#">
																	<img class="img-responsive img-thumbnail" src="http://lorempixel.com/output/people-q-c-100-100-3.jpg" alt="">
															</a>
													<ul class="list-group">
														 <h4>Graphic Design Professional</h4>
												 <li class="list-group-item">Graphic Design</li>
												 <li class="list-group-item">Custom client development</li>
												 <li class="list-group-item">Photographic consultancy</li>
												</ul>
											 </div>
											 <div class="modal-footer">
													<button type="button" class="btn btn-default" 
														 data-dismiss="modal">Close
													</button>

											 </div>
										</div><!-- /.modal-content -->
								 </div><!-- /.modal-dialog -->
							</div><!-- /.modal -->
							
               <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal2">View profile</button>
            </div>

        </div>

        <hr>


        <div class="row">

            <div class="col-md-4 col-md-offset-2">
                <a href="#">
                    <img class="img-responsive img-thumbnail" src="http://lorempixel.com/output/people-q-c-200-200-7.jpg" alt="">
                </a>
            </div>

            <div class="col-md-4">
                <h3>Hillary Bent</h3>
							 <h4>Technical Lead</h4>
               <!-- Modal -->
							<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" 
								 aria-labelledby="myModalLabel" aria-hidden="true">
								 <div class="modal-dialog">
										<div class="modal-content">
											 <div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" 
														 aria-hidden="true">×
													</button>
													<h4 class="modal-title" id="myModalLabel">
														 Hillary Bent
													</h4>
											 </div>
											 <div class="modal-body">
													<a href="#">
																	<img class="img-responsive img-thumbnail" src="http://lorempixel.com/output/people-q-c-100-100-7.jpg" alt="">
															</a>
												<ul class="list-group">
													 <h4>Technical Lead Professional</h4>
												 <li class="list-group-item">Project Management</li>
												 <li class="list-group-item">Custom client development</li>
												 <li class="list-group-item">Technical consultant</li>
												</ul>
												 	
											 </div>
											 <div class="modal-footer">
													<button type="button" class="btn btn-default" 
														 data-dismiss="modal">Close
													</button>

											 </div>
										</div><!-- /.modal-content -->
								 </div><!-- /.modal-dialog -->
							</div><!-- /.modal -->
              <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal3">View profile</button>
            </div>

        </div>


	


@stop