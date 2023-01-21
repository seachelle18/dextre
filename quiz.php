<?php
include "header.php";
//$allQuestions = ["question 1", "question 2", "question 3", "question 4", "question 5", "question 6", "question 7", "question 8", "question 9", "question 10", "question 11", "question 12"];
$responseArray = [];
$wrongIndex = [];

//New PDO
$pdo = new PDO ('sqlite:quiz.db');

$sql = "SELECT * FROM question";
$statement = $pdo->prepare($sql);
$statement->execute();
$allQuestions = $statement->fetchAll();

//assuming associative array of question => answer, and array response
for ($i = 0; $i<10; $i++) {
    if ($responseArray[i] != $questionArray['answer']) {

    }
}

if (isset($_POST['submit-button'])) {
    // var_dump($allQuestions);
    // var_dump($indexArray);
    //var_dump($questionArray);
    //var_dump($answerArray);

    }
?>

<body>
    <div class="container">
        <form method="POST">
            <?php foreach ($allQuestions as $number => $question) {
                echo '<div class="question-box">';
                echo '<div class="label-container"><label class="question-label" for="' . $number . '" ' . 'class="question-label">' . $question . '</label></div>';
                echo '<div class="question-container"><input class="question-response" type="text" name="' . $number . '"></div>'; 
                echo '</div>'; }
                echo '<input class="submit-button" type="submit" name="submit-button" value="Submit">';
                echo '</div>';
            ?>            
        </form>
    </div>
</body>