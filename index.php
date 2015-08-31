
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta http-equiv="content-language" content="en">
<title>The Assignment Portal The ASP Making All Assignment System Onlin</title>
<meta name="description" content="The ASP The Online Assignment Portal is making the assignment system for colleges and schools online. Colleges have to register themselves and then their Students And Teachers Can Start The Assignment Process online. This Project is Proudly made By RAPL">
<meta name="keywords" content="online,assignments,theasp,the,assignment,portal,ymca,faridabad,vipin,khushu,rapl,ind,raju,arts,pvt,ltd,ymcaust">
<meta name="googlebot" content="noodp">
<meta name="copyright" content="RAPL IND rajuartspvtltd@yahoo.in">

  <?php

if(isset($_COOKIE['vipin'])==1)
{
	header("location: home.php");
}
?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">

    <title>The ASP - Premium Version</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
<script src="click.js"></script>


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
            <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp;Home</a></li>
            <li><a href="aboutasp.php"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>&nbsp;&nbsp;About</a></li>
            <li><a href="contact.php"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;&nbsp;Contact</a></li>
			
			<!------------LOGIN SYSTEM-------------------->
		

		
	<li><a href="" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;
	
	Login
	
	</a>

	</li>


	
	
	
	
	
	
	
	
	
	
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
      <div class="modal-footer">  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
<!--------LOGIN FORM DATA------------->
			  <center><span style="color:red;background:#fff;"><noscript>
			  <span class="glyphicon glyphicon-alert" aria-hidden="true"></span><br>
			  JavaScript is disabled in your browser, Kindly Enable it to have a better experience using TheASP
			 
			  Or Update your browser
			  </noscript></span></center>
		<div class="row">
		<br><br>
  <div class="col-md-6">
  <div class="jumbotron">
 
  <h1><img src="images/logo.png" width="100%"></h1>
  <p>Assignments Made Online And Easy<br>Why use paper to write assignments when it can be done online,By joining TheASP 
  we pledge to save trees<a href="aboutasp.php">...Read More</a>
  </br></p>
  
  
</div><br><br>
  <div class="jumbotron">

<center>
TheASP Premium Version || &copy; RAPL IND. - 2015 || <a href="aboutasp.php">ABOUT US</a>
<br><a href="https://www.facebook.com/theasp.rapl" target="_new"><img src="images/facebook.png" width="8%" height="8%"></a>
</center>
  
</div>

  </div>  
  <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
  
  <div class="col-md-6">
<div class="regpage">
<!-----------------Trial Zone---------------->
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
 <!-----
 <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">
		<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
		Login</h4>
      </div>
      <div class="modal-body">
        <form>
    <div class="form-group">
	<div class="alert alert-success alert-dismissible fade in" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">×</span></button>You Have Been Successfully<strong> Registered </strong>
	</div>
    <label for="exampleInputusername">Username / E-mail</label>
	<div class="input-group">
	<div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
    <input type="text" class="form-control" id="exampleInputusername" placeholder="Username" required>
	
	</div>
	
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
	<div class="input-group">
	<div class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></div>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
  </div></div>
      
  
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>&nbsp;&nbsp;Login</button>
      </div>
    </div>
  </div>
</div>
 
-------------------------------------->


<!---------------------ERROR REG DATA------------------------>

<?php
if(isset($_GET['next']))
{
$next='';
 $next=$_GET['next'];
 if($next=='ErrorReg'){
 echo"<script type='text/javascript'>
 $(window).load(function(){
	 $('#myModal5').modal('show');
 });
 </script>";
 }	
}
if(isset($_GET['next']))
{
$next='';
 $next=$_GET['next'];
 if($next=='deAct'){
 echo"<script type='text/javascript'>
 $(window).load(function(){
	 $('#myModaldeact').modal('show');
 });
 </script>";
 }	
}
 ?>
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
	<span aria-hidden="true">×</span></button>There was some <strong>Error </strong>Registering you, Please Try Again
	</div>
    
	
  

      
  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

 <div class="modal fade" id="myModaldeact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
	<span aria-hidden="true">×</span></button>Your <strong>TheASP Account</strong> Is Not Activated, Contact Your College Head.
	</div>
    
	
  

      
  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>


