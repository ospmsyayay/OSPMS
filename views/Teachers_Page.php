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
    
		<body onload="check()">
		<script>
		function check()
		{
		<?php
			if ($_GET['prompt']=="success")
			{								
		?>
				alert('Login Successful');
		<?php					
			}
		?>
		}
		</script>
		
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
    						<a class="navbar-brand" href="index.php?request=tpage">Home</a>
    					</li>
    					<li>
    						<a class="navbar-brand" href="index.php?request=tpage_progress">Progress</a>
    					</li>
                        <li>
    						<a class="navbar-brand" href="index.php?request=tpage_encode">Encode</a>
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
				</div>
			</div><!--left-wrapper-->
			<div class="right-wrapper">
				<div class="right-column">
					<div id="postbox-container">
						<ul id="myTab" class="nav nav-tabs">
								<li class="active"><a href="#announcement" data-toggle="tab">Write Announcement</a></li>
								<li><a href="#lecture-exercises" data-toggle="tab">Post Lecture/Exercises </a></li>
								<li><a href="#attendance-sheet" data-toggle="tab">Attendance Sheet</a></li>
							  </ul>
							  <div id="myTabContent" class="tab-content">
								<div class="tab-pane fade in active" id="announcement">
							
									<div class="msgbox">
										<div class="row">
											<div class="col-md-12 col-md-12">
												<div class="panel panel-default">
													<div class="panel-body">                
														<form accept-charset="UTF-8" action="" method="POST">
															<textarea class="form-control counted" name="message" placeholder="Type in your announcement" rows="5" style="margin-bottom:10px;"></textarea>
															<h6 class="pull-right" id="counter">320 characters remaining</h6>
															<button class="btn btn-info" type="submit">Post New Message</button>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
								
								</div>
								<div class="tab-pane fade" id="lecture-exercises">
										<div class="btn_align">
											
												<div class="ui-group-buttons">
														<button type="button" class="btn btn-primary btn-lg" >Post Lecture</button>
														<div class="or or-lg"></div>
														<button type="button" class="btn btn-success btn-lg" onclick="window.location.href='index.php?request=createexer'">Create Exercises</button>
												<!--<a class="btn btn-success" href="index.php?request=login" role="button" id="dummy-button">Login</a>-->
												</div>
										</div>
									
										<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
													<div class="modal-dialog">
														<div class="modal-content">

															<div class="modal-header">
															  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
															  <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
															</div>
															
															<div class="modal-body">
															  <h4>Text in a modal</h4>
															  <p></p>

															  <h4>Popover in a modal</h4>
															  <p>This <a href="#" role="button" class="btn btn-default js-popover" title="" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title">button</a> should trigger a popover on click.</p>

															  <h4>Tooltips in a modal</h4>
															  <p><a href="#" class="js-tooltip" title="" data-original-title="Tooltip">This link</a> and <a href="#" class="js-tooltip" title="" data-original-title="Tooltip">that link</a> should have tooltips on hover.</p>

															  <hr>

															  <h4>Overflowing text to show scroll behavior</h4>
															  <p></p>
															  <p></p>
															  <p></p>
															  <p></p>
															  <p></p>
															  <p></p>
															  <p></p>
															  <p></p>
															  <p></p>
															</div>
															
															<div class="modal-footer">
															  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
															  <button type="button" class="btn btn-primary">Save changes</button>
															</div>

														</div>
													</div>
										</div>

												  <!--<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
													Launch demo modal
												  </button>-->
								  
								</div>
								
								<div class="tab-pane fade" id="attendance-sheet">
									<!--<img src="views/res/attendance.png" class="img-rounded shadow attendance" />-->	
									<iframe width="700" height="500" frameborder="0" scrolling="no" src="https://onedrive.live.com/embed?cid=D2A43DA0B1EE900A&resid=D2A43DA0B1EE900A%21117&authkey=AEkUlL1qQ2RPZH0&em=2&AllowTyping=True&ActiveCell='Nov'!D8&wdHideGridlines=True&wdHideHeaders=True&wdDownloadButton=True"></iframe>
								</div>
								
								<div class="tab-pane fade" id="photo">
								  
								</div>
								
								<div class="tab-pane fade" id="file">
								  
								</div>
								
							  </div>

					
					</div><!--postbox-container-->
					
					<div id="post-container">
						<div id="post-title">Latest Post</div>
						<div class="post-messages">
							<img src="views/res/teacher.jpg" class="img-rounded shadow post-message-img" />
							<p class="post-teacher">Please Review Rational Numbers</p>
						</div>
						
						<div class="post-messages">
							<img src="views/res/teacher.jpg" class="img-rounded shadow post-message-img" />
							<img src="views/res/sample_lecture.jpg" class="img-rounded shadow sample_lecture" />
						</div>
						
						<div class="post-messages">
							<img src="views/res/teacher.jpg" class="img-rounded shadow post-message-img" />
							<p class="post-teacher">Congratulations section 1 you top the NAT Examination</p>
						</div>
						
						<div class="post-messages">
							<img src="views/res/teacher.jpg" class="img-rounded shadow post-message-img" />
							<p class="post-teacher">We'll have meeting tomorrow</p>
						</div>
						
						<div class="post-messages">
							<img src="views/res/teacher.jpg" class="img-rounded shadow post-message-img" />
							<p class="post-teacher">No Classes Tomorrow</p>
						</div>
						
					</div><!--post-container-->
						
				</div><!--right-column-->
			</div><!--right-wrapper-->	
			
		</div><!--container-->	
	
	
	</div><!--content-->
</div><!--viewport-->
       
        <script src="views/jquery.min.js"></script>
        <script src="views/transition.js"></script>
        <script src="views/carousel.js"></script>
        <script src="views/bootstrap.min.js"></script>
		<script src="views/tab.js"></script>
		
		<script src="views/modal.js"></script>
		<script src="views/tooltip.js"></script>
		<script src="views/popover.js"></script>
		<script src="views/msgbox.js"></script>
	
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