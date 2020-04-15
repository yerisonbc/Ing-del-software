<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\controller;
use App\Admin\Producto;
use App\Admin\Categoria;
use App\Admin\marca;
use App\Admin\modelo;
use Illuminate\Support\Facades\DB;
Use App\User\carrito_compras;
Use App\Cabeza_Factura;
Use App\factura_cuerpo;




class usuarioController extends Controller
{
    public function index(){

        
        if( auth()->user() ){ 
            $user = auth()->user()->id;
            $carrito = carrito_compras::where('id_user', "$user")->where('estado', 'A')->get();
            session(compact('carrito'));
        }

        $nuevosProductos = Producto::latest()->take(5)->get();
        $SmartPhone = Categoria::where('estado','A')->where('categoria', 'SmartPhone')->take(5)->get();

        $categorias = Categoria::where('estado', 'A')->get();
        session(compact('categorias'));
        
        return view("User.home", compact('nuevosProductos'));

    }

    public function search(Request $request){
        
        // $categoria = $request->input("categoria");
        $busqueda = $request->input('busqueda');
        $resultados = Producto::Search($busqueda, 'A')->get();
        return view('User.resultado', compact('resultados', 'busqueda'));


    }

    public function previewProducto($id){


        if($productos = Producto::where('id', $id)->get()){
            $categorias=Categoria::where('estado', 'A')->get();
            $modelos = Modelo::where('estado', 'A')->get();
            return view ('Admin.Form.productos',compact('productos', 'categorias', 'modelos' ) );
        }
        else{

        }
       
    }

    public function nuevoPerfil(){

 
        return view ('User.Forms.perfil_usuario');
       
       
    }

    public function validarCompra(){
        $user = auth()->user()->id;
        $carrito = carrito_compras::where('id_user', "$user")->where('estado', 'A')->get();
        $provincias=  DB::table('provincias')->orderBy('nombre')->get();
        $municipios=DB::table('municipios')->orderBy('nombre')->get();
   
        session(compact('carrito'));
        return view('User.validacion_compra', compact('provincias', 'municipios'));
        
    }

    public function comprar(Request $request){
        $user = auth()->user()->id;

      if( $cabeza = Cabeza_factura::create([ 'id_user' => $user, 'tipo_pago' => 'Efectivo', 'estado' => 'vendida',]))
      {
            $carrito = carrito_compras::where('id_user', "$user")->where('estado', 'A')->get();
           
            foreach($carrito as $producto){
                 $cantidad_c = $producto->cantidad;
                 $cantidad_f = $producto->productos->cantidad - $cantidad_c;

                if($item = factura_cuerpo::create([    'id_factura' => $cabeza->id, 'id_producto'=> $producto->productos->id,
                 'cantidad'=>$cantidad_c, 'precio'=> $producto->productos->precio, 'estado'=>'A' ]))
                {
                    if($producto->productos->update([ 'cantidad'=>  $cantidad_f]))
                    {
                        if($producto->update([ 'estado'=>  'C']))
                        {
                            return Redirect('usuario/compras')->with('status', 'success_cmp');

                        }

                    }

                }       
                
            }
      }

        $carrito = carrito_compras::where('id_user', "$user")->where('estado', 'A')->get();
        
        session(compact('carrito'));
        return view('User.validacion_compra', compact('provincias', 'municipios'));
        
    }

    public function articulosComprado()
    {
        $user = auth()->user()->id;
        $productos = Cabeza_Factura::where('id_user', $user)->get();
       
     
        return view ('User.articulos_comprados', compact('productos') );
    }


}
