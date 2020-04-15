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
}
