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
		<div class="thumbnail well">
		<h3 align="center">Online Examination | cPanel</h3>
		<hr />
			<div class="caption">
			<h5 align="center">Update Questionare</h5>	
			<hr />
			<p align="center">
			<a href="edit_set_a.php" target="_blank"><button class="btn-inverse btn-large">Set A</button></a>
			<a href="edit_set_b.php" target="_blank"><button class="btn-inverse btn-large">Set B</button></a>
			<a href="edit_set_c.php" target="_blank"><button class="btn-inverse btn-large">Set C</button></a>
			</p>
			<hr />
			<center>
			<a href="dashboard.php"><button class="btn-info btn-small" >Home</button></a>
			<a href="register.php"><button class="btn-success btn-small" >Register</button></a>
			<a href="results.php"><button class="btn-warning btn-small" >Results</button></a>
			<a href="settings.php"><button class="btn-inverse btn-small" >Settings</button></a>
			<a href="logout.php"><button class="btn-danger btn-small" >Logout</button></a>
			</center>
		</div>
		</div>
</div>
<div class="span3"></div>
</div>
</div>

</body>
</html>