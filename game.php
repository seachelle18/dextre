<?php
include "header.php";

$gridHeight = 30;
$gridWidth = 40;

class Gridbox {
    protected $type;
    public $img;
}

?>

<body>
    <div class="playable-area" color="red">
        <?php
        for ($j = 0; $j < $gridHeight; $j++) { 
            for ($i = 0; $i < $gridWidth; $i++) {
                $${"grid" . $i . "_" . $j} = new Gridbox();
                echo '<p>' . ${"grid" . $j . "_" . $j} . '</p>';
                echo '<div><button type="button"><img src = "tree.png"></button></div>'; }
            echo '<br>';
            }
        ?>
    </div>
</body>
</html>