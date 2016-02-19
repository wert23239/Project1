<?php
require 'format.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="project1check.css" type="text/css" rel="stylesheet" />
    <title>Steampunked | How To Play</title>
</head>
<body>

    <div class = content>
        <div class = "header"><?php echo present_header(); ?></div>

        <img src="images/steamsplash2.png" alt="cave" width="415" height="350" />

        <h2>How To Play</h2>

        <div class="instructions">
            <p>The object of the game is to place pipe that will connect a steam source to a steam engine so it can power your airship.
                Of course, you want to do this before your opponent does.
                The winner is the first one to connect steam to their engine with no leaks and turn on the valve.
            </p>

            <p>You will have five pipes to choose from.
                Select an empty square on the grid to place the pipe.
                Pipes may only be placed where they can be connected to other pipes that the player who is placing the pipe owns.</p>

            <p>Rotate: allows you to rotate the pipe in 90 degree increments</p>
            <p>Discard: discards the selected pipe and ends your turn</p>
            <p>Open Valve: opens the value to let the steam out,
                if you have successfully connected your start and end pipes without any leaks then you win the game</p>
            <p>Give Up: allows you to forfeit the game, naming the other player the winner</p>
        </div>


        <button class = "start" type="button">Start Game</button>

    </div>


</body>
</html>