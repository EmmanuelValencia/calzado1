<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;
class VLATodosArticulosController extends Controller
{
    public function index()
    {
        $articulos = Articulo::paginate();

         return view('VistasUsuario.VLATodosArticulos', compact('articulos'));
    }
}
