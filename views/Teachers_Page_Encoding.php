  <!--@author Darryl-->
  <!--@copyright 2014-->
 
<!DOCTYPE html>
<html lang="en">
	<head>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        
		<title>Online Student Performance Monitoring System</title>
        <!--<link rel="stylesheet" type="text/css" href="views/bootstrap.min.css"/>-->
        <link href="views/carousel.css" rel="stylesheet"/>
		<link href="views/bootstrap.css" rel="stylesheet"/>
        <link href="views/exDesign.css" rel="stylesheet"/>
	</head>
    
	<body>
<div class="header-wrapper">

<div id="t-page-header" class="header shadow">

	<div id="t-page-header-inner" class="navbar navbar-default header-inner shadow" role="navigation" > 
		
        <div class="container">
            <div id="t-page-header-content" class="navbar-header header-content">
					<div class="navbar-header">
						<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="user-dropdown">
						  <span class="sr-only">Toggle navigation</span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						</button>
						<!--<a class="navbar-brand" href="#">Project Name</a>-->
					  </div>
					  
                    <ul class="nav navbar-nav">
                      <li>
    						<a class="navbar-brand" href="index.php?r=lss">Home</a>
    					</li>
    					<li>
    						<a class="navbar-brand" href="index.php?r=lss&tr=trp">Progress</a>
    					</li>
                        <li>
    						<a class="navbar-brand" href="index.php?r=lss&tr=tre">Encode</a>
    					</li>
                        <li>
    						<a class="navbar-brand" href="#">Reports</a>
    					</li>
				
				    </ul>
                      <img src="views/res/teacher.jpg" class="img-rounded shadow profile-teacher-img" />
			
					<div id="user-dropdown" class="dropdown"> 
						<button type="button" class="btn dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown"> 
							<span class="caret"></span> 
						</button> 
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1"> 
								<li role="presentation"> 
								<a role="menuitem" tabindex="-1" href="#">Account Settings</a> </li>
									<li class="divider"></li>
								<li role="presentation"> <a role="menuitem" tabindex="-1" href="#">Profile</a> </li> 
									<li class="divider"></li>
								<li role="presentation"> <a role="menuitem" tabindex="-1" href="#"> Settings </a> </li> 
									<li class="divider"></li>
								<li role="presentation"> <a role="menuitem" tabindex="-1" href="#"> Help </a> </li> 
									<li class="divider"></li>	
								<li role="presentation" class="divider"></li> 
								<li role="presentation"> <a role="menuitem" tabindex="-1" href="index.php?">Logout</a> </li> 
							</ul> 
							
							
					</div>
			</div><!--header content-->
	
	</div><!-- /.container-->
	</div><!--header-inner-->
</div><!--/#header-->   
</div><!--header-wrapper-->

