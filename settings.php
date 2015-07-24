<?php
include('session.php');
?>
<?php
include('pass.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT `activate` FROM `user_information` where username='$user_check'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       if($row["activate"]!='2')
	   {

 echo"	  <script type='text/javascript' src='js/jquery-1.11.1.min.js'></script><script type='text/javascript'>
 $(window).load(function(){
	 $('#myModalsecurity').modal({backdrop:'static'},'show');
 });
 </script>";

	 
		
	   }   }
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">
  <script src="js/pnglib.js"></script>
    <script src="js/identicon.js"></script>
    <title>Change Password || The ASP - Premium Version</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>&nbsp;&nbsp;The ASP - The Assignment Portal</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp;Home</a></li>
            <li><a href="aboutasp.php"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>&nbsp;&nbsp;About</a></li>
            <li><a href="contact.php"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;&nbsp;Contact</a></li>
			
			<!------------LOGIN SYSTEM-------------------->
		

		



	
	
	
	
	
	
	
	
	
	
	<!------------LOGIN SYSTEM-------------------->
	
	<li><a href="" data-toggle="dropdown"><span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span>&nbsp;&nbsp;More</a>
	<ul class="dropdown-menu" role="menu" aria-labelledby="dlabel">
		<a href="contact.php?newsletter=subscribe">	<li style="background:#fff;padding:6px 6px 6px 6px;border-bottom:0px solid black;"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>&nbsp;&nbsp;News Letter</li></a>
			<a href="faq.php">	<li style="background:#fff;padding:6px 6px 6px 6px;border-bottom:0px solid black;"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>&nbsp;&nbsp;FAQ</li></a>
			<a href="termsofuse.php">	<li style="background:#fff;padding:6px 6px 6px 6px;border-bottom:0px solid black;"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>&nbsp;&nbsp;T&C</li></a>
			
			</ul>
	
	</li>

	<li class="pull-right"><a href="" data-toggle="dropdown">
	
	<script type="text/javascript">
    
	var vip='<?php     
	
	echo md5($user_check);
	?>';
    

		
        data = new Identicon(vip, 420).toString();
        document.write(
                '<img alt="TheASP Avtaar"  width=21 height=21 src="data:image/png;base64,' + data + '">'
        );
    
</script>
	&nbsp;&nbsp;<?php echo $user_check; ?> <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></a>
			<ul class="dropdown-menu" role="menu" aria-labelledby="dlabel">
			<a href="profile.php"><li style="background:#fff;padding:6px 6px 6px 6px;border-bottom:0px solid black;"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;My Profile</li></a>
			<a href="settings.php"><li style="background:#fff;padding:6px 6px 6px 6px;border-bottom:0px solid black;"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>&nbsp;&nbsp;Change Password</li></a>
			<a href="logout.php"><li style="background:#fff;padding:6px 6px 6px 6px;border-bottom:0px solid black;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp;&nbsp;Logout</li></a>
			
			</ul>
	
	</li>

	
          </ul>
		 

        </div><!--/.nav-collapse -->
       
	  </div>
	  
    </nav>


	<!--
	<blockquote>
	<p>Hey hi hello</p>
	<footer>-ADMIN</footer>
	</blockquote>-->
	          </div>
			  <div class="container">
		  <!----------LOGIN FORM DATA------------->

			  <div class="modal fade" id="myModalsecurity" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">
		<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
		Set Security Question</h4>
      </div>
      <div class="modal-body">
     <div class="alert alert-warning alert-dismissible fade in" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">×</span></button>It is strongly recommended To Set<strong> Security Question</strong> As Soon As Possible</div>
		
		   <form method="post" action="securityquestion.php">
    <div class="form-group">
    <label for="username">Security Question</label>
	<div class="input-group">
	<div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
   
 <select name="question" class="form-control" required>
 <option value="1">What is the name of your favourite actor?   </option>
  <option value="2">What is the name of your favourite book?   </option>
  <option value="3">What is the name of your best buddy?   </option>
   <option value="4">Which brand do you prefer to wear?   </option>
    <option value="5">What admires you the most?   </option>
 </select>
	
	</div>
	
  </div>
  <div class="form-group">
    <label for="password">Security Answer</label>
	<div class="input-group">
	<div class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></div>
    <input type="password" class="form-control" id="answer" name="answer" placeholder="Enter Your Answer Here..." required>
  </div></div>
     

      </div>
      <div class="modal-footer">
        
        <input class="btn btn-primary" type="submit" id="" value="Submit">
      </div>
	  </form>
	  
    </div>
  </div>
</div>

			  <center><span style="color:red;background:#fff;"><noscript>
			  <span class="glyphicon glyphicon-alert" aria-hidden="true"></span><br>
			  JavaScript is disabled in your browser, Kindly Enable it to have a better experience using TheASP
			 
			  Or Update your browser
			  </noscript></span></center>
		<div class="container">
  <div class="row"> <br/><br/>
  <div class="col-md-3">
  <div class="regpage">
  <center>
  
  <!--------------IDENTICONAPI----------->
      
<script type="text/javascript">
    
	var vip='<?php     
	
	echo md5($user_check);
	?>';
    

		
        data = new Identicon(vip, 420).toString();
        document.write(
                '<br><img alt="TheASP Avtaar" class="img-thumbnail" width=400 height=400 src="data:image/png;base64,' + data + '">'
        );
    
</script>
		
       

	
 

		
  

  
  

  
  
  
  
  
  </center>
  
  <?php
