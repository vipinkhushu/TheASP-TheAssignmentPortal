<?php
include('conn.php');
if(isset($_POST['name']))
{
	$username = mysql_real_escape_string(trim($_POST['name']));
	$sql = "SELECT `username` FROM `user_information` WHERE `username` = '$username'";
	$myquery = mysql_query($sql) or die(mysql_error());
	if(mysql_num_rows($myquery) !=0)
	{
		echo 'exist';
	}
	else
	{
		echo 'not exist';
	}
}
?>