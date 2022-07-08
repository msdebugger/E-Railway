<?php 
require 'includes/netgear/db9.php';
require 'includes/global/functions.php';
session_start();
session_regenerate_id(true);

if(isset($_SESSION['login_id'])) {
     header("Location: dashboard"); 
     exit; 
}


require 'includes/global/site_settings.php';
require 'includes/auth/forgotpass.php';

?>
<!--Tony-->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Forgot Password | ACPCE Railway Concession Portal</title>
    <link rel="shortcut icon" href="images/acpce.ico"/>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">
     <style>
body {
    background-image: url("../../dist/img/s5.jpg");
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    
}
</style>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body>
<div class="login-box">
  <div class="login-logo">
  <span style="color: white;"><img src="dist/img/rc_logo.png" width="55" height="50"> <b>Railway</b> Concession</span>  
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"> <?php 

      

        if(isset($_SESSION['errprompt'])) {
          showError();
        }

      ?> </p>

    <form action="forgot" method="post" data-toggle="validator" role="form" id="myform">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" data-error="Oops! That Email is Invaild" autocomplete="off" name="email" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
         <div class="help-block with-errors"></div>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
         
          <button type="submit" class="btn btn-primary btn-block btn-flat">Reset</button>
        </div>
        <!-- /.col -->
      </div>
    </form><br>

  <a href="login" class="text-center"><i class="fa fa-chevron-left"></i> Back to Login</a>
  

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script src="../../js/validator.min.js"></script>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
  <script>
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 12000);

</script>
</body>
</html>
<?php
 
  unset($_SESSION['prompt']);
  unset($_SESSION['errprompt']);



?>