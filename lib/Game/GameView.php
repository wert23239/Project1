<?php


namespace Game;


class GameView
{
    private $game; // Game object

    /**
     * Constructor
     * @param Game $game The Game object
     */
    public function __construct(Game $game) {
        $this->game = $game;
    }


    /** Generate the HTML for whose turn it is */
    public function presentTurn() {
//        $turn = $this->game->getTurn();
//
//        if ($turn == 1)
//        {
//            $name = $this->game->getPlayer1Name();
//        }
//        else
//        {
//            $name = $this->game->getPlayer2Name();
//        }
//        return "<p>$name, is it your turn!.</p>";
        return"<p>Player 1, it is your turn!</p>";
    }

    /** Generate the HTML for the five pipes */
    public function presentFivePipes() {
        $fivePipes = $this->game->getFivePipes();

        return '<div class="pipe">
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
            </div>';


    }

    /** Generate the HTML for the game */
    public function presentGame() {
        return '<div class="game">
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

    </div>';
    }

    /** Generate the HTML for the game */
    public function presentButtons()
    {

        return'<div class="button">
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
            </div>';

    }



}