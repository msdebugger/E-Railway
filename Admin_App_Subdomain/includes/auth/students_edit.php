<?php

		$id = $_POST['id'];
		$firstname = $_POST['first_name'];
		$lastname = $_POST['last_name'];
		$prn = $_POST['prn'];
        $status =$_POST['active'];
		$sql = "UPDATE users SET first_name = '$firstname', last_name = '$lastname', prn = '$prn', active = '$status' WHERE id = '$id'";


		if($mysqli->query($sql)){
			$_SESSION['prompt'] = "Student's record updated successfully";
            echo "<meta http-equiv='refresh' content='0'>";
            exit;
		}
	
		
		else{
			$_SESSION['errprompt'] = "Something went wrong in updating Student's record";
            echo "<meta http-equiv='refresh' content='0'>";
            exit;
		}
?>