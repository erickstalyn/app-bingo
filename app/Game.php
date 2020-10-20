<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'game';
    protected $fillable = ['balls', 'state_game', 'gametype_id'];
    protected $casts = [
        'balls' => 'array'
    ];
}
