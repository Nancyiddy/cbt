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
		<h3 align="center">Right Time   Academy Examination | cPanel</h3>
		<hr />
			<div class="caption">
			<h5 align="center">Account Settings</h5>		
			<p>
			<?php 
				if (isset($_SESSION['username'])) 
    
			$username = $_SESSION['username'];
				
				$user = "SELECT * FROM users WHERE username='username'";
    $result = mysqli_query($mysqli, "SELECT * FROM users WHERE username='username'");

    if ($result) 
        // Fetch user data (you can customize this part as needed)
        $user = mysqli_fetch_array($result);
			
			if(isset($_POST['editaccount'])){
				if (isset($_POST['myid']))

				$myid = $_POST['myid'];
				$newname = $_POST['newname'];
				$newpass = md5($_POST['newpass']);
				
				$update = mysqli_query($mysqli, "UPDATE users SET username='$newname', password='$newpass' WHERE id='myid'");
				if($update){
					echo '<div class="alert alert-block alert-success">Your Account was successfully Updated!</div></h5>
					<script>window.setTimeout(function() {window.location = "settings.php";}, 3000);</script>';
					}else{
					echo '<div class="alert alert-block alert-danger"><b>Something went wrong! Please try again.</b></div></h5>';
					}
			}
			?>
			<form method="POST">
			<ul style="list-style:none;">
				<li>
				Username: <br />
				<input class="span5" type="text" value="<?php echo !empty($user[1]) ? $user[1] : ''; ?>" name="newname" required/>

				</li>
				<li>
				New Password: <br />
					<input class="span5" type="password" value="<?php echo !empty($user[0]) ? $user[0] : ''; ?>" name="newpass" required/>
				
				</li>
				<li>
				<button name="editaccount" class="btn-inverse btn-large">Save Changes</button>
				</li>
			</ul>
			</form>
			</p>
			<br />
			<center>
			<a href="dashboard.php"><button class="btn-info btn-small" >Home</button></a>
			<a href="questions.php"><button class="btn-success btn-small" >Questionaire</button></a>
			<a href="results.php"><button class="btn-warning btn-small" >Results</button></a>
			<a href="register.php"><button class="btn-inverse btn-small" >Register</button></a>
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