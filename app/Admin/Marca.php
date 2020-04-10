<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Admin\Marca;

class Marca extends Model
{
    protected $fillable = ['marca', 'descripcion', 'user_ins', 'user_udt', 'estado'];

    public function scopeSearch($query, $busqueda, $estado)
    {
        
        
        return $query->where('estado', "$estado")->where('nombre', "LIKE", "%$busqueda%");
    }


    public function scopeFiltro($query, $busqueda)
    {
        
        return $query->where('estado',  "$busqueda");
    }
    
    public function modelo()
    {
        return $this->hasMany(Modelo::class, 'id_marca');
    }


}
