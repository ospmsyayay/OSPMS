<?php

session_start();

if(!isset($_GET['r']))
{
	login();
}


else
{
	switch($_GET['r'])
	{	
		case 'lss':
				if((!isset($_SESSION['username']))&&(!isset($_SESSION['user_type'])))
				{
					login();
				}
				else
				{
					switch($_SESSION['user_type'])
					{
						case 'admin':break;
						case 'teacher': 
										if(!isset($_GET['tr']))
										{
											tpage();break;
										}
										else{
											switch($_GET['tr'])
											{
												case 'trp':tpage_progress();break;
												case 'tre':tpage_encode();break;
												case 'ce':createexer(); break;
											}
										}
										break;
						case 'student': 
										if(!isset($_GET['st']))
										{
											spage();break;
										}
										else{
											switch($_GET['st'])
											{
											
											}
										}
										break;
						case 'parent': 
										if(!isset($_GET['pt']))
										{
											ppage();break;
										}
										else{
											switch($_GET['pt'])
											{
											
											}
										}
										break;
										
					}
					
				}
				break;
				
		case 'testing':testing();break;		
							
				default: header("Location: index.php");
			}
		}

function login()
{
		
	$username=$password=$user_type=$user_pass="";
    
include "model/login_model.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

		$username = $_POST['user'];
		$password = $_POST['pass'];
       
	   if (!empty($username)AND!empty($password))
	   {
		  $present=get_user($username);
		  $num_rows = mysqli_num_rows($present);
          
             if ($num_rows==0)
                { 
                    echo "<script>alert('username doesnt exist!')</script>";
                }
                 else
                {
                   while ($row = mysqli_fetch_array ($present))
		              {
			             $user_pass = $row ['password_'];
						 $user_type = $row ['user_type'];
						 $account_id= $row ['account_id'];
	                  }
		                  if ($password==$user_pass)
                            {
					           $_SESSION['username'] = $username;
							   $_SESSION['user_type'] = $user_type;
							   $_SESSION['account_id'] = $account_id;
							   
									$profilename=get_profilename($_SESSION['account_id']);
									 $profilename=mysqli_fetch_array($profilename);
									 
										$_SESSION['reg_lname']=$profilename['reg_lname'];
										$_SESSION['reg_fname']=$profilename['reg_fname'];
							
					           header("Location: index.php?r=lss&ss");
					           exit();
				            }
                            else
                            {
				                echo"<script>alert('Incorrect Password')</script>";
								
                            }
                }

			
        }  
        else
	   { 
		echo "<script>alert('Please enter username and password')</script>";
	   }
	
		
}

	include "views/HomePage.php";
}

function signup()
{

	include "views/Signup_Page.php";
}

function tpage()
{

include "model/announcement.php";
include "model/teacher_load.php";

	if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			
			$message=$_POST['message'];
			if(!empty($message))
			{
				//$t_loadID = get_t_loadID($_SESSION['account_id']);
				//$row = mysqli_fetch_array($t_loadID);
				//$_SESSION['loadID'] = $row[0];
				
				$_SESSION['date_created']= date("Y-m-d H:i:s");  
					
				$announcement_inserted=write_announcement($_SESSION['account_id'],1,
															$_SESSION['date_created'],$message);
				if($announcement_inserted)
				{
					//
				}
				header("Location: index.php?r=lss&w");
			}
			
		}
		
		
		
		$_SESSION['TeacherLoad']=array();
		
		$subjects=get_subjectByTeacherID($_SESSION['account_id']);
	
		while($travsubjects = mysqli_fetch_array($subjects))
		{
			
			$subjectIdPasser=array();
		
			$subjectIdPasser['subjectID']=$travsubjects['subjectID'];
			
			$subject_title = $travsubjects['subject_title'];
					
			$_SESSION['TeacherLoad'][$subject_title ]=null;
			
	
					$grades=get_gradeByTeacherIDSubjectID($_SESSION['account_id'],$subjectIdPasser['subjectID']);
								
						while($travgrades = mysqli_fetch_array($grades))
						{
							$levelIdPasser=array();
							
							$levelIdPasser['levelID']=$travgrades['levelID'];
							
							$level_description=$travgrades ['level_description'];
												
								$_SESSION['TeacherLoad'][$subject_title][$level_description]=null;
							
								
									$section=get_sectionByTeacherIDSubjectIDLevelID($_SESSION['account_id'],$subjectIdPasser['subjectID'],$levelIdPasser['levelID']);
											
											while($travsectionNo=mysqli_fetch_array($section))
											{
											
												$sectionNo=$travsectionNo['sectionNo'];
												$sectionName=$travsectionNo['section_name'];
												
												$_SESSION['TeacherLoad'][$subject_title][$level_description][$sectionNo][$sectionName]=null;
									
											
												
											}
					
						}
						
			
		
					

	
		}
		$display_message=array();
		$post_message=get_announcement($_SESSION['account_id']);
		
		while($post = mysqli_fetch_array($post_message))
		{
			$passer=array();
			
			$passer['date_created']=$post['date_created'];
			$passer['message']=$post['message'];
			
			$display_message[]=$passer;
		
		}
	include "views/Teachers_Page.php";	
	
}


	




