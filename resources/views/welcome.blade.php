@extends('layouts.app')

@section('title', 'Bienvenido a la Heladería')

@section('content')
    <div class="text-center">
        <h1>Bienvenido a la Tienda de Helados</h1>
        <p>Compra tus helados favoritos fácilmente.</p>
        <a href="{{ route('productos.index') }}" class="btn btn-primary">Ver Productos</a>
    </div>
@endsection