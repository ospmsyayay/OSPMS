<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Online Student Performance Monitoring System</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="views/TESTING/css/bootstrap.min.css" rel="stylesheet">
		<link href="views/TESTING/css/styles.css" rel="stylesheet">
	</head>
	<body>
<!-- Header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Admin</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
		
      </ul>
    </div>
  </div><!-- /container -->
</div>
<!-- /Header -->

<!-- Main -->
<div class="container-fluid">
<div class="row">
	<div class="col-sm-3">
      <!-- Left column -->
      <a href="#"><strong><i class="glyphicon glyphicon-wrench"></i> Navigation</strong></a>  
      
      <hr>
      
      <ul class="list-unstyled">
        <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">
          <h5>Settings <i class="glyphicon glyphicon-chevron-down"></i></h5>
          </a>
            <ul class="list-unstyled collapse in" id="userMenu">
                <li class="active"> <a href="#"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-envelope"></i> Messages <span class="badge badge-info">4</span></a></li>
                <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Options</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-comment"></i> Shoutbox</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
            </ul>
        </li>
        <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#menu2">
          <h5>Reports <i class="glyphicon glyphicon-chevron-right"></i></h5>
          </a>
        
            <ul class="list-unstyled collapse" id="menu2">
                <li><a href="#">Teacher</a></li>
                <li><a href="#">Student</a></li>
                <li><a href="#">Parents</a></li>
                </li>
            </ul>
        </li>
        <li class="nav-header">
        <a href="#" data-toggle="collapse" data-target="#menu3">
          <h5>Progress <i class="glyphicon glyphicon-chevron-right"></i></h5>
          </a>
        
            <ul class="list-unstyled collapse" id="menu3">
                <li><a href="#"><i class="glyphicon glyphicon-circle"></i> Student Progress</a></li>
            </ul>
        </li>
      </ul>
           
      <hr>
      
      
      
      
  	</div><!-- /col-3 -->
    <div class="col-sm-9">
      	
      <!-- column 2 -->	
     <!--<ul class="list-inline pull-right">
         <li><a href="#"><i class="glyphicon glyphicon-cog"></i></a></li>
         <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-comment"></i><span class="count">3</span></a><ul class="dropdown-menu" role="menu">
		 <li><a href="#">1. Is there a way..</a></li><li><a href="#">2. Hello, admin. I would..</a></li><li><a href="#"><strong>All messages</strong></a></li></ul></li>
         <li><a href="#"><i class="glyphicon glyphicon-user"></i></a></li>
         <li><a title="Add Widget" data-toggle="modal" href="#addWidgetModal"><span class="glyphicon glyphicon-plus-sign"></span> Add Widget</a></li>
      </ul>-->
	  
      <a href="#"><strong><i class="glyphicon glyphicon-dashboard"></i> Admin Dashboard</strong></a>  
      
      	<hr>
      
		<div class="row">
                    
            <!-- center left-->	
         	<div class="col-md-6">
			  <div class="well">Inbox Messages <span class="badge pull-right">4</span></div>
              
              <hr>
              
              <div class="btn-group btn-group-justified">
                <a href="#" class="btn btn-primary col-sm-3">
                  <i class="glyphicon glyphicon-plus"></i><br>
                  Service
                </a>
                <a href="#" class="btn btn-primary col-sm-3">
                  <i class="glyphicon glyphicon-cloud"></i><br>
                  Cloud
                </a>
                <a href="#" class="btn btn-primary col-sm-3">
                  <i class="glyphicon glyphicon-cog"></i><br>
                  Tools
                </a>
                <a href="#" class="btn btn-primary col-sm-3">
                  <i class="glyphicon glyphicon-question-sign"></i><br>
                  Help
                </a>
              </div>
              
              <hr>
              
              <div class="panel panel-default">
                  <div class="panel-heading"><h4>Reports</h4></div>
                  <div class="panel-body">
                    
                    <small>Success</small>
                    <div class="progress">
                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%">
                        <span class="sr-only">72% Complete</span>
                      </div>
                    </div>
                    <small>Info</small>
                    <div class="progress">
                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        <span class="sr-only">20% Complete</span>
                      </div>
                    </div>
                    <small>Warning</small>
                    <div class="progress">
                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                        <span class="sr-only">60% Complete (warning)</span>
                      </div>
                    </div>
                    <small>Danger</small>
                    <div class="progress">
                      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                        <span class="sr-only">80% Complete</span>
                      </div>
                    </div>

                  </div><!--/panel-body-->
              </div><!--/panel-->
	
			  <hr>              

			  <!--tabs-->
              <div class="container">
					<div class="col-md-4">
					<ul class="nav nav-tabs" id="myTab">
					  <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
					  <li><a href="#messages" data-toggle="tab">Messages</a></li>
					</ul>
					
						<div class="tab-content">
						  <div class="tab-pane active" id="profile">
							 <br/>
							Profile of the Admin
							<p>Name</p>
						  </div>
						  <div class="tab-pane" id="messages">
							<br/>
						   Message
						  </div>
						</div>
					</div>
              	</div>
              </div>  
               
              <!--/tabs-->
              
             
          
          	</div><!--/col-->
        	<div class="col-md-6">
                <table class="table table-striped">
                      <thead>
                        <tr><th>Visits</th><th>ROI</th><th>Source</th></tr>
                      </thead>
                      <tbody>
                        <tr><td>45</td><td>2.45%</td><td>Direct</td></tr>
                        <tr><td>289</td><td>56.2%</td><td>Referral</td></tr>
                        <tr><td>98</td><td>25%</td><td>Type</td></tr>
                        <tr><td>..</td><td>..</td><td>..</td></tr>
                        <tr><td>..</td><td>..</td><td>..</td></tr>
                      </tbody>
               	</table>
              
              	<div class="panel panel-default">
                	<div class="panel-heading">
                      	<div class="panel-title">
                  		<i class="glyphicon glyphicon-wrench pull-right"></i>
                      	<h4>Post Request</h4>
                      	</div>
                	</div>
                	<div class="panel-body">

                      <form class="form form-vertical">
                       
                        <div class="control-group">
                          <label>Name</label>
                          <div class="controls">
                           <input type="text" class="form-control" placeholder="Enter Name">
                          </div>
                        </div>      
                        
                        <div class="control-group">
                          <label>Message</label>
                          <div class="controls">
                          	<textarea class="form-control"></textarea>
                          </div>
                        </div> 
                             
                        <div class="control-group">
                          <label>Category</label>
                          <div class="controls">
                             <select class="form-control"><option>options</option></select>
                          </div>
                        </div>    
                        
                        <div class="control-group">
                          	<label></label>
                        	<div class="controls">
                        	<button type="submit" class="btn btn-primary">
                              Post
                            </button>
                        	</div>
                        </div>   
                        
                      </form>
                
                
                  </div><!--/panel content-->
                </div><!--/panel-->
               </div><!--/panel-->
              
			</div><!--/col-span-6-->
     
      </div><!--/row-->
      
      <hr>
      
	  
    
      
      <hr>
  	</div><!--/col-span-9-->

</div>
<!-- /Main -->

<footer class="text-center">Created by Arandia and Dacanay<a href="http://www.bootply.com/85850"></a></footer>


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
        <a href="#" data-dismiss="modal" class="btn">Close</a>
        <a href="#" class="btn btn-primary">Save changes</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dalog -->
</div><!-- /.modal -->
  
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="views/TESTING/js/bootstrap.min.js"></script>
		<script src="views/TESTING/js/scripts.js"></script>
	</body>
</html>