function tpage_progress()
{
	include "views/Teachers_Page_Progress.php";
}

function tpage_encode()
{
	include "views/Teachers_Page_Encoding.php";
}

function spage()
{

	include "views/Student_Page.php";
}

function ppage()
{

	include "views/Parent_Page.php";
}

function createexer()
{

		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			
			if(isset($_GET['cc']))
			{
			
				switch($_GET['cc'])
				{
					case 'mic':multiplechoice();
								break;
					case 'te':trueorfalse();
								break;
					case 'me':matchingtype();
								break;
					case 'fs';fillintheblanks();
								break;
					default:
					break;
				
				}
				
			}
			
			
		
			
		}
	
	include "views/CreateExercise.php";
	
}

function multiplechoice()
{
	
	include "model/online_exercise.php";
		
		if(!isset($_SESSION['question_no']))
		{
			$_SESSION['question_no']=1;
		}
		
		$_SESSION['question_no']++;
		
		$question=$answer=$exerciseName="";
		$question = $_POST['question'];
		$answer = $_POST['answer'];
		$insert_success;
		$exerciseName=$_POST['exerciseName'];
		
		
		
		if(isset($_GET['n']))
		{
			
			if(!isset($_SESSION['exerciseName']) or empty($_SESSION['exerciseName']))
			{
				$_SESSION['exerciseName']=$exerciseName;
			}
			
			if(!isset($_SESSION['question_date_created']) or empty($_SESSION['question_date_created']))
			{
				$_SESSION['question_date_created']= date("Y-m-d H:i:s");  
				
			}
			
			
				$_SESSION['questionNo']=create_questions($question,$answer,$_SESSION['question_date_created']);
		
				foreach($_POST['choices'] as $choices)
				{
				  $insert_success=create_choices( $_SESSION['questionNo'],$choices,$_SESSION['question_date_created']);
				}
				
				if(!$insert_success)
				{
					//
				}
				
				
				
				header("Location:index.php?r=lss&tr=ce&cc=mic&nq");
				exit;
			
	
		}							
		
		if(isset($_GET['x']))
		{
		
			$questions_discarded=discard_questions($_SESSION['question_date_created']);
			if(!$questions_discarded)
			{
				//
			}
			$_SESSION['questionNo']=null;
			$_SESSION['question_date_created']=null;
			$_SESSION['exerciseName']=null;
			$_SESSION['question_no']=null;
			$_SESSION['question_no']=1;
			header("Location:index.php?r=lss&tr=ce&rm");
			exit;
			
		}
		
		if(isset($_GET['s']))
		{	
		
		if(!empty($question))
		{
				
				$_SESSION['questionNo']=create_questions($question,$answer,$_SESSION['question_date_created']);
		
				foreach($_POST['choices'] as $choices)
				{
				  $insert_success=create_choices( $_SESSION['questionNo'],$choices,$_SESSION['question_date_created']);
				}
				
				if(!$insert_success)
				{
					//
				}
			
		}
		
				$_SESSION['date_created']= date("Y-m-d H:i:s"); 
				
				$multi_created=create_exercise($_SESSION['exerciseName'],'multi',$_SESSION['date_created'],$_SESSION['question_date_created']);
				if(!$multi_created)
				{
					//
				}
				
				$_SESSION['questionNo']=null;
				$_SESSION['question_date_created']=null;
				$_SESSION['date_created']=null;
				$_SESSION['exerciseName']=null;
				$_SESSION['question_no']=null;
				$_SESSION['question_no']=1;
				header("Location:index.php?r=lss&tr=ce&ms");
				exit;
			
		}
	
		
}

