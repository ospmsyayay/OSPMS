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
					
					Question 1:
					<br/>
					<input placeholder="Question1" name="question[]" class="questionModel" type="text" />
					<br/>
					
					
		</div>
		
		<?php 
				}
			}								
		
		?>		
				
			<!--		
					Question 2:<BR><TEXTAREA cols=64 name=q2 wrap=physical>Do I have to fill in all the choices?</TEXTAREA>
					<OL type=a>
					  <LI><INPUT name=c2a size=60 value=Yes.>
					  <LI><INPUT name=c2b size=60 value=No.>
					  <LI><INPUT name=c2c size=60>
					  <LI><INPUT name=c2d size=60>
					  <LI><INPUT name=c2e size=60></LI></OL>Answer: <INPUT name=a2 value=b> 
					<HR>
					Question 3:<BR><TEXTAREA cols=64 name=q3 wrap=physical></TEXTAREA>
					<OL type=a>
					  <LI><INPUT name=c3a size=60>
					  <LI><INPUT name=c3b size=60>
					  <LI><INPUT name=c3c size=60>
					  <LI><INPUT name=c3d size=60>
					  <LI><INPUT name=c3e size=60></LI></OL>Answer: <INPUT name=a3> 
					<HR>
					Question 4:<BR><TEXTAREA cols=64 name=q4 wrap=physical></TEXTAREA>
					<OL type=a>
					  <LI><INPUT name=c4a size=60>
					  <LI><INPUT name=c4b size=60>
					  <LI><INPUT name=c4c size=60>
					  <LI><INPUT name=c4d size=60>
					  <LI><INPUT name=c4e size=60></LI></OL>Answer: <INPUT name=a4> 
					<HR>
					Question 5:<BR><TEXTAREA cols=64 name=q5 wrap=physical></TEXTAREA>
					<OL type=a>
					  <LI><INPUT name=c5a size=60>
					  <LI><INPUT name=c5b size=60>
					  <LI><INPUT name=c5c size=60>
					  <LI><INPUT name=c5d size=60>
					  <LI><INPUT name=c5e size=60></LI></OL>Answer: <INPUT name=a5> 
					<HR>
					Question 6:<BR><TEXTAREA cols=64 name=q6 wrap=physical></TEXTAREA>
					<OL type=a>
					  <LI><INPUT name=c6a size=60>
					  <LI><INPUT name=c6b size=60>
					  <LI><INPUT name=c6c size=60>
					  <LI><INPUT name=c6d size=60>
					  <LI><INPUT name=c6e size=60></LI></OL>Answer: <INPUT name=a6> 
					<HR>
					Question 7:<BR><TEXTAREA cols=64 name=q7 wrap=physical></TEXTAREA>
					<OL type=a>
					  <LI><INPUT name=c7a size=60>
					  <LI><INPUT name=c7b size=60>
					  <LI><INPUT name=c7c size=60>
					  <LI><INPUT name=c7d size=60>
					  <LI><INPUT name=c7e size=60></LI></OL>Answer: <INPUT name=a7> 
					<HR>
					Question 8:<BR><TEXTAREA cols=64 name=q8 wrap=physical></TEXTAREA>
					<OL type=a>
					  <LI><INPUT name=c8a size=60>
					  <LI><INPUT name=c8b size=60>
					  <LI><INPUT name=c8c size=60>
					  <LI><INPUT name=c8d size=60>
					  <LI><INPUT name=c8e size=60></LI></OL>Answer: <INPUT name=a8> 
					<HR>
					Question 9:<BR><TEXTAREA cols=64 name=q9 wrap=physical></TEXTAREA>
					<OL type=a>
					  <LI><INPUT name=c9a size=60>
					  <LI><INPUT name=c9b size=60>
					  <LI><INPUT name=c9c size=60>
					  <LI><INPUT name=c9d size=60>
					  <LI><INPUT name=c9e size=60></LI></OL>Answer: <INPUT name=a9> 
					<HR>
					Question 10:<BR><TEXTAREA cols=64 name=q10 wrap=physical></TEXTAREA>
					<OL type=a>
					  <LI><INPUT name=c10a size=60>
					  <LI><INPUT name=c10b size=60>
					  <LI><INPUT name=c10c size=60>
					  <LI><INPUT name=c10d size=60>
					  <LI><INPUT name=c10e size=60></LI></OL>Answer: <INPUT name=a10> 
					<HR>
					Question 11:<BR><TEXTAREA cols=64 name=q11 wrap=physical></TEXTAREA>
					<OL type=a>
					  <LI><INPUT name=c11a size=60>
					  <LI><INPUT name=c11b size=60>
					  <LI><INPUT name=c11c size=60>
					  <LI><INPUT name=c11d size=60>
					  <LI><INPUT name=c11e size=60></LI></OL>Answer: <INPUT name=a11> 
					<HR>
					Question 12:<BR><TEXTAREA cols=64 name=q12 wrap=physical></TEXTAREA>
					<OL type=a>
					  <LI><INPUT name=c12a size=60>
					  <LI><INPUT name=c12b size=60>
					  <LI><INPUT name=c12c size=60>
					  <LI><INPUT name=c12d size=60>
					  <LI><INPUT name=c12e size=60></LI></OL>Answer: <INPUT name=a12> 
					<HR>
					Question 13:<BR><TEXTAREA cols=64 name=q13 wrap=physical></TEXTAREA>
					<OL type=a>
					  <LI><INPUT name=c13a size=60>
					  <LI><INPUT name=c13b size=60>
					  <LI><INPUT name=c13c size=60>
					  <LI><INPUT name=c13d size=60>
					  <LI><INPUT name=c13e size=60></LI></OL>Answer: <INPUT name=a13> 
					<HR>
					Question 14:<BR><TEXTAREA cols=64 name=q14 wrap=physical></TEXTAREA>
					<OL type=a>
					  <LI><INPUT name=c14a size=60>
					  <LI><INPUT name=c14b size=60>
					  <LI><INPUT name=c14c size=60>
					  <LI><INPUT name=c14d size=60>
					  <LI><INPUT name=c14e size=60></LI></OL>Answer: <INPUT name=a14> 
					<HR>
					Question 15:<BR><TEXTAREA cols=64 name=q15 wrap=physical></TEXTAREA>
					<OL type=a>
					  <LI><INPUT name=c15a size=60>
					  <LI><INPUT name=c15b size=60>
					  <LI><INPUT name=c15c size=60>
					  <LI><INPUT name=c15d size=60>
					  <LI><INPUT name=c15e size=60></LI></OL>Answer: <INPUT name=a15> 
					<HR>
					Question 16:<BR><TEXTAREA cols=64 name=q16 wrap=physical></TEXTAREA>
					<OL type=a>
					  <LI><INPUT name=c16a size=60>
					  <LI><INPUT name=c16b size=60>
					  <LI><INPUT name=c16c size=60>
					  <LI><INPUT name=c16d size=60>
					  <LI><INPUT name=c16e size=60></LI></OL>Answer: <INPUT name=a16> 
					<HR>
					Question 17:<BR><TEXTAREA cols=64 name=q17 wrap=physical></TEXTAREA>
					<OL type=a>
					  <LI><INPUT name=c17a size=60>
					  <LI><INPUT name=c17b size=60>
					  <LI><INPUT name=c17c size=60>
					  <LI><INPUT name=c17d size=60>
					  <LI><INPUT name=c17e size=60></LI></OL>Answer: <INPUT name=a17> 
					<HR>
					Question 18:<BR><TEXTAREA cols=64 name=q18 wrap=physical></TEXTAREA>
					<OL type=a>
					  <LI><INPUT name=c18a size=60>
					  <LI><INPUT name=c18b size=60>
					  <LI><INPUT name=c18c size=60>
					  <LI><INPUT name=c18d size=60>
					  <LI><INPUT name=c18e size=60></LI></OL>Answer: <INPUT name=a18> 
					<HR>
					Question 19:<BR><TEXTAREA cols=64 name=q19 wrap=physical></TEXTAREA>
					<OL type=a>
					  <LI><INPUT name=c19a size=60>
					  <LI><INPUT name=c19b size=60>
					  <LI><INPUT name=c19c size=60>
					  <LI><INPUT name=c19d size=60>
					  <LI><INPUT name=c19e size=60></LI></OL>Answer: <INPUT name=a19> 
					<HR>
					Question 20:<BR><TEXTAREA cols=64 name=q20 wrap=physical></TEXTAREA>
					<OL type=a>
					  <LI><INPUT name=c20a size=60>
					  <LI><INPUT name=c20b size=60>
					  <LI><INPUT name=c20c size=60>
					  <LI><INPUT name=c20d size=60>
					  <LI><INPUT name=c20e size=60></LI></OL>Answer: <INPUT name=a20> 
					<HR>
	-->
<script src="views/multiple-choice.js"></script>
	</body>
</html>