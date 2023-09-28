<!DOCTYPE html>
<?php
session_start();

require_once('myconnection.php');
//user_page_security();
?>
<html lang="en">
<head>
    <meta charset="utf-8">
  	<title>Right Time   Exam Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icon.png" type="image/ico"/>
    <link href="main.css" rel="stylesheet" type="text/css"/>
	<link href="print.css" rel="stylesheet" type="text/css" media="print"/>
</head>
<body>
<div class="container">
<br /><br /><br /><br /><br />
<div class="row">
<div class="span3"></div>
<div class="span6">
<center>
		<div class="thumbnail well">
		<h3 align="center">Right Time   Academy Examination | cPanel</h3>
		<hr />
			<div class="caption">
			<h5>Welcome Back,  <?php if (isset($_SESSION["username"])) {
    echo strtoupper($_SESSION["username"]);
} 
?></h5>
				
			<br />			
			<p>
			<a href="register.php"><button class="span5 btn-info btn-large" >Register</button></a><br /><br /><br />
			<a href="questions.php"><button class="span5 btn-success btn-large" >Manage Questionaire</button></a><br /><br /><br />
			<a href="results.php"><button class="span5 btn-warning btn-large" >View Results</button></a><br /><br /><br />
			<a href="settings.php"><button class="span5 btn-inverse btn-large" >Account Settings</button></a><br /><br /><br />
			
			</p>
			<br />
			
			<a href="logout.php"><button class="btn-danger btn-large" >Logout</button></a>
			<br/>
		</div>
		</div>
</center>
</div>
<div class="span3"></div>
</div>
</div>

</body>
</html>