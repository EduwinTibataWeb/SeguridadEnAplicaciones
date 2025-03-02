@extends('layouts.app')

@section('title', 'Crear Rol')

@section('content')
    <h1>Crear Rol</h1>

    <form action="{{ route('roles.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre_rol" class="form-label">Nombre del Rol</label>
            <input type="text" class="form-control" name="nombre_rol" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection