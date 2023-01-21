<?php
include "header.php";
//$questionArray = ["question 1", "question 2", "question 3", "question 4", "question 5", "question 6", "question 7", "question 8", "question 9", "question 10"];


$SELECT_QUESTIONS = "SELECT * FROM bank LIMIT 10";
$questionArray = $conn->query($SELECT_QUESTIONS);

?>

<body>
    <div class="container">
        <form method="POST">
            <?php foreach ($questionArray as $number => $question) {
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