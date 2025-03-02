<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Rol;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::with('rol')->get();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        $roles = Rol::all(); // Obtener todos los roles para el formulario
        return view('usuarios.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $usuario = Usuario::create($request->validate([
            'nombre' => 'required|string|max:50',
            'apellido' => 'required|string|max:50',
            'celular' => 'required|string|max:15',
            'correo' => 'required|email|unique:usuarios,correo',
            'direccion' => 'nullable|string|max:255',
            'rol_id' => 'required|exists:rol,id'
        ]));

        return redirect()->route('usuarios.index')->with('success', 'Usuario creado correctamente.');
    }

    public function show($id)
    {
        $usuario = Usuario::with('rol')->findOrFail($id);
        return view('usuarios.show', compact('usuario'));
    }

    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        $roles = Rol::all();
        return view('usuarios.edit', compact('usuario', 'roles'));
    }

    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->update($request->validate([
            'nombre' => 'required|string|max:50',
            'apellido' => 'required|string|max:50',
            'celular' => 'required|string|max:15',
            'correo' => 'required|email|unique:usuarios,correo,'.$id,
            'direccion' => 'nullable|string|max:255',
            'rol_id' => 'required|exists:rol,id'
        ]));

        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado correctamente.');
    }

    public function destroy($id)
    {
        Usuario::destroy($id);
        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado correctamente.');
    }
}
