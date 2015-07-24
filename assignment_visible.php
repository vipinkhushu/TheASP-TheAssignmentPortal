<?php
include('pass.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['ass_id']))
{
$id=$_POST['ass_id'];	
$do=$_POST['whattodo'];

$sql="UPDATE `assignments` SET `visible` = '$do' WHERE `id` = '$id';"; 
		if ($conn->query($sql) === TRUE) {
		header("location: teacher.php?message=ChangeSuccess");
		//echo "Error:<br>Error Details:-  " . $sql . "<br>" . $conn->error;
		}
else 
{
   header("location: teacher.php?message=ErrorChange");
}

}


else 
{
    header("location: teacher.php?message=ErrorChange");
}


$conn->close();
?>