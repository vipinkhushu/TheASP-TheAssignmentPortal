

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Contact Us || The ASP - Premium Version</title>

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
            <li class="active"><a href="contact.php"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;&nbsp;Contact</a></li>
			
			<!------------LOGIN SYSTEM-------------------->
		

	<?php  
if(isset($_SESSION['login_user'])){
	echo"<!--";

}
if(isset($_COOKIE['auth'])&&isset($_COOKIE['PHPSESSID']))
	{
	
		echo"<!--";
	}


?>
		
	<li><a href="" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;
	
	Login
	
	</a>

	</li>


	
	
	<?php  
if(isset($_SESSION['login_user'])){
	echo"-->";

}
if(isset($_COOKIE['auth'])&&isset($_COOKIE['PHPSESSID']))
	{
	
		echo"-->";
	}


?>
<?php  

if(isset($_COOKIE['auth'])&&isset($_COOKIE['PHPSESSID']))
	{
	
		
	}
else
{
	echo"<!--";
}

?>
		
	<li class="pull-right"><a href="" data-toggle="dropdown">
	  <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	    <script src="js/pnglib.js"></script>
    <script src="js/identicon.js"></script>
	<script type="text/javascript">
    
	var vip='<?php     
	
	echo md5($_COOKIE["auth"]);
	?>';
    

		
        data = new Identicon(vip, 420).toString();
        document.write(
                '<img alt="TheASP Avtaar"  width=21 height=21 src="data:image/png;base64,' + data + '">'
        );
    
</script>
	&nbsp;&nbsp;<?php echo $_COOKIE["auth"]; ?> <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></a>
	<ul class="dropdown-menu" role="menu" aria-labelledby="dlabel">
			<a href="profile.php"><li style="background:#fff;padding:6px 6px 6px 6px;border-bottom:0px solid black;"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;My Profile</li></a>
			<a href="settings.php"><li style="background:#fff;padding:6px 6px 6px 6px;border-bottom:0px solid black;"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>&nbsp;&nbsp;Change Password</li></a>
			<a href="logout.php"><li style="background:#fff;padding:6px 6px 6px 6px;border-bottom:0px solid black;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp;&nbsp;Logout</li></a>
			
			</ul>
	
	</li>
	
	<?php  

if(isset($_COOKIE['auth'])&&isset($_COOKIE['PHPSESSID']))
	{
	
		
	}
else
{
	echo"-->";
}

?>
	
	
	
	
	
	
	
	
	
	
	<!------------LOGIN SYSTEM-------------------->
	

	
	
	
	<!------------LOGIN SYSTEM-------------------->
	
	<li><a href="" data-toggle="dropdown"><span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span>&nbsp;&nbsp;More</a>
	<ul class="dropdown-menu" role="menu" aria-labelledby="dlabel">
		<a href="contact.php?newsletter=subscribe">	<li style="background:#fff;padding:6px 6px 6px 6px;border-bottom:0px solid black;"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>&nbsp;&nbsp;News Letter</li></a>
			<a href="faq.php">	<li style="background:#fff;padding:6px 6px 6px 6px;border-bottom:0px solid black;"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>&nbsp;&nbsp;FAQ</li></a>
			<a href="termsofuse.php">	<li style="background:#fff;padding:6px 6px 6px 6px;border-bottom:0px solid black;"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>&nbsp;&nbsp;T&C</li></a>
			
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
			  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">
		<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
		Login</h4>
      </div>
      <div class="modal-body">
     
		
		<!-------------MESSAGE ZONE----------->
		 <?php
 if(isset($_GET['next']))
 {
	$next=$_GET['next'];
 if($next=='LogIn'){
 echo"
 <div class='alert alert-success alert-dismissible fade in' role='alert'>
	<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
	<span aria-hidden='true'>×</span></button>You Have Been Successfully<strong> Registered </strong>
	</div>
 "; 
 }
 if($next=='invalidPass'){
 echo"
 <div class='alert alert-danger alert-dismissible fade in' role='alert'>
	<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
	<span aria-hidden='true'>×</span></button>Invalid<strong> Username / Password </strong>
	</div>
 "; 
 }
  if($next=='FPSuccess'){
 echo"
 <div class='alert alert-success alert-dismissible fade in' role='alert'>
	<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
	<span aria-hidden='true'>×</span></button>You <strong> Password </strong>has been successfully changed.
	</div>
 "; 
 }

 }
 
 ?>
		
		
		<!----------------------------------->
		   <form method="post" action="login.php">
    <div class="form-group">
	
    <label for="username">Username</label>
	<div class="input-group">
	<div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
   
 <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
	
	</div>
	
  </div>
  <div class="form-group">
    <label for="password">Password</label>
	<div class="input-group">
	<div class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></div>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
  </div></div>
     

      </div>
      <div class="modal-footer">.  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	  <input class="btn btn-primary" data-toggle="modal" data-target="#myModal1" id="" value="Forgot Password">
      
        <input class="btn btn-primary" type="submit" id="" value="Login">
      </div>
	  </form>
	  
    </div>
  </div>
