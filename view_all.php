<!DOCTYPE html>
<?php
session_start();
 $mysqli = new mysqli("localhost", "root", "", "cbt");
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
			<h5 align="center">List of Examinees</h5>
			<form method="GET" class="center input-append">
			<input type="text" name="shelf_search" value="<?php echo @$_GET['shelf_search'];?>" class="span4">
			<button type="submit" class="btn btn-primary">Search</button>
		  </form>			
			<p>
			<?php
				$query = "SELECT COUNT(*) FROM codes";
				$resulta = mysqli_query($mysqli, $query) or trigger_error($mysqli->error, E_USER_ERROR);
				$r = mysqli_fetch_row($resulta);
				$numrows = $r[0];
				$rowsperpage = 5;
				$totalpages = ceil($numrows / $rowsperpage);
				if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
				$currentpage = (int) $_GET['currentpage'];
				} else {
				$currentpage = 1;
				} 
				if ($currentpage > $totalpages) {
				$currentpage = $totalpages;
				}
				if ($currentpage < 1) {
				$currentpage = 1;
				}
				$offset = ($currentpage - 1) * $rowsperpage;
				$query = "SELECT * FROM codes Order by name LIMIT $offset, $rowsperpage";
				$resulta = mysqli_query($mysqli, $query) or trigger_error($mysqli->error, E_USER_ERROR);
				if (!$resulta) {
					trigger_error("Error: " . $mysqli->error, E_USER_ERROR);
					}
				
				require_once('search_bot_2.php'); 
				?>
				<table class="table table-bordered table-hover tooltip-demo">
					<thead>
						<tr>
							<th>Name</th>
							<th>Ref. Number</th>
							<th>Set</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						
						<?php 
						$query = "SELECT * FROM codes";
						$result = mysqli_query($mysqli, $query);
						if ($result) {
    
    					while ($fetch = mysqli_fetch_array($result)) { ?>
						<tr>
        <td><?php echo $fetch[1]; ?></td>
        <td><?php echo $fetch[2]; ?></td>
        <td><?php echo $fetch[4]; ?></td>
        <td><?php echo ($fetch[3] == 1) ? 'Pending' : 'Done'; ?></td>
    </tr>
						
						<?php 
						}
						echo '<div class="pagination">';
						echo '<ul>';
						$range = 3;
						if ($currentpage > 1) {
						echo "<li class='previous'><a href='{$_SERVER['PHP_SELF']}?currentpage=1'>&larr; Older</a></li> ";
						$prevpage = $currentpage - 1;
						//echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage'></a> ";
						}
						for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
						if (($x > 0) && ($x <= $totalpages)) {
						if ($x == $currentpage) {
						echo "<li class='active'><a href='#'>$x</a></li>";
						} else {
						echo "<li><a href='{$_SERVER['PHP_SELF']}?currentpage=$x'>$x</a></li>";
						} 
						} 
						}
						if ($currentpage != $totalpages) {
						$nextpage = $currentpage + 1;
						//echo "<li><a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage'></a></li>";
						echo "<li><a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages'>Newer &rarr;</a></li>";
						}
						echo '</ul></div>'; }
						?>
					</tbody>
				</table>
			</p>
			<br />
			<center>
			<a href="dashboard.php"><button class="btn-info btn-small" >Home</button></a>
			<a href="questions.php"><button class="btn-success btn-small" >Questionaire</button></a>
			<a href="register.php"><button class="btn-warning btn-small" >Register</button></a>
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