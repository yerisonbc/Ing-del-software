<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table ="proveedor"; //Tabla a la que pertenece DB
    
    protected $fillable = ['nombre', 'correo','telefono', 'pagina_web', 'user_ins', 'user_udt', 'estado'];


    public function scopeSearch($query, $busqueda, $estado)
    {
        
        
        return $query->where('estado', "$estado")->where('nombre', "LIKE", "%$busqueda%");
    }


    public function scopeFiltro($query, $busqueda)
    {
        
        return $query->where('estado',  "$busqueda");
    }
    public function productos()
    {
        return $this->hasMany(Producto::class, 'id_proveedor');
    }
    
}
