 <!-- Profile Picture-->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Profile Picture</h3>
           
          <div class="box-tools pull-right">
           <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
           <!-- <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button> -->
          </div>
        </div>
        <div class="box-body">
            <div id="imgContainer">
  <form enctype="multipart/form-data" action="ups.php" method="post" name="image_upload_form" id="image_upload_form">
     <div id="imgArea"><img id="img-pp">
      <div class="progressBar">
        <div class="bar"></div>
        <div class="percent">0%</div>
      </div>
      <div id="imgChange"><span>Change Photo</span>
        <input type="file" accept="image/*" name="image_upload_file" id="image_upload_file">
      </div>
    </div>
  </form>
</div>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
<!-- Personal Information-->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Personal Information</h3>
           
          <div class="box-tools pull-right">
           <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
           <!-- <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button> -->
          </div>
        </div>
        <div class="box-body">
            <form action="editprofile" method="post" data-toggle="validator" role="form" id="myform">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="first">First Name</label>
          <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-user"></i>
                  </div>
          <input type="text" class="form-control" value="<?php echo "$first_name "; ?>" name="fname">
        </div>
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">
        <div class="form-group">
          <label for="last">Last Name</label>
          <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-user"></i>
                  </div>
          <input type="text" class="form-control" value="<?php echo "$last_name "; ?>" name="lname" >
        </div>
        </div>
      </div>
      <!--  col-md-6   -->
    </div>


    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
              <?php require 'includes/global/years.php'; ?>
             </div>
             </div>
          </div>
      <!--  col-md-6   -->

      <div class="col-md-6">

        <div class="form-group">
          <label for="prn">Permanent Registration Number[PRN]</label>
          <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-id-card"></i>
                  </div>
          <input type="text" class="form-control" maxlength="9" value="<?php echo "$prn"; ?>" name="prn">
           </div>
        </div>
      </div>
      <!--  col-md-6   -->
    </div>
    <!--  row   -->


    <div class="row">
      <div class="col-md-6">

        <div class="form-group">
          <label>Gender</label>
<div class="input-group">
 <div class="input-group-addon">
                    <i class="fa fa-venus-mars"></i>
                  </div>
                <select class="y-year form-control select2"  style="width: 100%;" id="gender" name="gender">
                  <option value="<?php echo "$gender"; ?>"><?php echo "$gender"; ?></option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
               </select>
        </div>
      </div>
      <!--  col-md-6   -->
     </div>

      <div class="col-md-6">
        <div class="form-group">
                <label>Date of Birth</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control"  value="<?php echo strftime('%Y-%m-%d', strtotime($dob));  ?>" name="dob">
                </div>
                <!-- /.input group -->
              </div>

      </div>
      <!--  col-md-6   -->
    </div>
    <!--  row   -->
    
     <div class="row">
      <div class="col-md-5">

        <div class="form-group">
          <label>Enter Current Password to Update Changes</label>
           <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-unlock-alt"></i>
                  </div>
          <input type="password" class="form-control" name="chkpass" required>
                </div>
        </div>
      </div>


        </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
           <button type="submit" class="btn btn-primary" name="update">Save Changes</button>
          </form>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->