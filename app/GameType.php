<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameType extends Model
{
    protected $table = 'gametype';
    protected $fillable = ['description'];
}
