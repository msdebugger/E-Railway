<?php
require 'includes/netgear/db9.php';
require 'includes/netgear/in_session.php';
require 'includes/global/functions.php';
require 'includes/global/site_settings.php';
?>
<!DOCTYPE html>
<html lang="en-IN">
	<head>
        <?php $title = "Apply"; ?>
		<?php require 'includes/global/main_head.php'; ?>

	</head>
	<body class="hold-transition <?php echo $body_skin; ?> sidebar-collapse sidebar-mini">
		<div class="wrapper">
			
			<header class="main-header">
				
				<?php require 'includes/global/logo.html'; ?>
				
				<?php require 'includes/global/main_navbar.php'; ?>
			</header>
			
			<?php require 'includes/global/main_sidebar.php'; ?>
			
			<div class="content-wrapper">
              <?php require 'includes/global/flash_message.php'; ?>
				
				<section class="content-header">
					<h1>
					  Apply/New Concession for New Admission Students Only.
						<small></a></small>
					</h1>
				</section>
				
				<section class="content container-fluid">
                <?php require 'includes/global/check_expiry.php'; ?>

					<?php
                    $req = $mysqli->query("SELECT * FROM apply_request WHERE uid= $uid AND done = 0");
                    $frm = $req->fetch_assoc();
					$rid     =  $frm['rid'];
                    $ucast   =  $frm['cast'];
                    $frmfill =  $frm['frmfill'];
                    $frmup   =  $frm['frmup'];
                    $req2 = $mysqli->query("SELECT * FROM renew_request WHERE uid= $uid AND done = 0");
                    $frm2 = $req2->fetch_assoc();
                    $rcheck  =  $frm2['frmfill'];
                    $rcheck2 =  $frm2['frmup'];
					$rup_frm =  $frm2['update_form'];
					$rrej	 =  $frm2['reject'];

                    if(!$active || $active == 2){
                       require 'includes/content/nice_try.php'; 
                    }
                    elseif($expired == 0){
                        require 'includes/content/form_locked.php'; 
                    }else{
                        if($rcheck == 1 || $rcheck2 == 1 || $rup_frm == 1 || $rrej == 1){
                            require 'includes/content/renew_on.php';        
                        }elseif($frmup == 1){
                            require 'includes/content/apply_success.php';        
                        }else{
                            if($frmfill == 0){
                                require 'includes/content/new_admission_content.php';
                            }else{
                                require 'includes/content/doc_upload.php';  
                                }
                            }
                    }
                     ?>
                     
				</section>
			</div>
            
			<?php require 'includes/modal/modal-ContactForm.php';?>
			<?php require 'includes/modal/modal-AgeLimit.html';?>
			<footer class="main-footer">
				<?php require 'includes/global/footer.php'; ?>  
			</footer>
		</div>

        <?php require 'includes/global/main_foot.php'; ?>
    
	</body>
</html>
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['req'])){
		require 'includes/auth/apply_info_na.php';
    }
	
	if (isset($_POST['goback'])){
		require 'includes/auth/apply_goback.php';
    }
	
	if (isset($_POST['upreq'])){
		require 'includes/auth/apply_info_up_na.php';
    }
	
	if (isset($_POST['cform'])){
        require 'includes/auth/contact_form.php';
    } 
}
?>
