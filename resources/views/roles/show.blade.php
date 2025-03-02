@extends('layouts.app')

@section('title', 'Detalle del Rol')

@section('content')
    <h1>Detalle del Rol</h1>
    <p><strong>ID:</strong> {{ $rol->id }}</p>
    <p><strong>Nombre:</strong> {{ $rol->nombre_rol }}</p>
    <a href="{{ route('roles.index') }}" class="btn btn-secondary">Volver</a>
@endsection