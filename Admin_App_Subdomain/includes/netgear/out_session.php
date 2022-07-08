<?php
session_start();
if(isset($_SESSION['log_id'])) {
     header("Location: dashboard"); 
     exit; 
}
?>