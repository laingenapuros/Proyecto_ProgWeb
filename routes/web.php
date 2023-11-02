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

/*Route::get('/inicio', function () {
    return view('inicio');
});*/

//forma 2
/*Route::middleware('auth')->group(function(){
    Route::resource('empleado', EmpleadoController::class); //agregar controladores 
    Route::resource('admin', AdminController::class); //agregar controladores 
    Route::resource('producto', ProductoController::class); //agregar controladores 
    Route::resource('cliente', ClienteController::class); //agregar controladores 
    Route::resource('requerimiento', RequerimientoController::class); //agregar controladores 
});*/

//forma 1
/*Route::resource('empleado', EmpleadoController::class)->middleware('auth'); //agregar controladores 
Route::resource('admin', AdminController::class)->middleware('auth'); //agregar controladores 
Route::resource('producto', ProductoController::class)->middleware('auth'); //agregar controladores 
Route::resource('cliente', ClienteController::class)->middleware('auth'); //agregar controladores 
Route::resource('requerimiento', RequerimientoController::class)->middleware('auth'); //agregar controladores */

Route::resource('empleado', EmpleadoController::class); //agregar controladores 
Route::resource('admin', AdminController::class); //agregar controladores 
Route::resource('producto', ProductoController::class); //agregar controladores 
Route::resource('cliente', ClienteController::class); //agregar controladores 
Route::resource('requerimiento', RequerimientoController::class); //agregar controladores 

Route::get('/logout', function(){
    auth()->logout();
    Session()->flush();

    return view('inicio');
})->name('logout');


//Route::get('Cliente/pdf', [ClienteController::class, 'pdf'])->name('norma.pdf'); //ruta con ese metodo
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/inicio', function () {
        return view('inicio');
    })->name('inicio');
});
