<?php
require 'includes/netgear/db9.php';
session_start();
session_regenerate_id(true);

$username = $_SESSION['username'];
$login_detail = $_SESSION["log_id"];
 
      
    date_default_timezone_set('Asia/Kolkata');
    $timestamp = time();
    $loggedout = date("d-m-Y (D) H:i:s", $timestamp);
    $mysqli->query("UPDATE admins SET last_logout ='$loggedout' WHERE username ='$username'") or die($mysqli->error);
    $sql = "DELETE FROM login_details WHERE login_details_id = '$login_detail'";

if ( $mysqli->query($sql) ) {

    session_unset();
    session_destroy();
    header("Location: login"); 
    exit;
       
}
?>