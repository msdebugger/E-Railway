<?php
session_start();
if($_SESSION['logged_in'] != 1){
	unset($_SESSION['logged_in']);
    unset($_SESSION['login_id']);
    $_SESSION['errprompt'] = "Please log in first";
    header("location: ../../login"); 
    exit;   
}    
else{  
	session_regenerate_id(true);
	$login_details_id = $_SESSION["login_id"];
	$email = $_SESSION['email'];
	
	# User Data Intialization
	$result = $mysqli->query("SELECT * FROM users WHERE email='$email'");
	$user = $result->fetch_assoc();
	$uid = $user['id'];
	$first_name = $user['first_name'];
	$last_name = $user['last_name'];
	$year = $user['year'];
	$dob = $user['dob'];
	$gender = $user['gender'];
	$prn = $user['prn'];
	$date_joined = $user['date_joined'];
	$lp  = $user['lastpassup'];
	$active= $user['active'];
	$rsd = $user["resendcount"];
	$small =  $user['small'];
	$medium =  $user['medium'];
	
	# Converstion of Intialized User Data
	$fn = ucfirst($first_name);
	$ln = ucfirst($last_name);
	$fullname = $fn . " " . $ln;
	$sdoj = date('d F Y', strtotime($date_joined));
	$mbdy = "12-08-56";
}		
?>