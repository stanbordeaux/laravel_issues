            <!-- center left-->	
              <div class="panel panel-default">
								
                  <div class="panel-heading"><h4>All Issues Status<span class="badge pull-right">{{$issueCount}}</span></h4></div>
                  <div class="panel-body">
                    
										<small>Closed <span class="badge pull-right">{{$closedCount}}</span></small>
                    <div class="progress">
                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{$closedPercent}} " aria-valuemin="0" aria-valuemax="100" style="width: {{$closedPercent}}%">
                        <span class="sr-only">{{$closedPercent}}% Complete</span>
                      </div>
                    </div>
										<small>In Progress<span class="badge pull-right">{{$activeCount}}</span></small>
                    <div class="progress">
                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{{$activePercent}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$activePercent}}%">
                        <span class="sr-only">{{$activePercent}}% Complete</span>
                      </div>
                    </div>
                    <small>At Risk (Unassigned) <span class="badge pull-right">{{$unassignedCount}}</span></small>
                    <div class="progress">
                      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="{{$unassignedPercent}} " aria-valuemin="0" aria-valuemax="100" style="width: {{$unassignedPercent}}%">
                        <span class="sr-only">{{$unassignedPercent}}% Complete</span>
                      </div>
                    </div>

                  </div><!--/panel-body-->
              </div><!--/panel--> 			 
         