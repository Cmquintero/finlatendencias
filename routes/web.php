<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\VentasController;
use App\Http\Controllers\ReportController;

Route::get('/', function(){ return redirect()->route('login'); });

/* AUTH */
Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/login', [AuthController::class,'loginPost'])->name('login.post');
Route::get('/register', [AuthController::class,'register'])->name('register');
Route::post('/register', [AuthController::class,'registerPost'])->name('register.post');
Route::get('/logout', [AuthController::class,'logout'])->name('logout');

/* DASHBOARD — UNA SOLA RUTA */
Route::middleware('auth')->group(function(){

    Route::get('/dashboard', [DashboardController::class,'index'])
        ->name('dashboard');

    Route::resource('clientes', ClientesController::class);
    Route::resource('proveedores', ProveedoresController::class);
    Route::resource('productos', ProductosController::class);
    Route::resource('inventario', InventarioController::class);
    Route::resource('ventas', VentasController::class);

    // Reportes
    Route::get('/reportes/inventario', [ReportController::class,'inventario'])->name('reportes.inventario');
    Route::get('/reportes/ventas', [ReportController::class,'ventas'])->name('reportes.ventas');
    Route::get('/reportes/clientes', [ReportController::class,'clientes'])->name('reportes.clientes');
});

/* ROL ADMIN */
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        return "Panel de Administrador";
    });
});

/* ROL USER */
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user-dashboard', function () {
        return "Dashboard de Usuario";
    });
});
