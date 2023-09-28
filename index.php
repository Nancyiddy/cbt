 <!DOCTYPE html>
<?php
session_start();

date_default_timezone_set('Africa/Lagos');
?>
<html lang="en">
<head>
    <meta charset="utf-8">
  	<title>Right Time   Academy Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icon.png" type="image/ico"/>
    <link href="main.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="container">
<br /><br /><br /><br /><br />
<div class="row">
	<div class="span3"></div>
	<center>
	<div class="span6">
		<div class="thumbnail well">
		<h3 align="center" style="color:#001385 !important;">Right Time   Academy Board</h3>
		<hr />
		<img src="images/logo" height="200" width="200" alt="logo"/>
			<div class="caption">
			<?php require_once('checkpoint.php'); ?>
			<p>
			<strong>Welcome to Right Time   Academy Examination System !</strong><br />	
		
			</p>
			<br />
			<a href="#myModal" role="button" class="btn-warning btn-large" data-toggle="modal">Take Exam Now</a>
			<a href="#myModal2" role="button" class="btn-info btn-large" data-toggle="modal">Login</a>
			<br/>
			<br />
		</div>
		</div>
	</div>
	</center>
	<div class="span3"></div>
</div>
</div>

		<!-- Exam Pop-up -->
		<div class="modal hide fade" id="myModal">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h3>Enter Code</h3>
			</div>
			<div class="modal-body">
			<form method="POST" action="set_a.php">
			<ul style="list-style:none;">
			  <li>
			  <input name="passcode" type="text" placeholder="Type the code here..." class="span6" required/>
			  </li> 
			</ul>
			</div>
			<div class="modal-footer">
			<button name="submit" class="btn-success btn-large"><a href="gateway.php">Continue</button>
			</div>
			</form>
		</div>
		
		<!-- Exam Pop-up -->
		<div class="modal hide fade" id="myModal2">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h3>Login</h3>
			</div>
			<div class="modal-body">
			<form method="POST" action="set_a.php">
			<ul style="list-style:none;">
			  <li>
			  <label>Username</label>
			  <input name="uname" type="text" class="span6" required/>
			  </li>
			  <li>
			  <label>Password</label>
			  <input name="upass" type="password" class="span6" required/>
			  </li> 
			</ul>
			</div>
			<div class="modal-footer">
			<button name="login" class="btn-info btn-large" >Login</button>
			</div>
			</form>
		</div>

	<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/prettify.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
    <script src="js/bootstrap-affix.js"></script>
    <script src="js/application.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  
</body>
</html>