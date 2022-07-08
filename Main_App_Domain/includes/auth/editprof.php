<?php
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'");
$user = $result->fetch_assoc();


    if ( password_verify($_POST['chkpass'], $user['password']) ){
    $stmt = $mysqli->prepare("UPDATE users SET first_name = ?, 
    last_name = ?, 
    year = ?,  
    prn = ?,  
    gender = ?,
    dob = ?
    WHERE id = ?");
    $stmt->bind_param('sssssss',
    $_POST['fname'],
    $_POST['lname'],
    $_POST['year'],
    $_POST['prn'], 
    $_POST['gender'],
    $_POST['dob'],
    $uid);

        if($stmt->execute()){
             $_SESSION['prompt'] = "Profile information updated";
             echo "<meta http-equiv='refresh' content='0'>";
             exit;
            }
        else{
              $_SESSION['errprompt'] = "Something went wrong. Please try again.";
              echo "<meta http-equiv='refresh' content='0'>";
              exit;
            }
             
   }else{
        $_SESSION['errprompt'] = "You have entered a wrong password";
        echo "<meta http-equiv='refresh' content='0'>";
        exit;
      }
?>   