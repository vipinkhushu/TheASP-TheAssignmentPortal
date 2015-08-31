<?php
if($_POST && $_POST['vipin']){
include('conn.php');
$vipin=$_POST["vipin"];
$s=$_POST["subid"];
$sql ="UPDATE `submissions` SET  `grade` =  '$vipin' WHERE  `id` ='$s'";
$req = mysql_query ($sql);
mysql_close();
}
?>