<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    use HasFactory;


    public static function guardarSedes($sedes)
    {
        $cantidad = count($sedes);
        
        // Recorrer los datos de cada sede y guardarlos en la base de datos
        for ($i = 0; $i < $cantidad; $i++) {
            $nit = $sedes[$i]['codigo_dane'];
            $nombre = $sedes[$i]['nom_sede'];
            
            // Validar los datos de la sede
            if (strlen($nit) > 12 || strlen($nombre) > 100) {
                return false;
            }
            
            // Crear una nueva instancia del modelo y asignar los valores
            $sede = new Sede;
            $sede->codigo_dane = $nit;
            $sede->nom_sede = $nombre;
            $sede->save();
        }
        
        return true;
    }

    public static function obtenerSedes()
    {
        $sedes = Sede::all(['codigo_dane', 'nom_sede']);
        
        if ($sedes->isEmpty()) {
            return null;
        }
        
        return $sedes;
    }
}
