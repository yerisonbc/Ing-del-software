<?php

namespace App\Http\Controllers;
Use App\Producto;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

// use app\categoria;

class ListaController extends Controller
{
 
  
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        
        $productos= Producto::all();
        $user = auth()->user();
        return view('tabla', compact('productos'));
        
    }
}

