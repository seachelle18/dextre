<?php
session_start();
$username = $_SESSION['username'];

include "header.php";

    $servername = 'localhost';
    $database = 'quiz';
    $usrnm = 'root';
    $password = 'annyeong471';

    // Create connection

    $conn = mysqli_connect($servername, $usrnm, $password, $database);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // $select = "SELECT * FROM results where "

    $count = "SELECT COUNT(username) AS nm FROM results WHERE bool = 1 GROUP BY number;";
    $do_count = $conn->query($count);

    $index = 1;
    $max = 0;
    while ($res = mysqli_fetch_array($do_count)) {
        if ($res > $max) {
            $max = $res;
            $index = $index + 1;
        }      
        
    }

$select = "SELECT question FROM bank WHERE number='$index';";
$do_select = $conn->query($select);
$ques = mysqli_fetch_row($do_select);
?>

<body>
    <p>The question that most student got wrong is: </p>
    <p> Question <?= $index?></p>
    <?= $ques[0]?>
</body> 