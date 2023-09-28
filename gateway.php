<!DOCTYPE html>
<?php
session_start();
$mysqli = new mysqli('localhost', 'root', '', 'cbt');


if (isset($_SESSION['myname']) && isset($_SESSION['mycode'])) {
   
    $myname = strtoupper($_SESSION['myname']);
    $mycode = strtoupper($_SESSION['mycode']);
} else {
    $myname = "Nice Peter";
    $mycode = "9c23a912b0";
}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
  	<title>Right Time Academy Examination Portal</title>
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
		<h3 align="center">Right Time Academy Examination</h3>
		<hr />
		<div class="caption">
			<h5>Name: <?php echo "Nice Peter"; ?> | Ref. Number: <?php echo "9c23a912b0"; ?></h5>
			<p>
				<b>Reminder:</b><br /><br />
				* Once you Failed the Exam, No More Second Chance.<br />
				* Finalize your Answers before you click the Submit button.<br />
				* You Have 20 Minutes to Answer all Questions.<br />
				* You will get 2 Points for each Correct Answer.<br />
				* Passing Grade is 65.<br />
				* No Cheating!<br />
			</p>
			<br />
			<a href="set_a.php"><button class="btn-success btn-large">Let's Roll !</button></a>
			<a href="logout.php"><button class="btn-danger btn-large">Cancel</button></a>
			<br />
			
			<p>
			
			
			
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
