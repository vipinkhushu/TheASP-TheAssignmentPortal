<br/><table class="table table-bordered">
	
	<?php
include('pass.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM `user_information`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    	echo"<tr class='info'><td><strong>#</strong></td><td><strong>Name(Username)</strong></td><td><strong>E-Mail</strong></td><td><strong>Phone No</strong></td><td><strong>Type</strong></td><td><strong>College</strong></td><td><strong>Course,Batch,Rollno</strong></td><td><strong>Registration Time</strong></td><td><strong>Security</strong></td></tr>";
$num=1;
    while($row = $result->fetch_assoc()) {
        echo"<tr class='success'>
		<td>$num</td>
	<td>".$row["name"]."(<u>".$row["name"]."</u>)</td>
	<td>".$row["email"]."</td>
	<td>".$row["phoneno"]."</td>
	<td>".$row["type"]."</td>
	<td>".$row["college"]."</td>
	<td>".$row["course"].",".$row["batch"].",".$row["rollno"]."</td>
	<td>".$row["reg_time"]."</td>
	<td>";
	if($row["activate"]==0)
		echo"Deactivated";
	else if($row["activate"]==1)
		echo"No Security Question Set";
	else if($row["activate"]==2)
	{
		echo $row["squestion"].$row["sanswer"];
	}
		
	else if($row["activate"]==3)
		echo"Admin";
		echo"</td></tr>";
$num+=1;
    }
} else {
  echo"<div class='alert alert-danger alert-dismissible fade in' role='alert'>
	<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
	<span aria-hidden='true'>×</span></button>No Teacher From Your College Has Registered Yet.

	</div>";
}
$conn->close();
?>
	</table> 