<?php
require 'includes/netgear/db9.php';
require 'includes/netgear/in_session.php';
require 'includes/global/functions.php';
require 'includes/global/site_settings.php';
?>
<!DOCTYPE html>
<html lang="en-IN">
	<head>
        <?php $title = "Renew"; ?>
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
					  Renew 
						<small></small>
					</h1>
				</section>
				
				<section class="content container-fluid">
                <?php require 'includes/global/check_expiry.php'; ?>

					<?php
                    $req = $mysqli->query("SELECT * FROM renew_request WHERE uid= $uid AND done = 0");
                    $frm = $req->fetch_assoc();
					$rid     = $frm['rid'];
                    $ucast   = $frm['cast'];
                    $frmfill = $frm['frmfill'];
                    $frmup   = $frm['frmup'];
                    $req2 = $mysqli->query("SELECT * FROM apply_request WHERE uid= $uid AND done = 0");
                    $frm2 = $req2->fetch_assoc();
                    $acheck  = $frm2['frmfill'];
                    $acheck2 = $frm2['frmup'];
					$aup_frm = $frm2['update_form'];
					$arej	 = $frm2['reject'];

                if(!$active || $active == 2){

                     require 'includes/content/nice_try.php';
                }elseif($expired == 0){
                        require 'includes/content/form_locked.php'; 
                }else{  
                        if($acheck == 1 || $acheck2 == 1 || $aup_frm == 1 || $arej == 1){
                                require 'includes/content/apply_on.php';
                        }elseif($frmup == 1){
                                require 'includes/content/renew_success.php'; 
                        }else{
                                if($frmfill == 0){
                                    require 'includes/content/renew_content.php';
                                }
                                else{
                                    require 'includes/content/doc_upload.php';  
                                }
                        }
                 }   
                     ?>
				</section>
			</div>
			
			<footer class="main-footer">
				<?php require 'includes/global/footer.php'; ?>  
			</footer>
		</div>

        <?php require 'includes/global/main_foot.php'; ?>
        <?php require 'includes/modal/modal-ContactForm.php';?>
		<?php require 'includes/modal/modal-AgeLimit.html';?>
	</body>
</html>
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['req'])){
		require 'includes/auth/renew_info.php';
    }

if (isset($_POST['goback'])){
		require 'includes/auth/renew_goback.php';
    }
	
	if (isset($_POST['upreq'])){
		require 'includes/auth/renew_info_up.php';
    }
	
	if (isset($_POST['cform'])){
        require 'includes/auth/contact_form.php';
    } 
}
?>
