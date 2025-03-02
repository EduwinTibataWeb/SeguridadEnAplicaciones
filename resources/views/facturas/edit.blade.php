@extends('layouts.app')

@section('title', 'Editar Factura')

@section('content')
    <h1>Editar Factura</h1>

    <form action="{{ route('facturas.update', $factura) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="number" name="cantidad" class="form-control" value="{{ $factura->cantidad }}" required>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('facturas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
