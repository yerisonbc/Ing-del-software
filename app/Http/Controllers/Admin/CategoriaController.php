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


    public function update(Request $request)
    {
        $alert;

        try {

            $user = auth()->user()->id;
            $id = $request->input('id');
            $categoria = $request->input('categoria');
            $descripcion =  $request->input('descripcion');
            Categoria::where('id', "$id")->update(['categoria'=>"$categoria", 'descripcion'=> "$descripcion", 'user_udt'=>"$user"]);
            $alert = 'success_udt';
            
        } catch (\Exception $e) {
            $alert = 'error_udt';
        }
    
        return redirect('lista_categorias')->with('status', $alert);
        


    }


    public function delete(Request $request)
    {
        $alert;
        $s;
        $id = $request->input('id_dlt');

       try {

            $estado = Categoria::where('id', "$id")->get('estado');

            if ( $estado[0]->estado == 'A'  )
             {
                $s ='I'; 
                $alert = 'success_dlt';

            }
            else
            { 
                $s ='A';
                $alert = 'success_udt';

            }

            Categoria::where('id', "$id")->update(['estado'=>"$s"]); 

       } catch (\Exception $e)  {

            $alert = 'Error_dlt';

       }

        return redirect('lista_categorias')->with('status', $alert);



    }
}
