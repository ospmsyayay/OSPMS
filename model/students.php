<?php 

function get_studentsByTeacherIDSubjectID($teacherID,$subjectID)
{
	include "config/conn.php";
	
	$join="Select teacher_load.subjectID,subject_.subject_title from teacher_load left outer join subject_ on 
	teacher_load.subjectID=subject_.subjectID where teacherID = '".$teacherID."'";
				
	$join_result=mysqli_query($cxn,$join);
	
	return $join_result;
	

}



?>