<?php 

require 'includes/netgear/db9.php';
require 'includes/global/functions.php';
session_start();

if(isset($_SESSION['login_id'])) {
     header("Location: dashboard"); 
     exit; 
}



if( isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['activate']) && !empty($_GET['activate']) AND isset($_GET['token']) && !empty($_GET['token']) )
{
    $email = $mysqli->escape_string($_GET['email']); 
    $activate = $mysqli->escape_string($_GET['activate']);
    $token = $mysqli->escape_string($_GET['token']); 


    $stmt = $mysqli->prepare("SELECT * FROM activate_ac WHERE email = ? AND activate= ? AND token= ?");
    $stmt->bind_param("sss", $email, $activate, $token);
    $stmt->execute();
    $result = $stmt->get_result();


    if ( $result->num_rows == 0 )
    { 
         $_SESSION['errprompt'] = "Account has already been activated or the URL is invalid!";
         header("location: login");
         exit; 
    }
    else {
         $_SESSION['prompt'] = "Your account has been activated!";
        
         $mysqli->query("UPDATE users SET active='1' WHERE email='$email'") or die($mysqli->error);

             $stmt2 = $mysqli->prepare("DELETE FROM activate_ac WHERE email = ?");
             $stmt2->bind_param("s", $email);
             $stmt2->execute();

        if(isset($_SESSION['login_id'])) {
            header("Location: dashboard");
            exit;
        }
        else{
            header("location: login");
            exit;
        } 
    }
}
else {
     $_SESSION['errprompt'] = "Invalid parameters provided for account verification!";
    header("location: login");
    exit; 
}     
?>