<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $user = auth()->user();
        return view('inicio', ['user' => auth()->user()]);
    }
}
