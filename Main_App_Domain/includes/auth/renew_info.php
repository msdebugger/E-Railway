<?php
    
    date_default_timezone_set('Asia/Kolkata');
    $request_time = time(); 
    $frmfill = 1;
    $frequest = $mysqli->query("SELECT MAX(ID)+1 As ID FROM renew_request") or die($mysqli->error());
    $fetid = $frequest->fetch_assoc();
    $last = $fetid["ID"];
        if($last == 0)
        {
            $last++;
        }
    $rcon = sprintf('%05d', $last);
    $rid = "CSN".$rcon."RE";

    $stmt = $mysqli->prepare("INSERT INTO renew_request (rid, uid, fname, lname, year, prn, cast, gender, dob, age, address, station, via, class, period, time_stamp, frmfill) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,?, ?, ?, ?)");
    $stmt->bind_param("sssssssssssssssss",
    $rid,
    $uid,
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
    $frmfill);
                  
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