<?php
include('pass.php');
include('session.php');
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$ev_ok=0;
if(isset($_POST['assid'])!=null)
{
$id=$_POST['assid'];	
$username=$user_check;
date_default_timezone_set("Asia/Kolkata");
$date=date("Y-m-d");

if($_POST['assid']!="errval"){
if(isset($_FILES['uploaded'])) {
    
    if($_FILES['uploaded']['error'] == 0) {
       
        

$ok=0;
function findexts ($filename) {
$filename = strtolower($filename) ;
 $exts = split("[/\\.]", $filename) ;
 $n = count($exts)-1; 
 $exts = $exts[$n]; 
 return $exts; 
 } 

 $ext = findexts ($_FILES['uploaded']['name']) ;
 

 $ran2 = $id."_".$username."."; 


 $target = "submissions/";
 $target = $target . $ran2.$ext;
 $sqlchk = "SELECT * FROM `assignments` where id=$id";
$resultchk = $conn->query($sqlchk);
$ext_check=0;
if ($resultchk->num_rows > 0) {
		while($row = $resultchk->fetch_assoc()) {
			if($row["word"]==1)
			{
				if($ext=="doc"||$ext=="docx")
					$ext_check=1;
			}
			if($row["excel"]==1)
			{
				if($ext=="xls"||$ext=="xlsx")
					$ext_check=1;
			}
			if($row["power"]==1)
			{
				if($ext=="ppt"||$ext=="pptx")
					$ext_check=1;
			}
			if($row["pdf"]==1)
			{
				if($ext=="pdf")
					$ext_check=1;
			}
			if($row["image"]==1)
			{
				if($ext=="jpg"||$ext=="jpeg"||$ext=="png"||$ext=="gif")
				$ext_check=1;
			}
			
		}
}
if($ext_check==1)
{
	
$ok=1;
$ev_ok=1;
 $_SESSION["ftype"]="$ext";
}
else{
	$ev_ok=0;
	//echo"Sorry! We accept Only MS Word,MS Excel,MS Powerpoint,PDF,JPG,PNG Files";
header("location: submitassignments.php?message=ErrorExt");
}




if($ok==1)
{
 if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target)) 
 { 
$ev_ok=1;
	$sql1 = "SELECT * FROM `user_information` where `username`='$username'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {

	 while($row = $result1->fetch_assoc()) {
		 $name=$row["name"];
		 $rollno=$row["rollno"];
	 }
	 
}
//echo "Thanks, Your Assignment Has Been Creaated"; 
$sql = "INSERT INTO `submissions` (ass_id,username,submissiondate,ext,name,rollno) VALUES ('$id','$username','$date','$ext','$name','$rollno')";

if ($conn->query($sql) === TRUE) {
//echo("link updated");
$ev_ok=1;
header("location: submitassignments.php?message=Success");
} else {
	$ev_ok=0;
    //echo "Error In link updation:<br>Error Details:-  " . $sql . "<br>" . $conn->error;
header("location: submitassignments.php?message=ErrorDataAdd");

}

} 

else 
{ 
$ev_ok=0;
header("location: submitassignments.php?message=ErrorExt");
}


	}



	}
	else
	{
		$ev_ok=0;
		header("location: submitassignments.php?message=ErrorDataAdd");
		
	}
}
else
{
	$ev_ok=0;
	header("location: submitassignments.php?message=ErrorDataAdd");
}
}
else
{
	$ev_ok=0;
	header("location: submitassignments.php?message=ErrorDataAdd");
}


}


$conn->close();

?>