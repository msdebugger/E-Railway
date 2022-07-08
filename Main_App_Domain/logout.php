<?php
require 'includes/netgear/db9.php';
session_start();

$email = $_SESSION['email'];
$login_detail = $_SESSION["login_id"];
 
      
    date_default_timezone_set('Asia/Kolkata');
    $timestamp = time();
    $loggedout = date("d-m-Y (D) H:i:s", $timestamp);
    $mysqli->query("UPDATE users SET loggedout ='$loggedout' WHERE email='$email'") or die($mysqli->error);
    $sql = "DELETE FROM login_details WHERE login_details_id = '$login_detail'";

if ( $mysqli->query($sql) ) {

    session_unset();
    session_destroy();
    header("Location: login"); 
    exit;
}
  

 
?>