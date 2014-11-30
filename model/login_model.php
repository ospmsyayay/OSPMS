<?php

function get_user($username){
include "config/conn.php";

 $result = mysqli_query ($cxn,"SELECT * FROM create_account  WHERE username_='".$username."'") ;
  
 return $result;

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