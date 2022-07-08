<?php
    
    date_default_timezone_set('Asia/Kolkata');
    $request_time = time(); 
    $the_one = 1;

    $stmt = $mysqli->prepare("UPDATE apply_request SET  fname = ?, lname = ?, year = ?, prn = ?, cast = ?, gender = ?, dob = ?, age = ?, address = ?, station = ?, via = ?, class = ?, period = ?, time_stamp = ?, frmfill = ? WHERE rid = ?");
    $stmt->bind_param("ssssssssssssssss",
	$_POST['fname'],
    $_POST['lname'],
    $_POST['year'],
    $_POST['prn'],
    $_POST['cast'], 
    $_POST['gender'],
    $_POST['dob'],
    $_POST['age'],
	$_POST['address'],
    $_POST['station'],
    $_POST['via'], 
    $_POST['class'],
    $_POST['period'],
	$request_time,
    $the_one,
	$rid);

                  
        if($stmt->execute()){
           echo "<meta http-equiv='refresh' content='0'>";
           exit;
          } 
       else{
           $_SESSION['errprompt'] = 'Submit Failed. Please try again.';
           echo "<meta http-equiv='refresh' content='0'>";
           exit;
           }
             
?>   