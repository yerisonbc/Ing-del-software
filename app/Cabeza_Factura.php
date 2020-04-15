<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\factura_cuerpo;

class Cabeza_Factura extends Model
{
    
    protected $table ='cabeza_factura';
    protected $fillable =['id_user', 'tipo_pago', 'estado'];

    public function productos()
    {
        return $this->hasMany(factura_cuerpo::class, 'id_factura');
    }
}
