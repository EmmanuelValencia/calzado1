<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

class VistaCarritoController extends Controller
{
    public function index()
    {
        $articulos = Articulo::paginate();

         return view('VistasUsuario.carrito', compact('articulos'));
    }
}
