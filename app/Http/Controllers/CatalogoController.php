<?php

namespace App\Http\Controllers;
use App\Models\Articulo;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function index()
    {
        $articulos = Articulo::paginate();

        return view('welcome', compact('articulos'));
    }
}
