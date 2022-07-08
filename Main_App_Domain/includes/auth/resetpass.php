<?php
if ( $_POST['newpassword'] == $_POST['confirmpassword'] ) { 

        $new_password = $mysqli->escape_string(password_hash($_POST['newpassword'], PASSWORD_BCRYPT));
        
        $email = $mysqli->escape_string($_POST['email']);
        $lp = time();
        
        #$stmt = $mysqli->prepare("UPDATE users SET password = ?, lastpassup = ? WHERE eamil = ?");
        #$stmt->bind_param("sis", $new_password, $lp, $email);
        
        $sql = "UPDATE users SET password = ?, lastpassup = ? WHERE email = ?";

        if ( $stmt = $mysqli->prepare($sql) ) {
            
             $stmt->bind_param("sis", $new_password, $lp, $email);
             $stmt->execute();
          
             $stmt = $mysqli->prepare("DELETE FROM password_reset WHERE email = ?");
             $stmt->bind_param("s", $email);
             $stmt->execute();
            
             $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");
             $user = $result->fetch_assoc();
             $first_name = $user['first_name'];
              
             $_SESSION['prompt'] = "Your password has been reset successfully! Login with your new password";

                      $to = $email;
          $subject = "Password Reset Sucessfully";

          $htmlContent = "
        Hey $first_name,
        Your ACPCE Railway Concession account password has been successfully changed.


        Did not request a new password?
        If you did not change your ACPCE Railway Concession Portal account password, please let us know immediately.  
       ";

// Set content-type header for sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers .= 'From: ACPCE Railway Concession Portal<passwordreset@acpce.in>' . "\r\n";



mail($to,$subject,$htmlContent,$headers);
  


             header("location: login");    
             exit; 
        }

    }
    else {
         $_SESSION['errprompt'] = "Two passwords you entered don't match, try again!";
            
    }
?>