include('pass.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name,college,rollno FROM `user_information` where username='$user_check'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br/><p class='lead'><strong>".$row["name"]."</strong><br/>(<mark> ".$user_check."</mark> )<small><br/> ".$row["college"]."<br/>".$row["rollno"]."<br/></small></p>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
  
  
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         On Current Page &nbsp;<span  style="float:right;" class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
<ul>
<li>Change Password</li>

</ul>
	  </div>
    </div>
  </div>
<?php
include('pass.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT `type` FROM `user_information` where username='$user_check'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       if($row["type"]=='college')
	   {

echo"<!--";

	 
		
	   } 
	    
	   }
}
$conn->close();
?> <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Upload Assignments<span  style="float:right;" class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
<ul>
<a href="submitassignments.php"><li>Upload/Submit Assignments</li>
</a>
</ul>    </div>
    </div>
  </div>
  
  
  <?php
include('pass.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT `type` FROM `user_information` where username='$user_check'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       if($row["type"]=='college')
	   {

echo"-->";

	 
		
	   } 
	    
	   }
}
$conn->close();
?>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          My Profile<span  style="float:right;" class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span>
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
	  <ul>
<a href="profile.php"><li>My Profile</li></a>
<a href="settings.php"><li>Change Password</li></a>
<a href="logout.php"><li>Logout</li></a>
</ul>
     </div>
    </div>
	
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
         Help&nbsp;<span style="float:right;"class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span>
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">
<ul>
<a href="contact.php"><li>Contact Us</li>
</a>
<li>admin@theasp.tk</li>
<li>help@theasp.tk</li>
<li>vipinkhushu@hotmail.com</li>
<li>+91 9643763712</li>
</ul>    </div>
    </div>
  </div>
</div>
  
  
  <hr>
  <center>
|| TheASP Premium Version || <br>|| © RAPL IND. - 2015 || <br>|| <a href="aboutasp.php">ABOUT US ||</a>
<br><a href="https://www.facebook.com/theasp.rapl" target="_new"><img src="images/facebook.png" width="10%" height="10%"></a>
</center>
  
  
  
  
  
  </div>
  </div>
  
  <div class="col-md-9">
  <div class="regpage">

<div>

 <h1>Change Password</h1>
 <a href="profile.php"><h3 class="pull-right">
 <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
 My Profile
 <br>
</a>
 </h3>
 <hr>

 
 

	
	
	  <h4><abbr>Enter Following Details</abbr></h4>
 
 <table class="table table-bordered">
	<tr class="info"><td width="50%">
   <strong>
Current Password
  
</strong> 



</td>

<td width="50%">
<strong>
<form action="changePass.php" method="post">
  <input type="password" name="oldpass" class="form-control" placeholder="Enter Current Password Here" required autofocus>
</strong>
</td></tr>
	</table>
  <table class="table table-bordered">
	<tr class="info"><td width="50%">
   <strong>
New Password
  
</strong> 



</td>

<td width="50%"><strong>
  <input type="password" name="newpass1" class="form-control" placeholder="Enter New Password Here" required>

</strong>
</td></tr>



	</table>

  <table class="table table-bordered">
	<tr class="info"><td width="50%">
   <strong>
Repeat New Password
  
</strong> 



</td>

<td width="50%">
<strong>

  <input type="password" name="newpass2" class="form-control" placeholder="Enter New Password Again" required>
 
</strong>
</td></tr>
	</table>
        <input class="btn btn-primary" type="submit" id="" value="Change Password" style="float:right;">
<br/><br/>
</form>
<!--------------ERROR------------------>
  <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<?php
if(isset($_GET['msg']))
{
$msg='';
 $msg=$_GET['msg'];
 if($msg=='ErrorPChange'){
 echo"<script type='text/javascript'>
 $(window).load(function(){
	 $('#myModal5').modal('show');
 });
 </script>";
 }	
}

 ?>
 <?php
if(isset($_GET['msg']))
{
$msg='';
 $msg=$_GET['msg'];
 if($msg=='noMatch'){
 echo"<script type='text/javascript'>
 $(window).load(function(){
	 $('#myModal4').modal('show');
 });
 </script>";
 }	
}

 ?>
<?php
if(isset($_GET['msg']))
{
$msg='';
 $msg=$_GET['msg'];
 if($msg=='PChangeSucc'){
 echo"<script type='text/javascript'>
 $(window).load(function(){
	 $('#myModal6').modal('show');
 });
 </script>";
 }	
}

 ?>
<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">
		<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
		Success</h4>
      </div>
      <div class="modal-body">
       

	<div class="alert alert-success alert-dismissible fade in" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">×</span></button>Your <strong>Password </strong> Was Changed Successfully.
	</div>
    
	
  

      
  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

 <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">
		<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
		Error</h4>
      </div>
      <div class="modal-body">
       

	<div class="alert alert-danger alert-dismissible fade in" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">×</span></button>There was some <strong>Error </strong>Changing Your Password, Please Try Again
	<br>Plese Check<br><ul><li>Minimum Length of new password should be 8<li>New passwords should match <li>Enter right old password</ul>
	</div>
    
	
  

      
  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">
		<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
		Error</h4>
      </div>
      <div class="modal-body">
       

	<div class="alert alert-danger alert-dismissible fade in" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">×</span></button>The <strong>New Passwords </strong>You Gave Didn't Match, Please Try Again
	</div>
    
	
  

      
  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

<!----------------------------------->
</div>

  
  </div>
  </div>
</div>
</div>
  



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
