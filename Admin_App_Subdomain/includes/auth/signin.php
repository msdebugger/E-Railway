<?php
$username = $_POST['username']; 
if($attempt <= 5)
{

$stmt = $mysqli->prepare("SELECT * FROM admins WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
  
if ( $result->num_rows == 0 ){ 
    $_SESSION['errprompt'] = "User with that username doesn't exist!";
      echo "<meta http-equiv='refresh' content='0'>";
      exit;
}
else { 
    $user = $result->fetch_assoc();

    if ( password_verify($_POST['password'], $user['password']) ) {
      $at_reset = 0;
      $stmt = $mysqli->prepare("UPDATE admins SET login_attempt = ? WHERE  username= ?");
      $stmt->bind_param("is", $at_reset, $username);
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
         $mysqli->query("UPDATE admins SET last_login ='$loggedin' WHERE username ='$username'") or die($mysqli->error);

         $_SESSION["log_id"] = $login_id;
         $_SESSION['username'] = $user['username'];
         
        
        $_SESSION['log_in'] = true;
        
        if(isset($_SESSION['url'])) 
        $url = $_SESSION['url'];
        else 
        $url = "dashboard"; 

        header("location: $url");
        exit;
    }
    else {
        $_SESSION['errprompt'] = "You have entered wrong password, try again!";
      
        $mysqli->query("UPDATE admins SET login_attempt = login_attempt + 1 WHERE  username ='$username'") or die($mysqli->error);
      
                        $result = $mysqli->query("SELECT * FROM admins WHERE username ='$username'");

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
     
     
      
            $stmt = $mysqli->prepare("SELECT * FROM admins WHERE username = ?");
            $stmt->bind_param("s", $_POST['username']);
            $stmt->execute();
            $result = $stmt->get_result();
          
            if ( $result->num_rows == 0 ){ 
                 $_SESSION['errprompt'] = "User with that username doesn't exist!";
                 echo "<meta http-equiv='refresh' content='0'>";
                 exit;
            }
            else { 
                 $user = $result->fetch_assoc();
                 
                 if ( password_verify($_POST['password'], $user['password']) ) {
                 
                      $mysqli->query("UPDATE admin SET login_attempt = 0 WHERE  username = '$username'") or die($mysqli->error);
                      
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
                      
                      $mysqli->query("UPDATE admins SET last_login ='$loggedin' WHERE username ='$username'") or die($mysqli->error);
                      
                      $_SESSION["log_id"] = $login_id;
                      $_SESSION['username'] = $user['username'];
                      $_SESSION['log_in'] = true;
                       
                      if(isset($_SESSION['url'])) 
                         $url = $_SESSION['url'];
                      else 
                         $url = "dashboard"; 
                         
                         header("location: $url");
                         exit;
                 }
                 else {
                      $_SESSION['errprompt'] = "You have entered wrong password, try again!";
                      
                      $mysqli->query("UPDATE admins SET login_attempt = login_attempt + 1 WHERE  username ='$username'") or die($mysqli->error);
                      
                      $result = $mysqli->query("SELECT * FROM admins WHERE username ='$username'");
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