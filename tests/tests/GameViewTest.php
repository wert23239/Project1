<?php
require __DIR__ . "/../../vendor/autoload.php";

class GameViewTest extends \PHPUnit_Framework_TestCase
{
	const SEED = 1422668587;

	public function test_construct() {
//		$game = new Game\Game(self::SEED);
		$game = new Game\Game();
		$view = new Game\GameView($game);

		$this->assertInstanceOf('Game\GameView', $view);
	}

	public function test_presentGame() {
//		$game = new Game\Game(self::SEED);
		$game = new Game\Game();
		$view = new Game\GameView($game);

		$presGame = $view->presentGame();
		$this->assertContains('<div class="game">
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
            </div>', $presGame);

	}

	public function test_presentTurn() {
//		$game = new Game\Game(self::SEED);
		$game = new Game\Game();
		$view = new Game\GameView($game);

		$presTurn = $view->presentTurn();

		$this->assertContains('<p>Player 1, it is your turn!</p>', $presTurn);

	}

	public function test_presentFivePipes() {
//		$game = new Game\Game(self::SEED);
		$game = new Game\Game();
		$view = new Game\GameView($game);

		$presFivePipes = $view->presentFivePipes();

		$this->assertContains('<div class="pipe">
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
            </div>', $presFivePipes);
	}

	public function test_presentButtons() {
//		$game = new Game\Game(self::SEED);
		$game = new Game\Game();
		$view = new Game\GameView($game);

		$presButtons = $view->presentButtons();

		$this->assertContains('<div class="button">
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
            </div>', $presButtons);
	}
}

/// @endcond
?>
