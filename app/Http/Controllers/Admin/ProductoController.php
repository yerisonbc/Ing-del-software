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
            $id_producto = $producto->id;

            $img  = $request->file('img');
            
            foreach ($img as $imagen)
            {
                $ruta = $imagen->store('Productos');
                $datosFoto = ['id_producto'=>$id_producto, "foto"=>'storage/'.$ruta, "user_ins"=>$user, "estado"=>'A'];
                Fotos_Producto::create($datosFoto);
            
            }
            $alert="success_ins";
            return Redirect("productos/preview/$id_producto");

        } catch (\Exception $e) {

            $alert = 'Error_ins';
            return Redirect('lista_productos')->with('status', $alert);
            
        }
    }

    public function update(ProductoRequest $request){
        $alert;

        // try {

            $user = auth()->user()->id;
            $request['user_udt']= $user;
            $request['estado']='A';
            $id = $request->input['id'];
        
            if($producto = Producto::where('id',"$id")->update([
                    'producto'=>        $request->input['producto'],
                    'titulo'=>          $request->input['titulo'],
                    'cantidad'=>        $request->input['cantidad'],
                    'precio'=>          $request->input['precio'],
                    'id_categoria'=>    $request->input['id_categoria'],
                    'id_modelo'=>       $request->input['id_modelo'],
                    'id_proveedor'=>    $request->input['id_proveedor'],
                
                    ])){
                        echo'yes';
                } else {
                $alert = 'Error_udt';
                return Redirect('lista_productos')->with('status', $alert);
            }

            
            
        // } catch (\Exception $e) {

            
            // 
            
        // }

    }


}
