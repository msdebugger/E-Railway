  <!-- Change Password-->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Last Changed: <?php require 'includes/global/passlc.php'; ?></h3>
          
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
           <!-- <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button> -->
          </div>
        </div>
        <div class="box-body">
             <div class="col-md-4 pull-right">
               </div>

            <form action="changepassword" method="post" data-toggle="validator" role="form" id="myform" required>
    <div class="row">
      <div class="col-md-4">
        <div class="form-group has-feedbackp">
          <label for="first">Current Password</label>
           <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-unlock-alt"></i>
                  </div>
          <input type="password" class="form-control"  name="chkpass" placeholder="Old Password" required>
          
           </div>
        </div>
      </div>
      </div>
      <!--  col-md-6   -->
       

        <div class="row">
        <div class="form-group has-feedback col-md-4">
          <label for="last">New Password</label>
           <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-key"></i>
                  </div>
          <input type="password" data-minlength="6" class="form-control" id="pass" placeholder="New Password" data-error="Password Must Be Minimum of 6 characters" name="newpassword" required>
        <div class="help-block with-errors"></div>
            </div>
        </div>
        </div> 

        <div class="row">
        <div class="form-group has-feedback col-md-4">
          <label for="last">Repeat Password</label>
           <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-key"></i>
                  </div>
          <input type="password" class="form-control"  data-match="#pass" data-match-error="Hmm!these passwords don't match" placeholder="Retype password" name="confirmpassword" required>
          <div class="help-block with-errors"></div>
            </div>
        </div>
       </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
           <button type="submit" name="upass" class="btn btn-primary">Change Password</button>
        </form>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
