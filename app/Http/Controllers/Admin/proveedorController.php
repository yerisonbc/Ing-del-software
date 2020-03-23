<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\controller;
use App\Admin\Proveedor;


use Illuminate\Http\Request;

class proveedorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function new() 
    {
        return view('Admin.Form.reg_proveedor');
    }


    public function store(Request $request) //guardar un registro
    {
        $request['user_ins'] = 1;
        $request['user_udt'] = 1;
        $request['estado'] = 'A';
        Proveedor::create($request->all());
        return Redirect('lista_proveedores');
    }


    public function show(Request $request)  // Mostrar Registros
    {


        if($request->has('buscar'))
        {
            $busqueda = $request->get('buscar');
            $estado = $request->get('estado');

            $lista = Proveedor::Search($busqueda, $estado)->paginate(5);

            if($request->ajax()){
                return  response()->json(view('Admin.partials.tabla_proveedores', compact('lista', 'busqueda'))->render());
            }
            
            return view('Admin.Mantenimiento.proveedores', compact('lista'));
            
        }


        else          //      ver Todos los registros
        {
            $lista = Proveedor::where('estado', 'a')->paginate(5);
            
            if($request->ajax()){
                return  response()->json(view('Admin.partials.tabla_proveedores', compact('lista'))->render());
            }

            return view('Admin.Mantenimiento.proveedores', compact('lista'));


        }
    }


}
