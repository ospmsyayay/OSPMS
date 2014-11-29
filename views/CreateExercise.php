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
		
		
		if(isset($_GET['ms']))
			{
		?>
				alert('Multiple Choice Saved');
		<?php
				
			}
			if(isset($_GET['ts']))
			{
		?>	
				alert('True or False Saved');
		<?php 
			}
			
			if(isset($_GET['mts']))
			{
			
		?>	
				alert('Matching Type Saved');
		<?php 
			}
			
			if(isset($_GET['fibs']))
			{
		?>		
			alert('Fill in the Blanks Saved');
			
		<?php 
			}
		
			if (isset($_GET['rm']))
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
		<div class="center-exercise">
				<form method="post" action="" role="form">
					
						<label>Exercise Name:</label>
						<br/>
						<input placeholder="Create Exercise Name" name="exerciseName" class="exerciseName" type="text" 
						value=""/>
						<br/>
						<br/>
						<br/>
						
						<label>Question </label>
						<?php 
						//echo $_SESSION['question_no'];
					?>:
						<br/>
						<input placeholder="Question" name="question" class="questionModel" type="text" />
						<br/>
						<br/>
						<br/>
					<label>Choices:</label>
					<?php 
					$rows=4;
					$counter=0;
					while($counter<4)
					{
					?>
						<br/>
						<input placeholder="Choices" name="choices[]" class="choicesModel" type="text" />
						<br/>
						<br/>
					
					<?php 
					$counter++;
					}
					?>
						<br/>
						<label>Correct Answer:
						<br/>
						<input placeholder="Correct Answer" name="answer" class="correctModel" type="text" /></label>
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
		<div class="center-exercise">
					
					<form method="post" action="" role="form">
							<label>Exercise Name:</label>
						<br/>
						<input placeholder="Create Exercise Name" name="exerciseName" class="exerciseName" type="text" 
						value=""/>
						<br/>
						<br/>
						<br/>
						
						<label>Question </label>
						<?php 
						//echo $_SESSION['question_no'];
					?>:
						<br/>
						<input placeholder="Question" name="question" class="questionModel" type="text" />
						<br/>
						<br/>
						<br/>
					<label>Choices:</label>
					<?php 
					$rows=2;
					$counter=0;
					$value="";
					while($counter<2)
					{
						if($counter==0)
						{
							$value="true";
							
						}
						else
						{
							$value="false";
						}
					?>
						<br/>
						<input placeholder="Choices" name="choices[]" class="choicesModel" type="text" value="<?php $value; ?>" readonly="true"/>
						<br/>
						<br/>
					
					<?php 
					$counter++;
					}
					?>
						<br/>
						<label>Correct Answer:
						<br/>
						<input placeholder="Correct Answer" name="answer" class="correctModel" type="text" /></label>
						<br/>
						<div class="multi-holder">
					
						<button type="submit" class="btn btn-fresh text-uppercase" formaction="index.php?r=lss&tr=ce&cc=te&n">Add Question +</button>
					<?php
					if(isset($_GET['nq']))
					{
					?>
						<button type="submit" class="btn btn-sky text-uppercase" formaction="index.php?r=lss&tr=ce&cc=te&s">Save Exercise</button>
						<button type="submit" class="btn btn-danger text-uppercase" formaction="index.php?r=lss&tr=ce&cc=te&x">Discard Exercise</button>
					<?php
					}
					?>
					</div>	
				</form>		
					
		</div>
		
		<?php
				}
				
			if($_GET['cc']=="me")
				{			
		
		?>
		<hr/>
		<div class="center-exercise">
					
					<form method="post" action="" role="form">
							<label>Exercise Name:</label>
						<br/>
						<input placeholder="Create Exercise Name" name="exerciseName" class="exerciseName" type="text" 
						value=""/>
						<br/>
						<br/>
						<br/>
						
						<label>Question </label>
						<?php 
						//echo $_SESSION['question_no'];
					?>:
						<br/>
						<input placeholder="Question" name="question" class="questionModel" type="text" />
						<br/>
						<br/>
						<br/>
					<label>Choices:</label>
					<?php 
					$rows=1;
					$counter=0;
					while($counter<1)
					{
					?>
						<br/>
						<input placeholder="Choices" name="choices[]" class="choicesModel" type="text" />
						<br/>
						<br/>
					
					<?php 
					$counter++;
					}
					?>
						<br/>
						<label>Correct Answer:
						<br/>
						<input placeholder="Correct Answer" name="answer" class="correctModel" type="text" /></label>
						<br/>
						<div class="multi-holder">
					
						<button type="submit" class="btn btn-fresh text-uppercase" formaction="index.php?r=lss&tr=ce&cc=me&n">Add Question +</button>
					<?php
					if(isset($_GET['nq']))
					{
					?>
						<button type="submit" class="btn btn-sky text-uppercase" formaction="index.php?r=lss&tr=ce&cc=me&s">Save Exercise</button>
						<button type="submit" class="btn btn-danger text-uppercase" formaction="index.php?r=lss&tr=ce&cc=me&x">Discard Exercise</button>
					<?php
					}
					?>
					</div>	
				</form>					
					
		</div>
		
		<?php
				}
				

			if($_GET['cc']=="fs")
				{			
		
		?>
		<hr/>
		<div class="center-exercise">
					
					<form method="post" action="" role="form">
							<label>Exercise Name:</label>
						<br/>
						<input placeholder="Create Exercise Name" name="exerciseName" class="exerciseName" type="text" 
						value=""/>
						<br/>
						<br/>
						<br/>
						
						<label>Question </label>
						<?php 
						//echo $_SESSION['question_no'];
					?>:
						<br/>
						<input placeholder="Question" name="question" class="questionModel" type="text" />
						<br/>
						<br/>
						<br/>
					<label>Choices:</label>
					<?php 
					$rows=1;
					$counter=0;
					while($counter<1)
					{
					?>
						<br/>
						<input placeholder="Choices" name="choices[]" class="choicesModel" type="text" />
						<br/>
						<br/>
					
					<?php 
					$counter++;
					}
					?>
						<br/>
						<label>Correct Answer:
						<br/>
						<input placeholder="Correct Answer" name="answer" class="correctModel" type="text" /></label>
						<br/>
						<div class="multi-holder">
					
						<button type="submit" class="btn btn-fresh text-uppercase" formaction="index.php?r=lss&tr=ce&cc=fs&n">Add Question +</button>
					<?php
					if(isset($_GET['nq']))
					{
					?>
						<button type="submit" class="btn btn-sky text-uppercase" formaction="index.php?r=lss&tr=ce&cc=fs&s">Save Exercise</button>
						<button type="submit" class="btn btn-danger text-uppercase" formaction="index.php?r=lss&tr=ce&cc=fs&x">Discard Exercise</button>
					<?php
					}
					?>
					</div>	
				</form>				
					
		</div>
		
		<?php
				}
				
			}
		?>
		
		
		
<script src="jquery-1.11.1.js"></script>
<script src="views/events.js"></script>

	</body>
</html>