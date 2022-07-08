<div class="box box-default ">
        <div class="box-body">
			<table id="myTable" class="table table-bordered table-striped">
					<thead>
                        <th>Request No.</th>
						<th>Name</th>
						<th>P.R.N</th>
						<th>Year/Class</th>
                        <th>Status</th>
						<th>Action</th>
					</thead>
					<tbody>
						<?php
							
							$sql = "SELECT * FROM renew_request WHERE frmup = 1 AND done = 0";
							$query = $mysqli->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
                                    <td>".$row['rid']."</td>
									<td>".$row['fname']." ".$row['lname']."</td>
									<td>".$row['prn']."</td>
									<td>".$row['year']."</td>
                                    <td>";
							if($row['verify'] == 0){
								echo '<span class="label label-default">Unverified</span>';
							}
                            else if ($row['verify'] == 1 ){
								echo '<span class="label label-success">Verified</span>';
							}
                            else if($row['verify'] == 2){
                                echo '<span class="label label-danger">Rejected</span>';
                            }
						echo"
							</td>
							<td>
										<a href='view_renewal_verification/".$row['rid']."' class='btn btn-primary btn-sm'><span class='glyphicon glyphicon-eye-open'></span> View</a>
									</td>
								</tr>";
							}
							

						?>
					</tbody>
				</table>
			
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->  