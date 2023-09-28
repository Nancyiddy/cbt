<?php
$mysqli = new mysqli('localhost', 'root', '', 'cbt');

if (!$mysqli) {
    die('Connection failed: ' . mysqli_connect_error());
}
?>

<?php 
function user_page_security($mysqli){
    if (isset($_SESSION['mycode'])) {
        if (isset($_SESSION['sid'])) {
            $sid = $_SESSION['mycode'];
        }
    }

    $secure_pages = mysqli_query($mysqli, "SELECT * FROM codes WHERE passcode = '$sid'");
    $check_point = mysqli_fetch_array($secure_pages);

    if ($check_point[3] == 0) {
        header("location: gateway.php");
    }
}
?>
