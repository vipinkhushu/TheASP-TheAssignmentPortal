<?php
include('pass.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$email=$_POST['email'];	
$question=$_POST['question'];
$answer=$_POST['answer'];
$new=$_POST['newpassword'];
$newpass=md5($new);
$sql = "SELECT `username` FROM `user_information` where `email`='$email' AND squestion='$question' AND sanswer='$answer'";
$result = $conn->query($sql);
$len=strlen($new);
if($len<8)
{
	header("Location: index.php?next=fpErr");
}
else if ($result->num_rows ==1) 
{

$sql="UPDATE `user_information` SET `password` = '$newpass' WHERE `email` = '$email';"; 
		if ($conn->query($sql) === TRUE) {
		header("location: index.php?next=FPSuccess");
		echo "Error:<br>Error Details:-  " . $sql . "<br>" . $conn->error;
		}
}
else 
{
header("Location: index.php?next=fpErr");
}




$conn->close();
?>