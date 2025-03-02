<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    public function index()
    {
        $roles = Rol::all();
        return view('roles.index', compact('roles'));
    }

    public function create()
    {
        return view('roles.create');
    }

    public function store(Request $request)
    {
        $rol = Rol::create($request->validate(['nombre_rol' => 'required|string|max:50']));
        return redirect()->route('roles.index')->with('success', 'Rol creado correctamente.');
    }

    public function show($id)
    {
        return response()->json(Rol::findOrFail($id), 200);
    }

    public function edit($id)
    {
        $rol = Rol::findOrFail($id);
        return view('roles.edit', compact('rol'));
    }

    public function update(Request $request, $id)
    {
        $rol = Rol::findOrFail($id);
        $rol->update($request->validate(['nombre_rol' => 'required|string|max:50']));
        return redirect()->route('roles.index')->with('success', 'Rol actualizado correctamente.');
    }

    public function destroy($id)
    {
        Rol::destroy($id);
        return redirect()->route('roles.index')->with('success', 'Rol eliminado correctamente.');
    }
}
