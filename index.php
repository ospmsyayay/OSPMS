<?php

session_start();

if(!isset($_GET['request']))
{
	login();
}


else
{
	switch($_GET['request'])
	{
		case 'signup' : signup(); break;
		case 'tpage':tpage();break;
		case 'tpage_progress':tpage_progress();break;
		case 'tpage_encode':tpage_encode();break;
		case 'spage':spage();break;
		case 'ppage':ppage();break;
		case 'createexer':createexer(); break;	
		//case 'login': login();break;
		case 'logSuccess':
								if((!isset($_SESSION['username']))&&(!isset($_SESSION['user_type']))){
									login();
								}else{
									switch($_SESSION['user_type'])
									{
										case 'admin':break;
										case 'teacher': tpage();break;
										case 'student': spage();break;
										case 'parent': ppage();break;
									}
								}
								break;
								
					
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
	                  }
		                  if ($password==$user_pass)
                            {
					           $_SESSION['username'] = $username;
							   $_SESSION['user_type'] = $user_type;
					           header("Location: index.php?request=logSuccess&prompt=success");
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
			
			
			include "model/online_exercise.php";
			
			$question=$answer=$fetchID="";
			$question = $_POST['question'];
			$answer = $_POST['answer'];
			
			$insertok=insert_quiz($question, $answer);
	
			$fetchID = get_questionID($question, $answer);
			$row = mysqli_fetch_row($fetchID);
					
			$convertFetchID = $row[0];
			
			foreach($_POST['choices'] as $choices)
			{
			  $insert_success=insert_choices( $convertFetchID,$choices);
			  
			  if($insert_success)
			  {
				header("Location:index.php?request=createexer&os");
			  }
			}
			
			
		}

	include "views/CreateExercise.php";
	
}

