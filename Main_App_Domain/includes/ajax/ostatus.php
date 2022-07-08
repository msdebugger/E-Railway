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

        $stmt = $mysqli->prepare("UPDATE login_details SET last_activity = NOW() WHERE login_details_id = ?");
        $stmt->bind_param('s', $login_details_id);
        if($stmt->execute()){
			
         }
        else{
    
         }  

?>
