<?php

namespace App\Http\Controllers;

use App\Models\ConfigurarIE;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function info()
    {
        $configuracion = ConfigurarIE::first();
        return view('livewire.info', ['configuracion' => $configuracion]);
    }
}
