<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Admin\Modelo;

class categoria extends Model
{
    protected $fillable = ['categoria', 'descripcion', 'user_ins', 'user_udt', 'estado'];

    public function scopeSearch($query, $busqueda, $estado)
    {
        
        
        return $query->where('estado', "$estado")->where('categoria', "LIKE", "%$busqueda%");
    }
    


    public function productos()
    {
        return $this->hasMany(Producto::class, 'id_categoria');
    }
    public function modelo ()
    {
        return $this->hasMany(Modelo::class, 'id_categoria');
    }

}

