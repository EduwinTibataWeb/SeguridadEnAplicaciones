@extends('layouts.app')

@section('title', 'Lista de Roles')

@section('content')
    <h1>Roles</h1>
    <a href="{{ route('roles.create') }}" class="btn btn-success mb-3">Agregar Rol</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $rol)
                <tr>
                    <td>{{ $rol->id }}</td>
                    <td>{{ $rol->nombre_rol }}</td>
                    <td>
                        <a href="{{ route('roles.show', $rol) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('roles.edit', $rol) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('roles.destroy', $rol) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar este rol?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
