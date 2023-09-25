<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;

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


Route::resource('Proveedor', ProveedorController::class); //agregar controladores 
Route::resource('Empleado', EmpleadoController::class); //agregar controladores 
Route::resource('admin', AdminController::class); //agregar controladores 
Route::resource('Producto', ProductoController::class); //agregar controladores 
Route::resource('cliente', ClienteController::class); //agregar controladores 

//Route::get('Cliente/pdf', [ClienteController::class, 'pdf'])->name('norma.pdf'); //ruta con ese metodo