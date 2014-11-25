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
			if (isset($_GET['os']))
			{								
		?>
				alert('Multiple Choice Saved');
		<?php					
			}
		?>
		}
		</script>
	
		<div class="btn-group" id="createExerMenuHandler" data-toggle="buttons-radio">
		  <button type="button" class="btn btn-primary onlineExerMenu" onclick="window.location.href='index.php?request=createexer&chc=multi'">Multiple Choice</button>
		  
		  <button type="button" class="btn btn-primary onlineExerMenu" onclick="window.location.href='index.php?request=createexer&chc=tr'">True or False</button>
		  
		  <button type="button" class="btn btn-primary onlineExerMenu" onclick="window.location.href='index.php?request=createexer&chc=mat'">Matching Type</button>
		  
		  <button type="button" class="btn btn-primary onlineExerMenu" onclick="window.location.href='index.php?request=createexer&chc=fill'">Fill in the blank</button>
		</div>
		
		<?php
			
			if (isset($_GET['chc']))
			{
				if($_GET['chc']=="multi")
				{
		?>
		<hr/>
		<div id="choice">
				<form method="post" action="" role="form">	
					Question 1:
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
					<button type="submit" class="btn btn-fresh text-uppercase" onclick="window.location.href='index.php?request=createexer'">
					Create Multiple Choice</button>
				</form>	
		</div>
		
		<?php 
				}
			
			if($_GET['chc']=="tr")
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
				
			if($_GET['chc']=="fill")
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
				

			if($_GET['chc']=="mat")
				{			
		
		?>
		<hr/>
		<div id="matching">
					
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
				
			}
		?>
		
		
		
<script src="jquery-1.11.1.js"></script>
<script type="views/events.js"></script>
	</body>
</html>