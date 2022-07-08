<nav class="navbar navbar-static-top" >
					<!-- Sidebar toggle button-->
					<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
					</a>
					<!-- Navbar Right Menu -->
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							
							<!-- User Account Menu -->
							<li class="dropdown user user-menu">
								<!-- Menu Toggle Button -->
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<!-- The user image in the navbar-->
									<img id="img-navi" class="user-image" alt="Loading…">            
									<!-- hidden-xs hides the username on small devices so only the image appears. -->
									<span class="hidden-xs"><?php echo $fullname; ?></span>
								</a>
								<ul class="dropdown-menu">
									<!-- The user image in the menu -->
									<li class="user-header">
										<img id="img-menu" class="img-circle" alt="Loading…">
										<p>
											<?php echo $fullname; ?> - <?php echo $year; ?>
                                            <?php if($prn != 0){echo"<small>PRN - $prn</small>";}
                                    else{echo"<small>Joined on $sdoj</small>";}?>

										</p>
									</li>
									<!-- Menu Body -->
									<li class="user-body">
										<div class="row">
											<div class="col-xs-4 text-center">
												<a href="<?php if(!$active){echo"#";}elseif($active == 2){echo"#";} elseif($admission_season == 1){echo"#";} else{echo"apply";} ?>" <?php if(!$active){echo"data-toggle='modal' data-target='#NotActive'";}elseif($active == 2){echo"data-toggle='modal' data-target='#Blocked'";} elseif($admission_season == 1){echo"data-toggle='modal' data-target='#AdmissionSeason'";} else{echo"";} ?>>Apply</a>
											</div>
											<div class="col-xs-4 text-center">
												<a href="<?php if(!$active){echo"#";}elseif($active == 2){echo"#";} else{echo"renew";} ?>" <?php if(!$active){echo"data-toggle='modal' data-target='#NotActive'";}elseif($active == 2){echo"data-toggle='modal' data-target='#Blocked'";} else{echo"";} ?>>Renew</a>
											</div>
											<div class="col-xs-4 text-center">
												<a href="settings">Settings</a>
											</div>
										</div>
										<!-- /.row -->
									</li>
									<!-- Menu Footer-->
									<li class="user-footer">
										<div class="pull-left">
											<a href="../../profile" class="btn btn-default btn-flat">Profile</a>
										</div>
										<div class="pull-right">
											<a href="../../logout" class="btn btn-default btn-flat">Sign out</a>
										</div>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
