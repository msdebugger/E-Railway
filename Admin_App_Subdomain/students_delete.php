<?php
require 'includes/netgear/db9.php';

	session_start();
	
	if(isset($_GET['id'])){
		$sql = "DELETE FROM users WHERE id = '".$_GET['id']."'";

		
		if($mysqli->query($sql)){
			$_SESSION['prompt'] = "Record deleted successfully";
		}
		
		
		else{
			$_SESSION['errprompt'] = "Something went wrong in deleting record";
		}
	}
	else{
		$_SESSION['errprompt'] = "Select record to delete first";
	}

	header('location: students');
?>