<div class="viewport">
	<div class="content">
		<div class="container">
			<div class="left-wrapper">
				<div class="left-column" >
					 <div id="thumbnail-teacher">
						<img src="views/res/teacher.jpg" class="img-rounded shadow" id="thumbnail-teacher-img"/>
						<a href="#" class="navbar-link" ><h5 id="greetings-teacher">Hi, Teacher</h5></a>
					</div> 
					
					<div id="subject-list">
						<h3 id="subject-list-title">Subjects</h3>
						<div class="panel-group" id="accordion">
											<div class="panel panel-default">
											  <div class="panel-heading">
												<h4 class="panel-title">
												  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
														Math
												  </a>
												</h4>
											  </div>
											  <div id="collapseOne" class="panel-collapse collapse in">
												<div class="panel-body">
													<!--//Grade level-->
																	
																	  <div class="panel-heading">
																		<h4 class="panel-title">
																		  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-list">
																				Grade 3 level
																		  </a>
																		</h4>
																	  </div>
																	  <div id="collapseOne-list" class="panel-collapse collapse in">
																		<div class="panel-body">
																				<!--//sections-->
																						
																						  <div class="panel-heading">
																							<h4 class="panel-title">
																							  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-list-list1">
																								Section 1
																							  </a>
																							</h4>
																						  </div>
																						  <div id="collapseOne-list-list1" class="panel-collapse collapse">
																							<div class="panel-body">
																							 
																							</div>
																						  </div>
																						
																						
																						
																						
																						
																						
																						  <div class="panel-heading">
																							<h4 class="panel-title">
																							  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-list-list2">
																								Section 2
																							  </a>
																							</h4>
																						  </div>
																						  <div id="collapseOne-list-list2" class="panel-collapse collapse">
																							<div class="panel-body">
																							 
																							</div>
																						  </div>
																					
																						
																						
																						  <div class="panel-heading">
																							<h4 class="panel-title">
																							  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-list-list3">
																								Section 3
																							  </a>
																							</h4>
																						  </div>
																						  <div id="collapseOne-list-list3" class="panel-collapse collapse">
																							<div class="panel-body">
																							 
																							</div>
																						  </div>
																						

																				
																				<!--//sections-->	
																		</div>
																	  </div>
															
													<!--//Grade level-->
												</div>
											  </div>
											</div>
											<div class="panel panel-default">
											  <div class="panel-heading">
												<h4 class="panel-title">
												  <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
													English
												  </a>
												</h4>
											  </div>
											  <div id="collapseTwo" class="panel-collapse collapse">
												<div class="panel-body">
														<!--//Grade level-->
																	
																	  <div class="panel-heading">
																		<h4 class="panel-title">
																		  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-list">
																				Grade 3 level
																		  </a>
																		</h4>
																	  </div>
																	  <div id="collapseOne-list" class="panel-collapse collapse in">
																		<div class="panel-body">
																				<!--//sections-->
																						
																						  <div class="panel-heading">
																							<h4 class="panel-title">
																							  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-list-list1">
																								Section 1
																							  </a>
																							</h4>
																						  </div>
																						  <div id="collapseOne-list-list1" class="panel-collapse collapse">
																							<div class="panel-body">
																							 
																							</div>
																						  </div>
																						
																						
																						
																						
																						
																						
																						  <div class="panel-heading">
																							<h4 class="panel-title">
																							  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-list-list2">
																								Section 2
																							  </a>
																							</h4>
																						  </div>
																						  <div id="collapseOne-list-list2" class="panel-collapse collapse">
																							<div class="panel-body">
																							 
																							</div>
																						  </div>
																					
																						
																						
																						  <div class="panel-heading">
																							<h4 class="panel-title">
																							  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-list-list3">
																								Section 3
																							  </a>
																							</h4>
																						  </div>
																						  <div id="collapseOne-list-list3" class="panel-collapse collapse">
																							<div class="panel-body">
																							 
																							</div>
																						  </div>
																						

																				
																				<!--//sections-->	
																		</div>
																	  </div>
															
													<!--//Grade level-->
												</div>
											  </div>
											</div>
											<div class="panel panel-default">
											  <div class="panel-heading">
												<h4 class="panel-title">
												  <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
													Mapeh
												  </a>
												</h4>
											  </div>
											  <div id="collapseThree" class="panel-collapse collapse">
												<div class="panel-body">
													<!--//Grade level-->
																	
																	  <div class="panel-heading">
																		<h4 class="panel-title">
																		  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-list">
																				Grade 3 level
																		  </a>
																		</h4>
																	  </div>
																	  <div id="collapseOne-list" class="panel-collapse collapse in">
																		<div class="panel-body">
																				<!--//sections-->
																						
																						  <div class="panel-heading">
																							<h4 class="panel-title">
																							  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-list-list1">
																								Section 1
																							  </a>
																							</h4>
																						  </div>
																						  <div id="collapseOne-list-list1" class="panel-collapse collapse">
																							<div class="panel-body">
																							 
																							</div>
																						  </div>
																						
																						
																						
																						
																						
																						
																						  <div class="panel-heading">
																							<h4 class="panel-title">
																							  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-list-list2">
																								Section 2
																							  </a>
																							</h4>
																						  </div>
																						  <div id="collapseOne-list-list2" class="panel-collapse collapse">
																							<div class="panel-body">
																							 
																							</div>
																						  </div>
																					
																						
																						
																						  <div class="panel-heading">
																							<h4 class="panel-title">
																							  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-list-list3">
																								Section 3
																							  </a>
																							</h4>
																						  </div>
																						  <div id="collapseOne-list-list3" class="panel-collapse collapse">
																							<div class="panel-body">
																							 
																							</div>
																						  </div>
																						

																				
																				<!--//sections-->	
																		</div>
																	  </div>
															
													<!--//Grade level-->
												</div>
											  </div>
											</div>
										  </div>
					</div><!--subject-list-->
				</div><!--left-column-->
			</div><!--left-wrapper-->	
			<div class="right-wrapper">
					<div class="right-column">
						
						<div id="encoding-container">
							<div id="encoding-page-title">Encoding Page</div>
											
											<div class="encoding-page-space">
												<!--<img src="views/res/encoding.jpg" class="img-rounded shadow process-img" />-->
												<iframe width="700" height="500" frameborder="0" scrolling="no" src="https://onedrive.live.com/embed?cid=D2A43DA0B1EE900A&resid=D2A43DA0B1EE900A%21113&authkey=AKORVERrE4gXjeE&em=2&AllowTyping=True&ActiveCell='BOYS%201-2'!K12&wdHideGridlines=True&wdHideHeaders=True&wdDownloadButton=True"></iframe>
												
											</div>
											
											<div class="encoding-page-space">
												<!--<img src="views/res/notebook.jpg" class="img-rounded shadow process-img" />-->
												<iframe width="700" height="500" frameborder="0" scrolling="no" src="https://onedrive.live.com/embed?cid=D2A43DA0B1EE900A&resid=D2A43DA0B1EE900A%21115&authkey=AALdtR5DhLjqQSs&em=2&AllowTyping=True&ActiveCell='Sheet2'!A2&wdHideGridlines=True&wdHideHeaders=True&wdDownloadButton=True"></iframe>
										
											</div>
											
											<!--<div class="encoding-page-space">
												<img src="views/res/" class="img-rounded shadow process-img" />
												
											</div>-->
											
										
							
						</div><!--encoding-container-->
							
					</div><!--right-column-->
			</div><!--right-wrapper-->	
		</div><!--container-->
	</div><!--content-->
</div><!--viewport-->

  <script src="views/jquery.min.js"></script>
        <script src="views/transition.js"></script>
        <script src="views/carousel.js"></script>
        <script src="views/jquery.min.js"></script>
        <script src="views/bootstrap.min.js"></script>
		<script src="views/tab.js"></script>
		
		<script src="views/modal.js"></script>
		<script src="views/tooltip.js"></script>
		<script src="views/popover.js"></script>
		
		
        <!--<script src="../../assets/js/docs.min.js"></script>-->
     <!-- JavaScript Test -->
<script>
$(function () {
  $('.js-popover').popover()
  $('.js-tooltip').tooltip()
})
</script>		
	</body>
    
    
</html>