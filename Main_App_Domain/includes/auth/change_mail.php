<?php
if(isset($_POST['ce']))
{
    $change_email = $mysqli->escape_string($_POST['chm']);
    $result = $mysqli->query("SELECT * FROM users WHERE email='$change_email'") or die($mysqli->error());

    if ( $result->num_rows > 0 ) {
    
     $_SESSION['errprompt'] = 'User with this email already exists!';
     echo "<meta http-equiv='refresh' content='0'>";
     exit;
    }else{ 
            $activate = bin2hex(random_bytes(8));
            $token = bin2hex(random_bytes(32));
        
                $stmt = $mysqli->prepare("UPDATE activate_ac SET email = ?, activate = ?, token = ? WHERE uid = ?");
                $stmt->bind_param("ssss", $change_email, $activate, $token, $uid);

                $stmt2 = $mysqli->prepare("UPDATE users SET email= ? WHERE id= ?");
                $stmt2->bind_param("ss", $change_email, $uid);
                  
                        if($stmt->execute() && $stmt2->execute()){
                            $_SESSION['email'] = $change_email;            
                            $_SESSION['prompt'] = "Email changed successfully";
       
                            require'includes/mailman/change_email_mail.php';

                            echo "<meta http-equiv='refresh' content='0'>";
                            exit;
                        }else{
                            $_SESSION['errprompt'] = "Something Went Try Again"; 
                            echo "<meta http-equiv='refresh' content='0'>";
                            exit;      
                        }
   
        }
}
?>