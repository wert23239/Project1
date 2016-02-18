<?php
require 'format.inc.php';


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
            <div class="game">
                <div class="row">
                    <div class="cell"><img src="images/valve-closed.png" alt="cave" width="50" height="50" />
                    </div><div class="cell"><img src="images/ninety-sw.png" alt="cave" width="50" height="50" />
                    </div><div class="cell">
                    </div><div class="cell">
                    </div><div class="cell">
                    </div><div class="cell">
                    </div><div class="cell">
                    </div><div class="cell"><img src="images/gauge-top-0.png" alt="cave" width="50" height="50" /></div>
                </div>
                <div class="row">
                    <div class="cell">
                    </div><div class="cell"><img src="images/ninety-ne.png" alt="cave" width="50" height="50" />
                    </div><div class="cell"><img src="images/straight-h.png" alt="cave" width="50" height="50" />
                    </div><div class="cell"><img src="images/straight-h.png" alt="cave" width="50" height="50" />
                    </div><div class="cell"><img src="images/straight-h.png" alt="cave" width="50" height="50" />
                    </div><div class="cell"><img src="images/straight-h.png" alt="cave" width="50" height="50" />
                    </div><div class="cell"><img src="images/straight-h.png" alt="cave" width="50" height="50" />
                    </div><div class="cell"><img src="images/gauge-0.png" alt="cave" width="50" height="50" /></div>
                </div>
                <div class="row">
                    <div class="cell">
                    </div><div class="cell">
                    </div><div class="cell">
                    </div><div class="cell">
                    </div><div class="cell">
                    </div><div class="cell">
                    </div><div class="cell">
                    </div><div class="cell"></div>
                </div>
                <div class="row">
                    <div class="cell">
                    </div><div class="cell">
                    </div><div class="cell"><img src="images/cap-s.png" alt="cave" width="50" height="50" />
                    </div><div class="cell">
                    </div><div class="cell"><img src="images/leak-s.png" alt="cave" width="50" height="50" />
                    </div><div class="cell">
                    </div><div class="cell">
                    </div><div class="cell"><img src="images/gauge-top-0.png" alt="cave" width="50" height="50" />
                    </div>
                </div>
                <div class="row">
                    <div class="cell">
                    </div><div class="cell">
                    </div><div class="cell"><img src="images/tee-nes.png" alt="cave" width="50" height="50" />
                    </div><div class="cell"><img src="images/straight-h.png" alt="cave" width="50" height="50" />
                    </div><div class="cell"><img src="images/tee-wne.png" alt="cave" width="50" height="50" />
                    </div><div class="cell"><img src="images/leak-w.png" alt="cave" width="50" height="50" />
                    </div><div class="cell">
                    </div><div class="cell"><img src="images/gauge-0.png" alt="cave" width="50" height="50" />
                    </div>
                </div>
                <div class="row">
                    <div class="cell"><img src="images/valve-closed.png" alt="cave" width="50" height="50" />
                    </div><div class="cell"><img src="images/straight-h.png" alt="cave" width="50" height="50" />
                    </div><div class="cell"><img src="images/ninety-wn.png" alt="cave" width="50" height="50" />
                    </div><div class="cell">
                    </div><div class="cell">
                    </div><div class="cell">
                    </div><div class="cell">
                    </div><div class="cell">
                    </div>
                </div>
            </div>
        </form>

        <div class = "currentPlayer">
            <p>Player 1, it is your turn!</p>
        </div>


        <div class="selection">
            <div class="pipe">
                <img src="images/ninety-es.png" alt="cave" width="50" height="50" />
                <input type="radio" name="6" value="6x6" checked> <br>
            </div>
            <div class="pipe">
                <img src="images/straight-h.png" alt="cave" width="50" height="50" />
                <input type="radio" name="6" value="6x6" > <br>
            </div>
            <div class="pipe">
                <img src="images/tee-esw.png" alt="cave" width="50" height="50" />
                <input type="radio" name="6" value="6x6" > <br>
            </div>
            <div class="pipe">
                <img src="images/cap-s.png" alt="cave" width="50" height="50" />
                <input type="radio" name="6" value="6x6" > <br>
            </div>
            <div class="pipe">
                <img src="images/ninety-es.png" alt="cave" width="50" height="50" />
                <input type="radio" name="6" value="6x6" > <br>
            </div>
        </div>

        <div class="choice">
            <div class="button">
                <button type="button">Rotate</button>
            </div>
            <div class="button">
                <button type="button">Discard</button>
            </div>
            <div class="button">
                <button type="button">Open Valve</button>
            </div>
            <div class="button">
                <button type="button">Give Up</button>
            </div>
        </div>

    </div>

</body>
</html>