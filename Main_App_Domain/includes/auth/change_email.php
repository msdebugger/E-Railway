<?php
if(isset($_POST['uemail']))
{
    $change_email = $mysqli->escape_string($_POST['newemail']);
    $result = $mysqli->query("SELECT * FROM users WHERE email='$change_email'") or die($mysqli->error());

    if ( $result->num_rows > 0 ) {
    
     $_SESSION['errprompt'] = 'User with this email already exists!';
     echo "<meta http-equiv='refresh' content='0'>";
     exit;
    }else{ 
            
                $stmt = $mysqli->prepare("UPDATE users SET email= ? WHERE id= ?");
                $stmt->bind_param("ss", $change_email, $uid);
                  
                        if($stmt->execute()){
                            $_SESSION['email'] = $change_email;            
                            $_SESSION['prompt'] = "Email changed successfully";
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