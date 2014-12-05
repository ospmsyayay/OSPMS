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
    
		<body onload="check()">
		<script>
		function check()
		{
		<?php
			if (isset($_GET['ss']))
			{								
		?>
				alert('Login Successful');
		<?php					
			}
			
			if (isset($_GET['w']))
			{
		?>
				alert('Message Posted');
		<?php	
			}

			if(isset($_GET['l']))
			{
		?>
			alert('Lecture File Saved');
		<?php 
			}
		?>	
		}
		</script>
		
<div class="header-wrapper">
	<?php include "views/parts/navi-bar-teacher.php";?>
</div><!--header-wrapper-->

<div class="viewport">
	<div class="content">
		<div class="container">
			<?php include "views/parts/side-bar-teacher.php";?>
			
			<div class="right-wrapper">
				<div class="right-column">
					<div id="postbox-container">
						<ul id="myTab" class="nav nav-tabs">
								<li class="active"><a href="#announcement" data-toggle="tab"><span class="glyphicon glyphicon-pencil"></span>Write Announcement</a></li>
								<li><a href="#lecture-exercises" data-toggle="tab"><span class="glyphicon glyphicon-upload"></span>Post Lecture Files </a></li>
								<li><a href="#create-exercises" data-toggle="tab" ><span class="glyphicon glyphicon-tasks"></span>Create Online Exercise</a></li>
								<li><a href="#attendance-sheet" data-toggle="tab">Attendance Sheet</a></li>
							  </ul>
							  <div id="myTabContent" class="tab-content">
								<div class="tab-pane fade in active" id="announcement">
							
									<div class="msgbox">
										<div class="row">
											<div class="col-md-12 col-md-12">
											
													<div class="panel-body">                
														<form accept-charset="UTF-8" action="" method="POST">
															<textarea class="form-control counted" name="message" placeholder="Type in your announcement" 
															rows="2" required="required"></textarea>
															<h6 class="pull-left" id="counter">320 characters remaining</h6>
															<button class="pull-right btn btn-info" type="submit"><span class="glyphicon glyphicon-send"></span>Post</button>
														</form>
														
													</div>
											
											</div>
										</div>
									</div>
								
								</div>
								<div class="tab-pane fade" id="lecture-exercises">
							
										<!--<button type="button" class="btn btn-default btn-cons" onclick="window.location.href='index.php?r=lss&tr=ce'">Create Exercises</button>-->
									
										<div class="msgbox">
											<div class="row">
												<div class="col-md-12 col-md-12">
													
														<div class="panel-body">       
															<form method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
																	<textarea class="form-control counted" name="lecture-caption" placeholder="Create Title/Caption" 
																				rows="2" required="required"></textarea>
																	
																	<br/>	
																	<input type="file" name="upload_lecture" id="upload_lecture" 
																	accept="*"/>

																	<button class="pull-right btn btn-info" type="submit"><span class="glyphicon glyphicon-send"></span>Post</button>
															</form>
														</div>
												
												</div>
											</div>
									
	
									</div>
								  
								</div>  
								
								<div class="tab-pane fade" id="create-exercises">
									<div class="msgbox">
											<div class="row">
												<div class="col-md-12 col-md-12">
													
														<div class="panel-body text-center "> 

																<div class="btn-group text-center " data-toggle="buttons-radio">
																  <button type="button" class="btn btn-primary onlineExerMenu" onclick="window.location.href='index.php?r=lss&tr=ce&cc=mic'"><span class="glyphicon glyphicon-edit"></span>Multiple Choice</button>
																  
																  <button type="button" class="btn btn-primary onlineExerMenu" onclick="window.location.href='index.php?r=lss&tr=ce&cc=te'"><span class="glyphicon glyphicon-edit"></span>True or False</button>
																  
																  <button type="button" class="btn btn-primary onlineExerMenu" onclick="window.location.href='index.php?r=lss&tr=ce&cc=me'"><span class="glyphicon glyphicon-edit"></span>Matching Type</button>
																  
																  <button type="button" class="btn btn-primary onlineExerMenu" onclick="window.location.href='index.php?r=lss&tr=ce&cc=fs'"><span class="glyphicon glyphicon-edit"></span>Fill in the blank</button>
																</div>

															</div>
												
												</div>
											</div>
									
	
									</div>							
								</div>	
								
								<div class="tab-pane fade" id="attendance-sheet">
									<!--<img src="views/res/attendance.png" class="img-rounded shadow attendance" />-->	
									<!--<iframe width="700" height="500" frameborder="0" scrolling="no" src="https://onedrive.live.com/embed?cid=D2A43DA0B1EE900A&resid=D2A43DA0B1EE900A%21117&authkey=AEkUlL1qQ2RPZH0&em=2&AllowTyping=True&ActiveCell='Nov'!D8&wdHideGridlines=True&wdHideHeaders=True&wdDownloadButton=True"></iframe>-->
								</div>
								
								<div class="tab-pane fade" id="photo">
								  
								</div>
								
								<div class="tab-pane fade" id="file">
								  
								</div>
								
							  </div>

					
					</div><!--postbox-container-->
					
					<div id="post-container">
						<div id="post-title">Latest Post</div>
						
					<?php 	
					foreach($display_message as $display)
					{
						echo '<div class="post-messages">
							<img src="views/res/teacher.jpg" class="img-rounded shadow post-message-img" />
							<p class="post-teacher">'.$display['message'].'</p>
							<p class="post-teacher">'.$display['date_created'].'</p>
						</div>';
						
					}	
					
					?>	
						<!--<div class="post-messages">
							<img src="views/res/teacher.jpg" class="img-rounded shadow post-message-img" />
							<img src="views/res/sample_lecture.jpg" class="img-rounded shadow sample_lecture" />
						</div>-->
						
					</div><!--post-container-->
						
				</div><!--right-column-->
			</div><!--right-wrapper-->	
			
		</div><!--container-->	
	
	
	</div><!--content-->
</div><!--viewport-->
       
        <script src="views/transition.js"></script>
        <script src="views/jquery.min.js"></script>
        <script src="views/bootstrap.min.js"></script>
		<script src="views/tab.js"></script>
		

		<script src="views/tooltip.js"></script>
		<script src="views/popover.js"></script>
		<script src="views/msgbox.js"></script>
		<script src="views/scripts.js"></script>
	
		<!-- JavaScript Test -->
<script>
$(function () {
  $('.js-popover').popover()
  $('.js-tooltip').tooltip()
})
</script>

				
	</body>
    

</html>