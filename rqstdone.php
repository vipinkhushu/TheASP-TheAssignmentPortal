<?php
include('pass.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['idz']))
{
$id=$_POST['idz'];	

$sql="UPDATE `logs` SET `status` = 'solved' WHERE `id` = '$id';"; 
		if ($conn->query($sql) === TRUE) {
		header("location: admin.php?msg=SetSuccess");
		//echo "Error:<br>Error Details:-  " . $sql . "<br>" . $conn->error;
		}
else 
{
   header("location: admin.php?msg=ErrorAct");
}

}


else 
{
   header("location: college.php?msg=ErrorAct");
}


$conn->close();
?>