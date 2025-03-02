@extends('layouts.app')

@section('title', 'Crear Usuario')

@section('content')
    <h1>Crear Usuario</h1>

    <form action="{{ route('usuarios.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Apellido</label>
            <input type="text" class="form-control" name="apellido" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Celular</label>
            <input type="text" class="form-control" name="celular" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Correo</label>
            <input type="email" class="form-control" name="correo" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Dirección</label>
            <input type="text" class="form-control" name="direccion">
        </div>
        <div class="mb-3">
            <label class="form-label">Rol</label>
            <select class="form-control" name="rol_id">
                @foreach ($roles as $rol)
                    <option value="{{ $rol->id }}">{{ $rol->nombre_rol }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
