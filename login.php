<?php
session_start();
if(isset($_POST['username'])!=null)
{
$logusername=$_POST['username'];
$logpassword=md5($_POST['password']);
include('pass.php');
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect($servername, $username, $password);
// To protect MySQL injection for Security purpose
$logusername = stripslashes($logusername);
$logpassword = stripslashes($logpassword);

$logusername = mysql_real_escape_string($logusername);
$logpassword = mysql_real_escape_string($logpassword);

// Selecting Database
$db = mysql_select_db($dbname, $connection);
// SQL query to fetch information of registerd users and finds user match.



$query = mysql_query("select * from `user_information` where password='$logpassword' AND username='$logusername'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$logusername; // Initializing Session
include('spy.php');
setcookie('auth',$logusername,time()+(86400*7));
setcookie('vipin','1',0);

	header("location: home.php");



} else {
header("location: index.php?next=invalidPass");
}
mysql_close($connection); // Closing Connection
}
else{
	header("location: index.php");
}









?>