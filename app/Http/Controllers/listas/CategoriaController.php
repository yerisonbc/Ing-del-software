<?php

namespace App\Http\Controllers\listas;

use Illuminate\Http\Request;
use App\Categoria;
use App\Http\Controllers\controller;


class CategoriaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.form.reg_categoria');
    }

    public function show(Request $request )
    {

        if($request->has('buscar'))
        {
            $busqueda = $request->get('buscar');
            $estado = $request->get('estado');

            $lista = Categoria::Search($busqueda, $estado)->paginate(5);

            if($request->ajax()){
                return  response()->json(view('Admin.partials.tabla_categoria', compact('lista', 'busqueda'))->render());
            }
            
            return view('Admin.Mantenimiento.categoria', compact('lista'));
        }

        else
        {

            $lista = Categoria::where('estado','a')->Paginate(5);
          
            if($request->ajax()){
                return  response()->json(view('Admin.partials.tabla_categoria', compact('lista'))->render());
            }
            return view('Admin.Mantenimiento.categoria', compact('lista'));

                //    return response()->json($lista_categoria);

        }

    }

    public function store(Request $request)
    {
        
        
        $request['user_ins'] = 1;
        $request['user_udt'] = 1;
        $request['estado'] = 'A';
        
        // return response()->json($request);
        Categoria::create($request->all());
        
        return Redirect('lista_categorias');
    }
}
