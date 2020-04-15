<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\User\carrito_compras;

class Perfil_Usuario extends Model
{
    protected $fillable= [ 'id_user', 'nombre', 'apellido','telefono'];
    protected $table="perfil_usuarios";

    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }

    public function carritoCompra(){
        return $this->hasMAny(carrito_compras::class, 'id_user');
    }
}
