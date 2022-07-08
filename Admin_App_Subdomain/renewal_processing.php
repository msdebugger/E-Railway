<?php
require 'includes/netgear/db9.php';
require 'includes/netgear/in_session.php';
require 'includes/global/functions.php';
require 'includes/global/site_settings.php';
?>
<!DOCTYPE html>
<html>
<head>
  <?php $title = "Renewal Processing"; ?>
  <?php require 'includes/global/main_head.php'; ?>
  
</head>
<body class="hold-transition <?php echo $body_skin; ?> sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
      <?php require 'includes/global/logo.php'; ?>

    <!-- Header Navbar -->
      <?php require 'includes/global/top_navbar.php'; ?>
    
  </header>
  
     <?php require 'includes/global/main_sidebar.php'; ?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

   <?php require 'includes/global/flash_message.php'; ?>
   
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Renewal Processing
        <small></small>
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <?php require 'includes/content/content_renewal_processing.php'; ?>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <?php require 'includes/global/footer.php'; ?>
  </footer>

 
</div>
<!-- ./wrapper -->
 
<!-- REQUIRED JS SCRIPTS -->

  <?php require 'includes/global/main_foot.php'; ?>

</body>
</html>
