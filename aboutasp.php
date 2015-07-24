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

    <title>About TheASP || The ASP - Premium Version</title>

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
            <li class="active"><a href="aboutasp.php"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>&nbsp;&nbsp;About</a></li>
            <li><a href="contact.php"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;&nbsp;Contact</a></li>
			
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
  <div class="col-md-12">
 <div class="regpage">
 
 <h1><u><center>About TheASP - The Assignment Portal<br/><br/><img src="images/logo.png" width="60%"></center></u></h1>
 <hr>
  <p style="font-size:150%;">Worried how to get through the assignment work in college or school?
Welcome to the site, it seems connection is all it takes. One step closer to getting your work done on time. This site shows the information about the assignment , it's deadline and other details uploaded by the teachers themselves. Students can upload the assignments online, which will make it easier for them. This is an endeavour to get the work done quickly and efficiently. Everything will be authenticated by the respective teachers. Students will have to register and then they can access the information anytime anywhere. Same goes for the teachers. Registering with their own IDs will help in minimising plagiarism. Students can discuss about the assignments and can leave their comments or suggestions to help others.
  
  </p>
  <hr>
  <h3><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;About Developers And Designers</h3>
  <div class="row"> <div class="col-md-3">
   <img src="images/vipin-khushu.jpg" height="40%" width="100%">
  </div>
  <div class="col-md-3">
  <strong>
  <h2>Vipin Khushu</h2>
	<h3>B.Tech (2nd Year)</h3>
	<ul><li>Website: <a href="http://www.rapl.tk">www.rapl.tk</a></li>
	<li>Facebook: <a href="http://www.facebook.com/khushuvipin">@khushuvipin</a></li>
	<li>Twitter: <a href="http://www.twitter.com/vipinkhushu">@vipinkhushu</a></li>
	<li>E-Mail: <a mailto:"vipinkhushu@hotmail.com">vipinkhushu@hotmail.com</a></li>
	</ul>
	  </strong>
  </div><div class="col-md-3"></div><div class="col-md-3"></div>
  </div>

	
	
  <hr>
 <h3><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>&nbsp;Testimonials</h3>
 <blockquote>
	<p>"<em>Message Here</em>"</p>
	<footer>By NAME(DETAILS)</footer>
	</blockquote>
 <blockquote>
	<p>"<em>Message Here</em>"</p>
	<footer>By NAME(DETAILS)</footer>
	</blockquote>
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
