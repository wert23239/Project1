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

<p class = "currentPlayer">Player 1 Turn!</p>

<div class="selection">
    <div class="pipe">
        <img src="ninety-es.png" alt="cave" width="50" height="50" />

        <input type="radio" name="6" value="6x6" checked> <br>

    </div><div class="pipe">
        <img src="straight-h.png" alt="cave" width="50" height="50" />

        <input type="radio" name="6" value="6x6" checked> <br>

    </div><div class="pipe">
        <img src="tee-esw.png" alt="cave" width="50" height="50" />

        <input type="radio" name="6" value="6x6" checked> <br>

    </div><div class="pipe">
        <img src="cap-e.png" alt="cave" width="50" height="50" />

        <input type="radio" name="6" value="6x6" checked> <br>

    </div><div class="pipe">
        <img src="tee-nes.png" alt="cave" width="50" height="50" />

        <input type="radio" name="6" value="6x6" checked> <br>

    </div>
</div>

<div class="choice">
    <div class="button">
        <button type="button">Rotate</button>

    </div><div class="button">
        <button type="button">Discard</button>

    </div><div class="button">
        <button type="button">Open Valve</button>

    </div><div class="button">
        <button type="button">Give Up</button>

    </div>
</div>


</body>
</html>