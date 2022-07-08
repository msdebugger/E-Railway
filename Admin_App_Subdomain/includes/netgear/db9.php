<?php
$mysqli = new mysqli("localhost", "root", "", "acpce");
if($mysqli->connect_error) {
  exit('Error connecting to database');
}
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli->set_charset("utf8mb4");

define('DEBUG', false);
error_reporting(E_ALL);

if (DEBUG)
{
    ini_set('display_errors', 'On');        
}
else
{
    ini_set('display_errors', 'Off');
}

?>