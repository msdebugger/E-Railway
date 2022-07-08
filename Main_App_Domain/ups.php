<?php
require 'includes/netgear/db9.php';
require 'includes/global/site_settings.php';
session_start();
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['errprompt'] = "Please Log in First!";
  header("location: login"); 
    exit;   
}
else {
    $email = $_SESSION['email'];
    if($unlink_status = 1){
        $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");
        $user = $result->fetch_assoc();
        $small_img =  $user['small'];
        $medium_img =  $user['medium'];
        $delete_sm =  $_SERVER['DOCUMENT_ROOT'] . $small_img;
        $delete_md =  $_SERVER['DOCUMENT_ROOT'] . $medium_img;
    }

require 'includes/global/thumbs.php';
/*defined settings - start*/
ini_set("memory_limit", "99M");
ini_set('post_max_size', '20M');
ini_set('max_execution_time', 600);
define('IMAGE_SMALL_DIR', './uploades/small/');
define('IMAGE_SMALL_SIZE', 50);
define('IMAGE_MEDIUM_DIR', './uploades/medium/');
define('IMAGE_MEDIUM_SIZE', 250);
/*defined settings - end*/



if(isset($_FILES['image_upload_file'])){
	$output['status']=FALSE;
	set_time_limit(0);
	$allowedImageType = array("image/gif",   "image/jpeg",   "image/pjpeg",   "image/png",   "image/x-png"  );
	
	if ($_FILES['image_upload_file']["error"] > 0) {
		$output['error']= "Error in File";
	}
	elseif (!in_array($_FILES['image_upload_file']["type"], $allowedImageType)) {
		$output['error']= "You can only upload JPG, PNG and GIF file";
	}
	elseif (round($_FILES['image_upload_file']["size"] / 1024) > 4096) {
		$output['error']= "You can upload file size up to 4 MB";
	} else {
		/*create directory with 777 permission if not exist - start*/
		createDir(IMAGE_SMALL_DIR);
		createDir(IMAGE_MEDIUM_DIR);
		/*create directory with 777 permission if not exist - end*/
		$path[0] = $_FILES['image_upload_file']['tmp_name'];
		$file = pathinfo($_FILES['image_upload_file']['name']);
		$fileType = $file["extension"];
		$desiredExt='jpg';
		$fileNameNew = mt_rand(333, 999) . time() . ".$desiredExt";
		$path[1] = IMAGE_MEDIUM_DIR . $fileNameNew;
		$path[2] = IMAGE_SMALL_DIR . $fileNameNew;
        $med = $path[1];
        $small = $path[2];
		
		if (createThumb($path[0], $path[1], $fileType, IMAGE_MEDIUM_SIZE, IMAGE_MEDIUM_SIZE,IMAGE_MEDIUM_SIZE)) {
			
			if (createThumb($path[1], $path[2],"$desiredExt", IMAGE_SMALL_SIZE, IMAGE_SMALL_SIZE,IMAGE_SMALL_SIZE)) {
              
				$output['status']=TRUE;
				$output['image_medium']= $path[1];
				$output['image_small']= $path[2];
                if($unlink_status = 1){
                    unlink($delete_sm);
                    unlink($delete_md);
                    $mysqli->query("UPDATE users SET medium ='$med', small ='$small'  WHERE email='$email'");
                }else{
                    $mysqli->query("UPDATE users SET medium ='$med', small ='$small'  WHERE email='$email'");
                }
                        
			}
		}
	}
	echo json_encode($output);
}
}
?>	