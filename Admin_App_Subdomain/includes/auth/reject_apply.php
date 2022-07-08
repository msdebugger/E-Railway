<?php
		$rid = $_POST['rid'];
		$reason = $_POST['reject_reason'];
		$sql = "UPDATE apply_request SET reject_reason = '$reason', frmfill = 0, frmup = 0, reject = 1 WHERE rid = '$rid'";

		if($mysqli->query($sql)){
			$_SESSION['prompt'] = "Concession request REJECTED!";
             echo"<script>location.href = '../../fresh_verification';</script>";
		}else{
			$_SESSION['errprompt'] = "Something went wrong";
            echo "<meta http-equiv='refresh' content='0'>";
            exit;
		}     
?>