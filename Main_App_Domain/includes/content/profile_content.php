 <div class="row">
        <div class="col-md-12">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img id="xtra" class="profile-user-img img-responsive img-circle" alt="Loading...">

              <h3 class="profile-username text-center"><?php echo $fullname; ?></h3>

              <p class="text-muted text-center"><?php echo $year; ?></p>

              

              <a href="editprofile" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <strong><i class="fa fa-envelope margin-r-5"></i> Email</strong>

              <p class="text-muted"><?php echo $email; ?> <span class="pull-right"><a href="change-email">Change</a></span></p>
             
              <hr>

              <strong><i class="fa fa-id-card margin-r-5"></i> Permenant Registration Number (PRN)</strong>

              <p class="text-muted">
                <?php echo $prn; ?>
              </p>

              <hr>

              <strong><i class="fa fa-book margin-r-5"></i> Year and Course</strong>

              <p class="text-muted">
                <?php echo $year; ?>, A.C Patil College of Engineering.
              </p>

              <hr>
                
              <strong><i class="fa fa-birthday-cake margin-r-5"></i> Date of Birth</strong>

              <p class="text-muted">
                <?php echo $dob; ?>
              </p>

              <hr>

              <strong><i class="fa fa-venus-mars margin-r-5"></i> Gender</strong>

              <p class="text-muted">
                <?php echo $gender; ?>
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Address</strong>

              <p class="text-muted">Malibu, California</p>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        
      </div>
      <!-- /.row -->