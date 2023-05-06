<?php

namespace App\Http\Controllers;

use App\Models\Sede;
use Illuminate\Http\Request;

class SedeController extends Controller
{
    //controlador sedes

    public function insertarSedes(Request $request){
        $sedes = $request->input('sedes');

        if (count($sedes) > 4) {
            return response()->json(['error' => 'Solo se pueden insertar hasta 4 sedes a la vez.'], 400);
        }
    
        // Guardar las sedes en la base de datos
        if (!Sede::guardarSedes($sedes)) {
            return response()->json(['error' => 'Los datos de las sedes no son válidos.'], 400);
        }
        
        $cantidad = count($sedes);
        
        return response()->json(['message' => "$cantidad sedes guardadas correctamente."], 201);
    }
    //listaSedes

    public function listaSedes(){
        $sedes = Sede::obtenerSedes();
    
        if ($sedes == null) {
            return response()->json(['message' => 'No hay sedes registradas.'], 404);
        }
        
        return response()->json(['sedes' => $sedes], 200);
    }
}
