<?php
namespace App\Service;

use App\Models\History;
use App\Models\Game;

/**
 *
 * @author Sinha
 *        
 */
class GameService
{

    public function getLists($request)
    {
        $history = History::latest();
        return $history;
    }

    public function handleRandomNumber($guessNumber)
    {
        $data = [];
        $computerGuessNumber = Game::where([
            'state_id' => Game::STATE_PENDING
        ])->first();
        if ($computerGuessNumber == null) {
            $computerGuessNumber = Game::create([
                'state_id' => Game::STATE_PENDING,
                'computer_guess_number' => rand(0, 100)
            ]);
        }

        $computerGuess = $computerGuessNumber->computer_guess_number;

        if ($guessNumber == $computerGuess) {
            $data['message'] = 'Bingo';
            $computerGuessNumber->update([
                'state_id' => Game::STATE_COMPLETED
            ]);
        } else if ($guessNumber < $computerGuess) {
            $data['message'] = 'More';
        } else if ($guessNumber > $computerGuess) {
            $data['message'] = 'Less';
        }
        $moveNumber = History::select('move_number')->max('move_number');
        History::create([
            'move_number' => $moveNumber + 1,
            'guess_value' => $guessNumber,
            'generated_value' => $computerGuess,
            'computer_answer' => $data['message']
        ]);
        return $data;
    }
}