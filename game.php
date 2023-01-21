<?php
include "header.php";

$gridHeight = 30;
$gridWidth = 40;

class Gridbox {
    protected $type;
    public $img;
    public $x;
    public $y;
    public $hasCrisis = false;
    
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function changeImage($imgNum) {
        $this->img = $imgNum;
    }
}

?>

<body>
    <div class="playable-area" color="red">
        <?php
        for ($j = 0; $j < $gridHeight; $j++) { 
            for ($i = 0; $i < $gridWidth; $i++) {
                ${"grid" . $i . "_" . $j} = new Gridbox($i, $j);
                echo '<form method="POST">
                <div><button type="submit"><img src = "tree.png"></button></div>
                </form>'; 
            }
            echo '<br>';
            }
        ?>
    </div>
</body>
</html>