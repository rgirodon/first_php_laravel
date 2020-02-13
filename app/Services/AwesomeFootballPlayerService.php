<?php
namespace App\Services;

class AwesomeFootballPlayerService {

    private $awesomeFootballPlayers = [
        'Diego Armando Maradona',
        'Pelé',
        'Michel Platini',
        'Ronaldo',
        'Ronaldinho',
        'Cristiano Ronaldo',
        'Leo Messi',
        'Zinedine Zidane',
        'Lothar Matthaus',
        'Roberto Baggio',
    ];
    
    public function __construct() {
        
    }
    
    public function provideAwesomeFootballPlayer() {
        
        $result = $this->awesomeFootballPlayers[array_rand($this->awesomeFootballPlayers)];
        
        return $result;
    }
}

