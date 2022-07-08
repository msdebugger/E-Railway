<?php
require 'includes/netgear/db9.php';
require 'includes/netgear/in_session.php';
require 'includes/global/functions.php';
require 'includes/global/site_settings.php';
?>
<!DOCTYPE html>
<html lang="en-IN">
	<head>
        <?php $title = "Change/Update Email"; ?>
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
						Change/Update your Email
						<small></small>
					</h1>
				</section>
				
				<section class="content container-fluid">
					<?php require 'includes/content/change_email_content.php'; ?>
				</section>
			</div>
			
			<footer class="main-footer">
				<?php require 'includes/global/footer.php'; ?>  
			</footer>
		</div>
        <?php require 'includes/global/main_foot.php'; ?>         
        <!-- Page script -->
        <script src="../../dist/js/validator.min.js"></script>
        <?php require 'includes/modal/modal-ContactForm.php';?>
	</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['uemail'])) {

        require 'includes/auth/change_email.php';
        
    }

        require 'includes/auth/contact_form.php';

}
?>
