<?php

namespace App\Http\Controllers;

use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function store(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        // Este metodo devuelve un boolean en caso de que coincida con lo que hay en la base de datos
        // Tambien recibe un segundo parametro para ver si se desea recordar la sesion
        if (!Auth::attempt($credentials, $request->boolean('remember'))) {
            // throw ValidationException::withMessages([
            //     'email' => __('auth.failed'),
            // ]);
            $error = 'Error al autenticar';
            dd($error);
        }
        $request->session()->regenerate();

        // Redireccionamos a la url prevista antes de autenticarnos
        return redirect()->intended()->with('status', 'Logged success!');

    }

    public function destroy(Request $request) {
        Auth::guard('web')->logout();

        $request -> session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('login')->with('status', 'Logged out!');
    }
}
