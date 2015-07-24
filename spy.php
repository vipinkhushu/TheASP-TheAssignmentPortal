<?php
$ip=$_SERVER['REMOTE_ADDR'];
$ua=$_SERVER['HTTP_USER_AGENT'];
//$remhost=$_SERVER['REMOTE_HOST'];
include('pass.php');
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO `logs` (username,ip,ua,time,type) VALUES ('$logusername','$ip','$ua',now(),'spy');";

if ($conn->query($sql) === TRUE) {

}

?>