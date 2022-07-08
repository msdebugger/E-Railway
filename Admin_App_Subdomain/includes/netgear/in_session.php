<?php
session_start();
if ( $_SESSION['log_in'] != 1 ) {
    unset($_SESSION['logged_in']);
    unset($_SESSION['log_id']);
    $_SESSION['errprompt'] = "Please log in first";
    header("location: ../../login"); 
    exit;   
}    
else {
     
     $login_details_id = $_SESSION["log_id"];
     $username = $_SESSION['username'];
     
    

}

$result = $mysqli->query("SELECT * FROM admins WHERE username = '$username'");

   $user = $result->fetch_assoc();
   $uid = $user['id'];
   $first_name = $user['first_name'];
   $last_name = $user['last_name'];
   $role = $user['role'];
   $date_joined = $user['doj'];
  
$fn = ucfirst($first_name);
$ln = ucfirst($last_name);
$fullname = $fn . " " . $ln;
$sdoj = date('d F Y', strtotime($date_joined));
?>