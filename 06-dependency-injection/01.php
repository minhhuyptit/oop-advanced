<?php
class Playtation{
    private $game;

    public function __construct($objGame){
        $this->game = $objGame;
        
    }

    public function play(){
        echo 'playing';
    }
}

$fifa = new Fifa();
$playtation = new Playtation($fifa);
$playtation->play();



?>