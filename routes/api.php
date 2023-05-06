<?php

use App\Http\Controllers\SedeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('insertarSedes', [SedeController::class, 'insertarSedes'])->name('insertarSedes');
Route::get('listaSedes', [SedeController::class, 'listaSedes'])->name('listaSedes');

Route::group([
    'middleware' => 'auth:sanctum',
], function () {
    //aca vendrian las rutas de arriba
});

//return $this->responseJson(true, 'success', $data); respuesta de controller
