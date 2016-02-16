<?php
namespace Game;
/**
 * Created by PhpStorm.
 * User: Joe
 * Date: 2/15/2016
 * Time: 9:52 PM
 */
class GameController
{

    /**
     * Constructor
     * @param Game Game object
     * @param $post $_POST array
     */
    public function __construct(Game $game, $post) {
        $this->game = $game;
        $this->page = $post;

    }

    /**
     * get the redirect page
     */
    public function getPage() {
        return $this->page;
    }

    public function isGameOver(){
        return $this-> gameOver;
    }

    private $game; //the game object
    private $page = 'game.php';//the redirect page
    private $gameOver = false;

}