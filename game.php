<?php
include "header.php";

$gridHeight = 30;
$gridWidth = 40;

class gridbox {
    protected $type;
}

?>

<body>
    <div class="playable-area" color="red">
        <?php for ($i = 0; $i < $gridWidth; $i++) {
            echo '<div><button type="button"><img src = "tree.png"></button></div>';
        }
        echo '<br>';
        ?>
    </div>
</body>
</html>