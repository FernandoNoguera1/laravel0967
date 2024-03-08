<?php

// use App\Https\Controllers\ProductController;

use App\Http\Controllers\CarsController;
use App\Http\Controllers\CellphoneController;
use App\Http\Controllers\CuadraticaController;
use App\Http\Controllers\EjerciciospagController;
use App\Http\Controllers\NumerosamigosController;
use App\Http\Controllers\PrimenumberController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/frmproducto',[ProductController::class,'formularioProducto']);
Route::post('/frmproducto-store',[ProductController::class,'productoStore'])->name('product.store');


Route::get('/frmCars',[CarsController::class,'formularioCars']);
Route::post('/frmCars-store',[CarsController::class,'carsStore'])->name('cars.store');


Route::get('/frmCellphone',[CellphoneController::class,'formularioCellphone']);
Route::post('/frmCellphone-store',[CellphoneController::class,'cellphoneStore'])->name('cellphone.store');

Route::get('/numerosamigos',[NumerosamigosController::class,'numerosamigos']);
Route::post('/numerosamigos-store',[NumerosamigosController::class,'ami'])->name('numeros.amigos');


Route::get('/primo',[PrimenumberController::class,'formularioPrimo'])->name('primo.formulario');
Route::post('/primo-store',[PrimenumberController::class,'primoStore'])->name('primo.store');

Route::get('/frmCuadratica',[CuadraticaController::class,'formularioCuadratica'])->name('Cuadratica.formulario');
Route::post('/frmCuadratica-store',[CuadraticaController::class,'raiz'])->name('cuadratica.store');

Route::get('/pagina', function () {
    return view('ejerciciospag');
});