function trueorfalse()
{
	
	include "model/online_exercise.php";
		
		
		if(!isset($_SESSION['question_no']))
		{
			$_SESSION['question_no']=1;
		}
		
		$_SESSION['question_no']++;
		
		$question=$answer=$exerciseName="";
		$question = $_POST['question'];
		$answer = $_POST['answer'];
		$insert_success;
		$exerciseName=$_POST['exerciseName'];
		
		
		
		if(isset($_GET['n']))
		{
			
			if(!isset($_SESSION['exerciseName']) or empty($_SESSION['exerciseName']))
			{
				$_SESSION['exerciseName']=$exerciseName;
			}
			
			if(!isset($_SESSION['question_date_created']) or empty($_SESSION['question_date_created']))
			{
				$_SESSION['question_date_created']= date("Y-m-d H:i:s");  
				
			}
			
			
				$_SESSION['questionNo']=create_questions($question,$answer,$_SESSION['question_date_created']);
		
				foreach($_POST['choices'] as $choices)
				{
				  $insert_success=create_choices( $_SESSION['questionNo'],$choices,$_SESSION['question_date_created']);
				}
				
				if(!$insert_success)
				{
					//
				}
				
				header("Location:index.php?r=lss&tr=ce&cc=te&nq");
				exit;
				
		}							
		
		if(isset($_GET['x']))
		{
		
			$questions_discarded=discard_questions($_SESSION['question_date_created']);
			if(!$questions_discarded)
			{
				//
			}
			$_SESSION['questionNo']=null;
			$_SESSION['question_date_created']=null;
			$_SESSION['exerciseName']=null;
			$_SESSION['question_no']=null;
			$_SESSION['question_no']=1;
			header("Location:index.php?r=lss&tr=ce&rm");
			exit;
			
		}
		
		if(isset($_GET['s']))
		{	
		
		if(!empty($question))
		{
			
				$_SESSION['questionNo']=create_questions($question,$answer,$_SESSION['question_date_created']);
		
				foreach($_POST['choices'] as $choices)
				{
				  $insert_success=create_choices( $_SESSION['questionNo'],$choices,$_SESSION['question_date_created']);
				}
				
				if(!$insert_success)
				{
					//
				}
			
		}
		
				$_SESSION['date_created']= date("Y-m-d H:i:s"); 
				
				$multi_created=create_exercise($_SESSION['exerciseName'],'multi',$_SESSION['date_created'],$_SESSION['question_date_created']);
				if(!$multi_created)
				{
					//
				}
				
				$_SESSION['questionNo']=null;
				$_SESSION['question_date_created']=null;
				$_SESSION['date_created']=null;
				$_SESSION['exerciseName']=null;
				$_SESSION['question_no']=null;
				$_SESSION['question_no']=1;
				header("Location:index.php?r=lss&tr=ce&ts");
				exit;
			
		}
	
		
}

function matchingtype()
{
	
	include "model/online_exercise.php";
		
		if(!isset($_SESSION['question_no']))
		{
			$_SESSION['question_no']=1;
		}
		
		$_SESSION['question_no']++;
		
		$question=$answer=$exerciseName="";
		$question = $_POST['question'];
		$answer = $_POST['answer'];
		$insert_success;
		$exerciseName=$_POST['exerciseName'];
		
		
		
		if(isset($_GET['n']))
		{
			
			if(!isset($_SESSION['exerciseName']) or empty($_SESSION['exerciseName']))
			{
				$_SESSION['exerciseName']=$exerciseName;
			}
			
			if(!isset($_SESSION['question_date_created']) or empty($_SESSION['question_date_created']))
			{
				$_SESSION['question_date_created']= date("Y-m-d H:i:s");  
				
			}
			
			
				$_SESSION['questionNo']=create_questions($question,$answer,$_SESSION['question_date_created']);
		
				foreach($_POST['choices'] as $choices)
				{
				  $insert_success=create_choices( $_SESSION['questionNo'],$choices,$_SESSION['question_date_created']);
				}
				
				if(!$insert_success)
				{
					//
				}
				
				header("Location:index.php?r=lss&tr=ce&cc=me&nq");

				exit;
			
	
		}							
		
		if(isset($_GET['x']))
		{
		
			$questions_discarded=discard_questions($_SESSION['question_date_created']);
			if(!$questions_discarded)
			{
				//
			}
			$_SESSION['questionNo']=null;
			$_SESSION['question_date_created']=null;
			$_SESSION['exerciseName']=null;
			$_SESSION['question_no']=null;
			$_SESSION['question_no']=1;
			header("Location:index.php?r=lss&tr=ce&rm");
			exit;
			
		}
		
		if(isset($_GET['s']))
		{	
		
		if(!empty($question))
		{
				
				$_SESSION['questionNo']=create_questions($question,$answer,$_SESSION['question_date_created']);
		
				foreach($_POST['choices'] as $choices)
				{
				  $insert_success=create_choices( $_SESSION['questionNo'],$choices,$_SESSION['question_date_created']);
				}
				
				if(!$insert_success)
				{
					//
				}
			
		}
		
				$_SESSION['date_created']= date("Y-m-d H:i:s"); 
				
				$multi_created=create_exercise($_SESSION['exerciseName'],'multi',$_SESSION['date_created'],$_SESSION['question_date_created']);
				if(!$multi_created)
				{
					//
				}
				
				$_SESSION['questionNo']=null;
				$_SESSION['question_date_created']=null;
				$_SESSION['date_created']=null;
				$_SESSION['exerciseName']=null;
				$_SESSION['question_no']=null;
				$_SESSION['question_no']=1;
				header("Location:index.php?r=lss&tr=ce&mts");
				exit;
			
		}
	
		
}

