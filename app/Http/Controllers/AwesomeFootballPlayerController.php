<?php
namespace App\Http\Controllers;

use App\Services\AwesomeFootballPlayerService;
use App\Facades\AwesomeFootballPlayer;

class AwesomeFootballPlayerController extends Controller {

    public function random(AwesomeFootballPlayerService $awesomeFootballPlayerService) {
        
        $player1 = $awesomeFootballPlayerService->provideAwesomeFootballPlayer();
        
        $player2 = AwesomeFootballPlayer::provideAwesomeFootballPlayer();
        
        return view('awesome_football_player', 
                    ['player1' => $player1,
                     'player2' => $player2,
                    ]);
    }
}

