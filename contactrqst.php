<?php
include('pass.php');
if(isset($_POST["fullname"])!=null)
{
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$type=$_POST["type"];
$fullname=$_POST["fullname"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$msg=$_POST["message"];
if(strpos($fullname,'<') !== false||strpos($fullname,'/') !== false||strpos($fullname,'>') !== false)
{
	header("location: contact.php?msg=Error");
}
else if	(strpos($email,'<') !== false||strpos($email,'/') !== false||strpos($email,'>') !== false)
{
	header("location: contact.php?msg=Error");
}
else if	(strpos($mobile,'<') !== false||strpos($mobile,'/') !== false||strpos($mobile,'>') !== false)
{
	header("location: contact.php?msg=Error");
}
else if	(strpos($msg,'<') !== false||strpos($msg,'/') !== false||strpos($msg,'>') !== false)
{
	header("location: contact.php?msg=Error");
}
	else
	{
$ip=$_SERVER['REMOTE_ADDR'];
$ua=$_SERVER['HTTP_USER_AGENT'];
$sql = "INSERT INTO `logs` (feedback_type,fullname,email,mobile,message,type,ip,ua,time,status) VALUES ('$type','$fullname','$email','$mobile','$msg','contact','$ip','$ua',now(),'pending');";

if ($conn->query($sql) === TRUE) {
header("location: contact.php?msg=done");
}
else {
 //echo "Error In Teacher Zone:<br>Error Details:-  " . $sql . "<br>" . $conn->error;
header("location: contact.php?msg=Error");

}
}
}
else
{
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$type=$_POST["type"];
include('session.php');
$msg=$_POST["message"];
if	(strpos($msg,'<') !== false||strpos($msg,'/') !== false||strpos($msg,'>') !== false)
{
	header("location: contact.php?msg=Error");
}
else
{
	$ip=$_SERVER['REMOTE_ADDR'];
$ua=$_SERVER['HTTP_USER_AGENT'];

$sql = "INSERT INTO `logs` (feedback_type,username,message,type,ip,ua,time,status) VALUES ('$type','$user_check','$msg','contact','$ip','$ua',now(),'pending');";

if ($conn->query($sql) === TRUE) {
header("location: contact.php?msg=done");
}
else {
// echo "Error In Teacher Zone:<br>Error Details:-  " . $sql . "<br>" . $conn->error;
header("location: college.php?msg=Error");

}	
}

}



?>