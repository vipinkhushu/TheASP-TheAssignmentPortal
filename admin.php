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

$sql = "SELECT `type` FROM `user_information` where username='$user_check'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       if($row["type"]!='admin')
	   {

header("location: home.php");



	   }

	   }
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
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <link rel="icon" href="images/favicon.ico">
  <script src="js/pnglib.js"></script>
    <script src="js/identicon.js"></script>
    <title>Welcome RAPL IND. || The ASP - Premium Version</title>

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
	<span aria-hidden="true">?</span></button>It is strongly recommended To Set<strong> Security Question</strong> As Soon As Possible</div>

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
		$_SESSION["college"]=$row["college"];
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
<li>All Users</li>
<li>All Assignments</li>

</ul>
	  </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Edit Configurations<span  style="float:right;" class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
<ul>
<a href="mycollegeassignments.php"><li>Track Assignments</li>
</a>
</ul>    </div>
    </div>
  </div>
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
|| TheASP Premium Version || <br>|| ? RAPL IND. - 2015 || <br>|| <a href="aboutasp.php">ABOUT US ||</a>
<br><a href="https://www.facebook.com/theasp.rapl" target="_new"><img src="images/facebook.png" width="10%" height="10%"></a>
</center>





  </div>
  </div>

  <div class="col-md-9">
  <div class="regpage">

<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">All Users</a></li>
<li role="presentation"><a href="#class" aria-controls="class" role="tab" data-toggle="tab">Contact requests</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="home">

	<table class="table table-bordered">

	<?php
include('pass.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `user_information`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    	echo"<tr class='info'><td><strong>#</strong></td><td><strong>id</strong></td><td><strong>A/C</strong></td><td><strong>Username</strong></td><td><strong>Full Name</strong></td><td><strong>E-Mail</strong></td><td><strong>Details</strong></td></tr>";
$num=1;
    while($row = $result->fetch_assoc()) {
       echo"<tr><td>$num</td><td>".$row["id"]."</td><td>";
	   if($row["type"]=="admin")
		   echo"<span class='glyphicon glyphicon-fire' aria-hidden='true'></span>";
	   else if($row["type"]=="stud")
		   echo"<span class='glyphicon glyphicon-user' aria-hidden='true'></span>";
	   else if($row["type"]=="college")
		   echo"<span class='glyphicon glyphicon-education' aria-hidden='true'></span>";
	   else if($row["type"]=="teacher")
		   echo"<span class='glyphicon glyphicon-blackboard' aria-hidden='true'></span>";
	   echo"</td><td>".$row["username"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td>
	   <td><form action='admin.php' method='get'><input type='text' name='id' value=".$row["id"]." hidden>
	   <input type='submit' value='Get Details' class='btn btn-primary'></form></td></tr>";
$num+=1;
    }
} else
{
  echo"No Accounts yet";
}
$conn->close();
?>
	</table>





	</div>
    <div role="tabpanel" class="tab-pane fade" id="class">

     <!----------------------->


	<table class="table table-bordered">

	<?php
include('pass.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `logs` WHERE `type`='contact'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    	echo"<tr class='info'><td><strong>#</strong></td><td><strong>id</strong></td><td><strong>username(ip)</strong></td><td><strong>Time</strong></td><td><strong>Type</strong></td><td><strong>Name,E-Mail,Mobile</strong></td><td><strong>Message</strong></td>
		<td><strong>Status</strong></td></tr>";
$num=1;
    while($row = $result->fetch_assoc()) {
       echo"<tr><td>$num</td><td>".$row["id"]."</td>";
	   echo"<td>".$row["username"]."<br/>".$row["ip"]."</td><td>".$row["time_stamp"]."</td><td>".$row["feedback_type"]."</td>
	   <td>".$row["fullname"]."<br/>".$row["email"]."<br/>".$row["mobile"]."</td>
	   <td>".$row["message"]."</td>
	   <td>";
	   if($row["status"]=="pending")
	   {
		   echo"<form action='rqstdone.php' method='post'>
		   <input type='text' value='".$row["id"]."' name='idz' hidden>
		   <input type='Submit' value='Set As Solved' class='btn btn-success'>
		   </form>";
	   }
	   else
	   {
		   echo"Solved";
	   }

	   echo"</td>
	   </tr>";
$num+=1;
    }
} else
{
  echo"No Accounts yet";
}
$conn->close();
?>
	</table>
	<!----------------------->
	  </div>


	</div>


  </div>

</div>


  </div>
  </div>
</div>
</div>

<?php
if(isset($_GET["id"]))
{
	echo"  <script type='text/javascript'>
 $(window).load(function(){
	 $('#myModal4').modal('show');
 });
 </script>";
}

?>



 <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">
		<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
		Details</h4>
      </div>
      <div class="modal-body">
	<div class='alert alert-info alert-dismissible fade in' role='alert'>

	<?php
	if(isset($_GET["id"]))
	{
		include('pass.php');
$getid=$_GET["id"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `user_information` WHERE `id`=$getid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
   echo"<p>Phone Number : ".$row["phoneno"]."</p>";
echo"<p>College Name : ".$row["college"]."</p>";
echo"<p>Class : ".$row["course"].",".$row["batch"].",".$row["rollno"]."</p>";
 echo"<p>Security: ".$row["squestion"]."(".$row["sanswer"].")</p>";
echo"<p>Activation Status : ".$row["activate"]."</p>";
echo"<p>Registration Time : ".$row["reg_time"]."</p>";
}} else
{
  echo"No Info Available";
}
$conn->close();
	}


?>


	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
