<!-- College ID -->
<div class="modal fade" id="clg-id">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">College ID</h4>
              </div>
              <div class="modal-body">
                <img src="http://acpce.in/<?php echo $row['clgid']; ?>" class="img-responsive">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

<!-- Cast Certificate -->
<div class="modal fade" id="cast-cert">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Cast Certificate</h4>
              </div>
              <div class="modal-body">
                <img src="http://acpce.in/<?php echo $row['castcert']; ?>" class="img-responsive">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

<!-- Previous Pass -->
<div class="modal fade" id="ppass">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Previous Pass</h4>
              </div>
              <div class="modal-body">
                <img src="http://acpce.in/<?php echo $row['ppass']; ?>" class="img-responsive">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->




<!-- Delete -->
<div class="modal fade" id="deleterid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Concession Request</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['rid']; ?></h2>
			</div>
            <div class="modal-footer">
            <form method="POST" >
                <input type="hidden" class="form-control" name="rid" value="<?php echo $row['rid']; ?>">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" class="btn btn-danger" name="delete"><span class="glyphicon glyphicon-trash"></span> Yes</button>
            </form>
            </div>

        </div>
    </div>
</div>

<!-- Reject -->
<div class="modal fade" id="rejectcon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Reject Request <?php echo $row['rid']; ?>?</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST">
				<input type="hidden" class="form-control" name="rid" value="<?php echo $row['rid']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Reject Reason:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="reject_reason" required>
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="reject" class="btn btn-warning"><span class="glyphicon glyphicon-remove-circle"></span> Reject</a>
			</form>
            </div>
        </div>
    </div>
</div>

<!-- Accept -->
<div class="modal fade" id="verify" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Accept Concession Request</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Note:Please make sure all details and documnets are verified.</p>
				<h2 class="text-center"><?php echo $row['rid']; ?></h2>
			</div>
            <div class="modal-footer">
            <form method="POST" >
                <input type="hidden" class="form-control" name="rid" value="<?php echo $row['rid']; ?>">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" class="btn btn-success" name="accept"><span class="glyphicon glyphicon-ok-circle"></span> Accept & Verify</button>
            </form>
            </div>

        </div>
    </div>
</div>

<!-- process -->
<div class="modal fade" id="processcon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Process Request No.<?php echo $row['rid']; ?>?</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST">
				<input type="hidden" class="form-control" name="rid" value="<?php echo $row['rid']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Certificate No:</label>
					</div>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="cert_no" required>
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="process" class="btn btn-success"><span class="glyphicon glyphicon-remove-circle"></span> Confirm</a>
			</form>
            </div>
        </div>
    </div>
</div>

<!-- Ready -->
<div class="modal fade" id="readycon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Prepare Request No.<?php echo $row['rid']; ?>?</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST">
				<input type="hidden" class="form-control" name="rid" value="<?php echo $row['rid']; ?>">
				
            
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="ready" class="btn btn-success"><span class="glyphicon glyphicon-remove-circle"></span> Concession Received</a>
			</form>
            </div>
        </div>
    </div>
</div>