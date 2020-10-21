<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ball extends Model
{
    protected $table = 'ball';
    protected $fillable = ['letter', 'number', 'state'];

    public $timestamps = false;
}
