<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\controller;
use App\producto;
use Illuminate\Http\Request;


class ProductoController extends Controller
{
    public function index()
    {
        
        $productos= Producto::all();
        $user = auth()->user();
        return view('Admin.Mantenimiento.productos', compact('productos'));
        
    }
}
