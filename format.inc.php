<?php
/**
 * Created by PhpStorm.
 * User: Stephanie
 * Date: 2/13/2016
 * Time: 12:33 PM
 */

function present_header($title)
{
    $html = <<<HTML
<header>
<nav><p><a href="instructions.php">New Game</a>
</p></nav>
<img src="title.png" alt="tile" width="575" height="315" />
</header>
HTML;

    return $html;
}
