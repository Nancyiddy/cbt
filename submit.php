<?php
session_start();
require_once('myconnection.php');

if (isset($_POST['submit'])) {
    
    $name = isset($_SESSION['myname']) ? $_SESSION['myname'] : '';
    $codec = isset($_SESSION['mycode']) ? $_SESSION['mycode'] : '';
    $set = isset($_POST['sets']) ? $_POST['sets'] : '';

   
    $score = array();

    $answers = mysqli_query($mysqli, "SELECT * FROM answer_key WHERE qset='$set'");
    $keys = mysqli_fetch_array($answers);

    for ($apple = 0; $apple < 10; $apple++) {
        if (isset($myans[$apple]) && isset($keys[$apple + 1])) {
            if ($myans[$apple] == $keys[$apple + 1]) {
                $score[$apple + 1] = 2;
            } else {
                $score[$apple + 1] = 0;
            }
        } 
    }

    $first = $score[1] + $score[2] + $score[3] + $score[4] + $score[5];
    $second = $score[6] + $score[7] + $score[8] + $score[9] + $score[10];
    $total = ((($first + $second) / 20) * 30) + 70;

    // Use prepared statements to avoid SQL injection
    $save_score = mysqli_prepare($mysqli, "INSERT INTO exams (id, name, score, passcode) VALUES (?,?,?,?)");
    mysqli_stmt_bind_param($save_score, "ssss", $id, $name, $total, $codec);
    
    if (mysqli_stmt_execute($save_score)) {
        $change_validity = mysqli_query($mysqli, "UPDATE codes SET validity='0' WHERE passcode ='$codec'");
        
        if ($change_validity) {
            header('location: gateway.php');
            exit(); 
        } else {
            echo 'Error updating validity';
        }
    } else {
        echo 'Error saving score';
	}
}
	?>