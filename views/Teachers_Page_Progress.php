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
					
					<div id="grade-level-list">
						<h3 id="grade-level-title">Grade Level</h3>
						<div class="panel-group" id="accordion">
											<div class="panel panel-default">
											  <div class="panel-heading">
												<h4 class="panel-title">
												  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
														Grade 3
												  </a>
												</h4>
											  </div>
												<div id="collapseOne" class="panel-collapse collapse in">
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
											</div>
											
										
						</div>
					</div><!--subject-list-->
				</div><!--left-column-->
			</div><!--left-wrapper-->
			<div class="right-wrapper">
					<div class="right-column">
						
						<div id="student-progress-container">
							<div id="student-list-title">Student List</div>
											
											<div class="student-container">
												<img src="views/res/student1.jpg" class="img-rounded shadow student-img" />
												<a class="navbar-link" href="index.php?request=spage"><p class="student-name">Alcantara, Jerome L.</p></a>
											</div>
											
											<div class="student-container">
												<img src="views/res/student2.jpg" class="img-rounded shadow student-img" />
												<a class="navbar-link" href="index.php?request=spage"><p class="student-name">Aquino, Reanne Jane B.</p></a>
											</div>
											
											<div class="student-container">
												<img src="views/res/student3.jpg" class="img-rounded shadow student-img" />
												<a class="navbar-link" href="index.php?request=spage"><p class="student-name">Dalan, Justin C.</p></a>
											</div>
											
											<div class="student-container">
												<img src="views/res/student4.jpg" class="img-rounded shadow student-img" />
												<a class="navbar-link" href="index.php?request=spage"><p class="student-name">Dayrit, Kristine May A.<p></a>
											</div>
											
											<div class="student-container">
												<img src="views/res/student5.jpg" class="img-rounded shadow student-img" />
												<a class="navbar-link" href="index.php?request=spage"><p class="student-name">Eroma, Joaquin G.</p></a>
											</div>
											
											<div class="student-container">
												<img src="views/res/student6.jpg" class="img-rounded shadow student-img" />
												<a class="navbar-link" href="index.php?request=spage"><p class="student-name">Tony Dela Cruz</p></a>
											</div>
											
											<div class="student-container">
												<img src="views/res/student7.jpg" class="img-rounded shadow student-img" />
												<a class="navbar-link" href="index.php?request=spage"><p class="student-name">Lazaro,Raphael John S.</p></a>
											</div>
											
											<div class="student-container">
												<img src="views/res/student8.jpg" class="img-rounded shadow student-img" />
												<a class="navbar-link" href="index.php?request=spage"><p class="student-name">Leyeza, Christopher T.</p></a>
											</div>
											
											<div class="student-container">
												<img src="views/res/student9.jpg" class="img-rounded shadow student-img" />
												<a class="navbar-link" href="index.php?request=spage"><p class="student-name">Loresca, Kylon D.</p></a>
											</div>
											
											<div class="student-container">
												<img src="views/res/student10.jpg" class="img-rounded shadow student-img" />
												<a class="navbar-link" href="index.php?request=spage"><p class="student-name">Redilla, Mart Lloyd P.</p></a>
											</div>
							
						</div><!--student-progress-container-->
							
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