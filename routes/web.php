<?php

use App\Http\Controllers\ProductoController;
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

Route::get('/', function () {
    return view('welcome');
});

//ruta de paises
Route::get('paises', function () {
    $paises = [
        "Colombia" => ["capital" => "Bogotá", "moneda" => "peso", "poblacion" => 51.6, "ciudades" => ["Medellín", "Cali", "Barranquilla"]],
        "Perú" => ["capital" => "Lima", "moneda" => "sol", "poblacion" => 32.97, "ciudades" => ["Cúsco", "Piura", "Ica"]],
        "Paraguay" => ["capital" => "Monte video", "moneda" => "guarani", "poblacion" => 7.13, "ciudades" => ["Asunción", "Ciudad del este", "Encamacón"]]
    ];
    //mostrar la vista de paises
    return view('paises')->with("paises", $paises);
});


Route::get('prueba', function () {

    return view('productos.new');
});

//rutas REST

//producto

Route::resource('productos', ProductoController::class);
