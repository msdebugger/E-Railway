<?php
require 'includes/netgear/db9.php';
require 'includes/netgear/in_session.php';
require 'includes/global/functions.php';
require 'includes/global/site_settings.php';
?>
<!DOCTYPE html>
<html lang="en-IN">
	<head>
        <?php $title = "Settings"; ?>
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
					 Account Settings
						<small></small>
					</h1>
				</section>
				
				<section class="content container-fluid">
					<?php require 'includes/content/settings_content.php'; ?>
				</section>
			</div>
			
			<footer class="main-footer">
				<?php require 'includes/global/footer.php'; ?>  
			</footer>
		</div>
		
        <?php require 'includes/global/main_foot.php'; ?>

        <?php require 'includes/modal/modal-ContactForm.php';?>
        <?php if ( $active == 2 ){require 'includes/modal/modal-Blocked.html'; }?>  
	</body>
</html>
<?php require 'includes/auth/contact_form.php'; ?>
