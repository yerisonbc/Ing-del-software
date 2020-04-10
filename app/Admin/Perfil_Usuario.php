<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Perfil_Usuario extends Model
{
    protected $fillable=['id_user'];
    protected $table="perfil_usuarios";

    public function user(){
        return $this->hasOne('App\User');
    }
}
