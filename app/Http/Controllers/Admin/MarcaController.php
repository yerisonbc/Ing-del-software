<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\controller;
use App\Admin\Marca;


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
        $alert;

        try {
            
            $user = auth()->user()->id;
            $request['user_ins'] = $user;
            $request['user_udt'] = $user;
            $request['estado'] = 'A';
            Marca::create($request->all());
            $alert = 'success_ins';

        } catch (\Exception $e) {
            $alert = 'Error_ins';
        }
       
        return Redirect('lista_marcas')->with('status', $alert);
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
