<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use App\User\carrito_compras;
Use App\Admin\Producto;

class cuentaUserController extends Controller
{
    
    public function carroCompras()
    {
        
        return view('User.carroCompras');
    }

    public function addToCar(Request $request)
    {
        $producto = $request->input('producto');
        $user = auth()->user()->id;
        $cantida = 1;

        if($existe = Producto::where('id', '$producto')->get()){

            carrito_compras::create(['id_user' => "$user", 'id_producto' => "$producto", 'cantidad' => $cantida, 'estado' => 'A',]);

            return "Success";
        }
        else{

            return "inicio";
            

        }
        
    }
}
