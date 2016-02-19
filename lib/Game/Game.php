<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 2/7/2016
 * Time: 4:43 PM
 */

namespace Game;


class Game
{
    const NUM_Squares = 16;
    const NAME = "David";

    /**
     * Constructor
     * @param $seed Random number seed
     */
    public function __construct($seed = null, $size=6) {
        if($seed === null) {
            $seed = time();
        }

        srand($seed);
        $this->constructBoard($size);
        //$this->populateRooms();
    }

    public function constructBoard($size){
        $this->size=$size;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function getCurrentPlayer()
    {
        return $this->currentPlayer;
    }

    public function setCurrentPlayer($currentPlayer)
    {
        $this->currentPlayer = $currentPlayer;
    }

    public function getTurnnum()
    {
        return $this->turnnum;
    }

    public function newturn()
    {
        $this->turnnum++;
    }

    private $size = 6;   // The rooms
    private $currentPlayer = SELF::NAME;    // Room the user is in
    private $turnnum = 1;   // We were carried by birds
    //private $arrows = self::NUM_ARROWS; // Number of arrows we have


}