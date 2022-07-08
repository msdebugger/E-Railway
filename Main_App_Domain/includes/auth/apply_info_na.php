<?php
    
    date_default_timezone_set('Asia/Kolkata');
    $request_time = time(); 
    $the_one = 1;
    $frequest = $mysqli->query("SELECT MAX(ID)+1 As ID FROM apply_request") or die($mysqli->error());
    $fetid = $frequest->fetch_assoc();
    $last = $fetid["ID"];
        if($last == 0)
        {
            $last++;
        }
    $rcon = sprintf('%05d', $last);
    $rid = "CSN".$rcon."FR";

    $stmt = $mysqli->prepare("INSERT INTO apply_request (rid, uid, fname, lname, year, receipt, cast, gender, dob, age, address, station, via, class, period, time_stamp, frmfill, new_student) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssssssssssss",
    $rid,
    $uid,
    $_POST['fname'],
    $_POST['lname'],
    $_POST['year'],
    $_POST['receipt'],
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
	$the_one);

                  
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