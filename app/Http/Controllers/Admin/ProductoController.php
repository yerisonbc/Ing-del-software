<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\controller;
use App\Admin\producto;
use App\Admin\Fotos_producto;
use Illuminate\Http\Request;
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
        $marcas = DB::table('marcas')->select('*')->where('estado', '=', 'a')->get();
        $categorias = DB::table('categorias')->select('*')->where('estado', '=', 'a')->get();
        $proveedores = DB::table('proveedor')->select('*')->where('estado', '=', 'a')->get();
        return view("Admin.Form.reg_producto", compact('marcas', 'categorias', 'proveedores'));
    }

    public function store(Request $request){
        $alert;

        try {
            $user = auth()->user()->id;

            $request['user_ins']= $user;
            $request['user_udt']= $user;
            $request['estado']='A';
            
            // Producto::create($request->all());
            $img  = $request->file('img');
            $producto= DB::table('productos')->select('id')->where('user_ins', '=', "1")->get()->last();
            foreach ($img as $im)
        {
            
            $p=$im->store('Productos');
            $foto= ['id_producto'=>$producto->id, "foto"=>'storage/'.$p, "user_ins"=>'1', "user_udt"=>'1', "estado"=>'A'];
            // dd($foto);
            Fotos_Producto::create($foto);
            $alert = 'success_ins';
            

        }

        } catch (\Exception $e) {

            $alert = 'Error_ins';
            
        }

        return Redirect('lista_productos');
    }
}
