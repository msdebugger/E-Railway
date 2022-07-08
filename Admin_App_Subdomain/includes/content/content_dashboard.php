<?php 
    $apply_count = $mysqli->query("SELECT COUNT(*) AS fresh FROM apply_request WHERE frmup = 1 AND ready = 0");
    $fresh_count = $apply_count->fetch_assoc();

    $renew_count = $mysqli->query("SELECT COUNT(*) AS renewal FROM renew_request WHERE frmup = 1 AND ready = 0");
    $renewal_count = $renew_count->fetch_assoc();

    $users_count = $mysqli->query("SELECT COUNT(*) AS students FROM users");
    $students_count = $users_count->fetch_assoc();
    
?>
 <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <a href="fresh_verification">
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $fresh_count['fresh']; ?></h3>

              <p>Fresh/Apply</p>
            </div>
            <div class="icon">
              <i class="fa fa-file"></i>
            </div>
          </div>
           </a>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <a href="renewal_verification">
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $renewal_count['renewal']; ?></h3>

              <p>Renewal</p>
            </div>
            <div class="icon">
              <i class="fa fa-repeat"></i>
            </div>
          </div>
           </a>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <a href="students">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $students_count['students']; ?></h3>

              <p>Total Students</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
          </div>
           </a>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <a href="archive">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>Archive</h3>

              <p>Records of Concession</p>
            </div>
            <div class="icon">
              <i class="fa fa-bars"></i>
            </div>
          </div>
           </a>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->