<?php
require 'includes/netgear/db9.php';
require 'includes/netgear/in_session.php';
require 'includes/global/functions.php';
require 'includes/global/site_settings.php';
?>
<!DOCTYPE html>
<html>
<head>
	<?php $title = $_GET['rid']; ?>
	<?php require 'includes/global/main_head.php'; ?>
	<style type="text/css" media="print">
		@page { 
			size: landscape;
		}
		@media print {
			.header, .hide { visibility: hidden }
		}
	</style>
</head>
<body class="hold-transition <?php echo $body_skin; ?> sidebar-mini">


      <?php require 'includes/content/content_concession_print.php'; ?>


 
<!-- REQUIRED JS SCRIPTS -->
<script type="text/javascript">
    function PrintWindow() {                    
       window.print();            
       CheckWindowState();
    }

    function CheckWindowState()    {           
        if(document.readyState=="complete") {
            window.close(); 
        } else {           
            setTimeout("CheckWindowState()", 2000)
        }
    }
    PrintWindow();
</script>

  <?php require 'includes/global/main_foot.php'; ?>

</body>
</html>
