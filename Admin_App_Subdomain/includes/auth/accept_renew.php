<?php
		$vtime = time();
    	$rid = $_POST['rid'];
		$sql = "UPDATE renew_request SET verify = 1, vtime = $vtime WHERE rid = '$rid'";

		if($mysqli->query($sql)){
			$_SESSION['prompt'] = "Concession request VERIFIED and ACCEPTED!";
             echo"<script>location.href = '../../renewal_verification';</script>";
		}else{
			$_SESSION['errprompt'] = "Something went wrong";
            echo "<meta http-equiv='refresh' content='0'>";
            exit;
		}      
?>