<?php

function write_announcement($teacherID,$t_loadID,$date_created,$announcement)
{

include "config/conn.php";
	
	$sql="INSERT INTO write_announcement VALUES('".$teacherID."','".$t_loadID."','".$date_created."','".$announcement."')";
						
	$announcement_inserted= mysqli_query($cxn,$sql);
	
	return $announcement_inserted;

}

function get_announcement($teacherID)
{
	include "config/conn.php";
	
	$sql="Select date_created, message from write_announcement where teacherID='".$teacherID."'";
	
	$post_announcement= mysqli_query($cxn,$sql);
	
	return $post_announcement;
	

}

/*
function clean_input($input){
$input=trim($input);
$input=stripslashes($input);
$input=htmlspecialchars($input);
return $input;
}
*/


?>	