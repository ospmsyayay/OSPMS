  <!--@author Darryl-->
  <!--@copyright 2014-->
 
<!DOCTYPE html>
<html lang="en">
	<head>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        
		<title>Online Student Performance Monitoring System</title>
        <!--<link rel="stylesheet" type="text/css" href="views/bootstrap.min.css"/>-->

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