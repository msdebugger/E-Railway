<?php
require '../../includes/netgear/db9.php';
session_start();
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['errprompt'] = "Please Log in First!";
  header("location: login"); 
    exit;   
}
else {
     $login_details_id = $_SESSION["login_id"];
     $first_name = $_SESSION['first_name'];
     $last_name = $_SESSION['last_name'];
     $email = $_SESSION['email'];
     }

if(isset($_POST["action"]))
{
  
    if($_POST["action"] == "fetch_data")
 {
   
 if (isset($_SESSION['first_name']))
{ 
    
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

                      $user = $result->fetch_assoc();
                      $medium= $user['medium'];
                      $year = $user['year'];
                      $date_joined = $user['date_joined'];
                
  if($medium == ""){
             
      $output .='pictures/user.png';
   }
   else{
    $output.=$medium;
       }
  }   
                
                  
   echo $output;
   }

  }           
				
		


?>