<!------------------------------------------------------------>
  <h1>Register Here</h1>

	<script type="text/javascript" src="js/usernamevalid.js"></script> 


	
	<form method="post" action="register.php">

	<div class="form-group">
		<span id="result_user"></span>
		<div id="vip1">
		  <label for="exampleInputusername">Username</label>
	<div class="input-group">
	<div class="input-group-addon">@</div>
		  <input type="text" class="form-control" name="username" id="user_check" autocomplete="off" placeholder="steve_jobs" autofocus required>
		  
		
		</div>
		</div>
		</div>
		
		<div id="vip3">
		<div class="form-group">    <label for="exampleInputname">Full Name</label>
		<div class="input-group"> 
	<div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>

    <input type="text" name="fullname" class="form-control" id="name_check" placeholder="e.g Steve Jobs" disabled required>
  </div></div>
  </div>
  <div id="vip2">
		<p>
		  <label for="email">Email address:</label>
		  <div class="input-group"> 
	<div class="input-group-addon"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></div>
		  <input type="email" name="email" class="form-control" id="email_check" autocomplete="off" placeholder="steve.jobs@apple.com" disabled required>
		   </div>
		</p></div>
		<div id="vip4">
		<p><label for="password">Password:</label>
		<div class="input-group"> 
	<div class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></div>
		 
		  <input type="password" class="form-control" name="password" id="password_check" placeholder="***" disabled required>
		</div></p></div>
		<div id="vip5">
		 <div class="form-group">
    <label for="exampleInputnumber">Phone Number</label>
	<div class="input-group">
	<div class="input-group-addon">+91</div>
    <input type="tel" class="form-control" name="phoneno" id="phone_check" placeholder="Mobile Number" disabled required></div>
  </div>
  </div>
 
		 <div class="form-group">
    <label for="exampleInputnumber">College Name</label>
	<div class="input-group">
	<div class="input-group-addon"><span class="glyphicon glyphicon-education" aria-hidden="true"></span></div>
    <select name="college" class="form-control" id="college_check" name="college" disabled>
	<option value="YMCAUST,FARIDABAD" id="college_check">YMCAUST, FARIDABAD</option>
	
	</select>
  </div>

<!-------------------------CAPTCHA------------------------->







<!----------------------------->



  <p><br/>
		  <label for="password">You Are:</label>
	&nbsp;&nbsp;&nbsp;
		 <input type="radio" name="type" value="stud" id="type_check" disabled><label for="student" >Student</label>
&nbsp;&nbsp;&nbsp;
		<input type="radio" name="type" value="teacher" id="type1_check" checked="checked" disabled ><label for="teacher"  >Teacher</label>
		</p>
		<div class="form-group">
<div class="hide" id="to_hide">			
			
    <label for="exampleInputnumber">Course Name</label>
	<div class="input-group">
	<div class="input-group-addon"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span></div>
	<select name="course" class="form-control" id="course_check">
	<option value="#">--Choose One</option>
<option value="Btech IT">Btech Information Technology</option>
<option value="Btech CSE">Btech Computer Science</option>
<option value="Btech EL">Btech Electrical</option>
<option value="Btech ME">Btech Mechanical</option>
<option value="Btech ECE">Btech Electronics And Communication</option>
<option value="Btech EI">Btech Electronics And Instrumentation</option>

	</select>
</div></div>
	<div id="vip6">
	
  	 <div class="hide" id="1to_hide">		
		<p>
		  <label for="rollno">Roll Number:</label>
		  <div class="input-group">
	<div class="input-group-addon"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></div>
		  <input type="text" class="form-control" name="rollno" id="rollno_check" placeholder="e.g. IT-2160-2K14">
		</p></div>
		</div>
		</div>
		<div class="hide" id="2to_hide">	
		<div id="vip7"><p> <label for="batch">Batch:</label>
		<div class="input-group">
	<div class="input-group-addon"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></div>
<select name="batch" class="form-control" id="batch_check">
<option value="#">--Choose One</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>


	</select>
		  
		</p></div><br/>
		</div></div>
		
		

		
		
		
		
<input class="btn btn-primary" type="submit" id="login-submit" value="Register" disabled="disabled" >
	
	</form><br/></br>
	<a href="" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;
	
	
	Already A User? Sign In
	
	</a>
	
  </div>
</div>
<!-------------------------------------->




<!--------------------------------------->

</div>
</div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  
  </body>
</html>
