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
     $email = $_SESSION['email'];
     }

if(isset($_POST["action"]))
{
  
    if($_POST["action"] == "fetch_image")
 {
   
       $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

       $user = $result->fetch_assoc();
       $medium= $user['medium'];
  
  if($medium == ""){
             
      $output .='../../dist/img/user.png';
   }
   else{
    $output.="../$medium";
          }
                  
    echo $output;

   }
 }           
				
?>
