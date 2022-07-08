 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/user2-160x160.jpg"  class="img-circle" alt="Admin">
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
        <li class="treeview <?php  if($title === "Fresh Verification" || $title === "Fresh Processing" || $title === "Fresh Ready"){echo'active';} ?>">
          <a href="#">
            <i class="fa fa-file"></i> <span>Fresh/New</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if($title === "Fresh Verification"){echo'class="active"';} ?>><a href="../../fresh_verification"><i class="fa fa-check-circle"></i> Verification</a></li>
            <li <?php if($title === "Fresh Processing"){echo'class="active"';} ?>><a href="../../fresh_processing"><i class="fa fa-filter"></i> Processing</a></li>
            <li <?php if($title === "Fresh Ready"){echo'class="active"';} ?>><a href="../../fresh_ready"><i class="fa fa-certificate"></i> Ready</a></li>
          </ul>
        </li>
        <li class="treeview <?php  if($title === "Renewal Verification" || $title === "Renewal Processing" || $title === "Renewal Ready"){echo'active';} ?>">
          <a href="#">
            <i class="fa fa-repeat"></i> <span>Renewal</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if($title === "Renewal Verification"){echo'class="active"';} ?>><a href="../../renewal_verification"><i class="fa fa-check-circle"></i> Verification</a></li>
            <li <?php if($title === "Renewal Processing"){echo'class="active"';} ?>><a href="../../renewal_processing"><i class="fa fa-filter"></i> Processing</a></li>
            <li <?php if($title === "Renewal Ready"){echo'class="active"';} ?>><a href="../../renewal_ready"><i class="fa fa-certificate"></i> Ready</a></li>
          </ul>
        </li>
        <li <?php if($title === "Archive" || $title === "Archive Detail"){echo'class="active"';} ?>><a href="../../archive"><i class="fa fa-users"></i> <span>Archive</span></a></li>
        <li <?php if($title === "Students"){echo'class="active"';} ?>><a href="../../students"><i class="fa fa-users"></i> <span>Students</span></a></li>
       
      
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>