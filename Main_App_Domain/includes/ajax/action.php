<?php
include('database_connection.php');
date_default_timezone_set('Asia/Kolkata');
$curr = date("Y-m-d H:i:s", STRTOTIME(date('h:i:sa')));
if(isset($_POST["action"]))
{
 if($_POST["action"] == "update_time")
 {
  $query = "
  UPDATE login_details 
  SET last_activity = :last_activity 
  WHERE login_details_id = :login_details_id
  ";
  $statement = $connect->prepare($query);
  $statement->execute(
   array(
    'last_activity'  => date("Y-m-d H:i:s", STRTOTIME(date('h:i:sa'))),
    'login_details_id' => $_SESSION["login_id"]
   )
  );
 }
 if($_POST["action"] == "fetch_data")
 {
  $output = '';
  $query = "SET time_zone = 'Asia/Calcutta';"; 
  $query = "           
  SELECT login_details.user_id, CONCAT(users.first_name,' ',users.last_name) AS full_name, users.email, users.small FROM login_details 
  INNER JOIN users 
  ON users.id = login_details.user_id 
  WHERE last_activity > DATE_SUB(NOW(), INTERVAL 5 SECOND)";
  $statement = $connect->prepare($query);
  $statement->execute();
  $result = $statement->fetchAll();
  $count = $statement->rowCount();
  $output .= '
  <div class="table-responsive">
   <div align="right">
    '.$count.' Users Online
   </div>
   <table class="table table-bordered table-striped">
    <tr>
     <th>No.</th>
     <th>Name</th>
     <th>Email ID</th>
     <th>Photo</th>
    </tr>
  ';

  $i = 0;
  foreach($result as $row)
  {
   $i = $i + 1;
   $output .= '
   <tr> 
    <td>'.$i.'</td>
    <td>'.$row["full_name"].'</td>
    <td>'.$row["email"].'</td>
    <td><img src="'.$row["small"].'" class="img-thumbnail" width="50" /></td>
   </tr>
   ';
  }
  $output .= '</table></div>';
  echo $output;
 }
}



?>