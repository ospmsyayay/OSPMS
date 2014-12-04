<?php

function get_teacherload($teacherID){
include "config/conn.php";
	
	$sql="Select * from teacher_load where teacherID ='".$teacherID."'";
						
	$teacherload= mysqli_query($cxn,$sql);
	
	return $teacherload;

}

function get_subjectByTeacherID($teacherID)
{
	include "config/conn.php";
	
	$join="Select distinct teacher_load.subjectID,subject_.subject_title from teacher_load left outer join subject_ on 
	teacher_load.subjectID=subject_.subjectID where teacherID = '".$teacherID."'";
				
	$join_result=mysqli_query($cxn,$join);
	
	return $join_result;
	

}

function get_gradeByTeacherIDSubjectID($teacherID,$subjectID)
{
	include "config/conn.php";
	
	$join="Select distinct teacher_load.levelID,grade_level.level_description from teacher_load left outer join grade_level on 
	teacher_load.levelID=grade_level.levelID where teacherID = '".$teacherID."' and subjectID ='".$subjectID."'";
	
	$join_result=mysqli_query($cxn,$join);
	
	return $join_result;

}

function get_sectionByTeacherIDSubjectIDLevelID($teacherID,$subjectID,$levelID)
{
	include "config/conn.php";

	$join="Select distinct teacher_load.sectionID,section.sectionNo,section.section_name from teacher_load left outer join section on 
	teacher_load.sectionID=section.sectionID where teacherID = '".$teacherID."' and subjectID ='".$subjectID."' and levelID = '".$levelID."'";
	
	$join_result=mysqli_query($cxn,$join);
	
	return $join_result;
}
/*
function get_t_loadID($account_id)
{
	include "config/conn.php";
	
	$sql="";
	
	



}
*/
?>
