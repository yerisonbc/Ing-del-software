<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\controller;
use App\Marca;


use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function new() 
    {
        return view('Admin.Form.reg_marca');
    }


    public function store(Request $request) //guardar un registro
    {
        $request['user_ins'] = 1;
        $request['user_udt'] = 1;
        $request['estado'] = 'a';
        Marca::create($request->all());
        return Redirect('lista_marcas');
    }


    public function show(Request $request)  // Mostrar Registros
    {


        if($request->has('buscar'))
        {
            $busqueda = $request->get('buscar');
            $estado = $request->get('estado');

            $lista = Marca::Search($busqueda, $estado)->paginate(5);

            if($request->ajax()){
                return  response()->json(view('Admin.partials.tabla_marcas', compact('lista', 'busqueda'))->render());
            }
            
            return view('Admin.Mantenimiento.marcas', compact('lista'));
            
        }


        else          //      ver Todos los registros
        {
            $lista = Marca::where('estado', 'a')->paginate(5);
            
            if($request->ajax()){
                return  response()->json(view('Admin.partials.tabla_marcas', compact('lista'))->render());
            }

            return view('Admin.Mantenimiento.marcas', compact('lista'));


        }
    }
}
