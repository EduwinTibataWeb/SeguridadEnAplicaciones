@extends('layouts.app')

@section('title', 'Detalle del Usuario')

@section('content')
    <h1>Detalle del Usuario</h1>
    <p><strong>ID:</strong> {{ $usuario->id }}</p>
    <p><strong>Nombre:</strong> {{ $usuario->nombre }}</p>
    <p><strong>Apellido:</strong> {{ $usuario->apellido }}</p>
    <p><strong>Celular:</strong> {{ $usuario->celular }}</p>
    <p><strong>Correo:</strong> {{ $usuario->correo }}</p>
    <p><strong>Dirección:</strong> {{ $usuario->direccion }}</p>
    <p><strong>Rol:</strong> {{ $usuario->rol->nombre_rol }}</p>
    <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Volver</a>
@endsection
