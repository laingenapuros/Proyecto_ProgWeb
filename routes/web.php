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

Route::get('/plantilla', function () {
    return view('plantilla');
});

Route::get('/home', function () {
    return view('home');
});

//Route::resource('Proveedor', ProveedorController::class); //agregar controladores metodos todos show, delete, etc 
Route::resource('empleado', empleadoController::class); //agregar controladores 
Route::resource('admin', adminController::class); //agregar controladores 
Route::resource('Producto', ProductoController::class); //agregar controladores 
Route::resource('Cliente', ClienteController::class); //agregar controladores \
Route::resource('Compra', Controller::class); //agregar controladores \
// Route::get('Admin/pdf',[AdminController::class, 'pdf']) -> name ('Admin.pdf'); //agregar rutas
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
