<?php
require 'format.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="project1check.css" type="text/css" rel="stylesheet" />
    <title></title>
</head>
<body>

    <?php echo present_header("Stalking the Wumpus"); ?>

    <form ...>
        <div class="game">
            <div class="row">
                <div class="cell"><img src="valve-open.png" alt="cave" width="50" height="50" /></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"><img src="gauge-top-0.png" alt="cave" width="50" height="50" /></div>
            </div>
            <div class="row">
                <div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"><img src="gauge-0.png" alt="cave" width="50" height="50" /></div>
            </div>
            <div class="row">
                <div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div>
            </div>
            <div class="row">
                <div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"><img src="gauge-top-0.png" alt="cave" width="50" height="50" /></div>
            </div>
            <div class="row">
                <div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"><img src="gauge-0.png" alt="cave" width="50" height="50" /></div>
            </div>
            <div class="row">
                <div class="cell"><img src="valve-open.png" alt="cave" width="50" height="50" /></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div>
            </div>

        </div>
    </form>


    <p class = "win">Player 1 Turn!</p>
    <p class = "lose">Player 2 Loses!</p>

    <button type="button">Start Game</button>



</body>
</html>