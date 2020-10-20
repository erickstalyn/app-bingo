<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Winner extends Model
{
    protected $table = 'winner';
    protected $fillable = ['bingo_id', 'game_id'];
}
