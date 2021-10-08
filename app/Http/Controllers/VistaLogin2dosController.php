<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;
class VistaLogin2dosController extends Controller
{
    public function index()
    {
        $articulos = Articulo::paginate();

         return view('VistasUsuario.VistaLogin2dos', compact('articulos'));
    }
}
