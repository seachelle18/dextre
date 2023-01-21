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
$questionArray = ["question 1", "question 2", "question 3", "question 4", "question 5", "question 6", "question 7", "question 8", "question 9", "question 10"];

$SELECT_QUESTIONS = "SELECT * FROM bank ORDER BY RAND() LIMIT 10";
$questions = $conn->query($SELECT_QUESTIONS);


if (isset($_POST['submit'])) {
    $answer = $_POST['currentQuestion'];
    $number = $_POST['number'];
    $date = date("Y/m/d");
    
    $bool = 1;
    $select = "SELECT answer FROM bank WHERE number='$number'";
    $find_answer = $conn->query($select);
    $real_answer = mysqli_fetch_row($find_answer);
    
    if ($answer == $real_answer[0]) {
        $bool = '0';
    }
    $insert = "INSERT INTO RESULTS VALUES ('$username', '$number', '$date', '$bool');";
    $do_insert = $conn->query($insert);

}
?>

<body>
    <?php $index=0?>
    <form method="POST">
        <?php
        while ($question = mysqli_fetch_assoc($questions)):
            $index = $index + 1;
        ?>
        <div class='question'>
            <p>Question <?= $index;?> </p>
            <?php $num = $question['number'];?>
            <?= $quest = $question['question'] ?>
            </div>
            <input type="text" name="currentQuestion<?= $num?>">
            <input type="hidden" name="number" value='<?=$question['number']?>'>
        <?php endwhile; ?>
        <input type="submit" name="submit" value="submit">
    </form>
    
</body> 