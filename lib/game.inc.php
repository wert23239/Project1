<?php
require __DIR__ . "/../vendor/autoload.php";

// Start the PHP session system
session_start();

define("PIPES_SESSION", 'pipes');

// If there is a Wumpus session, use that. Otherwise, create one
if(!isset($_SESSION[PIPES_SESSION])) {
    $_SESSION[PIPES_SESSION] = new Pipes\Pipes();   // Seed: 1422668587
}

$pipes = $_SESSION[PIPES_SESSION];