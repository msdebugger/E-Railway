<div class="box box-solid">
<div class="box-header with-border">
<h3 class="box-title">Process student's Renewal details and Documents</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
<?php
			$rid = $_GET['rid'];
			
			
			$sql = mysqli_query($mysqli, "SELECT * FROM renew_request WHERE rid='$rid'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: renewal_processing");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			?>
			
			<table class="table table-striped table-condensed">
				<?php require'includes/content/view_table.php'; ?>
				
			</table>
            <h4>Uploaded Documents</h4>

            <div class="row">
				
					<div class="col-sm-4 col-xs-12">
				        <div class="panel panel-default">
				          <div class="panel-thumbnail">
				          	<a href="#" title="College ID" class="thumb" data-toggle="modal" data-target="#clg-id">
				          		<img src="http://acpce.in/<?php echo $row['clgid']; ?>" class="img-responsive img-rounded">
				          	</a>
				          </div>
				          <div class="panel-body">
				            <p>College ID</p>
				            <p>Click On the Image to View</p>
				          </div>
				        </div>
				    </div>
                  
					 <?php 
                    $uc = $row['cast'];
                    if($uc == "S.C" || $uc == "S.T" || $uc == "N.T" || $uc == "O.B.C"){
                        require'includes/content/doc_cast_certificate.php';
                    }
                    ?>
                    <div class="col-sm-4 col-xs-12">
				        <div class="panel panel-default">
				          <div class="panel-thumbnail">
				          	<a href="#" title="Current Pass" class="thumb" data-toggle="modal" data-target="#ppass">
				          		<img src="http://acpce.in/<?php echo $row['ppass']; ?>" class="img-responsive img-rounded">
				          	</a>
				          </div>
				          <div class="panel-body">
				            <p>Current Pass</p>
				            <p>Click On the Image to View</p>
				          </div>
				        </div>
				    </div>
                </div>
            <?php
             if($row['process'] == 1){
                 echo'<div class="callout callout-success">
                <p>Concession PROCESSED</p>
              </div>';
             }else{
					echo"<a href='../../concession_print/".$row['rid']."'  class='btn btn-sm btn-info' target='_blank'><span class='glyphicon glyphicon-print' aria-hidden='true'></span> Print Concession</a> ";
					echo'<a href="#" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#processcon"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Process</a>';
             }
            ?>
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
 <?php   require'includes/modal/verification_modal.php'; ?>