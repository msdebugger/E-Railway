
		<!-- Asynchronous Resources -->
		<script src="../../dist/js/Sony.min.js?tony=<?php echo mt_rand(); ?>"></script>
		<!-- jQuery 3 -->
		<script src="../../bower_components/jquery/dist/jquery.min.js"></script> 
		<!-- Bootstrap 3.3.7 -->
		<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<!-- AdminLTE App -->
		<script src="../../dist/js/adminlte.min.js"></script>
		<!-- ThomasJs 1.6.9 -->
		<script src="../../dist/js/Thomas.min.js?tony=<?php echo mt_rand(); ?>"></script>
		<!-- Slimscroll -->
		<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
		<!-- FastClick -->
		<script src="../../bower_components/fastclick/lib/fastclick.min.js"></script>
		<!-- Image Update -->
        <?php 
		if($title === "Edit Profile"){
			echo'<script src="../../dist/js/image_updater_ep.min.js"></script>';
		}else{
			echo'<script src="../../dist/js/image_updater.min.js"></script>';
		}
        ?>
		
		<!-- PACE -->
		<script src="../../bower_components/PACE/pace.min.js"></script>