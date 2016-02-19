<?php
require __DIR__ . "/../../vendor/autoload.php";
/** @file
 * @brief Empty unit testing template
 * @cond 
 * @brief Unit tests for the class 
 */
class GameTest extends \PHPUnit_Framework_TestCase
{
const SEED = 1422668587;
const Size = 16;

public function test_construct()
{
	$Game = new Game\Game(self::SEED, self::size);
	$this->assertInstanceOf('Game\Game', $Game);
	$this->assertTrue($Game->getSize(), '16');
	$Game->setCurrentPlayer('Will');
	$this->assertTrue($Game->getSize(), 'Will');
	$Game->newturn();
	$this->assertTrue($Game->getTurnnum(), '2');
}
}

/// @endcond
?>
