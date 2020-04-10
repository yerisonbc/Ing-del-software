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

        $request->validate([
            'nombre' => 'required',
            'correo' => 'max:50',
            'pagina_web' => 'max:50',
    
        ]);
        // 'telefono' => 'regex:/[0-9]{3}-[0-9]{3}-[0-9]{4}/|max:12|',
        $alert;
        try {

            $user = Auth()->user()->id;
            $request['user_ins'] = $user;
            $request['user_udt'] = $user;
            $request['estado'] = 'A';
            
            Proveedor::create($request->all());

            $alert = 'success_ins';
            
    
            } catch (\Exception $e) {

                $alert = 'Error_ins';
                
            }

            
            return redirect('lista_proveedores')->with('status', $alert);

            
        
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
        elseif($request->has('id')){

            $id = $request->get('id');  
            $lista = Proveedor::where('id', "$id")->get();        
            return  response()->json(view('Admin.partials.tabla_proveedores', compact('lista', 'id'))->render());
            // return $lista;
            
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

    public function update(Request $request)
    {
        $alert;

        try {
                    // return $request;
            $user = auth()->user()->id;
            $id = $request->input('id');
            $nombre = $request->input('nombre');
            $telefono =  $request->input('telefono');
            $correo =  $request->input('correo');
            $pagina_web =  $request->input('pagina_web');
            Proveedor::where('id', "$id")->update(['nombre'=>"$nombre", 'telefono'=> "$telefono", 'correo'=>"$correo", 'pagina_web'=>"$pagina_web", 'user_udt'=>"$user"]);
            $alert = 'success_udt';
            
        } catch (\Exception $e) {
            $alert = 'error_udt';
        }
    
        return redirect('lista_proveedores')->with('status', $alert);
        


    }


    public function delete(Request $request)
    {
        $alert;
        $s;
        $id = $request->input('id_dlt');

       try {

            $estado = Proveedor::where('id', "$id")->get('estado');

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

            Proveedor::where('id', "$id")->update(['estado'=>"$s"]); 

       } catch (\Exception $e)  {

            $alert = 'Error_dlt';

       }

        return redirect('lista_proveedores')->with('status', $alert);



    }


}
