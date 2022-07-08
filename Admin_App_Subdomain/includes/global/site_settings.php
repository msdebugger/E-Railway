<?php

$get = $mysqli->query("SELECT * FROM site_settings WHERE ID = 1");

        $setting = $get->fetch_assoc();
        
#body/skin of whole site
$body_skin = "skin-purple";

#Send Email ON/OFF
$email_status = $setting['email_status'];


?>