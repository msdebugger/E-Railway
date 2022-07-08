
<?php

if(isset($_POST['resend']))
{
            $activate = bin2hex(random_bytes(8));
            $token = bin2hex(random_bytes(32));
        
                $stmt = $mysqli->prepare("UPDATE activate_ac SET activate = ?, token = ? WHERE email = ?");
                $stmt->bind_param("sss", $activate, $token, $email);
                $stmt->execute();


   
        require'includes/mailman/resend_email_mail.php';


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