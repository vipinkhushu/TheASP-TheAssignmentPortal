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

    <title>Frequently Asked Questions FAQ || The ASP - Premium Version</title>

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
 
 
 
 
 <h3><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;FAQ - Frequently Asked Questions</h3>
 
 <hr>
 <style>
blockquote
{
	background:#ffffff;
}
 
</style>
 <blockquote>
	<p><em>Q1.Can I submit an assignment multiple number of times?</em</p>
	<footer>A1. No, the site is designed in such a way that it won’t accept more than one                                                         submission for a given scheduled assignment. You are suggested to take care of the content you are submitting at the time of first submission itself.</footer>
	</blockquote>
 <blockquote>
	<p><em>Q2.Is there any possibility to edit the already submitted assignment?</em></p>
	<footer>A2. Sorry chap! There is no such option. We regret the inconvenience, but this facility has not been provided for your good only, to minimize the chances of duplicacy.</footer>
	</blockquote>
	 <blockquote>
	<p><em>Q3.Where can I report the problems I am facing, for the required corrections to be made?</em</p>
	<footer>A3. Proper feedback forms are available to you (<a href="contact.php">Link</a>), if you feel anything disturbing and find a genuine cause to make any ammendment in the site, you can surely contact us either by sending your feedbacks, or mailing me personally at <u>vipinkhushu@hotmail.com</u></footer>
	</blockquote>
 <blockquote>
	<p><em>Q4.How to change my password?</em></p>
	<footer>A4.  It involves a very simple process. You just have to log in with your current password and then click on your username visible in the right of the  top list, a dropdown list will appear, you have to click on “change password” option and you can change the password to your desired one. For security reasons you are adviced to keep a password with good strength.</footer>
	</blockquote>
	 <blockquote>
	<p><em>Q5. I think my account is being handled by some other unknown user. Is it actually possible?</em></p>
	<footer>A5. Though, it is very unlikely to happen, but yes their might be a possibility. In that case you must change your password right away. This kind of possibility arises only when someone has access to your password and that’s why you are always told to maintain privacy.</footer>
	</blockquote>
	 <blockquote>
	<p><em>Q6. I have missed the scheduled submission date. Can I still submit my assignment anyhow?</em></p>
	<footer>A6. No, you are not allowed to submit your assignment after the date scheduled by the teacher. The schedule is so prepared keeping everybody in mind. If you fail to submit the assignment in the given time then you are not allowed to do it later.</footer>
	</blockquote>
	 <blockquote>
	<p><em>Q7.Is my personal information secure or any other search engine can relate it?</em></p>
	<footer>A7. You don’t need to worry about your security and privacy from our side, we don’t allow any other search engine to access your personal information, you mentioned to us. 

</footer>
	</blockquote>
	 <blockquote>
	<p><em>Q8.How can I deactivate or delete my account?</em></p>
	<footer>A8. For the time being users are not provided with this facility. We will surely be ready with this feature very soon. And for that time, if you get any urgent need of deactivation you are welcome to contact us at (<a href="contact.php">link</a>) or vipinkhushu@hotmail.com</footer>
	</blockquote>
		 <blockquote>
	<p><em>Q9.Can I change my profile picture?</em></p>
	<footer>A9. Changing of profile pictures feature is under construction, We are trying to launch it in least possible time. 

</footer>
	</blockquote>
		 <blockquote>
	<p><em>Q10. I have forgotten my password. Is there any other way to log in?</em></p>
	<footer>A1. There is a recovery option already available. You can go to ‘login’ and then click on ‘forgot password’ at the bottom. It will take you to the recovery option and there you can answer your security question, you earlier had registered with. If your answer matches, you would successfully login into your account.</footer>
	</blockquote>
		 <blockquote>
	<p><em>Q11. I am facing problem in uploading a MS-Word file. What should I do?</em></p>
	<footer>A11. Server might be slow, due to some traffic on the site. Try uploading the file again after short time. Your problem should get resolved by then, but still if you don’t get through it, you can report it to us at (<a href="contact.php">link</a>) or vipinkhushu@hotmail.com</footer>
	</blockquote>
		 <blockquote>
	<p><em>Q12. I am facing problem while registering, What should I do?</em></p>
	<footer>A12. Our registration system user various scripts which will take time to load properly, Still you should try refreshing the page and use high speed data connection.</footer>
	</blockquote>
		 <blockquote>
	<p><em>Q13.Whenever I Login, It shows  Your Account is deactivated?</em></p>
	<footer>A13. If you are a student and getting this message, You have chosen teacher radio box at the time of registration, Try registering again with different email and username , For teachers contact your college administrator.</footer>
	</blockquote>
		 <blockquote>
	<p><em>Q14. I have found a bug in your website, How should I contact you?</em></p>
	<footer>A14. Kindly report it to Contact Us Page or email us on 

</footer>
	</blockquote>
	<blockquote>
	<p><em>Q15. I'm a developer and want to join you in developing this project , how can i reach you?</em></p>
	<footer>A15. Our Project is available on "GITHUB" (<a href="https://www.github.com/vipinkhushu/TheASP-TheAssignmentPortal" target="_new">link</a>), You can fork it and start working on it, We will highly appretiate your contribution.

</footer>
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
