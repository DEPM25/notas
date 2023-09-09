<?php
namespace App\Http\Controllers;
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

Route::get('/', [InicioController::class, 'index']);

/* Ruta para autenticar */
Route::post('/autenticando', [AuthController::class, 'authenticate'])->name('iniciar-sesion');

/* Rutas para el rol de administrador */
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/admin/inicio', [AdminController::class, 'index'])->name('admin.inicio');
    // Route::get('/sedes', [AdminController::class, 'sedes'])->name('admin.sedes');
});
