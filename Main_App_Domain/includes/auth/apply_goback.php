<?php
    $the_zero = 0;
	$the_one = 1;
	
    $stmt = $mysqli->prepare("UPDATE apply_request SET frmfill = ?, update_form = ? WHERE rid = ?");
    $stmt->bind_param("sss",
    $the_zero,
	$the_one,
	$rid);

                  
        if($stmt->execute()){
           echo "<meta http-equiv='refresh' content='0'>";
           exit;
          } 
       else{
           $_SESSION['errprompt'] = 'There was an error. Try Again.';
           echo "<meta http-equiv='refresh' content='0'>";
           exit;
           }
             
?>   