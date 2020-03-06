<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ListaController extends Controller
{
 
  
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $producto = DB::select('select * from productos where id_producto=1');
        $user = auth()->user();
                return view('tabla', ['producto'=>$producto]);
        
    }
}

