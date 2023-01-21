<?php
include "header.php";
$questionArray = ["question 1", "question 2", "question 3", "question 4", "question 5", "question 6", "question 7", "question 8", "question 9", "question 10"];

?>

<body>
    <form method="POST">
        <?php foreach ($questionArray as $number => $question) {
            echo '<label class="question-label" for="' . $number . '" ' . 'class="question-label">' . $question . '</label>';
            echo '<input class = "question-response" type="text" name="' . $number . '">'; }
        ?>
        <input type="submit" name="submit-button" value="Submit">            
    </form>
</body>