<?php

if(isset($_POST['ce']))
{
    $changemail = $mysqli->escape_string($_POST['chm']);
    $result = $mysqli->query("SELECT * FROM users WHERE email='$changemail'") or die($mysqli->error());


if ( $result->num_rows > 0 ) {
    
     $_SESSION['errprompt'] = 'User with this email already exists!';
     echo "<meta http-equiv='refresh' content='0'>";
     exit;
    
}
else { 
     $haa = $mysqli->escape_string( md5( uniqid() ) );
     $sql = "UPDATE users SET email='$changemail', hash='$haa' WHERE id='$id'";

    
    if ( $mysqli->query($sql) ){

      $_SESSION['email'] = $changemail;            
      $_SESSION['prompt'] = "Email Changed";
       
        include '../../includes/mailman/change_email_mail.php';

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