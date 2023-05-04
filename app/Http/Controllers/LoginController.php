<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        // if (Auth::check()) {
        //     return redirect('/home');
        // }
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();
        /* 
        if (!Auth::attempt($credentials)) {
            return redirect()->route('login')->withErrors('Nick y/o contraseña son incorrectos');
        } */

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        $user = Auth::user();

        if ($user) {
            $data = User::with('roles', 'infoUsuario')->find($user->id);
            return $this->authenticated($request, $data);
        }
    }

    public function authenticated(Request $request, $user)
    {
        $rol = $user->roles->prefijo;
        switch ($rol) {
            case 'ADM':
                return redirect()->route('admin.inicio');
                break;
            case 'REC':
                return redirect()->route('rect.inicio');
                break;
            case 'SEC':
                return redirect()->route('secr.inicio');
                break;
            case 'COO':
                return redirect()->route('coor.inicio');
                break;
            case 'PRO':
                return redirect()->route('prof.inicio');
                break;
            case 'EST':
                return redirect()->route('estu.inicio');
                break;
            
            default:
                return 'error al inciar';
                break;
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        session()->invalidate();

        session()->regenerateToken();

        $request->session()->flush();
        $request->session()->regenerate();

        return redirect()->route('login');
    }
}
