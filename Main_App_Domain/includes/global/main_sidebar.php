<!-- Left side column. contains the logo and sidebar -->
			<aside class="main-sidebar">
				<!-- sidebar: style can be found in sidebar.less -->
				<section class="sidebar">
					<!-- Sidebar user panel (optional) -->
					<div class="user-panel">
						<div class="pull-left image">
							<img id="img-side" class="img-circle" alt="Loading...">
						</div>
						<div class="pull-left info">
							<p><?php echo $fullname; ?></p>
							<!-- Status -->
							<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
						</div>
					</div>
					<!-- search form (Optional) -->
					<form action="#" method="get" class="sidebar-form">
						<div class="input-group">
							<input type="text" name="q" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
							<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
							</button>
							</span>
						</div>
					</form>
					<!-- /.search form -->
					<!-- Sidebar Menu -->
					<ul class="sidebar-menu" data-widget="tree">
						<li class="header">NAVIGATION</li>
						<!-- Optionally, you can add icons to the links -->
						<li <?php  if($title === "Dashboard"){echo'class="active"';} ?>><a href="../../dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
						<li <?php  if($title === "Apply"){echo'class="active"';} ?>><a href="<?php if(!$active){echo"#";}elseif($active == 2){echo"#";} elseif($admission_season == 1){echo"#";} else{echo"../../apply";} ?>" <?php if(!$active){echo"data-toggle='modal' data-target='#NotActive'";}elseif($active == 2){echo"data-toggle='modal' data-target='#Blocked'";} elseif($admission_season == 1){echo"data-toggle='modal' data-target='#AdmissionSeason'";} else{echo"";} ?>><i class="fa fa-file"></i> <span>Apply</span></a></li>
						<li <?php  if($title === "Renew"){echo'class="active"';} ?>><a href="<?php if(!$active){echo"#";}elseif($active == 2){echo"#";} else{echo"../../renew";} ?>" <?php if(!$active){echo"data-toggle='modal' data-target='#NotActive'";}elseif($active == 2){echo"data-toggle='modal' data-target='#Blocked'";} else{echo"";} ?>><i class="fa fa-repeat"></i> <span>Renew</span></a></li>
						<li <?php  if($title === "Status"){echo'class="active"';} ?>><a href="<?php if(!$active){echo"#";}elseif($active == 2){echo"#";} else{echo"../../status";} ?>" <?php if(!$active){echo"data-toggle='modal' data-target='#NotActive'";}elseif($active == 2){echo"data-toggle='modal' data-target='#Blocked'";} else{echo"";} ?>><i class="fa fa-minus-circle"></i> <span>Status</span></a></li>
						<li <?php  if($title === "History"){echo'class="active"';} ?>><a href="<?php if(!$active){echo"#";}elseif($active == 2){echo"#";} else{echo"../../history";} ?>" <?php if(!$active){echo"data-toggle='modal' data-target='#NotActive'";}elseif($active == 2){echo"data-toggle='modal' data-target='#Blocked'";} else{echo"";} ?>><i class="fa fa-history"></i> <span>History</span></a></li>
						<li <?php  if($title === "Settings"){echo'class="active"';} ?>><a href="../../settings"><i class="fa fa-wrench"></i> <span>Settings</span></a></li>
						<li <?php  if($title === "Contact Us"){echo'class="active"';} ?>><a href="#" data-toggle="modal" data-target="#Contact" ><i class="fa fa-phone"></i> <span>Contact Us</span></a></li>
						<h6><?php echo $mbdy; ?></h6>
					</ul>
					<!-- /.sidebar-menu -->
				</section>
				<!-- /.sidebar -->
			</aside>