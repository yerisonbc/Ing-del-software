<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['producto', 'caracteristica', 'precio', 'cantidad', 'id_marca', 
    'id_modelo', 'id_categoria', 'id_proveedor', 'user_ins', 'user_udt', 'estado', 'condicion'];


    public function scopeSearch($query, $busqueda, $estado)
    {
        
        
        return $query->where('estado', "$estado")->where('producto', "LIKE", "%$busqueda%");
    }



    public function marca(){
        return $this->belongsTo(Marca::class, 'id_marca');
    }
    public function categoria(){
        return $this->belongsTo(Marca::class, 'id_categoria');
    }
    public function proveedor(){
        return $this->belongsTo(Marca::class, 'id_proveedor');
    }

    public function Fotos()
    {
        return $this->hasMany(Fotos_producto::class, 'id_producto');
    }
}
