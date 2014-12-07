<?php
function insert_upload($teacherID,$t_loadID,$date_created,$file_caption,$filename)
{
	include "config/conn.php";


	$sql = "INSERT INTO post_lecture VALUES('".$teacherID."','".$t_loadID."', '".$date_created."' , '".$file_caption."' , '".'model/uploaded_files/'."','".$filename."')";
	
	$lecture_inserted = mysqli_query($cxn,$sql);	
	return $lecture_inserted;
}


?>