@extends('layouts.app')

@section('title', 'Editar Usuario')

@section('content')
    <h1>Editar Usuario</h1>

    <form action="{{ route('usuarios.update', $usuario) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="{{ $usuario->nombre }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Apellido</label>
            <input type="text" class="form-control" name="apellido" value="{{ $usuario->apellido }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Celular</label>
            <input type="text" class="form-control" name="celular" value="{{ $usuario->celular }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Correo</label>
            <input type="email" class="form-control" name="correo" value="{{ $usuario->correo }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Dirección</label>
            <input type="text" class="form-control" name="direccion" value="{{ $usuario->direccion }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Rol</label>
            <select class="form-control" name="rol_id">
                @foreach ($roles as $rol)
                    <option value="{{ $rol->id }}" @if($usuario->rol_id == $rol->id) selected @endif>
                        {{ $rol->nombre_rol }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-warning">Actualizar</button>
    </form>
@endsection
