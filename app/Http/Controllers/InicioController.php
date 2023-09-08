<?php

namespace App\Http\Controllers;

use App\Models\ConfigurarIE;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class InicioController extends Controller
{
    public function index()
    {
        $configuracion = ConfigurarIE::first();
        return view('auth.index', ['configuracion' => $configuracion]);
    }
}
