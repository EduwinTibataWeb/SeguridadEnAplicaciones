@extends('layouts.app')

@section('title', 'Editar Rol')

@section('content')
    <h1>Editar Rol</h1>

    <form action="{{ route('roles.update', $rol) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label for="nombre_rol" class="form-label">Nombre del Rol</label>
            <input type="text" class="form-control" name="nombre_rol" value="{{ $rol->nombre_rol }}" required>
        </div>
        <button type="submit" class="btn btn-warning">Actualizar</button>
    </form>
@endsection