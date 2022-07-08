<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Student Details</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="students">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Firstname:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="first_name" value="<?php echo $row['first_name']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Lastname:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="last_name" value="<?php echo $row['last_name']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">P.R.N:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="prn" value="<?php echo $row['prn']; ?>">
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Status:</label>
					</div>
					<div class="col-sm-10">
						<select name="active" class="form-control" required>
							<option value="">- Status -</option>
                            <option value="0">Not Active</option>
							<option value="1">Active</option>
                            <option value="2">Block</option>
						</select> 
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Student</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['first_name'].' '.$row['last_name']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="students_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>

<!-- View -->
<div class="modal fade" id="view_<?php echo $row['id']; ?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Student's Profile</h4>
              </div>
              <div class="modal-body">
                <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('http://acpce.in/dist/img/acpcebg1.jpg') center center;">
              <h3 class="widget-user-username"><?php echo $row['first_name'].' '.$row['last_name']; ?></h3>
              <h5 class="widget-user-desc"><?php echo $row['year']; ?></h5>
            </div>
            <div class="widget-user-image">
              <?php 
                            if($row['medium'] == ""){

								echo '<img class="img-circle" src="http://acpce.in/dist/img/user.png" alt="User Avatar">';
							}
                            else{

								echo '<img class="img-circle" src="http://acpce.in/'.$row['medium'].'" alt="User Avatar">';
							}
                ?>
            </div>
            <div class="box-footer">
                
            </div>
              <ul class="nav nav-stacked">
                <li><a href="#">UID <span class="pull-right"><?php echo $row['id']; ?></span></a></li>
                <li><a href="#">P.R.N <span class="pull-right"><?php echo $row['prn']; ?></span></a></li>
                <li><a href="#">D.O.B <span class="pull-right"><?php echo $row['dob']; ?></span></a></li>
                <li><a href="#">Gender <span class="pull-right"><?php echo $row['gender']; ?></span></a></li>
                <li><a href="#">Email <span class="pull-right"><?php echo $row['email']; ?></span></a></li>
              </ul>
          </div>
          <!-- /.widget-user -->
              </div>
              <div class="modal-footer">
                
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->