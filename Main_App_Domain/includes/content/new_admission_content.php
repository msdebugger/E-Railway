<?php 
	$update = $mysqli->query("SELECT * FROM apply_request WHERE uid= $uid AND done = 0");
	$apply_update = $update->fetch_assoc();
	$upd_rid = $apply_update['rid'];
	$upd_receipt =  $apply_update['receipt'];
	$upd_caste = 	$apply_update['cast'];
	$upd_address = 	$apply_update['address'];
	$upd_station =  $apply_update['station'];
	$upd_class =	$apply_update['class'];
	$upd_period =	$apply_update['period'];
	if(empty($upd_rid)){
		$upcheck = 0; 
	}else{
		$upcheck = 1; 
	}
?>
<!-- Default box -->
      <div class="box">
       <form method="post" data-toggle="validator" role="form" id="myform">
        <div class="box-header with-border">
          <h3 class="box-title">Form for concession of new pass</h3>
           
          <div class="box-tools pull-right">
           <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
           <!-- <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button> -->
          </div>
        </div>
        <div class="box-body">
     <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="first">First Name</label>
          <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-user"></i>
                  </div>
          <input type="text" class="form-control" value="<?php echo "$first_name "; ?> " name="fname" readonly/>
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
          <input type="text" class="form-control" value="<?php echo "$last_name "; ?>" name="lname" readonly/>
        </div>
        </div>
      </div>
      <!--  col-md-6   -->
    </div>


    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
        <?php require 'includes/global/years.php'; ?>
		       </div>
             </div>
          </div>
      <!--  col-md-4   -->

      <div class="col-md-4">

        <div class="form-group">
          <label for="Receipt">Fee Receipt No.</label>
          <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-file-text"></i>
                  </div>
           <input type="text" class="form-control" value="<?php echo $upd_receipt; ?>" maxlength="10" name="receipt" required/>
           </div>
        </div>
      </div>
      <!--  col-md-4 -->

      <div class="col-md-4">
        <div class="form-group">
        <label>Caste</label>
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-exchange"></i>
            </div>
            <select class="y-year form-control select2"  style="width: 100%;" name="cast" required>
                <option value="<?php if($upcheck == 1){echo"$upd_caste";}else{echo"";}?>"><?php if($upcheck == 1){echo"$upd_caste";}else{echo"Select Caste";}?></option>
                <option value="Open">Open</option>
                <option value="S.C">S.C</option>
                <option value="S.T">S.T</option>
                <option value="N.T">N.T</option>
                <option value="O.B.C">O.B.C</option>
                </select>		       
        </div>
        </div>
      </div>
      <!--  col-md-4   -->
    </div>
    <!--  row   -->


    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
        <label>Gender</label>
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-venus-mars"></i>
            </div>
            <select class="y-year form-control select2"  style="width: 100%;" name="gender" required>
            <option value="<?php echo "$gender"; ?>"><?php echo "$gender"; ?></option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            </select>		       
        </div>
        </div>
      </div>
      <!--  col-md-4   -->

      <div class="col-md-4">
        <div class="form-group">
                <label>Date of Birth</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-birthday-cake"></i>
                  </div>
                  <input type="date" class="form-control" value="<?php echo strftime('%Y-%m-%d', strtotime($dob));  ?>" name="dob" id="bday" required/>

                </div>
                <!-- /.input group -->
              </div>

      </div>
      <!--  col-md-4   -->

      <div class="col-md-4">

        <div class="form-group">
          <label for="prn">Age</label>
          <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-line-chart"></i>
                  </div>
          <input type="text" class="form-control"  id="calage" name="age"  readonly/>
           </div>
        </div>
      </div>
      <!--  col-md-4 -->
    </div>
    <!--  row   -->
    
     
    <div class="row">
      <div class="col-md-12">
                <div class="form-group">
                  <label>Address</label>
                  <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-map-marker"></i>
                  </div>
                  <textarea class="form-control" rows="3"  name="address" required><?php if($upcheck == 1){echo"$upd_address";}?></textarea>
                </div>
          </div>

      </div>
      <!--  col-md-6   -->
    </div>
    <!--  row   -->
                
     <div class="row">
      <?php require 'includes/global/stations.html'; ?>

        <div class="col-md-4">
          <div class="form-group">
          <label for="prn">To Kharghar</label>
          <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-train"></i>
                  </div>
          <input type="text" class="form-control" value="Kharghar"  name="kharghar" readonly />
           </div>
        </div>
      </div>
      <!--  col-md-4 -->
           <div class="col-md-4">

        <div class="form-group">
          <label for="prn">Via</label>
          <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-random"></i>
                  </div>
          <input type="text" class="form-control" placeholder="Via (Optional)"  name="via" />
           </div>
        </div>
      </div>
      <!--  col-md-4 -->
    </div>
    <!--  row   -->                    
                
      <div class="row">
      <div class="col-md-6">

        <div class="form-group">
          <label>Class</label>
<div class="input-group">
 <div class="input-group-addon">
                    <i class="fa fa-exchange"></i>
                  </div>
                <select class="y-year form-control select2"  style="width: 100%;" name="class" required>
                  <option value"<?php if($upcheck == 1){echo"$upd_class";}else{echo"";}?>"><?php if($upcheck == 1){echo"$upd_class";}else{echo"Select Class";}?></option>
                  <option value="First Class">First Class</option>
                  <option value="Second Class">Second Class</option>
               </select>
        </div>
      </div>
      <!--  col-md-6   -->
     </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Period</label>
<div class="input-group">
 <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                <select class="y-year form-control select2"  style="width:   100%;" name="period" required>
                  <option value="<?php if($upcheck == 1){echo"$upd_period";}else{echo"";}?>"><?php if($upcheck == 1){echo"$upd_period";}else{echo"Select Period";}?></option>
                  <option value="MONTHLY">Monthly</option>
                  <option value="QUARTERLY">Quarterly</option>
               </select>
        </div>
      </div>
      </div>
      <!--  col-md-6   -->
    </div>
    <!--  row   -->          
 </div>
 <!-- /.box-body -->
        <div class="box-footer">
		<?php 
			if($upcheck == 1){
				echo'<button type="submit" class="btn btn-primary" name="upreq">Update & Continue</button>';
			}else{
				echo'<button type="submit" class="btn btn-primary" name="req">Save & Continue</button>';
			}
		?>
        </div>
        <!-- /.box-footer-->
        </form>
      </div>
      <!-- /.box -->