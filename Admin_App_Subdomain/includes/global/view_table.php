
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
					<th>Cast:</th>
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