<div class="box box-solid">
<div class="box-header with-border">
<h3 class="box-title"></h3>
</div>
<!-- /.box-header -->
<div class="box-body">
<?php
			$rid = $_GET['rid'];
			
			
			$sql = mysqli_query($mysqli, "SELECT * FROM renew_request WHERE rid='$rid'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: ../../history");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			?>
			
			<table class="table table-striped table-condensed">
				<tr>
					<th width="20%">Request No.:</th>
					<td><?php echo $row['rid']; ?></td>
                    <th width="5%">Date:</th>
					<td><?php echo date('m/d/Y H:i:s', $row['time_stamp']); ?></td>
				</tr>
				<tr>
					<th>Name:</th>
					<td><?php echo $row['fname']."".$row['lname']; ?></td>
                    <th>PRN:</th>
					<td><?php echo $row['prn']; ?></td>
				</tr>
				<tr>
					<th>D.O.B:</th>
					<td><?php echo $row['dob']; ?></td>
                    <th>Age:</th>
					<td><?php echo $row['age']; ?></td>
				</tr>
                <tr>
                    <th>Class/Year:</th>
					<td><?php echo $row['year']; ?></td>
					<th>Gender:</th>
					<td><?php echo $row['gender']; ?></td>
				</tr>
				<tr>
					<th>Caste:</th>
					<td><?php echo $row['cast']; ?></td>
                    <th>From Station:</th>
					<td><?php echo $row['station']; ?></td>
				</tr>
                <tr>
					<th>Class:</th>
					<td><?php echo $row['class']; ?></td>
                    <th>Period:</th>
					<td><?php echo $row['period']; ?></td>
				</tr>
				<tr>
					<th>Address:</th>
					<td><?php echo $row['address']; ?></td>
				</tr>
                <tr>
					<th>Concession Received On:</th>
					<td><?php echo date('m/d/Y H:i:s', $row['rtime']); ?></td>
                    <th>Concession Expires On:</th>
                    <td><?php if($row['period'] == "MONTHLY"){
					echo date('m/d/Y H:i:s', strtotime('+1 months', $row['rtime']));}
                    if($row['period'] == "QUARTERLY"){ echo date('m/d/Y H:i:s', strtotime('+3 months', $row['rtime']));}?></td>
				</tr>
                
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
             if($row['ready'] == 1){
                 echo'<div class="callout callout-success">
                <p>Concession Received</p>
              </div>';
             }
            ?>
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
<?php   require'includes/modal/modal-Documents.php'; ?>
