@extends('layouts.app')

@section('title', 'Detalles de la Factura')

@section('content')
    <h1>Detalles de la Factura</h1>

    <div class="card">
        <div class="card-body">
            <p class="card-text"><strong>Empleado:</strong> {{ $factura->empleado->nombre }} {{ $factura->empleado->apellido }}</p>
            <p class="card-text"><strong>Cliente:</strong> {{ $factura->cliente->nombre }} {{ $factura->cliente->apellido }}</p>
            <p class="card-text"><strong>Forma de Pago:</strong> {{ $factura->formaPago->nombre_forma_pago }}</p>
            <p class="card-text"><strong>Producto:</strong> {{ $factura->producto->nombre }}</p>
            <p class="card-text"><strong>Cantidad:</strong> {{ $factura->cantidad }}</p>
            <p class="card-text"><strong>Total:</strong> ${{ number_format($factura->cantidad * $factura->producto->precio, 2) }}</p>
        </div>
    </div>

    <a href="{{ route('facturas.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection
