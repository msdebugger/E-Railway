<?php
require 'includes/netgear/db9.php';
require 'includes/netgear/in_session.php';
require 'includes/global/functions.php';
require 'includes/global/site_settings.php';
?>
<!DOCTYPE html>
<html lang="en-IN">
	<head>
        <?php $title = "History"; ?>
		<?php require 'includes/global/main_head.php'; ?>
                <!-- DataTables -->
                <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
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
					 History
						<small></small>
					</h1>
				</section>
				
				<section class="content container-fluid">
               <?php if(!$active || $active == 2){
                       require 'includes/content/nice_try.php'; 
                    }else{
					 require 'includes/content/history_content.php'; 
                    }     
                     ?>
				</section>
			</div>
			
			<footer class="main-footer">
				<?php require 'includes/global/footer.php'; ?>  
			</footer>
		</div>
		
        <?php require 'includes/global/main_foot.php'; ?> 
        <!-- DataTables -->
        <script      src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <!-- page script -->
        <script>
        $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
        'paging' : true,
        'lengthChange': false,
        'searching' : false,
        'ordering' : true,
        'info' : true,
        'autoWidth' : false
        })
        })
        </script>
        <?php require 'includes/modal/modal-ContactForm.php';?>
	</body>
</html>
<?php require 'includes/auth/contact_form.php'; ?>
