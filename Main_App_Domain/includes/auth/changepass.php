<?php
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'");
$user = $result->fetch_assoc();


    if ( password_verify($_POST['chkpass'], $user['password']) ) {
    if ( $_POST['newpassword'] == $_POST['confirmpassword'] ) { 

  $new_password = password_hash($_POST['newpassword'], PASSWORD_BCRYPT); 
$change_time = time();
        
        $stmt = $mysqli->prepare("UPDATE users SET     password = ?, 
lastpassup = ?
    WHERE id = ?");
    $stmt->bind_param('sii',
    $new_password,
    $change_time,
    $uid);

        if($stmt->execute()){

        $_SESSION['prompt'] = "Your password has been reset successfully!";
        echo "<meta http-equiv='refresh' content='0'>";
        exit;    

        }

    }
    else {
        $_SESSION['errprompt'] = "Two passwords you entered don't match, try again!";
         echo "<meta http-equiv='refresh' content='0'>";
         exit;   
    }   
       
    }
    else {
        $_SESSION['errprompt'] = "You have entered WRONG Current password, try again!";
         echo "<meta http-equiv='refresh' content='0'>";
         exit;
              }

?>   