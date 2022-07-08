<?php

        $to = $email;
        $subject = "Password Reset Link";
        $message_body ="
        Hey $first_name,

        You have requested password reset!

        Please click this link below to reset your password.:

        http://acpce.in/reset?email=$email&selector=$selector&token=$token  
        
        If the link is in text form just copy and paste to the address bar of browser.

       **You did not request this password reset? Change your password right now.";


        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: ACPCE Railway Concession<passwordreset@acpce.in>' . "\r\n";
        mail($to,$subject,$message_body,$headers);

?>