/*
function logout()
{
    session_destroy();
    homepage();
    
}

function homepage()
{

	include "views/HomePage.php";
}

function customerLogin()
{

	
	$username=$password=$customer_user=$customer_pass="";
    
include "model/Customer_Login_Check_model.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

		$username = $_POST['user'];
		$password = $_POST['pass'];
        
	   if (!empty($username)AND!empty($password))
	   {
		  $present=find_customer($username);
		  $num_rows = mysqli_num_rows($present);
            
             if ($num_rows!=0)
                {
                    while ($row = mysqli_fetch_array ($present))
		              {
			             $customer_pass = $row ['customer_password'];
	                  }
		                  if ($password==$customer_pass)
                            {
					           $_SESSION['customer_username'] = $username;
					           header("Location: index.php?request=logSuccess&prompt=success");
					           exit();
				            }
                            else
                            {
				                echo"<script>alert('Incorrect Password')</script>";
					
                            }
                 }
                 else
                 {
                    echo "<script>alert('Username doesn't exist!')</script>";
                 }

			
        }  
        else
	   { 
		echo "<script>alert('Please enter username and password')</script>";
	   }
	
		
}

	include "views/Customer_Modules/Customer_Login.php";



}


function onlineStore()
{
  	if(isset($_GET['page']))
		{
			switch($_GET['page'])
			{
				case 'page1':dpage1();
							break;
				
				case 'page2':dpage2();
							break;
		
				case 'page3':dpage3();
							break;
			
				case 'page4':dpage4();
							break;
				
				case 'page5':dpage5();
							break;
			
				case 'page6':dpage6();
							break;
                case 'paccessories': paccessories();
                                        break;
                case 'palcatel': palcatel();
                                    break;
                case 'pcherry': pcherry();
                                    break;
                case 'plenovo':plenovo();
                                    break;
                case 'pnokia':pnokia();
                                    break;
                case 'psamsung':psamsung();
                                    break;
                case 'psony':psony();
                                    break;
			}
		}
	
	
}

function dpage1()
{
	include "model/OnlineStore_PrevNext_model.php";
			
	$result_page1 = page1();
	$productCount = mysqli_num_rows($result_page1);
	if($productCount > 0)
	{
	$ass = array();
		while($row = mysqli_fetch_array($result_page1))
		{
		$infoo = array();
		$infoo['id'] = $row['id'];
		$infoo['picture'] = $row['picture'];
		$infoo['product_name'] = $row['product_name'];
		$infoo['price'] = $row['price'];
		$ass[] = $infoo;
		}
	$_SESSION['OS_Page']=1;

	include "views/OnlineStore.php";
    
	}
	else
	{		
	header("Location:index.php?request=onlineStore&pF");
	}
	
}


function dpage2()
{
include "model/OnlineStore_PrevNext_model.php";
	$result_page2 = page2();
	$productCount = mysqli_num_rows($result_page2);
	if($productCount > 0)
	{
	$ass = array();
		while($row = mysqli_fetch_array($result_page2))
		{
			$infoo = array();
			$infoo['id'] = $row['id'];
			$infoo['picture'] = $row['picture'];
			$infoo['product_name'] = $row['product_name'];
			$infoo['price'] = $row['price'];
			$ass[] = $infoo;
		}
		$_SESSION['OS_Page']=2;
		include "views/OnlineStore.php";
	}
	else
	{		
	header("Location:index.php?request=onlineStore&pF");
	}

}


function dpage3()
{

include "model/OnlineStore_PrevNext_model.php";
	$result_page3 = page3();
	$productCount = mysqli_num_rows($result_page3);
	if($productCount > 0)
	{
		$ass = array();
		while($row = mysqli_fetch_array($result_page3))
		{
			$infoo = array();
			$infoo['id'] = $row['id'];
			$infoo['picture'] = $row['picture'];
			$infoo['product_name'] = $row['product_name'];
			$infoo['price'] = $row['price'];
			$ass[] = $infoo;
		}
		$_SESSION['OS_Page']=3;
		include "views/OnlineStore.php";
	}
	else
	{		
	header("Location:index.php?request=onlineStore&pF");
	}
}


function dpage4()
{

include "model/OnlineStore_PrevNext_model.php";
	$result_page4 = page4();
	$productCount = mysqli_num_rows($result_page4);
	if($productCount > 0)
	{
		$ass = array();
		while($row = mysqli_fetch_array($result_page4))
		{
			$infoo = array();
			$infoo['id'] = $row['id'];
			$infoo['picture'] = $row['picture'];
			$infoo['product_name'] = $row['product_name'];
			$infoo['price'] = $row['price'];
			$ass[] = $infoo;
		}
	$_SESSION['OS_Page']=4;
	include "views/OnlineStore.php";
	}
	else
	{		
	header("Location:index.php?request=onlineStore&pF");
	}
}

function dpage5()
{

include "model/OnlineStore_PrevNext_model.php";
	$result_page5 = page5();
	$productCount = mysqli_num_rows($result_page5);
	if($productCount > 0)
	{
		$ass = array();
		while($row = mysqli_fetch_array($result_page5))
		{
			$infoo = array();
			$infoo['id'] = $row['id'];
			$infoo['picture'] = $row['picture'];
			$infoo['product_name'] = $row['product_name'];
			$infoo['price'] = $row['price'];
			$ass[] = $infoo;
		}
	$_SESSION['OS_Page']=5;
	include "views/OnlineStore.php";
	}
	else
	{		
	header("Location:index.php?request=onlineStore&pF");
	}

}


function dpage6()
{
include "model/OnlineStore_PrevNext_model.php";
	$result_page6 = page6();
	$productCount = mysqli_num_rows($result_page6);
	if($productCount > 0)
	{
		$ass = array();
		while($row = mysqli_fetch_array($result_page6))
		{
			$infoo = array();
			$infoo['id'] = $row['id'];
			$infoo['picture'] = $row['picture'];
			$infoo['product_name'] = $row['product_name'];
			$infoo['price'] = $row['price'];
			$ass[] = $infoo;
		}
	$_SESSION['OS_Page']=6;
	include "views/OnlineStore.php";
	}
	else
	{		
	header("Location:index.php?request=onlineStore&pF");
	}		
}


function paccessories(){
include "model/OnlineStore_PrevNext_model.php";
	$result_accessories= accessories();
	$productCount = mysqli_num_rows($result_accessories);
	if($productCount > 0)
	{
		$ass = array();
		while($row = mysqli_fetch_array($result_accessories))
		{
			$infoo = array();
			$infoo['id'] = $row['id'];
			$infoo['picture'] = $row['picture'];
			$infoo['product_name'] = $row['product_name'];
			$infoo['price'] = $row['price'];
			$ass[] = $infoo;
		}
	$_SESSION['OS_Page']="paccessories";
	include "views/OnlineStore.php";
	}
	else
	{		
	header("Location:index.php?request=onlineStore&pF");
	}		    
}

function palcatel(){
include "model/OnlineStore_PrevNext_model.php";
	$result_alcatel=alcatel();
	$productCount = mysqli_num_rows($result_alcatel);
	if($productCount > 0)
	{
		$ass = array();
		while($row = mysqli_fetch_array($result_alcatel))
		{
			$infoo = array();
			$infoo['id'] = $row['id'];
			$infoo['picture'] = $row['picture'];
			$infoo['product_name'] = $row['product_name'];
			$infoo['price'] = $row['price'];
			$ass[] = $infoo;
		}
	$_SESSION['OS_Page']="palcatel";
	include "views/OnlineStore.php";
	}
	else
	{		
	header("Location:index.php?request=onlineStore&pF");
	}		      
}

function pcherry(){
include "model/OnlineStore_PrevNext_model.php";
	$result_cherry=cherry();
	$productCount = mysqli_num_rows($result_cherry);
	if($productCount > 0)
	{
		$ass = array();
		while($row = mysqli_fetch_array($result_cherry))
		{
			$infoo = array();
			$infoo['id'] = $row['id'];
			$infoo['picture'] = $row['picture'];
			$infoo['product_name'] = $row['product_name'];
			$infoo['price'] = $row['price'];
			$ass[] = $infoo;
		}
	$_SESSION['OS_Page']="pcherry";
	include "views/OnlineStore.php";
	}
	else
	{		
	header("Location:index.php?request=onlineStore&pF");
	}		     
}

function plenovo(){
 include "model/OnlineStore_PrevNext_model.php";
	$result_lenovo=lenovo();
	$productCount = mysqli_num_rows($result_lenovo);
	if($productCount > 0)
	{
		$ass = array();
		while($row = mysqli_fetch_array($result_lenovo))
		{
			$infoo = array();
			$infoo['id'] = $row['id'];
			$infoo['picture'] = $row['picture'];
			$infoo['product_name'] = $row['product_name'];
			$infoo['price'] = $row['price'];
			$ass[] = $infoo;
		}
	$_SESSION['OS_Page']="plenovo";
	include "views/OnlineStore.php";
	}
	else
	{		
	header("Location:index.php?request=onlineStore&pF");
	}		        
}

function pnokia(){
 include "model/OnlineStore_PrevNext_model.php";
	$result_nokia=nokia();
	$productCount = mysqli_num_rows($result_nokia);
	if($productCount > 0)
	{
		$ass = array();
		while($row = mysqli_fetch_array($result_nokia))
		{
			$infoo = array();
			$infoo['id'] = $row['id'];
			$infoo['picture'] = $row['picture'];
			$infoo['product_name'] = $row['product_name'];
			$infoo['price'] = $row['price'];
			$ass[] = $infoo;
		}
	$_SESSION['OS_Page']="pnokia";
	include "views/OnlineStore.php";
	}
	else
	{		
	header("Location:index.php?request=onlineStore&pF");
	}		            
}

function psamsung(){
include "model/OnlineStore_PrevNext_model.php";
	$result_samsung=samsung();
	$productCount = mysqli_num_rows($result_samsung);
	if($productCount > 0)
	{
		$ass = array();
		while($row = mysqli_fetch_array($result_samsung))
		{
			$infoo = array();
			$infoo['id'] = $row['id'];
			$infoo['picture'] = $row['picture'];
			$infoo['product_name'] = $row['product_name'];
			$infoo['price'] = $row['price'];
			$ass[] = $infoo;
		}
	$_SESSION['OS_Page']="psamsung";
	include "views/OnlineStore.php";
	}
	else
	{		
	header("Location:index.php?request=onlineStore&pF");
	}		            
}

function psony(){
include "model/OnlineStore_PrevNext_model.php";
	$result_sony=sony();
	$productCount = mysqli_num_rows($result_sony);
	if($productCount > 0)
	{
		$ass = array();
		while($row = mysqli_fetch_array($result_sony))
		{
			$infoo = array();
			$infoo['id'] = $row['id'];
			$infoo['picture'] = $row['picture'];
			$infoo['product_name'] = $row['product_name'];
			$infoo['price'] = $row['price'];
			$ass[] = $infoo;
		}
	$_SESSION['OS_Page']="psony";
	include "views/OnlineStore.php";
	}
	else
	{		
	header("Location:index.php?request=onlineStore&pF");
	}		                
}



function productServices()
{
	include "views/ProductServices.php";
}

function product()
{
    
 include "model/Product_Get.php";  
 	
    if (isset($_GET['id'])){
    
    $id =$_GET['id'];
	// check if the id exist
   $result_product = getProduct($id);
   $productCount = mysqli_num_rows($result_product);
    if($productCount > 0)
    {
        $show = array();
		while($row = mysqli_fetch_array($result_product))
		{
        $infoo = array();
		$infoo['product_name'] = $row['product_name'];
		$infoo['price'] = $row['price'];
		$infoo['details'] = $row['details'];
		$infoo['category'] = $row['category'];
		$infoo['subcategory'] = $row['subcategory'];
        $infoo['picture'] = $row ['picture'];
       	$show[] = $infoo;
        }
      
	include "views/product.php";
	}
	
}
   
}



function myCart()
{
include "config/conn.php";

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//       Section 1 (if user attempts to add something to the cart from the product page)
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if (isset($_POST['pid'])) 
{
    $pid = $_POST['pid'];
	$wasFound = false;
	$i = 0;
	       // If the cart session variable is not set or cart array is empty
	       if (!isset($_SESSION["cart_array"]) || count($_SESSION["cart_array"]) < 1) 
            { 
	           // RUN IF THE CART IS EMPTY OR NOT SET
		          $_SESSION["cart_array"] = array(0 => array("item_id" => $pid, "quantity" => 1));
	       } 
           else 
           {
		      // RUN IF THE CART HAS AT LEAST ONE ITEM IN IT
		      foreach ($_SESSION["cart_array"] as $each_item) 
              { 
		          $i++;
		          while (list($key, $value) = each($each_item)) 
                  {
				    if ($key == "item_id" && $value == $pid)
                    {
					   // That item is in cart already so let's adjust its quantity using array_splice()
					   array_splice($_SESSION["cart_array"], $i-1, 1, array(array("item_id" => $pid, "quantity" => $each_item['quantity'] + 1)));
					   $wasFound = true;
				    } // close if condition
		          } // close while loop
	           } // close foreach loop
               
                if ($wasFound == false) 
                {
			         array_push($_SESSION["cart_array"], array("item_id" => $pid, "quantity" => 1));
                }
            }
	   //header("location:index.php?request=myCart"); 
        //exit();
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//       Section 2 (if user chooses to empty their shopping cart)
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if (isset($_GET['cmd']) && $_GET['cmd'] == "emptycart") {
    unset($_SESSION["cart_array"]);
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//       Section 3 (if user chooses to adjust item quantity)
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if (isset($_POST['item_to_adjust']) && $_POST['item_to_adjust'] != "") 
{
    // execute some code
	$item_to_adjust = $_POST['item_to_adjust'];
	$quantity = $_POST['quantity'];
	$quantity = preg_replace('#[^0-9]#i', '', $quantity); // filter everything but numbers
	if ($quantity >= 100) { $quantity = 99; }
	if ($quantity < 1) { $quantity = 1; }
	if ($quantity == "") { $quantity = 1; }
	$i = 0;
	foreach ($_SESSION["cart_array"] as $each_item) 
    { 
		      $i++;
		      while (list($key, $value) = each($each_item)) 
              {
				  if ($key == "item_id" && $value == $item_to_adjust) 
                  {
					  // That item is in cart already so let's adjust its quantity using array_splice()
					  array_splice($_SESSION["cart_array"], $i-1, 1, array(array("item_id" => $item_to_adjust, "quantity" => $quantity)));
				  } // close if condition
		      } // close while loop
	} // close foreach loop
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//       Section 4 (if user wants to remove an item from cart)
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if (isset($_POST['index_to_remove']) && $_POST['index_to_remove'] != "") 
{
    // Access the array and run code to remove that array index
 	$key_to_remove = $_POST['index_to_remove'];
	if (count($_SESSION["cart_array"]) <= 1) 
    {
		unset($_SESSION["cart_array"]);
	} else 
    {
		unset($_SESSION["cart_array"]["$key_to_remove"]);
		sort($_SESSION["cart_array"]);
	}
}
 
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//       Section 5  (render the cart for the user to view on the page)
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$cartOutput = "";
$cartTotal = "";
$pp_checkout_btn = '';
$product_id_array = '';
if (!isset($_SESSION["cart_array"]) || count($_SESSION["cart_array"]) < 1) 
{
    $cartOutput = "<h3 align='center'>Your shopping cart is empty</h3>";
} else 
{
	// Start PayPal Checkout Button
	$pp_checkout_btn .= '<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
    <input type="hidden" name="cmd" value="_cart">
    <input type="hidden" name="upload" value="1">
    <input type="hidden" name="business" value="renierdicon@yahoo.com">';
	// Start the For Each loop
	$i = 0; 
    foreach ($_SESSION["cart_array"] as $each_item) 
    { 
		$item_id = $each_item['item_id'];
		$sql = mysqli_query($cxn,"SELECT * FROM products WHERE id='$item_id' LIMIT 1");
		while ($row = mysqli_fetch_array($sql)) 
        {
			$product_name = $row["product_name"];
			$price = $row["price"];
			$details = $row["details"];
            $image="<img src=".$row ['picture']." width=60/>";
		}
		$pricetotal = $price * $each_item['quantity'];
		$cartTotal = $pricetotal + $cartTotal;
		setlocale(LC_MONETARY, "en_US");
        $pricetotal = number_format($pricetotal,2);
		// Dynamic Checkout Btn Assembly
		$x = $i + 1;
		$pp_checkout_btn .= '<input type="hidden" name="item_name_' . $x . '" value="' . $product_name . '">
        <input type="hidden" name="amount_' . $x . '" value="' . $price . '">
        <input type="hidden" name="quantity_' . $x . '" value="' . $each_item['quantity'] . '">  ';
		// Create the product array variable
        $product_id_array .= "$item_id-".$each_item['quantity'].","; 
		// Dynamic table row assembly
		$cartOutput .= "<tr>";
		$cartOutput .= '<td colspan="2" align="center"><form action="index.php?request=cartAccess" method="post"> '.$image.' <br/>
		<a href="index.php?request=product&id=' . $item_id . '">' . $product_name . '</a><br/>
		&nbsp' . $details . '<br/><input class="button" name="deleteBtn' . $item_id . '" type="submit" value="remove" />
		<input name="index_to_remove" type="hidden" value="' . $i . '" /></form></td>';
		
		$cartOutput .= '<td >Php<br/>' . $price . '</td>';
		$cartOutput .= '<td><form action="index.php?request=cartAccess" method="post">
		<input name="quantity" type="text" value="' . $each_item['quantity'] . '" size="1" maxlength="2" />
		<input class="button" name="adjustBtn' . $item_id . '" type="submit" value="change" />
		<input name="item_to_adjust" type="hidden" value="' . $item_id . '" />
		</form></td>';
		//$cartOutput .= '<td>' . $each_item['quantity'] . '</td>';
		$cartOutput .= '<td colspan="2">Php<br/>' . $pricetotal . '</td>';
		$cartOutput .= '</tr>';
		$i++; 
    } 
	setlocale(LC_MONETARY, "en_US");
    $cartTotal = number_format($cartTotal,2);
	$cartTotal = "<div style='font-size:18px; margin-top:12px;' align='right'>Cart Total : ".$cartTotal." Php</div>";
    // Finish the Paypal Checkout Btn
	$pp_checkout_btn .= '<input type="hidden" name="custom" value="' . $product_id_array . '">
	<input type="hidden" name="notify_url" value="https://www.onemobilenetworkinc.com/storescripts/my_ipn.php">
	<input type="hidden" name="return" value="https://www.onemobilenetworkinc.com/checkout_complete.php">
	<input type="hidden" name="rm" value="2">
	<input type="hidden" name="cbt" value="Return to The Store">
	<input type="hidden" name="cancel_return" value="https://www.onemobilenetworkinc.com/paypal_cancel.php">
	<input type="hidden" name="lc" value="US">
	<input type="hidden" name="currency_code" value="PHP">
	<input type="image" src="http://www.paypal.com/en_US/i/btn/x-click-but01.gif" name="submit" alt="Make payments with PayPal - its fast, free and secure!">
	</form>';
}


	include "views/MyCart.php";
    
 
}

function cartAccess(){

	if(!isset($_SESSION['customer_username'])){
		header ("Location:index.php?request=customerLogin&loginfirst");
		}		
	else{
		myCart();
	}

}
function career()
{
	include "views/Career.php";
}
	
function aboutUs()
{
	include "views/AboutUs.php";
}

function map()
{
	include "views/map.php";
}

function contact()
{
	include "views/Contact.php";
}

function registration()
{
include "model/Customer_Get.php";

//Error_reporting(E_ALL&~E_NOTICE);
 if(isset($_POST['username']))
 {
    $fullname = $_POST['username'];
    $username = $_POST['userid'];
    $Password = $_POST['passid'];
    $email = $_POST['email'];
    $mobile = $_POST['contact'];
    $address = $_POST['address'];  
    
    $result_fullname = getfullname($fullname);
    $result_username = getusername($username);
    $result_password = getpassword($Password);
       
    $fullnameMatch =mysqli_num_rows($result_fullname);
    $usernameMatch =mysqli_num_rows($result_username);
    $passwordMatch =mysqli_num_rows($result_password);
    
    if($fullnameMatch > 0 and $usernameMatch > 0 and $passwordMatch > 0)
        {
            header("Location:index.php?request=registration&duplicate");
           	
        }       
    elseif($fullnameMatch > 0)
        {
            header("Location:index.php?request=registration&dupn");
           	
        }
    elseif($usernameMatch > 0)
        {
            header("Location:index.php?request=registration&dupu");
           	
        }
    elseif($passwordMatch > 0)
        {
            header("Location:index.php?request=registration&dupp");
           	
        } 
        
    else{ 
    
        
            $insert_customer = insert_Customer($fullname,$username,$Password,$email,$mobile,$address);
            
            echo $insert_customer;
            if(!empty($insert_customer))
            {
                header('location:index.php?request=registration&regsucc');
            }
            
        }
        
    
}
else
{
    include "views/Registration.php";
    
}
    
}


function adminLogin()
{

$username=$password=$admin_pass="";
    
include "model/Admin_Login_Check_model.php";
   
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

		$username = $_POST['user'];
		$password = $_POST['pass'];
        
	   if (!empty($username)AND!empty($password))
	   {
		  $present=find_admin($username);
		  $num_rows = mysqli_num_rows($present);
            
             if ($num_rows!=0)
                {
                    while ($row = mysqli_fetch_array ($present))
		              {
			             $admin_pass = $row ['admin_pass'];
	                  }
		                  if ($password==$admin_pass)
                            {
					           $_SESSION['admin_user'] = $username;
					           header("Location: index.php?request=adminHome&prompt=success");
					           exit();
				            }
                            else
                            {
				                echo"<script>alert('Incorrect Password')</script>";
					
                            }
                 }
                 else
                 {
                    echo "<script>alert('Username doesn't exist!')</script>";
                 }

			
        }  
        else
	   { 
		echo "<script>alert('Please enter username and password')</script>";
	   }
	
		
}

	include "views/Admin_Modules/admin_login.php";


}

function adminHome()
{
    
    include "views/Admin_Modules/admin_home.php";
}


function inventory()
{

include "model/Inventory_model.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
        $find= $_POST['find'];
        $searchby= $_POST['searchby'];
        
        	
        switch($searchby)
        {
        case 'byname':
            $sql="SELECT * FROM products WHERE product_name LIKE'$find%'";
            $result= find_product($sql);
            if(mysqli_num_rows($result) < 1)
            {
                echo "<script>alert('Theres no result to your query!')</script>";
                display($result);
            }
            else
            {
               //echo "<script>alert('pumasok dito sa byname')</script>";
               
               display($result);
            }
            break;
            
        case 'category':
            $sql="SELECT * FROM products WHERE category LIKE'$find%'";
        	$result = find_product($sql);
            if(mysqli_num_rows($result) < 1)
            {
                 echo "<script>alert('Theres no result to your query!')</script>";
                 display($result);
            }
            else
            {
               //echo "<script>alert('pumasok dito sa category')</script>";
               
               display($result);
            }
        	break;
            
        case 'subcategory':
            $sql="SELECT * FROM products WHERE subcategory LIKE'$find%'";
        	$result = find_product($sql);
            if(mysqli_num_rows($result) < 1)
            {
                 echo "<script>alert('Theres no result to your query!')</script>";
                 display($result);
              
            }
            else
            {
        	   
               //echo "<script>alert('pumasok dito sa subcategory')</script>";
                 display($result);
            }
        	break;
       	}
}
else
{
$result_passer = getProduct();
display($result_passer);
}
   

}


function display($result_passer)
{
        $show = array();
		while($row = mysqli_fetch_array($result_passer))
		{
        $infoo = array();
		$infoo['id'] = $row['id'];
		$infoo['product_name'] = $row['product_name'];
		$infoo['details'] = $row['details'];
		$infoo['price'] = $row['price'];
		$infoo['picture'] = $row['picture'];
        $infoo['quantity'] = $row ['quantity'];
        
       	$show[] = $infoo;
        }

      
include "views/Admin_Modules/Inventory.php";
}



function inventory_add()
{
include "config/conn.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    //Error_reporting(E_ALL&~E_NOTICE);
    if(isset($_POST['product_name']))
    {
        $product_name = mysqli_real_escape_string($cxn,$_POST['product_name']);
        $price = mysqli_real_escape_string($cxn,$_POST['price']);
        $category = mysqli_real_escape_string($cxn,$_POST['category']);
        $subcategory = mysqli_real_escape_string($cxn,$_POST['subcategory']);
        $details = mysqli_real_escape_string($cxn,$_POST['details']);
        $quantity= mysqli_real_escape_string($cxn,$_POST['quantity']);
        $picture="inventory_images/".$_POST['image'] ;

        //validate if product inputed is identical 
        $sql=mysqli_query($cxn,"SELECT id FROM products WHERE product_name='$product_name'LIMIT 1");
        $productMatch =mysqli_num_rows($sql);//count the output
        if($productMatch > 0)
        {	
    		echo "<script language = 'JavaScript'> alert ('Sorry! the item you inputed has a duplicate!') </script>" ;
            //echo "<a href='inventory_list.php'>click here</a>";
    		//exit();	
    	}
        else
        { 
	       //product is added to the data base
	
	       // Place image in the folder 
        $pid = mysqli_insert_id($cxn);
    	$newname = "$pid.jpg";
    	move_uploaded_file( $_FILES['image']['tmp_name'], "inventory_images/$newname");
    
        $sql=mysqli_query($cxn,"INSERT INTO products(product_name,price,details,category,subcategory,picture,quantity)
				VALUES('$product_name','$price','$details','$category','$subcategory','$picture','$quantity')") or die(mysql_error());
                 echo "<script language = 'JavaScript'> alert ('adding new item Successful!') </script>";	
	
        header("location: index.php?request=inventory_add"); 
    	exit();
      
        }
 
    }


    
}


include "views/Admin_Modules/Inventory_Add.php";    
}



function wallUpdates()
{

//include "views/Admin_Modules/Inventory.php";
}

function transactions()
{

//include "views/Admin_Modules/Inventory.php";
}
*/
?>