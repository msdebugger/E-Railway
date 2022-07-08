<?php

$to = $changemail;
$subject = "Account Verification Link";

$htmlContent = "
   
Hey $first_name,

Thank you for signing up! Please click this link to activate your account:
        
         http://acpce.in/verify?email=$changemail&hash=$haa

After verifying your account you can access all the resources provided by Deparment of Computer Engineering.

Thank You and Have a Wonderful day $first_name! :)


                                            Department of Computer Engineering(Diploma) 
                                           @ A.C. Patil College of Engineering, Kharghar.




";

// Set content-type header for sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers .= 'From: D.O.C.E(Diploma)<noreply@acpce.in>' . "\r\n";

mail($to,$subject,$htmlContent,$headers); 

?>