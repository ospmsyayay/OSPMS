<?php

function insert_quiz($question, $answer){
		include "config/conn.php";
		
		$sql="INSERT INTO ol_exer_multiple_choice
			VALUES('0','".$question."','".$answer."')";
						
		$successful= mysqli_query($cxn,$sql);
		
		return $successful;
	
 	
}

function get_questionID($question, $answer)
{
include "config/conn.php";

$sql="Select oemc_ID from ol_exer_multiple_choice where oemc_question = '" .$question. "' AND oemc_correct = '". $answer."'";

$fetchID = mysqli_query($cxn,$sql);

	return $fetchID;
}


function insert_choices( $questionID,$choices)
{
include "config/conn.php";

$sql="INSERT INTO oemc_choice VALUES('0','".$questionID."','".$choices."')";
	
$insert_choices = mysqli_query($cxn,$sql);
	
	return $insert_choices;  	

}

?>	