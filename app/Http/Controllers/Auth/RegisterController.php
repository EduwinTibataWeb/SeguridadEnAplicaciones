<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:50',
            'apellido' => 'required|string|max:50',
            'celular' => 'required|string|max:15',
            'email' => 'required|email|unique:usuarios,correo',
            'password' => 'required|min:6|confirmed',
        ]);

        Usuario::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'celular' => $request->celular,
            'correo' => $request->email,
            'password' => Hash::make($request->password),
            'rol_id' => 1, // Por defecto se asigna como Cliente
        ]);

        return redirect()->route('login')->with('success', 'Registro exitoso. Inicia sesión.');
    }
}
