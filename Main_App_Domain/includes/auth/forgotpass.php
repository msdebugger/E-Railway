<?php

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) 
{   
    $stmt = $mysqli->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $_POST['email']);
    $stmt->execute();
    $result = $stmt->get_result();

    if ( $result->num_rows == 0 ) 
    { 
        $_SESSION['errprompt'] = "User with that email doesn't exist!";
        echo "<meta http-equiv='refresh' content='0'>";
        exit();
       
    }
    else 

        $user = $result->fetch_assoc(); 
        
        $email = $user['email'];
        $first_name = $user['first_name'];
        $selector = bin2hex(random_bytes(8));
        $token = bin2hex(random_bytes(32));
        
        
                  $stmt = $mysqli->prepare("INSERT INTO password_reset (selector, token, email) VALUES (?, ?, ?)");
                  $stmt->bind_param("sss", $selector, $token, $email);
                  $stmt->execute();   
               
           if($stmt->affected_rows === 1){
                           
              $_SESSION['prompt'] = "Please check your email for a confirmation link to complete your password reset!";
              
                require'includes/mailman/forgot_mail.php';

              header("location: login");
              exit; 
         
            }
else{
     $_SESSION['prompt'] = "Oops! Something Went Wrong. Try Again";
    }
  }


?>