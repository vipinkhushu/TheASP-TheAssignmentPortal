<?php
include('pass.php');
include('session.php');
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_POST['classid'])!=null)
{
$class=$_POST['classid'];	
$title=$_POST['title'];
$body=$_POST['body'];
$date=$_POST['date'];
$username=$user_check;

$sql = "SELECT * FROM `collegedata` WHERE `id`='$class';";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
	$teachername=$row["teacher_id"];
	$branch=$row["branch"];
	$batch=$row["batch"];
	$subject=$row["subject"];
	$college=$row["collegename"];
	}
}

$sql = "INSERT INTO `assignments` (username,college,course,batch,subject,title,body,lastdate,link) VALUES ('$teachername','$college','$branch','$batch','$subject','$title','$body','$date','no')";

if ($conn->query($sql) === TRUE) {
//echo("Data Entered");
//header("location: college.php?msg=ClassAdd");
} else {
    //echo "Error In Data Entering:<br>Error Details:-  " . $sql . "<br>" . $conn->error;
header("location: teacher.php?message=ErrorDataAdd");

}
$sql = "SELECT `id` FROM `assignments` WHERE `username`='$teachername' AND `course`='$branch' AND `batch`='$batch' AND `subject`='$subject' AND `title`='$title' AND `lastdate`='$date';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	while($row = $result->fetch_assoc()) {


$ass_id=$row["id"];

}}
 else {
    //echo "Error In Data Entering:<br>Error Details:-  " . $sql . "<br>" . $conn->error;
header("location: teacher.php?message=ErrorDataAdd");

}


}
//////////UPLOAD SYSTEM

if(isset($_FILES['uploaded'])) {
    // Make sure the file was sent without errors
    if($_FILES['uploaded']['error'] == 0) {
        // Connect to the database
        

$ok=0;
function findexts ($filename) {
$filename = strtolower($filename) ;
 $exts = split("[/\\.]", $filename) ;
 $n = count($exts)-1; 
 $exts = $exts[$n]; 
 return $exts; 
 } 

 $ext = findexts ($_FILES['uploaded']['name']) ;
 

 $ran2 = $ass_id."_".$college."."; 


 $target = "assignment_files/";
 $target = $target . $ran2.$ext;


if($ext=='doc'||$ext=='docx'||$ext=='pdf'||$ext=='xls'||$ext=='xlsx'||$ext=='ppt'||$ext=='jpg'||$ext=='png')
{
	
$ok=1;
 $_SESSION["ftype"]="$ext";
}
else{
	
	//echo"Sorry! We accept Only MS Word,MS Excel,MS Powerpoint,PDF,JPG,PNG Files";
header("location: teacher.php?message=ErrorExt");
	}




if($ok==1)
{
 if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target)) 
 { 
//echo "Thanks, Your Assignment Has Been Creaated"; 
$sql = "UPDATE `assignments` SET `link`='yes' , `ext`='$_SESSION[ftype]' WHERE `id`=$ass_id;";

if ($conn->query($sql) === TRUE) {
//echo("link updated");
header("location: teacher.php?message=Success");
} else {
    //echo "Error In link updation:<br>Error Details:-  " . $sql . "<br>" . $conn->error;
header("location: teacher.php?message=ErrorDataAdd");

}

} 

else 
{ 
header("location: teacher.php?message=ErrorExt");
}


	}




}
else
{
	//echo"no file1";
}
}

else
{
	//echo"no file2";
}

header("location: teacher.php?message=Success");


$conn->close();

?>