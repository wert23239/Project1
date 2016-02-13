<?php
require 'format.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php echo present_header("Stalking the Wumpus"); ?>

    <img src="steamsplash.jpg" alt="cave" width="575" height="315" />


    <form >
        Player 1: <input type="text" name="FirstName" ><br>
        Player 2: <input type="text" name="LastName" ><br>

    </form>

    <form>
        <input type="radio" name="6" value="6x6" checked> 6x6<br>
        <input type="radio" name="10" value="10x10"> 10x10<br>
        <input type="radio" name="20" value="20x20"> 20x20
    </form>

    <button type="button">Start Game</button>
</body>
</html>