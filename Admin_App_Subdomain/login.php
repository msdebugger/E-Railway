<?php 
require 'includes/netgear/db9.php';
require 'includes/netgear/out_session.php';
require 'includes/global/functions.php';

$attempt = $_SESSION['login_attempt'];
?>
<!--Tony-->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Login | ACPCE Railway Concession System</title>
    <link rel="shortcut icon" href="dist/img/acpce.ico"/>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- Main Style -->
  <link rel="stylesheet" href="../../dist/css/Annamma.css">
    <style>
        body {
    background-image: url("../../dist/img/s1.jpg");
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
  <script src='https://www.google.com/recaptcha/api.js'></script>
   
<!--<script type="text/javascript">

  if (screen.width <= 700) {
  window.location = "http://www.acpce.in";
  }

</script> -->
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

   <?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) {

        require 'includes/auth/signin.php';
        
    }
    
   
}
?>

<body>
<div class="login-box">
  <div class="login-logo">
  <span style="color: white;"><img src="dist/img/rc_logo_55x50.png" width="55" height="50"> <b>Railway</b> Concession</span>  
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    
    <p class="login-box-msg">  <?php 

  if(isset($_SESSION['prompt'])){
          showPrompt();
     unset($_SESSION['prompt']);
        }
  if(isset($_SESSION['errprompt'])){
          showError();
     unset($_SESSION['errprompt']);
        }
  
 ?> </p>
    <p class="login-box-msg">RCS Admin Panel</p>

    <form action="login" method="post" data-toggle="validator" role="form" id="myform">
      <div class="form-group has-feedback">
        <input type="username" class="form-control" placeholder="Email" data-error="" autocomplete="off" value="tony" name="username" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <div class="help-block with-errors"></div>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control"  placeholder="Password" autocomplete="off" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <?php  if($attempt >= 5)
        {
         echo'<div class="form-group">
          <input class="hidden" data-recaptcha="true" data-error="" required >
       <div class="g-recaptcha" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback" data-sitekey="6LeTVlUUAAAAABYz24TM3BgYPzgPi8Vt8ut8xyx3"></div>     
           <div class="help-block with-errors"></div>
       </div>';
        }
      ?>
      
      
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            
          </div>
        </div>
        <!-- /.col -->
     
        <div class="col-xs-4">
         
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="login">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>    
    
  </div>
  <!-- /.login-box-body -->
 
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- validator -->
<script src="../../dist/js/validator.min.js"></script>
<!-- Ect -->
<script src="../../dist/js/login.min.js"></script>
</body>
</html>