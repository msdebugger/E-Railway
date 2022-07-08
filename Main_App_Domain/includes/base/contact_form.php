<?php

    if (isset($_POST['cform'])) {

$name    = $_POST['name'];
$email   = $_POST['email'];
$mobile  = $_POST['mobile'];
$message = $_POST['message'];
$IP      = $_SERVER["REMOTE_ADDR"];

date_default_timezone_set('Asia/Kolkata');
$timestamp = time();
$date_time = date("d-m-Y (D) H:i:s", $timestamp);

$stmt = $mysqli->prepare("INSERT INTO contact (name, email, mobile, message, IP, date_time) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $name, $email, $mobile,  $message,  $IP,  $date_time);
$stmt->execute();  
               
        if($stmt->affected_rows === 1){
           $_SESSION['prompt'] = 'We will get back to you ASAP!';
           echo "<meta http-equiv='refresh' content='0'>";
           exit;
          } 
       else{
           $_SESSION['errprompt'] = 'Submit Failed. Please try again.';
           echo "<meta http-equiv='refresh' content='0'>";
           exit;
           }
    }
?>