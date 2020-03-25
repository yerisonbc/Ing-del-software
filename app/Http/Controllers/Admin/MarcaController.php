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
        elseif($request->has('id')){

            $id = $request->get('id');  
            $lista = Marca::where('id', "$id")->get();        
            return  response()->json(view('Admin.partials.tabla_marcas', compact('lista'))->render());

            
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
    public function update(Request $request)
    {
        $alert;

        try {

            $user = auth()->user()->id;
            $id = $request->input('id');
            $marca = $request->input('marca');
            $descripcion =  $request->input('descripcion');
            Categoria::where('id', "$id")->update(['marca'=>"$marca", 'descripcion'=> "$descripcion", 'user_udt'=>"$user"]);
            $alert = 'success_udt';
            
        } catch (\Exception $e) {
            $alert = 'error_udt';
        }
    
        return redirect('lista_marcas')->with('status', $alert);
        


    }


    public function delete(Request $request)
    {
        $alert;
        $s;
        $id = $request->input('id_dlt');

       try {

            $estado = Marca::where('id', "$id")->get('estado');

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

            Marca::where('id', "$id")->update(['estado'=>"$s"]); 

       } catch (\Exception $e)  {

            $alert = 'Error_dlt';

       }

        return redirect('lista_marcas')->with('status', $alert);



    }


}
