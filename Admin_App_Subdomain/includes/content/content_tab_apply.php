
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
							
							$sql = "SELECT * FROM apply_request WHERE done = 1";
							$query = $mysqli->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
                                    <td>".$row['rid']."</td>
                                    <td>".$row['cert_no']."</td>
									<td>".$row['fname']." ".$row['lname']."</td>
									<td>".$row['prn']."</td>
									<td>".$row['year']."</td>
                                    
							<td>
										<a href='view_archive_fresh/".$row['rid']."' class='btn btn-primary btn-sm'><span class='glyphicon glyphicon-eye-open'></span> View</a>
									</td>
								</tr>";
							}
							

						?>
					</tbody>
				</table>
                