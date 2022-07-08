<?php
require 'includes/netgear/db9.php';
require 'includes/netgear/in_session.php';
require 'includes/global/functions.php';
require 'includes/global/site_settings.php';
?>
<!DOCTYPE html>
<html lang="en-IN">
	<head>
        <?php $title = "Status"; ?>
		<?php require 'includes/global/main_head.php'; ?>
	</head>
	<body class="hold-transition <?php echo $body_skin; ?> sidebar-mini">
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
					 Request Status
						<small></small>
					</h1>
				</section>
				
				<section class="content container-fluid">
					<?php
                    $apy = $mysqli->query("SELECT frmup, reject FROM apply_request WHERE uid= $uid AND done = 0");
                    $chka = $apy->fetch_assoc();
                    $chkapy = $chka['frmup'];
					$areject = $chka['reject'];

                    $rnw = $mysqli->query("SELECT frmup, reject FROM renew_request WHERE uid= $uid AND done = 0");
                    $chkr = $rnw->fetch_assoc();
                    $chkrnw = $chkr['frmup'];
					$rreject = $chkr['reject'];

                    if(!$active || $active == 2){
                       require 'includes/content/nice_try.php'; 
                    }else{
                        if($chkapy == 1 || $chkrnw == 1 || $areject == 1 || $rreject == 1 ){
								require 'includes/content/status_content.php'; 
                         }else{
								require 'includes/content/no_status_content.php';
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
	</body>
</html>
<?php require 'includes/auth/contact_form.php'; ?>
