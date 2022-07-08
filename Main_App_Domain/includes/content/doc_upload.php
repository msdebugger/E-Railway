<?php 
	#Initialize Values from DB 
	$updocs = $mysqli->query("SELECT * FROM users WHERE id= $uid");
				$get_docs = $updocs->fetch_assoc();
				$receipt_doc =  $get_docs['receipt_doc'];
                $clgid    = $get_docs['clgid'];
                $castcert = $get_docs['castcert'];
    
                    
    $updocs2 = $mysqli->query("SELECT * FROM renew_request WHERE uid= $uid");
				$get_ppass =  $updocs2->fetch_assoc();
                $ppass     =  $get_ppass['ppass'];
	
	$updocs3 = $mysqli->query("SELECT * FROM apply_request WHERE uid= $uid AND done = 0");
				$get_na =  $updocs3->fetch_assoc();
                $new_student   =  $get_na['new_student'];
				

?>
<!-- Documents Upload box -->
<div class="box">
	<form  method="post" enctype="multipart/form-data">
		<div class="box-header with-border">
			<h3 class="box-title">Upload required document to compelte concession request form <?php echo $receipt_doc; ?></h3>           
			<div class="box-tools pull-right">
           
			</div>
        </div>
		<div class="box-body">
			<?php
				if($new_student == 1){
					require 'includes/content/doc_upload_receipt.php';
				}else{
					require 'includes/content/doc_upload_idcard.php';
				}
			?>
			<?php 
				if($ucast == "S.T" || $ucast == "S.C" || $ucast == "O.B.C" || $ucast == "N.T"){
					require 'includes/content/doc_upload_cast.php';
				} 
			?>

			<?php 
				if($title == "Renew"){
					require 'includes/content/doc_upload_ppass.php';
				}
			?>
		</div>
		<!-- /.box-body -->
        <div class="box-footer">
			<div class="pull-left">
				<button type="submit" class="btn btn-primary" name="goback"> Back</button>
			</div>
			<div class="pull-right">
				<button type="submit" class="btn btn-primary" name="requp"> Submit Form</button>
			</div>
        </div>
        <!-- /.box-footer-->
    </form>
</div>
<!-- /.box -->
	  
	<?php  
		require'includes/modal/modal-Documents-Preview.php'; 
	?>

<?php

