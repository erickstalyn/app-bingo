<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usertype extends Model
{
    protected $table = 'usertype';
    protected $fillable = ['description'];
}
