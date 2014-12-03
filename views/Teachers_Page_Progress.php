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
	<?php include "views/parts/navi-bar-teacher.php";?>
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
						<h4 id="subject-list-title"><i class="glyphicon glyphicon-book"></i> Subjects</h4> 
						
						
										
					<div class="panel-group" id="Menu1">
				<?php 
						
						?>
							<div class="panel panel-default">
											  <div class="panel-heading">
												<h4 class="panel-title">
												  <?php echo '<a data-toggle="collapse" data-parent="#Menu1" href="#MathSubmenu1">
												  <i class="glyphicon glyphicon-paperclip"></i>Math
												  <i class="glyphicon glyphicon-chevron-down"></i></a>';?>
												  
												</h4>
											  </div>
												<?php echo '<div id="MathSubmenu1" class="panel-collapse collapse">'; ?>
														<div class="panel-body">
															<!--//Grade level-->
															
																<div class="panel-heading">
																	<h4 class="panel-title">
																		<?php echo '<a data-toggle="collapse" data-parent="#MathSubmenu1" href="#MathSubmenu2">
																			<i class="glyphicon glyphicon-pushpin"></i> Grade 3
																			<i class="glyphicon glyphicon-chevron-down"></i>';?>
																		</a>
																	</h4>
																</div>
																			<?php echo '<div id="MathSubmenu2" class="panel-collapse collapse">';?>				
																				<div class="panel-body">
																					<!--sections-->
																					<div class="panel-heading">
																						<h4 class="panel-title">
																							<a href="#">
																								<i class="glyphicon glyphicon-pencil"></i> Section 1
				
																							</a>
																						</h4>
																					</div>
																				</div>
																			</div>
														</div><!--//Grade level-->
												</div>			
							</div>	
						 <?php 
						 
						 
					 ?>
						</div>	
					 
					</div><!--subject-list-->
				</div>
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
     
        <script src="views/jquery.min.js"></script>
        <script src="views/bootstrap.min.js"></script>
		<script src="views/tab.js"></script>
		
	
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