<?php

$to = $email;

$subject = "Account Verification Link";



$htmlContent = "

   

Hey $fn,



Thank you for signing up! Please click this link to activate your account:

        

         http://acpce.in/verify?email=$email&hash=$hash



After verifying your account you can access all the resources provided by Deparment of Computer Engineering.



Thank You and Have a Wonderful day $fn! :)





                                            Railway Concession Protal 

                                           @ A.C. Patil College of Engineering, Kharghar.









";



// Set content-type header for sending HTML email

$headers = "MIME-Version: 1.0" . "\r\n";

$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";



// Additional headers

$headers .= 'From: ACPCE Railway Concession<noreply@acpce.in>' . "\r\n";







mail($to,$subject,$htmlContent,$headers);


?>