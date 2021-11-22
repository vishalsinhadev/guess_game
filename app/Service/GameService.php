<?php
namespace App\Service;

use App\Models\History;

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

    public function handleRandomNumber($request)
    {
        $data = [];
        $guessNumber = $request->get('guess_number');
        $computerGuessNumber = rand(0, 100);
        if ($guessNumber == $computerGuessNumber) {
            $data['message'] = 'Bingo';
        } else if ($guessNumber < $computerGuessNumber) {
            $data['message'] = 'More';
        } else if ($guessNumber > $computerGuessNumber) {
            $data['message'] = 'Less';
        }
        $moveNumber = History::select('move_number')->max('move_number');
        History::create([
            'move_number' => $moveNumber + 1,
            'guess_value' => $guessNumber,
            'generated_value' => $computerGuessNumber,
            'computer_answer' => $data['message']
        ]);
        return $data;
    }
}