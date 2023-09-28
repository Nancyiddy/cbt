<!DOCTYPE html>
<?php
session_start();
if(empty($_SESSION['myname'])) {
    header("location: index.php");
} 
require_once('myconnection.php');
user_page_security($mysqli);
?>
<html lang="en">
<head>
    <meta charset="utf-8">
  	<title>Right Time Exam Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icon.png" type="image/ico"/>
    <link href="main.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="container">
<br />
<h5>Name : <?php echo strtoupper($_SESSION['myname']); ?> | Ref. Number: <?php echo strtoupper($_SESSION['mycode']); ?></h5>
<form method="POST" action="submit.php">
<?php 
$codec= $_SESSION['mycode'];
$get_set = mysqli_fetch_array(mysqli_query($mysqli, "SELECT * FROM codes WHERE passcode='$codec'"));
if($get_set[4] == 'A'){
	require_once('set_a.php');
}elseif($get_set[4] == 'B'){
	require_once('set_b.php');
}else{
	require_once('set_c.php');
}
?>
<input type="hidden" name="sets" value="<?php echo $get_set[4]; ?>"></input>
</form>
</body>
</html>