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

    public function scopetoList($query, $steGame) {
        return $query->join('person', 'bingo.responsible_id', '=', 'person.id')
            ->where(function($subquery) use ($steGame) {
                if($steGame !== 'all') $subquery->where('bingo.state_game', $steGame);
            })
            // ->where(function($subquery) use ($filter) {
            //     $subquery->where('repuesto.codigo', strtoupper($filter))
            //         ->orWhere('repuesto.descripcion', 'LIKE', '%'.strtoupper($filter).'%');
            // })
            // ->where(function($subquery) use ($unidad_id) {
            //     if($unidad_id !== 'all') $subquery->where('repuesto.unidad_id', $unidad_id);
            // })
            ->select('bingo.id', 'bingo.code', 'bingo.state_game', 'bingo.state_balls', 'bingo.state_transaction', 'person.names as responsible_name')
            ->orderBy('person.names', 'ASC');
    }
}
