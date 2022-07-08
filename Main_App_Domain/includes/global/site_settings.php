<?php

$get = $mysqli->query("SELECT * FROM site_settings WHERE ID = 1");

       $setting = $get->fetch_assoc();
        
#body/skin of whole site
$body_skin = $setting['body_skin'];

#skin css
$skin_css = $setting['skin_css'];

#Send Email ON/OFF
$email_status = $setting['email_status'];

#Unlink() ON/OFF 
$unlink_status = $setting['unlink_status'];

#New Admission Form ON/OFF
$admission_season = $setting['admission_season'];


?>