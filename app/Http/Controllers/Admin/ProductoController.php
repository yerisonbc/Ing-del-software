<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\controller;
use App\Admin\producto;
use App\Admin\modelo;
use App\Admin\Fotos_producto;
use Illuminate\Http\Request;
use\App\Http\Requests\ProductoRequest;
use Illuminate\Support\Facades\DB;


class ProductoController extends Controller
{
    public function show(Request $request)
    {
        
       
        if($request->has('buscar'))
        {
            $busqueda = $request->get('buscar');
            $estado = $request->get('estado');

         $productos = Producto::Search($busqueda, $estado)->paginate(5);

            if($request->ajax()){
                return  response()->json(view('Admin.partials.tabla_productos', compact('productos', 'busqueda'))->render());
            }
            
            return view('Admin.Mantenimiento.productos', compact('productos'));
            
        }


        else          //      ver Todos los registros
        {
            $productos = Producto::where('estado', 'a')->paginate(5);
            
            if($request->ajax()){
                return  response()->json(view('Admin.partials.tabla_productos', compact('productos'))->render());
            }

            return view('Admin.Mantenimiento.productos', compact('productos'));
           
        }
        
    }

    public function new()
    {
        $modelos = Modelo::where('estado', '=', 'a')->get();
        $categorias = DB::table('categorias')->select('*')->where('estado', '=', 'a')->get();
        $proveedores = DB::table('proveedor')->select('*')->where('estado', '=', 'a')->get();
        return view("Admin.Form.reg_producto", compact('modelos', 'categorias', 'proveedores'));
    }

    public function store(ProductoRequest $request){
        $alert;

        try {

            $user = auth()->user()->id;
            $request['user_ins']= $user;
            $request['estado']='A';
            
            $producto = Producto::create($request->all());

            $img  = $request->file('img');
            
            foreach ($img as $imagen)
            {
                $ruta = $imagen->store('Productos');
                $datosFoto = ['id_producto'=>$producto->id, "foto"=>'storage/'.$ruta, "user_ins"=>$user, "estado"=>'A'];
                Fotos_Producto::create($datosFoto);
            
            }
            $alert="success_ins";

        } catch (\Exception $e) {

            $alert = 'Error_ins';
            
        }

        return Redirect('lista_productos')->with('status', $alert);
    }


}
