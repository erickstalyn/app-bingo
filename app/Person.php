<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Person;

class Person extends Model
{
    protected $table = 'person';
    protected $fillable = ['code_uni', 'names', 'income_cycle'];
}
