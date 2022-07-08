<?php 
$uri = $_SERVER['REQUEST_URI'];
require 'includes/netgear/db9.php';
require 'includes/global/functions.php';
session_start();
session_regenerate_id(true);

if(isset($_SESSION['login_id'])) {
     header("Location: dashboard"); 
     exit; 

}

if( isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['selector']) && !empty($_GET['selector']) AND isset($_GET['token']) && !empty($_GET['token']) )
{
    $email = $mysqli->escape_string($_GET['email']); 
    $selector = $mysqli->escape_string($_GET['selector']);
    $token = $mysqli->escape_string($_GET['token']); 


    $stmt = $mysqli->prepare("SELECT * FROM password_reset WHERE email = ? AND selector= ? AND token= ?");
    $stmt->bind_param("sss", $_GET['email'],$_GET['selector'],$_GET['token']);
    $stmt->execute();
    $result = $stmt->get_result();

    if ( $result->num_rows == 0 )
    { 
        //$_SESSION['errprompt'] = "You have entered invalid URL for password reset!";
        header("location: ../../link-expired"); 
        exit; 
    }
}
else {
    //$_SESSION['errprompt'] = "Sorry, verification failed, try again!";
    header("location: ../../link-expired"); 
        exit;
   
}
?>
<?php


if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) 
{

    require 'includes/auth/resetpass.php';
}
?>
<!--Tony-->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Reset Password | ACPCE Railway Concession Portal</title>
    <link rel="shortcut icon" href="../../dist/img/acpce.ico"/>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
     <style>
body {
    background-image: url("../../dist/img/s3.jpg");
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
     <p class="login-box-msg">Reset Your Password</p>

    <form  method="post" data-toggle="validator" role="form" id="myform">
      <div class="form-group has-feedback">
        <input type="password" data-minlength="6" class="form-control" id="pass" placeholder="New Password" data-error="Password Must Be Minimum of 6 characters" name='newpassword' required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <div class="help-block with-errors"></div>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control"  data-match="#pass" data-match-error="Hmm!these passwords don't match" placeholder="Retype password" name='confirmpassword' required>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          <div class="help-block with-errors"></div>
      </div>


      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
             <input type="hidden" name="email" value="<?= $email ?>">    
             <input type="hidden" name="selector" value="<?= $selector ?>">    
             <input type="hidden" name="token" value="<?= $token ?>">    

          <button type="submit" class="btn btn-primary btn-block btn-flat">Reset</button>
        </div>
        <!-- /.col -->
      </div>
    </form><br>

 
  

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../../dist/js/validator.min.js"></script>
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