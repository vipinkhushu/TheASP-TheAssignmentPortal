<?php
include('pass.php');
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


if(isset($_POST['username'])!=null)
{
$username=$_POST['username'];	
$college=$_POST['college'];
$branch=$_POST['branch'];
$batch=$_POST['batch'];
$subject=$_POST['subject'];


$sql = "INSERT INTO `collegedata` (collegename,admin_id,subject,batch,branch) VALUES ('$college','$username','$subject','$batch','$branch')";

if ($conn->query($sql) === TRUE) {
//echo("Teacher Data Entered");
header("location: college.php?msg=ClassAdd");
} else {
    //echo "Error In Teacher Zone:<br>Error Details:-  " . $sql . "<br>" . $conn->error;
header("location: college.php?msg=ErrorClassAdd");

}


}

$conn->close(); // Closing Connection

?>