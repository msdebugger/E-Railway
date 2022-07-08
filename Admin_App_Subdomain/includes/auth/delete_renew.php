<?php
        $rid = $_POST['rid'];
        $delete = mysqli_query($mysqli, "DELETE FROM renew_request WHERE rid='$rid'");
				if($delete){
					$_SESSION['prompt'] = "Concession Request Deleted Sucessfully";
                    echo"<script>location.href = '../../renewal_verification';</script>";
				}else{
					$_SESSION['errprompt'] = "DELETE failed";
                    echo "<meta http-equiv='refresh' content='0'>";
                    exit;
				}
?>