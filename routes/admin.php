<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', 'role:ADM'])->group(function () {
    Route::get('/inicio', [AdminController::class, 'index'])->name('admin.inicio');
    Route::get('/sedes', [AdminController::class, 'sedes'])->name('admin.sedes');
});