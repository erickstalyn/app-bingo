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
            ->orderBy('person.names', 'ASC');
            // ->select('repuesto.id', 'repuesto.codigo', 'repuesto.descripcion', 'repuesto.deleted_at', 'unidad.descripcion as unidad_descripcion');
    }
}
