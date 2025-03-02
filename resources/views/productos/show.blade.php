@extends('layouts.app')

@section('title', 'Detalles del Producto')

@section('content')
    <h1>Detalles del Producto</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $producto->nombre }}</h5>
            <p class="card-text"><strong>Descripción:</strong> {{ $producto->descripcion }}</p>
            <p class="card-text"><strong>Precio:</strong> ${{ number_format($producto->precio, 2) }}</p>
            <p class="card-text"><strong>Stock:</strong> {{ $producto->stock }}</p>
        </div>
    </div>

    <a href="{{ route('productos.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection