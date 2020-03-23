<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    protected $fillable = ['categoria', 'descripcion', 'user_ins', 'user_udt', 'estado'];

    public function scopeSearch($query, $busqueda, $estado)
    {
        
        
        return $query->where('estado', "$estado")->where('categoria', "LIKE", "%$busqueda%");
    }

}

