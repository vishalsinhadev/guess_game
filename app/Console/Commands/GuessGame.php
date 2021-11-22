<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Service\GameService;
use Illuminate\Http\Request;

class GuessGame extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'game:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will start the game and user has to select the no from 1-100';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $guessNumber = $this->ask('Welcome to Guess Game Please enter the value between 1 - 100 ?');
        if (($guessNumber > 100) && ($guessNumber < 1)) {
            $this->error("Please enter value between 1 - 100 !");
        } else {
            $result = (new GameService())->handleRandomNumber($guessNumber);
            $this->info($result['message']);
        }
        return Command::SUCCESS;
    }
}
