<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Fotos_producto extends Model
{
    protected $table ='fotos_produtos';
    protected $fillable = ['id_producto', 'foto','user_ins', 'user_udt', 'estado'];

    public function producto(){
        return $this->belongsTo(Fotos_producto::class, 'id_producto');
    }
}
