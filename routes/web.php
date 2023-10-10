<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RequerimientoController;

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

Route::get('/plantilla', function () {
    return view('plantilla');
});


Route::resource('empleado', EmpleadoController::class); //agregar controladores 
Route::resource('admin', AdminController::class); //agregar controladores 
Route::resource('producto', ProductoController::class); //agregar controladores 
Route::resource('cliente', ClienteController::class); //agregar controladores 
Route::resource('requerimiento', RequerimientoController::class); //agregar controladores 



//Route::get('Cliente/pdf', [ClienteController::class, 'pdf'])->name('norma.pdf'); //ruta con ese metodo
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
