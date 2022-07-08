<div class="box box-default ">
		<div class="box-body">
		<div class="error-page">
        <h2 class="headline text-red"><i class="fa fa-times text-red"></i></h2>
        <div class="error-content">
          <h3>Nice Try <?php echo $first_name; ?></h3>

          <p>
			<?php 
			if(!$active){
				echo"Please first confirm your email i.e <b>$email</b> and activate your account. Click <a href=\"../../dashboard\">here</a> to go back to your dashboard."; 
			}
			if($active == 2){
				echo"Please Unblock your account first. Click <a href=\"../../dashboard\">here</a> to go back to your dashboard.";
			}
			?>
		  </p>
         
        </div>
        <!-- /.error-content -->
        </div>
        <!-- /.box-body -->
      </div>