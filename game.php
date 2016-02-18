<?php
require 'format.inc.php';
require 'lib/game.inc.php';
$view = new Game\GameView($game);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="project1check.css" type="text/css" rel="stylesheet" />
    <title>Steampunked | Game</title>
</head>
<body>

    <div class="content">
        <div class = "header"><?php echo present_header(); ?></div>

        <form>
            <?php
            echo $view->presentGame();
            ?>
        </form>

        <div class = "currentPlayer">
            <?php
            echo $view->presentTurn();
            ?>
        </div>


        <div class="selection">
            <?php
            echo $view->presentFivePipes();
            ?>
        </div>

        <div class="choice">
            <?php
            echo $view->presentButtons();
            ?>
        </div>

    </div>

</body>
</html>