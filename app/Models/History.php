<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $table = 'history';

    protected $primaryKey = 'game_id';

    protected $fillable = [
        'move_number',
        'guess_value',
        'generated_value',
        'computer_answer'
    ];
}
