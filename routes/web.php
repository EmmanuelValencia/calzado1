<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/login', function () {
    return view('auth.login');
    
});*/

Route::get('/', [App\Http\Controllers\CatalogoController::class, 'index']);

Route::resource('/login', resources\views\auth\login::class);

Route::resource('/articulos', App\Http\Controllers\ArticuloController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('usuario1', 'App\Http\Controllers\VistaLoginController');

//VISTA DEL ADMINISTRADOR
Route::resource('usuario2', 'App\Http\Controllers\VistaLoginAdminController');
//vista de todos los articulos del admin
Route::resource('usuario2dos', 'App\Http\Controllers\VLATodosArticulosController');


//VISTA TERCER ROL(CATEGORIAS Y TODOS LOS ARCHIVOS)
Route::resource('usuario3', 'App\Http\Controllers\VistaLogin2Controller');
Route::resource('usuario3dos', 'App\Http\Controllers\VistaLogin2dosController');

Auth::routes();


//VSITAS DE CARRITO
Route::resource('carrito', 'App\Http\Controllers\VistaCarritoController');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

