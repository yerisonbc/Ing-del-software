<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\controller;
use App\Admin\Producto;



class usuarioController extends Controller
{
    public function index(){
        $nuevosProductos = Producto::latest()->take(5)->get();
        // return $nuevosProductos;
        return view("User.home", compact('nuevosProductos'));
    }

    public function search(Request $request){
        
        // $categoria = $request->input("categoria");
        $busqueda = $request->input('busqueda');
        $resultados = Producto::Search($busqueda, 'A')->get();
        return view('User.resultado', compact('resultados', 'busqueda'));


    }
}
