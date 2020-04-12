<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Admin\Categoria;
use App\Admin\Marca;


class Modelo extends Model
{
    protected $fillable=['modelo', 'descripcion', 'id_marca', 'id_categoria', 'user_ins', 'user_udt', 'estado'];



    public function scopeSearch($query, $busqueda, $estado) // Consulta de la Busquedad
    {
        return $query->where('estado', "$estado")->where('modelo', "LIKE", "%$busqueda%");
    }

    


// ------------- Relaciones ------------------------------------
    public function marca() {
        return $this->belongsTo(Marca::class, 'id_marca');
    }
    public function categoria() {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }
    public function producto() {
        return $this->belongsTo(Producto::class, 'id_producto');
    }
// -----------------------------------------------------------------
    
}
