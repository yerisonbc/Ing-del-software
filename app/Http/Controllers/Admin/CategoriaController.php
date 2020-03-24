<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Admin\Categoria;
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
        elseif($request->has('id')){

            $id = $request->get('id');
            
            $lista = Categoria::where('id',"$id")->get();

            return  response()->json(view('Admin.partials.tabla_categoria', compact('lista', 'id'))->render());
            
                   
            

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
        $alert;

        try {

            $user = auth()->user()->id;
            
            $request['user_ins'] = $user;
            $request['user_udt'] = $user;
            $request['estado'] = 'A';
            Categoria::create($request->all());
            $alert = 'success_ins';
            
            // return response()->json($request);
            
            
            
        } catch (\Exception $e) {
            $alert = 'Error_ins';
        }
        return redirect('lista_categorias')->with('status', $alert);

        
        

    }
}