#Submit Button(s) Responder
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	#Receipt Upload and Validation
	if(isset($_POST["receipt_up"])){
		$target_dir = "documents/";
		$target_file = $target_dir . basename($_FILES["doc_receipt"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		$imageFileType = strtolower($imageFileType);
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){
			$_SESSION['errprompt'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			echo"<meta http-equiv='refresh' content='0'>";
			exit;
			$uploadOk = 0;
		}else{
			if($uploadOk == 0) {
				$_SESSION['errprompt'] = "Sorry, Your file was not uploaded.";
				echo"<meta http-equiv='refresh' content='0'>";
				exit;
            }else{
				$hashh = time().mt_rand();
				$savename = $hashh;
				$saveas = $target_dir."FEERCPT".$savename.".".$imageFileType;
                if(move_uploaded_file($_FILES["doc_receipt"]["tmp_name"], $saveas)){	
					$mysqli->query("UPDATE users SET receipt_doc ='$saveas' WHERE id ='$uid'") or die($mysqli->error);  
					$_SESSION['prompt'] = "Fee Receipt Uploaded";
					echo"<meta http-equiv='refresh' content='0'>";
					exit;
				}else{
					$_SESSION['errprompt'] = "Sorry, there was an error uploading your file.";
					echo"<meta http-equiv='refresh' content='0'>";
					exit;
                }
            }
        }
    }
	

    #College ID Card Upload and Validation
	if(isset($_POST["idup"])){
		$target_dir = "documents/";
		$target_file = $target_dir . basename($_FILES["idproof"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		$imageFileType = strtolower($imageFileType);
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){
			$_SESSION['errprompt'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			echo"<meta http-equiv='refresh' content='0'>";
			exit;
			$uploadOk = 0;
		}else{
			if($uploadOk == 0) {
				$_SESSION['errprompt'] = "Sorry, Your file was not uploaded.";
				echo"<meta http-equiv='refresh' content='0'>";
				exit;
            }else{
				$hashh = time().mt_rand();
				$savename = $hashh;
				$saveas = $target_dir."CLGID".$savename.".".$imageFileType;
                if(move_uploaded_file($_FILES["idproof"]["tmp_name"], $saveas)){	
					$mysqli->query("UPDATE users SET clgid ='$saveas' WHERE id ='$uid'") or die($mysqli->error);  
					$_SESSION['prompt'] = "College ID Uploaded";
					echo"<meta http-equiv='refresh' content='0'>";
					exit;
				}else{
					$_SESSION['errprompt'] = "Sorry, there was an error uploading your file.";
					echo"<meta http-equiv='refresh' content='0'>";
					exit;
                }
            }
        }
    }
    

	#Cast Certificate Upload and Validation
    if(isset($_POST["ccup"])){
		$target_dir = "documents/";
        $target_file = $target_dir . basename($_FILES["castproof"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $imageFileType = strtolower($imageFileType);
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
			$_SESSION['errprompt'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            echo "<meta http-equiv='refresh' content='0'>";
            exit;
            $uploadOk = 0;
        }else{
			if($uploadOk == 0){
				$_SESSION['errprompt'] = "Sorry, Your file was not uploaded.";
				echo "<meta http-equiv='refresh' content='0'>";
				exit;
            }else{
				$hashh = time().mt_rand();
				$savename = $hashh;
				$saveas = $target_dir."CASTCERT".$savename.".".$imageFileType;
				if(move_uploaded_file($_FILES["castproof"]["tmp_name"], $saveas)){
					$mysqli->query("UPDATE users SET castcert ='$saveas' WHERE id ='$uid'") or die($mysqli->error);
					$_SESSION['prompt'] = "Cast Certificate Uploaded";
					echo "<meta http-equiv='refresh' content='0'>";
					exit;
                }else{
					$_SESSION['errprompt'] = "Sorry, there was an error uploading your file.";
					echo "<meta http-equiv='refresh' content='0'>";
					exit;
                }
			}
		}
    }

	#Previous/Current Pass Document Upload and Validation
	if(isset($_POST["ppup"])){
		$target_dir = "documents/";
        $target_file = $target_dir . basename($_FILES["ppass"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $imageFileType = strtolower($imageFileType);
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){
			$_SESSION['errprompt'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            echo "<meta http-equiv='refresh' content='0'>";
            exit;
            $uploadOk = 0;
		}else{
			if($uploadOk == 0){   
				$_SESSION['errprompt'] = "Sorry, Your file was not uploaded.";
				echo "<meta http-equiv='refresh' content='0'>";
				exit;
            }else{
                $hashh = time().mt_rand();
                $savename = $hashh;
                $saveas = $target_dir."PPASS".$savename.".".$imageFileType;
                if(move_uploaded_file($_FILES["ppass"]["tmp_name"], $saveas)){
                    if($title == "Renew"){
						$mysqli->query("UPDATE renew_request SET ppass ='$saveas' WHERE rid ='$rid'") or die($mysqli->error);
						$_SESSION['prompt'] = "Current Pass Uploaded";
						echo "<meta http-equiv='refresh' content='0'>";
						exit;
					}
				}else{
					$_SESSION['errprompt'] = "Sorry, there was an error uploading your file.";
					echo "<meta http-equiv='refresh' content='0'>";
					exit;
                }
            }
        }
    }

	#Form Submission and Validation
    if(isset($_POST["requp"])){
		if($title == "Apply"){
			if($new_student){
				if(!$receipt_doc){
					$_SESSION['errprompt'] = "Please upload Fee Receipt";
					echo"<meta http-equiv='refresh' content='0'>";
					exit;
				}
			}else{
				if(!$clgid){
					$_SESSION['errprompt'] = "Please upload college ID card";
					echo"<meta http-equiv='refresh' content='0'>";
					exit;
				}
			}
            if($ucast == "S.T" || $ucast == "S.C" || $ucast == "O.B.C" || $ucast == "N.T"){
				if(!$castcert){
					$_SESSION['errprompt'] = "Please upload Cast Certificate";
					echo"<meta http-equiv='refresh' content='0'>";
					exit;
                }
            }
			if($new_student){
				if($receipt_doc !== 0 || ""){   
					$mysqli->query("UPDATE apply_request SET receipt_doc ='$receipt_doc' WHERE rid ='$rid'") or die($mysqli->error);
				}
			}else{
				if($clgid !== 0 || ""){
					$mysqli->query("UPDATE apply_request SET clgid ='$clgid' WHERE rid ='$rid'") or die($mysqli->error);						
				}
			}
			if($ucast == "S.T" || $ucast == "S.C" || $ucast == "O.B.C" || $ucast == "N.T"){
				$mysqli->query("UPDATE apply_request SET castcert ='$castcert' WHERE rid ='$rid'") or die($mysqli->error);
			}
            $mysqli->query("UPDATE apply_request SET frmup = 1, reject = 0 WHERE rid ='$rid'") or die($mysqli->error);
            $_SESSION['prompt'] = "Success:Fresh concession request submitted";
            echo"<meta http-equiv='refresh' content='0'>";
            exit;
   
        }elseif($title == "Renew"){
			if(!$clgid){
                $_SESSION['errprompt'] = "Please upload college ID card";
                echo "<meta http-equiv='refresh' content='0'>";
                exit;
            }
			if($ucast == "S.T" || $ucast == "S.C" || $ucast == "O.B.C" || $ucast == "N.T"){
				if(!$castcert){
					$_SESSION['errprompt'] = "Please upload Cast Certificate";
					echo"<meta http-equiv='refresh' content='0'>";
					exit;
                }
            }
			if(!$ppass){
				$_SESSION['errprompt'] = "Please upload Current Pass";
				echo"<meta http-equiv='refresh' content='0'>";
                exit;
            }
			if($clgid !== 0 || ""){
				$mysqli->query("UPDATE renew_request SET clgid ='$clgid' WHERE rid ='$rid'") or die($mysqli->error);
					if($ucast == "S.T" || $ucast == "S.C" || $ucast == "O.B.C" || $ucast == "N.T"){
						$mysqli->query("UPDATE renew_request SET castcert ='$castcert' WHERE rid ='$rid'") or die($mysqli->error);
					}
                    $mysqli->query("UPDATE renew_request SET frmup = 1, reject = 0 WHERE rid ='$rid'") or die($mysqli->error);
                $_SESSION['prompt'] = "Sucess:Renwal request submitted";
                echo "<meta http-equiv='refresh' content='0'>";
                exit;  
			}
		}
	}
}

?>