<?php

use App\Http\Controllers\LoginController;
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
    return view('auth.login');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/authen', [LoginController::class, 'login'])->name('iniciar-sesion');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'role:REC'])->group(function () {
    Route::get('/rector/inicio', [RectorController::class, 'index'])->name('rect.inicio');
    // Route::get('/admin/sedes', [AdminController::class, 'sedes'])->name('admin.sedes');
});
