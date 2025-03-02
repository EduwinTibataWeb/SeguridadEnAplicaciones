<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    RolController,
    UsuarioController,
    ProductoController,
    FormaPagoController,
    FacturaController
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí se registran todas las rutas web de la aplicación.
|
*/

// Ruta de bienvenida
Route::get('/', function () {
    return view('welcome');
});

// Gestión de Roles
Route::resource('roles', RolController::class);

// Gestión de Usuarios
Route::resource('usuarios', UsuarioController::class);

// Gestión de Productos (Helados)
Route::resource('productos', ProductoController::class);

// Gestión de Formas de Pago
Route::resource('formas_pago', FormaPagoController::class);

// Gestión de Facturas
Route::resource('facturas', FacturaController::class);

require __DIR__.'/auth.php';