</div>
<!--------------2------------>
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">
		<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
		Forgot Password</h4>
      </div>
      <div class="modal-body">
	  <?php
 if(isset($_GET['next']))
 {
	$next=$_GET['next'];
 if($next=='fpErr'){
 echo"
 <div class='alert alert-danger alert-dismissible fade in' role='alert'>
	<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
	<span aria-hidden='true'>×</span></button>The Details You Provided Were Incorrect,<br>Make Sure Minimum Password Length is 8,<br> Try Again Or Contact Us On
	<ul><li>admin@theasp.tk<li>help@theasp.tk<li>vipinkhushu@hotmail.com<li>+91-9643763712</ul>
	</div>
 "; 
 }
 
 }
 ?>
        <form action="forgotpass.php" method="post">
    <div class="form-group">
    <label for="exampleInputusername">E-mail</label>
	<div class="input-group">
	<div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
    <input type="email" class="form-control" name="email" id="exampleInputusername" placeholder="E-Mail" required>
	
	</div>
	
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Security Question</label>
	<div class="input-group">
	<div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
  <select name="question" class="form-control" required>
 <option value="1">What is the name of your favourite actor?   </option>
  <option value="2">What is the name of your favourite book?   </option>
  <option value="3">What is the name of your best buddy?   </option>
   <option value="4">Which brand do you prefer to wear?   </option>
    <option value="5">What admires you the most?   </option>
 </select> 
  </div></div>
    <div class="form-group">
    <label for="exampleInputPassword1">Security Answer</label>
	<div class="input-group">
	<div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
 
     <input type="password" class="form-control" id="answer" name="answer" placeholder="Enter Your Answer Here..." required>

 </div></div>  
   <div class="form-group">
    <label for="exampleInputPassword1">Desired New Password</label>
	<div class="input-group">
	<div class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></div>
 
     <input type="password" class="form-control" id="answer" name="newpassword" placeholder="Enter New Password Here" required>

 </div></div>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <input class="btn btn-primary" type="submit" id="" value="Login">
</form>
      </div>
    </div>
  </div>
</div>
 <?php
 if(isset($_GET['next']))
 {
	$next=$_GET['next'];
 if($next=='LogIn'||$next=='invalidPass'||$next=='FPSuccess'){
 echo"<script type='text/javascript'>
 $(window).load(function(){
	 $('#myModal').modal('show');
 });
 </script>"; 
 }
 
 }
 
 if(isset($_GET['next']))
 {
	$next=$_GET['next'];
 if($next=='fpErr'){
 echo"<script type='text/javascript'>
 $(window).load(function(){
	 $('#myModal1').modal('show');
 });
 </script>"; 
 }
 
 }
 ?>

