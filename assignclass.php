<?php
include('pass.php');
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


if(isset($_POST['class'])!=null)
{
$teacher=$_POST['nameT'];	
$class=$_POST['class'];


$sql = "UPDATE `collegedata` SET `teacher_id`='$teacher' WHERE `id`='$class';";

if ($conn->query($sql) === TRUE) {
//echo("Teacher Data Entered");
header("location: college.php?msg=ClassAdd");
} else {
  //echo "Error In Teacher Zone:<br>Error Details:-  " . $sql . "<br>" . $conn->error;
header("location: college.php?msg=ErrorClassAdd");

}


}
else
{
	header("location: college.php?msg=ErrorClassAdd");
}
$conn->close(); // Closing Connection

?>