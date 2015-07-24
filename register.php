<?php
include('pass.php');
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


if(isset($_POST['username'])!=null)
{
$username=$_POST['username'];	
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$phoneno=$_POST['phoneno'];
$college=$_POST['college'];
$type=$_POST['type'];
if(strpos($username,'<') !== false||strpos($fullname,'<') !== false||strpos($email,'<') !== false||strpos($phoneno,'<') !== false||strpos($college,'<') !== false)
{
	header("location: index.php?next=ErrorReg");
}
else
{
if($type=="teacher")
{
$sql = "INSERT INTO `user_information` (name,username,password,email,phoneno,type,college,activate) VALUES ('$fullname','$username','$password','$email','$phoneno','$type','$college','0')";

if ($conn->query($sql) === TRUE) {
//echo("Teacher Data Entered");
header("location: index.php?next=LogIn");
} else {
    //echo "Error In Teacher Zone:<br>Error Details:-  " . $sql . "<br>" . $conn->error;
header("location: index.php?next=ErrorReg");

}


}
else{
	$course=$_POST['course'];
$rollno=$_POST['rollno'];
$batch=$_POST['batch'];
$sql = "INSERT INTO `user_information` (name,username,password,email,phoneno,type,college,course,rollno,batch) VALUES ('$fullname','$username','$password','$email','$phoneno','$type','$college','$course','$rollno','$batch')";

if ($conn->query($sql) === TRUE) {
//echo("Student Data Entered");

header("location: index.php?next=LogIn");
}
else {
    //echo "Error In Student Zone:<br>Error Details:-  " . $sql . "<br>" . $conn->error;
header("location: index.php?next=ErrorReg");
}
} 

}

}
else{
	header("location: index.php");
	
}
$conn->close(); // Closing Connection

?>