<!--------LOGIN FORM DATA------------->
			  <center><span style="color:red;background:#fff;"><noscript>
			  <span class="glyphicon glyphicon-alert" aria-hidden="true"></span><br>
			  JavaScript is disabled in your browser, Kindly Enable it to have a better experience using TheASP
			 
			  Or Update your browser
			  </noscript></span></center>
		<div class="row">
		<br><br>
  <div class="col-md-6">
 <div class="regpage">
  <h1>Contact Us</h1>
  <?php
  if(isset($_GET["msg"]))
  {
	  if($_GET["msg"]=="done")
	  {
		  echo"<div class='alert alert-success alert-dismissible fade in' role='alert'>
	<b>Your Message Has been recieved, we will get in touch with you shortly
	</b>
	</div>";
	  }
	  else if($_GET["msg"]=="Error")
	  {
		  echo"<div class='alert alert-danger alert-dismissible fade in' role='alert'>
	<b>Some error occured while submitting the message, Please try again
	</b>
	</div>";
	  }
		  
  }
  
  
  ?>
  <form action="contactrqst.php" method="post">


  
  <div class="form-group">
  <div class="input-group">
   
    <label for="exampleInputname">Select Type</label>
    <div class="input-group">
	<div class="input-group-addon"><span class="glyphicon glyphicon-list" aria-hidden="true"></span></div>
   
	<select class="form-control" name="type">
	<?php
		if(isset($_GET["newsletter"]))
		{
			if($_GET["newsletter"]=="subscribe")
			echo"<option class='form-control' value='subscribe'>Subscribe To Our News And Updates</option>";
			else if($_GET["newsletter"]=="unsubscribe")
			echo"<option class='form-control' value='unsubscribe'>Un-Subscribe To Our News And Updates</option>";

				
		}
					else
			{
echo"<option class='form-control' value='feedback'>Feedback</option>";
echo"<option class='form-control' value='query'>Query</option>";
echo"<option class='form-control' value='technicalhelp'>Technical Help</option>";			
echo"<option class='form-control' value='bugreport'>Bug Report</option>";
echo"<option class='form-control' value='others'>Others</option>";			
			}
	
	?>
	</select></div></div>
  </div>
    <?php  

if(isset($_COOKIE['auth'])&&isset($_COOKIE['PHPSESSID']))
	{
	
		echo"<!--";
	}

?>
	
	
	<div class="form-group">
    <label for="exampleInputname">Full Name</label>
	  <div class="input-group">
	<div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
   
    <input type="text" class="form-control" id="exampleInputname" placeholder="Full Name" name="fullname" required>
  </div></div>
   
  
  
  
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
	  <div class="input-group">
	<div class="input-group-addon"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></div>
   
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email" required>
  </div></div>
 
      <div class="form-group">
    <label for="exampleInputnumber">Mobile Number</label>
	<div class="input-group">
	<div class="input-group-addon">+91</div>
    <input type="text" class="form-control" id="exampleInputnumber" name="mobile" placeholder="Mobile Number" required></div>
  </div>
   <?php  

if(isset($_COOKIE['auth'])&&isset($_COOKIE['PHPSESSID']))
	{
	
		echo"-->";
	}

?>
<div class="form-group">
    <label for="exampleInputmsg">Input Message Here</label>
	  <div class="input-group">
	<div class="input-group-addon"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></div>
   
	<textarea class="form-control" placeholder="Enter message here..." name="message"></textarea>
  <br/></div><br/>
  <button type="submit" class="btn btn-default">Send</button>
</form><br/><br/>
<div class='alert alert-info alert-dismissible fade in' role='alert'>
	<b>Our Support Team Will Respond To Your Feedback Within Couple Of Hours Via Email, SMS Or Call.
	</b>
	</div>

</div>
  </div>
  
  </div>
  <div class="col-md-6">
 <div class="jumbotron">
 
  <h1><img src="images/logo.png" width="100%"></h1>
  <hr>
  <h4> <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;
   Emails:-</h4>
  
		<li>admin@theasp.tk</li>
		<li>help@theasp.tk</li>
		<li>vipinkhushu@hotmail.com</li>
 
  <hr/>
  <h4> <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
   Social Links:-</h4>
  
		<a href="https://www.facebook.com/theasp.rapl"><li>https://www.facebook.com/theasp.rapl</li></a>
		<a href="https://www.twitter.com/vipinkhushu"><li>https://www.twitter.com/vipinkhushu</li></a>
		<hr>
  <h4>  <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
   Phone Numbers:-</h4>
  
		<li>+91 9643763712</li>
		
</div><br><br>
  <div class="jumbotron">

<center>
TheASP Premium Version || &copy; RAPL IND. - 2015 || <a href="#">ABOUT US</a>
<br><img src="images/facebook.png" width="8%" height="8%">
</center>
  
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
