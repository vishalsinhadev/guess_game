<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    const STATE_PENDING = 0;

    const STATE_COMPLETED = 1;

    protected $table = 'game';

    protected $fillable = [
        'computer_guess_number',
        'state_id'
    ];
}
