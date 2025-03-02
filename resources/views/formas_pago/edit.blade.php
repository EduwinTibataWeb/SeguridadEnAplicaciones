@extends('layouts.app')

@section('title', 'Editar Forma de Pago')

@section('content')
    <h1>Editar Forma de Pago</h1>

    <form action="{{ route('formas_pago.update', $formaPago) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label for="nombre_forma_pago" class="form-label">Nombre</label>
            <input type="text" name="nombre_forma_pago" class="form-control" value="{{ $formaPago->nombre_forma_pago }}" required>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('formas_pago.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection