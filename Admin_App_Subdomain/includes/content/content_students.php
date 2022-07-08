<div class="box box-default ">
        <div class="box-body">
			<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>Name</th>
						<th>P.R.N</th>
						<th>Year/Class</th>
                        <th>D.O.B</th>
                        <th>Gender</th>
                        <th>Status</th>
						<th>Action</th>
					</thead>
					<tbody>
						<?php
							
							$sql = "SELECT * FROM users";
							$query = $mysqli->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
									<td><a href='#view_".$row['id']."' data-toggle='modal'><span class='glyphicon glyphicon-user' aria-hidden='true'></span> ".$row['first_name']." ".$row['last_name']."</td>
									<td>".$row['prn']."</td>
									<td>".$row['year']."</td>
                                    <td>".$row['dob']."</td>
                                    <td>".$row['gender']."</td>
                                    <td>";
							if($row['active'] == 0){
								echo '<span class="label label-info">Not Active</span>';
							}
                            else if ($row['active'] == 1 ){
								echo '<span class="label label-success">Active</span>';
							}
                            else if($row['active'] == 2){
                                echo '<span class="label label-danger">Blocked</span>';
                            }
						echo"
							</td>
							<td>
										<a href='#edit_".$row['id']."' class='btn btn-primary btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
										<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
									</td>
								</tr>";
								include('students_modal.php');
							}
							

						?>
					</tbody>
				</table>
			
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->           