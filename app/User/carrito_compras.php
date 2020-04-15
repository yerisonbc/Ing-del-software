<?php

namespace App\User;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Admin\Producto;
use App\Admin\Perfil_usuario;

class carrito_compras extends Model
{
    protected $table= "carrito_compras";
    protected $fillable = ['id_user', 'id_producto', 'cantidad', 'estado'];

    public function user(){
        return $this->belongsTo(Perfil_Usuario::class, 'id_user','id_user');
    }

    public function productos(){
        return $this->hasOne(Producto::class, 'id');
    }
}
