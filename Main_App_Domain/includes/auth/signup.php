<?php

if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
      $secret = '6LeTVlUUAAAAAOjlIGx4JkYdL92M6RTVEkk7ZyM5';
    //get verify response data
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);
    if($responseData->success){

           $pwd = $_POST['password'];
           $_SESSION['email'] = $_POST['email'];
           $_SESSION['first_name'] = $_POST['firstname'];
           $_SESSION['last_name'] = $_POST['lastname']; 


       if ( $_POST['password'] != $_POST['cpassword'] ) { 

            $_SESSION['errprompt'] = 'Password Do not Match!';
            echo "<meta http-equiv='refresh' content='0'>";
            exit;
       
       }      
       if( strlen($pwd) < 6 ) {
           $_SESSION['errprompt'] = 'Password too short! It must be at least 6 Character Long';
           echo "<meta http-equiv='refresh' content='0'>";
           exit;
       }

       else {
            
          $first_name = $mysqli->escape_string($_POST['firstname']);
          $last_name = $mysqli->escape_string($_POST['lastname']);
          $email = $mysqli->escape_string($_POST['email']);
          $password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
          $gender = $mysqli->escape_string($_POST['gender']);
          $year = $mysqli->escape_string($_POST['year']);
          date_default_timezone_set('Asia/Kolkata');
          $timestamp = time();
          $doj = date("d-m-Y");
                         
          $result = $mysqli->query("SELECT * FROM users WHERE email='$email'") or die($mysqli->error());
             
             if ( $result->num_rows > 0 ) {
           
                  $_SESSION['errprompt'] = 'User with this email already exists!';
                  echo "<meta http-equiv='refresh' content='0'>";
                  exit;
             }
             else { 
                                          
                  $stmt = $mysqli->prepare("INSERT INTO users (first_name, last_name, email, password, gender, year, date_joined) VALUES (?, ?, ?, ?, ?, ?, ?)");
                  $stmt->bind_param("sssssss", $first_name, $last_name, $email, $password,  $gender,  $year,  $doj);
                  
                        if($stmt->execute()){
                        
                             $ol = $mysqli->query("SELECT * FROM users WHERE email='$email'");
                             $user = $ol->fetch_assoc();
                          
                             $last_activity = date("d-m-Y (D) H:i:s", $timestamp);
                             $user_id = $user['id'];
                        
                             $sql = "INSERT INTO login_details (user_id, last_activity) ". "VALUES ('$user_id', '$last_activity')";
                             
                                    if ($mysqli ->query($sql) === TRUE) {
                                        $login_id = $mysqli ->insert_id;
                                    } else {
                                        echo "Error: " . $sql . "<br>" . $mysqli ->error;
                                    }
             $mysqli->query("UPDATE users SET loggedin ='$loggedin' WHERE email='$email'") or die($mysqli->error);
                  
                  $activate = bin2hex(random_bytes(8));
                  $token = bin2hex(random_bytes(32));
        
                  $stmt2 = $mysqli->prepare("INSERT INTO activate_ac (uid, activate, token, email) VALUES (?, ?, ?, ?)");
                  $stmt2->bind_param("ssss", $user_id, $activate, $token, $email); 
                  $stmt2->execute();
                  
                             $_SESSION['active'] = 0; 
                             $_SESSION["login_id"] = $login_id;
                             $_SESSION['logged_in'] = true; 
                         
                             require'includes/mailman/register_mail.php';
                         
                             header("location: dashboard"); 
                             exit;
                        
                        }
                        
                        else {
                             $_SESSION['errprompt'] = 'Registration failed!';
                             echo "<meta http-equiv='refresh' content='0'>";
                             exit;
                             }
                  }
            }
          }else{
                 $_SESSION['errprompt'] = 'Robot verification failed, please try again.';
               }
}else{
       $_SESSION['errprompt'] = 'Please click on the reCAPTCHA box.';
}
?>