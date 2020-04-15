<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cabeza_Factura;
use App\Admin\Producto;


class factura_cuerpo extends Model
{
    public $timestamps = false;
    protected $table ='factura_cuerpo';
    protected $fillable = [ 'id_factura', 'id_producto', 'cantidad', 'precio', 'estado'];

    public function productos()
    {
        return $this->hasMany(Producto::class, 'id_producto');

    }
}