function fillintheblanks()
{
	
	include "model/online_exercise.php";
		
		if(!isset($_SESSION['question_no']))
		{
			$_SESSION['question_no']=1;
		}
		
		$_SESSION['question_no']++;
		
		$question=$answer=$exerciseName="";
		$question = $_POST['question'];
		$answer = $_POST['answer'];
		$insert_success;
		$exerciseName=$_POST['exerciseName'];
		
		
		
		if(isset($_GET['n']))
		{
			
			if(!isset($_SESSION['exerciseName']) or empty($_SESSION['exerciseName']))
			{
				$_SESSION['exerciseName']=$exerciseName;
			}
			
			if(!isset($_SESSION['questino_date_created']) or empty($_SESSION['question_date_created']))
			{
				$_SESSION['question_date_created']= date("Y-m-d H:i:s");  
				
			}
			
			
				$_SESSION['questionNo']=create_questions($question,$answer,$_SESSION['question_date_created']);
		
				foreach($_POST['choices'] as $choices)
				{
				  $insert_success=create_choices( $_SESSION['questionNo'],$choices,$_SESSION['question_date_created']);
				}
				
				if(!$insert_success)
				{
					//
				}
			
				header("Location:index.php?r=lss&tr=ce&cc=fs&nq");
				exit;
			
	
		}							
		
		if(isset($_GET['x']))
		{
		
			$questions_discarded=discard_questions($_SESSION['question_date_created']);
			if(!$questions_discarded)
			{
				//
			}
			$_SESSION['questionNo']=null;
			$_SESSION['question_date_created']=null;
			$_SESSION['exerciseName']=null;
			$_SESSION['question_no']=null;
			$_SESSION['question_no']=1;
			header("Location:index.php?r=lss&tr=ce&rm");
			exit;
			
		}
		
		if(isset($_GET['s']))
		{	
		
		if(!empty($question))
		{
			
				$_SESSION['questionNo']=create_questions($question,$answer,$_SESSION['question_date_created']);
		
				foreach($_POST['choices'] as $choices)
				{
				  $insert_success=create_choices( $_SESSION['questionNo'],$choices,$_SESSION['question_date_created']);
				}
				
				if(!$insert_success)
				{
					//
				}
			
		}
		
				$_SESSION['date_created']= date("Y-m-d H:i:s"); 
				
				$multi_created=create_exercise($_SESSION['exerciseName'],'multi',$_SESSION['date_created'],$_SESSION['question_date_created']);
				if(!$multi_created)
				{
					//
				}
				
				$_SESSION['questionNo']=null;
				$_SESSION['question_date_created']=null;
				$_SESSION['date_created']=null;
				$_SESSION['exerciseName']=null;
				$_SESSION['question_no']=null;
				$_SESSION['question_no']=1;
				header("Location:index.php?r=lss&tr=ce&fibs");
				exit;
			
		}
	
		
}

function testing()
{

	include "views/TESTING/Admin_Page.php";
}
/*
function logout()
{
    session_destroy();
    homepage();
    
}
*/
?>