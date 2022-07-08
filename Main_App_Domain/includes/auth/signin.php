<?php
$attempt = $_SESSION['login_attempt'];
$email = $_POST['email']; 
if($attempt <= 10)
{

$stmt = $mysqli->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
  
if ( $result->num_rows == 0 ){ 
    $_SESSION['errprompt'] = "User with that email doesn't exist!";
      echo "<meta http-equiv='refresh' content='0'>";
      exit;
}
else { 
    $user = $result->fetch_assoc();

    if ( password_verify($_POST['password'], $user['password']) ) {
      $at_reset = 0;
      $stmt = $mysqli->prepare("UPDATE users SET login_attempt = ? WHERE  email= ?");
      $stmt->bind_param("is", $at_reset, $email);
      $stmt->execute();

      date_default_timezone_set('Asia/Kolkata');
      $timestamp = time();
      $loggedin = date("d-m-Y (D) H:i:s", $timestamp);
      $last_activity = date("d-m-Y (D) H:i:s", $timestamp);
      $user_id = $user['id'];
            
         $sql = "INSERT INTO login_details (user_id, last_activity) " . "VALUES ('$user_id', '$last_activity')";

         if ($mysqli ->query($sql) === TRUE) {
         $login_id = $mysqli ->insert_id;
         } else {
         echo "Error: " . $sql . "<br>" . $mysqli ->error;
         }
         $mysqli->query("UPDATE users SET loggedin ='$loggedin' WHERE email='$email'") or die($mysqli->error);

         $_SESSION["login_id"] = $login_id;
         $_SESSION['email'] = $user['email'];
         
        session_regenerate_id();
        $_SESSION['logged_in'] = true;
        
        if(isset($_SESSION['url'])) 
        $url = $_SESSION['url'];
        else 
        $url = "dashboard"; 

        header("location: $url");
        exit;
    }
    else {
        $_SESSION['errprompt'] = "You have entered wrong password, try again!";
      
        $mysqli->query("UPDATE users SET login_attempt = login_attempt + 1 WHERE  email='$email'") or die($mysqli->error);
      
                        $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

                        $user = $result->fetch_assoc();
                 
                        $_SESSION['login_attempt'] = $user['login_attempt'];
   
                        echo "<meta http-equiv='refresh' content='0'>";
                        exit;
       
    }
  }  
 
}

else{
  
  if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
      $secret = '6LeTVlUUAAAAAOjlIGx4JkYdL92M6RTVEkk7ZyM5';
    //get verify response data
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);
    if($responseData->success){
     
     
      
            $stmt = $mysqli->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->bind_param("s", $_POST['email']);
            $stmt->execute();
            $result = $stmt->get_result();
          
            if ( $result->num_rows == 0 ){ 
                 $_SESSION['errprompt'] = "User with that email doesn't exist!";
                 echo "<meta http-equiv='refresh' content='0'>";
                 exit;
            }
            else { 
                 $user = $result->fetch_assoc();
                 
                 if ( password_verify($_POST['password'], $user['password']) ) {
                 
                      $mysqli->query("UPDATE users SET login_attempt = 0 WHERE  email='$email'") or die($mysqli->error);
                      
                      date_default_timezone_set('Asia/Kolkata');
                      $timestamp = time();
                      $loggedin = date("d-m-Y (D) H:i:s", $timestamp);
                      $last_activity = date("d-m-Y (D) H:i:s", $timestamp);
                      $user_id = $user['id'];
                      
                      $sql = "INSERT INTO login_details (user_id, last_activity) " . "VALUES ('$user_id', '$last_activity')";
                      
                      if ($mysqli ->query($sql) === TRUE) {
                          $login_id = $mysqli ->insert_id;
                      } else {
                          echo "Error: " . $sql . "<br>" . $mysqli ->error;
                      }
                      
                      $mysqli->query("UPDATE users SET loggedin ='$loggedin' WHERE email='$email'") or die($mysqli->error);
                      
                      $_SESSION["login_id"] = $login_id;
                      $_SESSION['email'] = $user['email'];
                      $_SESSION['logged_in'] = true;
                       
                      if(isset($_SESSION['url'])) 
                         $url = $_SESSION['url'];
                      else 
                         $url = "dashboard"; 
                         
                         header("location: $url");
                         exit;
                 }
                 else {
                      $_SESSION['errprompt'] = "You have entered wrong password, try again!";
                      
                      $mysqli->query("UPDATE users SET login_attempt = login_attempt + 1 WHERE  email='$email'") or die($mysqli->error);
                      
                      $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");
                      $user = $result->fetch_assoc();
                      $_SESSION['login_attempt'] = $user['login_attempt'];
                      echo "<meta http-equiv='refresh' content='0'>";
                      exit;
                      }
            }  
    }else{
        $_SESSION['errprompt'] = 'Robot verification failed, please try again.';
           echo "<meta http-equiv='refresh' content='0'>";
           exit;
         }
  }else{
    $_SESSION['errprompt'] = 'Please click on the reCAPTCHA box.';
        echo "<meta http-equiv='refresh' content='0'>";
        exit;
       }

       
}

?>