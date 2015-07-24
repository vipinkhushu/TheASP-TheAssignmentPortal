<?php
include('pass.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['actname']))
{
$id=$_POST['actname'];	

$sql="UPDATE `user_information` SET `activate` = '1' WHERE `id` = '$id';"; 
		if ($conn->query($sql) === TRUE) {
		header("location: college.php?msg=actSuccess");
		//echo "Error:<br>Error Details:-  " . $sql . "<br>" . $conn->error;
		}
else 
{
   header("location: college.php?msg=ErrorAct");
}

}


else 
{
   header("location: college.php?msg=ErrorAct");
}


$conn->close();
?>