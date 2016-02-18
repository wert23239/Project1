<?php
require 'format.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="project1check.css" type="text/css" rel="stylesheet" />
    <title>Steampunked | Start Game</title>
</head>
<body>

    <div class = "content">

        <div class = "header"><?php echo present_header(); ?></div>

        <div class = splash>
            <img src="images/steamsplash.jpg" alt="cave" width="800" height="564" />
        </div>

        <div class = "link"><p><a href="instructions.php">How to play</a></p></div>


        <form class = "names">
            Player 1: <input type="text" name="Player1" ><br>
            Player 2: <input type="text" name="Player2" ><br>
        </form>

        <form class = "size">
            <p>Select a grid size:</p>
            <input type="radio" name="6" value="6x6" checked>6x6<br>
            <input type="radio" name="10" value="10x10"> 10x10<br>
            <input type="radio" name="20" value="20x20"> 20x20
        </form>


        <button class = "start" type="button">Start Game</button>

    </div>

</body>
</html>