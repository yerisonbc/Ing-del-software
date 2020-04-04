<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index(Request $request)
    {
        $user = auth()->user();
        $request->user()->authorizeRoles(['admin', 'user']);
        return view('admin.inicio', ['user' => auth()->user()]);
    }
}
