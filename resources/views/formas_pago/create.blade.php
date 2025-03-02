@extends('layouts.app')

@section('title', 'Agregar Forma de Pago')

@section('content')
    <h1>Agregar Forma de Pago</h1>

    <form action="{{ route('formas_pago.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre_forma_pago" class="form-label">Nombre</label>
            <input type="text" name="nombre_forma_pago" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('formas_pago.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
