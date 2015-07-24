<?php
include('pass.php');
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


if(isset($_POST['answer'])!=null)
{
$username=$_COOKIE['auth'];	
$answer=$_POST['answer'];	
$question=$_POST['question'];

$sql="UPDATE `user_information` SET `activate` = '2', `squestion` = '$question', `sanswer` = '$answer' WHERE `username` = '$username';"; 

if ($conn->query($sql) === TRUE) {
//echo("Student Data Entered");
header("location: home.php");
}

else {
   //echo "Error In Student Zone:<br>Error Details:-  " . $sql . "<br>" . $conn->error;
header("location: home.php");
}
} 


else{
	header("location: index.php");
	
}
$conn->close(); // Closing Connection

?>