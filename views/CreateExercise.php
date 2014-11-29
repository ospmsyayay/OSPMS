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
		
		
		if(isset($_GET['os']))
			{
		?>
				alert('Multiple Choice Saved');
		<?php
				
			}
			
			else if (isset($_GET['rm']))
			{
		?>
				alert('Multiple Choice Discarded!');
		<?php		
			}
		?>
		}
		</script>
	
		<div class="btn-group" id="createExerMenuHandler" data-toggle="buttons-radio">
		  <button type="button" class="btn btn-primary onlineExerMenu" onclick="window.location.href='index.php?r=lss&tr=ce&cc=mic'">Multiple Choice</button>
		  
		  <button type="button" class="btn btn-primary onlineExerMenu" onclick="window.location.href='index.php?r=lss&tr=ce&cc=te'">True or False</button>
		  
		  <button type="button" class="btn btn-primary onlineExerMenu" onclick="window.location.href='index.php?r=lss&tr=ce&cc=me'">Matching Type</button>
		  
		  <button type="button" class="btn btn-primary onlineExerMenu" onclick="window.location.href='index.php?r=lss&tr=ce&cc=fs'">Fill in the blank</button>
		</div>
		
		<?php
			
			if (isset($_GET['cc']))
			{
				if($_GET['cc']=="mic")
				{
					
		?>
		<hr/>
		<div id="choice">
				<form method="post" action="" role="form">
					
				
					Question <?php 
				
						echo $_SESSION['question_no'];
		
					?>:

					<br/>
					<input placeholder="Question" name="question" class="questionModel" type="text" />
					<br/>
					<br/>
					<br/>
					
					Choices:
					<?php 
					$rows=5;
					$counter=0;
					while($counter<5)
					{
					?>
					<br/>
					<br/>
					<input placeholder="Choices" name="choices[]" class="choicesModel" type="text" />
					<br/>
					
					<?php 
					$counter++;
					}
					?>

					<br/>
					<br/>Correct Answer:
					<br/>
					<input placeholder="Correct Answer" name="answer" class="correctModel" type="text" />
					<br/>
					
					<br/>
					<br/>
					<div class="multi-holder">
					
					<button type="submit" class="btn btn-fresh text-uppercase" formaction="index.php?r=lss&tr=ce&cc=mic&n">Add Question +</button>
					<?php
					if(isset($_GET['nq']))
					{
					?>
						<button type="submit" class="btn btn-sky text-uppercase" formaction="index.php?r=lss&tr=ce&cc=mic&s">Save Exercise</button>
						<button type="submit" class="btn btn-danger text-uppercase" formaction="index.php?r=lss&tr=ce&cc=mic&x">Discard Exercise</button>
					<?php
					}
					?>
					</div>	
				</form>	
		</div>
		
		<?php 
				}
			
			if($_GET['cc']=="te")
				{			
		
		?>
		<hr/>
		<div id="trueOrFalse">
					
					Question 1:
					<br/>
					<input placeholder="Question1" name="question[]" class="questionModel" type="text" />
					<br/>
					<br/>
					
					<br/>
					<br/>Correct Answer:
					<br/>
					<input placeholder="Correct Answer" name="question[]" class="questionModel" type="text" />				
					
		</div>
		
		<?php
				}
				
			if($_GET['cc']=="fs")
				{			
		
		?>
		<hr/>
		<div id="fill">
					
					Question 1:
					<br/>
					<input placeholder="Question1" name="question[]" class="questionModel" type="text" />
					<br/>
					<br/>
					<br/>Correct Answer:
					<br/>
					<input placeholder="Correct Answer" name="question[]" class="questionModel" type="text" />				
					
		</div>
		
		<?php
				}
				

			if($_GET['cc']=="me")
				{			
		
		?>
		<hr/>
		<div id="matching">
					
					Question :
					<br/>
					<input placeholder="Question1" name="question[]" class="questionModel" type="text" />
					<br/>
					<br/>
					<br/>Correct Answer:
					<br/>
					<input placeholder="Correct Answer" name="question[]" class="questionModel" type="text" />				
					
		</div>
		
		<?php
				}
				
			}
		?>
		
		
		
<script src="jquery-1.11.1.js"></script>
<script src="views/events.js"></script>

	</body>
</html>