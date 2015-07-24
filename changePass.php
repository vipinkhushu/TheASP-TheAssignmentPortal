<?php
include('pass.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$username=$_COOKIE['auth'];	
$old=md5($_POST['oldpass']);	
$new=$_POST['newpass1'];
$new1=$_POST['newpass2'];
$len=strlen($new);
if($new==$new1&&$len>=8)
{
$sql = "SELECT `username` FROM `user_information` where `password`='$old' AND username='$username'";
$result = $conn->query($sql);

if ($result->num_rows ==1) 
{

$latest=md5($new);
$sql="UPDATE `user_information` SET `password` = '$latest' WHERE `username` = '$username';"; 
		if ($conn->query($sql) === TRUE) {
		header("location: settings.php?msg=PChangeSucc");
		//echo "Error:<br>Error Details:-  " . $sql . "<br>" . $conn->error;
		}


}


else 
{
   header("location: settings.php?msg=ErrorPChange");
}
}
else
{
	
	header("location: settings.php?msg=noMatch");
}

$conn->close();
?>