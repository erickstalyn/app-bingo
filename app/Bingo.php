<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bingo extends Model
{
    protected $table = 'bingo';
    protected $fillable = ['code', 'gamer', 'balls', 'state_balls', 'state_transaction', 'state_game', 'responsible_id'];
    protected $casts = [
        'balls' => 'array'
    ];
}
