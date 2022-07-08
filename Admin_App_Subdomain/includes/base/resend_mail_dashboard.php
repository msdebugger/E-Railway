
<?php

if(isset($_POST['resend']))
{
       $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

        $user = $result->fetch_assoc(); 
        
        $email = $user['email'];
        $first_name = $user['first_name'];
        $hash = $mysqli->escape_string( md5( uniqid() ) );

   
        include 'includes/mailman/resend_email_mail.php';


 $sql = "UPDATE users SET resendcount =1  WHERE email='$email'";
     if ( $mysqli->query($sql) ) {

$_SESSION['prompt'] = "Confirmation link has been resent to <b>$email</b>, please check your inbox and verify
                 your account by clicking on the link in the message!";
       
}
else {
        $_SESSION['errprompt'] = "Something went wrong";
            
    }   
echo "<meta http-equiv='refresh' content='0'>";
      exit;
}

?>