<?php
if (!$active) {
    echo '
<div class="callout callout-danger">
						<h4>Account Not Verifed</h4>
						<p><b>' . $fn . '</b> your account is unverified, please confirm your email i.e <b>' . $email . '</b> by clicking on the verification link sent to your mail. Entered a wrong email? change <a href="#" data-toggle="modal" data-target="#ChangeMail" ><b>here</b></a></p>';
                        if (!$rsd) {
                            echo '
						<p><b>Did not receive confirmation mail? Resend Verification Link. (Please wait at least 10-15 mins before re-sending)</b></p>
						<form method="post" action="dashboard">
							<button type="submit" name="resend" class="btn btn-success"><span class="glyphicon glyphicon-send"></span> Resend Mail
                            </button>
						</form>';
                         } else {
                        echo '<p>Mail <b>RESENDED</b>. Check your spam box if not found in inbox.</p>
                              <p style="color:white;">Note: <i>Please wait at least 10-15 minutes. If you need help contact us <a href="#" data-toggle="modal" data-target="#Contact" style="color:white;" ><b>here</b></a>.</i></p>';                
    }               
			  echo '</div>';
}                      
?>					
					<div class="row">
						<div class="col-lg-3 col-xs-6">
							
							<a href="<?php if(!$active){echo"#";}elseif($active == 2){echo"#";} elseif($admission_season == 1){echo"#";} else{echo"apply";} ?>" <?php if(!$active){echo"data-toggle='modal' data-target='#NotActive'";}elseif($active == 2){echo"data-toggle='modal' data-target='#Blocked'";} elseif($admission_season == 1){echo"data-toggle='modal' data-target='#AdmissionSeason'";} else{echo"";} ?>>
								<div class="small-box bg-aqua <?php if($active == 2){echo 'rcs-disabled';}?>">
									<div class="inner">
										<h3>Apply</h3>
										<p>Request for new concession</p>
									</div>
									<div class="icon">
										<i class="fa fa-file"></i>
									</div>
								</div>
							</a>
						</div>
						
						<div class="col-lg-3 col-xs-6">
							
							<a href="<?php if(!$active){echo"#";}elseif($active == 2){echo"#";}else{echo"renew";} ?>" <?php if(!$active){echo"data-toggle='modal' data-target='#NotActive'";}elseif($active == 2){echo"data-toggle='modal' data-target='#Blocked'";}else{echo"";} ?>>
								<div class="small-box bg-green <?php if($active == 2){echo 'rcs-disabled';}?>">
									<div class="inner">
										<h3>Renew</h3>
										<p>Request concession for expiring pass</p>
									</div>
									<div class="icon">
										<i class="fa fa-repeat"></i>
									</div>
								</div>
							</a>
						</div>
						
						<div class="col-lg-3 col-xs-6">
							
							<a href="<?php if(!$active){echo"#";}elseif($active == 2){echo"#";}else{echo"status";} ?>" <?php if(!$active){echo"data-toggle='modal' data-target='#NotActive'";}elseif($active == 2){echo"data-toggle='modal' data-target='#Blocked'";}else{echo"";} ?>>
								<div class="small-box bg-yellow <?php if($active == 2){echo 'rcs-disabled';}?>">
									<div class="inner">
										<h3>Status</h3>
										<p>See progress of your request</p>
									</div>
									<div class="icon">
										<i class="fa fa-minus-circle"></i>
									</div>
								</div>
							</a>
						</div>
						<!-- ./col -->
						<div class="col-lg-3 col-xs-6">
							
							<a href="<?php if(!$active){echo"#";}elseif($active == 2){echo"#";}else{echo"history";} ?>" <?php if(!$active){echo"data-toggle='modal' data-target='#NotActive'";}elseif($active == 2){echo"data-toggle='modal' data-target='#Blocked'";}else{echo"";} ?>>
								<div class="small-box bg-red <?php if($active == 2){echo 'rcs-disabled';}?>" >
									<div class="inner">
										<h3>History</h3>
										<p>See all of your previous requests</p>
									</div>
									<div class="icon">
										<i class="fa fa-history"></i>
									</div>
								</div>
							</a>
						</div>
						
					</div>
					