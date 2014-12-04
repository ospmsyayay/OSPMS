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
															<textarea class="form-control counted" name="message" placeholder="Type in your announcement" 
															rows="5" style="margin-bottom:10px;"></textarea>
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
									
										<button type="button" class="btn btn-default btn-cons" onclick="window.location.href='index.php?r=lss&tr=ce'">Create Exercises</button>
										
										<br/>
										
										<input type="file" id="files" name="files[]" multiple />
										<output id="list"></output>
										
	
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
       
		<script src="views/jquery.min.js"></script>
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

<script>
  function handleFileSelect(evt) {
	var files = evt.target.files; // FileList object

	// files is a FileList of File objects. List some properties.
	var output = [];
	for (var i = 0, f; f = files[i]; i++) {
	  output.push('<li><strong>', escape(f.name), '</strong> (', f.type || 'n/a', ') - ',
				  f.size, ' bytes, last modified: ',
				  f.lastModifiedDate ? f.lastModifiedDate.toLocaleDateString() : 'n/a',
				  '</li>');
	}
	document.getElementById('list').innerHTML = '<ul>' + output.join('') + '</ul>';
  }

  document.getElementById('files').addEventListener('change', handleFileSelect, false);
</script>
				
	</body>
    

</html>