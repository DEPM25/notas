<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use JetBrains\PhpStorm\NoReturn;

class AuthController extends Controller
{
    public function authenticate(AuthRequest $request)
    {
        $credentials = $request->getCredentials();

        $remember = $request->filled('remember');

        if (!Auth::attempt($credentials, $remember)) {
            throw ValidationException::withMessages([
                'nick' => __('auth.failed'),
                'password' => __('auth.failed')
            ]);
        }

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        $user = Auth::user();

        if ($user) {
            $data = User::with('info_user')->find($user->id);
            return $this->authenticated($request, $data);
        }
    }

    public function authenticated(Request $request, $user)
    {
        $rol = $user->roles->first()->prefix;
        return match ($rol) {
            'ADM' => redirect()->route('admin.inicio'),
            'REC' => redirect()->route('rect.inicio'),
            'SEC' => redirect()->route('secr.inicio'),
            'COO' => redirect()->route('coor.inicio'),
            'PRO' => redirect()->route('prof.inicio'),
            'EST' => redirect()->route('estu.inicio'),
            default => 'error al inciar',
        };
    }

    public function logout(Request $request)
    {
        Auth::logout();

        session()->invalidate();

        session()->regenerateToken();

        return redirect()->to('/');
    }
}
