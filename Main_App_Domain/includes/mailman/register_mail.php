<?php
$to = $email;
$subject = "Account Verification Link";
$htmlContent = "

Hey $first_name,

Thank you for signing up! Please click this link to activate your account:
     
    http://acpce.in/verify?email=$email&activate=$activate&token=$token  

After verifying your account will get activated and you will be able fill form and request for concession.

                                               Railway Concession System 

                                           @ A.C. Patil College of Engineering, Kharghar.";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: ACPCE Railway Concession<noreply@acpce.in>' . "\r\n";
mail($to,$subject,$htmlContent,$headers);

?>