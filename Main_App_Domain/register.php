<?php 
require 'includes/netgear/db9.php';
require 'includes/netgear/out_session.php';
require 'includes/global/functions.php';
require 'includes/global/site_settings.php';

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Register | ACPCE Railway Concession Portal</title>
     <link rel="shortcut icon" href="../../dist/img/acpce.ico"/>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">

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
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['register'])) { 
        
        require 'includes/auth/signup.php';
        
    }
}
?>

<body>
<div class="register-box">
  <div class="register-logo" >
  <span style="color: white;"><img src="../../dist/img/rc_logo_55x50.png" width="55" height="50"> <b>Railway</b> Concession</span>
  </div>
         
  <div class="register-box-body">
    <p class="login-box-msg"> <?php 

  if(isset($_SESSION['prompt'])){
          showPrompt();
     unset($_SESSION['prompt']);
        }
  if(isset($_SESSION['errprompt'])){
          showError();
     unset($_SESSION['errprompt']);
        }
  
 ?></p>
       <p class="login-box-msg">Sign Up and create your account</p>
    <form action="register" method="post" data-toggle="validator" role="form" id="myform">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="First Name" name='firstname' required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Last Name" name='lastname' required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" data-error="Oops! That Email is Invaild" name="email" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <div class="help-block with-errors"></div>
      </div>
        <div class="form-group has-feedback">
             <select class="y-year form-control select2"  style="width: 100%;"  data-error="Please Select Year" name="year" required>
                  <option value="">Year/Course</option>
                  <optgroup label="DIPLOMA SECTION">
                  <option value="F.Y Computer">F.Y Computer</option>
                  <option value="S.Y Computer">S.Y Computer</option>
                  <option value="T.Y Computer">T.Y Computer</option>
                  <option value="F.Y Electrical">F.Y Electrical</option>
                  <option value="S.Y Electrical">S.Y Electrical</option>
                  <option value="T.Y Electrical">T.Y Electrical</option>
                  <option value="F.Y ExTC">F.Y ExTC.</option>
                  <option value="S.Y ExTC">S.Y ExTC.</option>
                  <option value="T.Y ExTC">T.Y ExTC.</option>
                  </optgroup>
                  <optgroup label="UNDER GRADUATE SECTION">
                  <option value="F.E Computer">F.E Computer</option>
                  <option value="S.E Computer">S.E Computer</option> 
                  <option value="T.E Computer">T.E Computer</option> 
                  <option value="B.E Computer">B.E Computer</option> 
                  <option value="F.E Electrical">F.E Electrical</option>
                  <option value="S.E Electrical">S.E Electrical</option> 
                  <option value="T.E Electrical">T.E Electrical</option> 
                  <option value="B.E Electrical">B.E Electrical</option>
                  <option value="F.E Electronics">F.E Electronics</option>
                  <option value="S.E Electronics">S.E Electronics</option> 
                  <option value="T.E Electronics">T.E Electronics</option> 
                  <option value="B.E Electronics">B.E Electronics</option>
                  <option value="F.E ExTC">F.E ExTC</option>
                  <option value="S.E ExTC">S.E ExTC</option> 
                  <option value="T.E ExTC">T.E ExTC</option> 
                  <option value="B.E ExTC">B.E ExTC</option>
                  <option value="F.E Information Technology">F.E Information Technology</option>
                  <option value="S.E Information Technology">S.E Information Technology</option> 
                  <option value="T.E Information Technology">T.E Information Technology</option> 
                  <option value="B.E Information Technology">B.E Information Technology</option> 
                  <option value="F.E Instrumentation">F.E Instrumentation</option>
                  <option value="S.E Instrumentation">S.E Instrumentation</option> 
                  <option value="T.E Instrumentation">T.E Instrumentation</option> 
                  <option value="B.E Instrumentation">B.E Instrumentation</option> 
                  <option value="F.E Mechanical">F.E Mechanical</option>
                  <option value="S.E Mechanical">S.E Mechanical</option> 
                  <option value="T.E Mechanical">T.E Mechanical</option> 
                  <option value="B.E Mechanical">B.E Mechanical</option> 
                  </optgroup>
                  <optgroup label="POST GRADUATE SECTION">
                  <option value="M.E Computer">M.E Computer</option>
                  <option value="M.E Electrical">M.E Electrical</option> 
                  <option value="M.C.A">M.C.A</option> 
                  <option value="M.M.S">M.M.S</option> 
                   </optgroup>
                </select>
           
        <span class="glyphicon glyphicon form-control-feedback"></span>
        <div class="help-block with-errors"></div>
      </div>
           
         <div class="form-group has-feedback">
          
          <input type="radio" value="Male" name="gender" required> Male &nbsp;
          
          
           <input type="radio" value="Female" name="gender" required> Female
    
       
        <div class="help-block with-errors"></div>
      </div>  

      <div class="form-group has-feedback">
        <input type="password" data-minlength="6" class="form-control" id="pass" placeholder="Password" data-error="Password Must Be Minimum of 6 characters" name='password' required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <div class="help-block with-errors"></div>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control"  data-match="#pass" data-match-error="Hmm!these passwords don't match" placeholder="Retype password" name='cpassword' required>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          <div class="help-block with-errors"></div>
      </div>
     
        <div class="form-group">
          <input class="hidden" data-recaptcha="true" data-error="" required >
       <div class="g-recaptcha" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback" data-sitekey="6LeTVlUUAAAAABYz24TM3BgYPzgPi8Vt8ut8xyx3"></div>     
           <div class="help-block with-errors"></div>
       </div>
   

      <div class="row">
        <div class="col-xs-8">
          <div class="form-group">
        
         By clicking Sign Up, you agree to the <a href="#" data-toggle="modal" data-target="#terms_privacy" id="trigger-btn" >terms</a>
            
        </div>
       </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="register">Sign Up</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <br>
    Already have an account?<a href="login" class="text-center"> Login</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->


<div class="modal fade modal-fullscreen" id="terms_privacy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">ACPCE Railway Concession System</h4>
        </div>
        <div class="modal-body">
          <div class="row">
        <div class="col-xs-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#terms" data-toggle="tab">Terms and Condition</a></li>
              <li><a href="#privacy" data-toggle="tab">Privacy Policy</a></li>
            </ul>
            <div class="tab-content">
              <!-- Terms -->
              <div class="tab-pane active" id="terms">
               <?php require 'includes/content/terms.html'; ?>
              </div>
              <!-- /#terms -->

              <!-- privacy policy -->
              <div class="tab-pane" id="privacy">
                <?php require 'includes/content/privacy.html'; ?>
              </div>
              <!-- /#privacy -->

            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script src="../../dist/js/validator.min.js"></script>
<script src="../../dist/js/register.min.js"></script>

</body>
</html>
<?php
 
  unset($_SESSION['prompt']);
  unset($_SESSION['errprompt']);


?>