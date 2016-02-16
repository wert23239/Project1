<?php

/**
 * Created by PhpStorm.
 * User: Joe
 * Date: 2/15/2016
 * Time: 10:00 P
 */
class GameControllerTest extends \PHPUnit_Framework_TestCase
{
    public function test_construct(){
        $game = new Game\Game();
        $controller = new Game\GameController($game, array());

        $this->assertInstanceOf('Game\GameController', $controller);
        $this->assertEquals('game.php', $controller->getPage());

        $this->assertFalse($controller->isGameOver());
    }
}