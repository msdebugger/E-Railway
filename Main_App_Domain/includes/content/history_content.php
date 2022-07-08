<!-- Default box -->
<div class="box">
	<div class="box-header with-border">
		<h3 class="box-title">History of Fresh Application of Concession</h3>
		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
				title="Collapse">
			<i class="fa fa-minus"></i></button>
		</div>
	</div>
	<div class="box-body">
		<div class="table-responsive">
			<table id="myTable" class="table table-bordered table-striped">
				<thead>
					<th>Request No.</th>
					<th>Certificate No.</th>
					<th>Name</th>
					<th>P.R.N</th>
					<th>Year/Class</th>
					<th>Action</th>
				</thead>
				<tbody>
					<?php
						$sql = "SELECT * FROM apply_request WHERE uid= $uid AND done = 1";
						$query = $mysqli->query($sql);
						while($row = $query->fetch_assoc()){
							echo 
							"<tr>
						        <td>".$row['rid']."</td>
						        <td>".$row['cert_no']."</td>
								<td>".$row['fname']." ".$row['lname']."</td>
								<td>".$row['prn']."</td>
								<td>".$row['year']."</td>
						        <td><a href='view_history_fresh/".$row['rid']."' class='btn btn-primary btn-sm'><span class='glyphicon glyphicon-eye-open'></span> View</a></td>
							</tr>";
						}	
					?>
				</tbody>
			</table>
		</div>
	</div>
	<!-- /.box-body -->
	<div class="box-footer">
	</div>
	<!-- /.box-footer-->
</div>
<!-- /.box -->

<!-- Default box -->
<div class="box">
<div class="box-header with-border">
	<h3 class="box-title">History of Renewal of Concession</h3>
	<div class="box-tools pull-right">
		<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
			title="Collapse">
		<i class="fa fa-minus"></i></button>
	</div>
</div>
<div class="box-body">
<div class="table-responsive">
	<table id="myTable2" class="table table-bordered table-striped">
		<thead>
			<th>Request No.</th>
			<th>Certificate No.</th>
			<th>Name</th>
			<th>P.R.N</th>
			<th>Year/Class</th>
			<th>Action</th>
		</thead>
		<tbody>
			<?php
				$sql = "SELECT * FROM renew_request WHERE uid= $uid AND done = 1";
				$query = $mysqli->query($sql);
				while($row = $query->fetch_assoc()){
					echo 
					"<tr>
				        <td>".$row['rid']."</td>
				        <td>".$row['cert_no']."</td>
						<td>".$row['fname']." ".$row['lname']."</td>
						<td>".$row['prn']."</td>
						<td>".$row['year']."</td>                   
				        <td><a href='view_history_renewal/".$row['rid']."' class='btn btn-primary btn-sm'><span class='glyphicon glyphicon-eye-open'></span> View</a></td>
					</tr>";
				}	
			?>
		</tbody>
	</table>
	<div>
	</div>
	<!-- /.box-body -->
	<div class="box-footer">
	</div>
	<!-- /.box-footer-->
</div>
<!-- /.box -->