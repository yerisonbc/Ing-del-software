<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\controller;
use App\Admin\Modelo;
use Illuminate\Support\Facades\DB;




class modeloController extends Controller
{
    public function __construct() {  $this->middleware('auth'); }

    public function show(Request $request){

        if($request->has('buscar')) // Busquedad o filtro de Activos e Inactivod
        {
            $busqueda = $request->get('buscar');
            $estado = $request->get('estado');
            $lista = Modelo::Search($busqueda, $estado)->paginate(5);

            if($request->ajax()){
                return  response()->json(view('Admin.partials.tabla_modelos', compact('lista', 'busqueda'))->render());
            }
            return view('Admin.Mantenimiento.modelos', compact('lista'));
        }

        elseif($request->has('id')){  // mostrar un Registro en especifico

            $id = $request->get('id');
            $lista = Modelo::where('id',"$id")->get();
            $marcas = DB::table('marcas')->select('*')->where('estado', '=', 'a')->get();
            $categorias = DB::table('categorias')->select('*')->where('estado', '=', 'a')->get();
            return  response()->json(view('Admin.partials.tabla_modelos', compact('lista', 'id', 'marcas', 'categorias'))->render());
        }

        else    // Mostrar Todos los Registros 
        {
            $lista = Modelo::where('estado','a')->Paginate(5);
            if($request->ajax()){
                return  response()->json(view('Admin.partials.tabla_modelos', compact('lista'))->render());
            }
            return view('Admin.Mantenimiento.modelos', compact('lista'));

        }

    }

    public function new(){
        $marcas = DB::table('marcas')->select('*')->where('estado', '=', 'a')->get();
        $categorias = DB::table('categorias')->select('*')->where('estado', '=', 'a')->get();
        return view('Admin.Form.reg_modelo', compact('marcas', 'categorias'));
    }

    public function store(Request $request)
    {
        $alert;
        $request->validate([
            'modelo' => 'required|max:25',
            
            
        ]);

        try {
        
            $user = auth()->user()->id;
            $request['user_ins'] = $user;
            $request['user_udt'] = $user;
            $request['estado'] = 'A';
            if(Modelo::create($request->all())){ $alert = 'success_ins'; } else{ $alert = 'Error_ins'; }
            return redirect('lista_modelos')->with('status', $alert); 

        } catch (\Exception $e) {
            $alert = 'Error_ins';
            return redirect('nuevo_modelo')->with('status', $alert); 
        }
        
        

    }

    public function update(Request $request)
    {
        $request->validate([
            'modelo' => 'required',
        ]);
        $alert;
        try {

            $user = auth()->user()->id;
            $id = $request->input('id');
            $modelo = $request->input('modelo');
            $marca = $request->input('id_marca');
            $categoria = $request->input('id_categoria');
            $descripcion =  $request->input('descripcion');

            if(Modelo::where('id', "$id")->update([
                'modelo'=>"$modelo", 
                'descripcion'=> "$descripcion", 
                'id_marca' => "$marca",
                'id_categoria' => "$categoria",
                'user_udt'=>"$user",
                ])){ $alert = 'success_udt'; }

            
        } catch (\Exception $e) {
            $alert = 'error_udt';
        }
        return redirect('lista_modelos')->with('status', $alert);
    
        
        
    }


    public function delete(Request $request)
    {
        $alert;
        $newStatus;
        $id = $request->input('id_dlt');

       try {

            $estado = Modelo::where('id', "$id")->get('estado');
            if ( $estado[0]->estado == 'A') { $newStatus ='I'; $alert = 'success_dlt'; }
            else {  $s ='A'; $alert = 'success_udt';}
            Modelo::where('id', "$id")->update(['estado'=>"$newStatus"]);

            return redirect('lista_modelos')->with('status', $alert);

       } catch (\Exception $e)  {

            $alert = 'Error_dlt';
            return redirect('nuevo_modelo')->with('status', $alert);
       }

    }

}
