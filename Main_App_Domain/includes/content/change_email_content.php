  <!-- Change Password-->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          
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

            <form method="post" data-toggle="validator" role="form" id="myform" required>
        <div class="row">
        <div class="form-group has-feedback col-md-6">
          <label for="last">Email<label>
           <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-envelope"></i>
                  </div>
          <input type="email"  class="form-control" placeholder="<?php echo $email; ?>" data-error="Enter a vaild Email" name="newemail" required>
        <div class="help-block with-errors"></div>
            </div>
        </div>
        </div> 
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
           <button type="submit" name="uemail" class="btn btn-primary">Change/Update Eamil</button>
        </form>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
