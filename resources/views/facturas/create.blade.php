@extends('layouts.app')

@section('title', 'Nueva Factura')

@section('content')
    <h1>Crear Factura</h1>

    <form action="{{ route('facturas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="id_empleado" class="form-label">Empleado</label>
            <select name="id_empleado" class="form-control">
                @foreach ($empleados as $empleado)
                    <option value="{{ $empleado->id }}">{{ $empleado->nombre }} {{ $empleado->apellido }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="id_cliente" class="form-label">Cliente</label>
            <select name="id_cliente" class="form-control">
                @foreach ($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nombre }} {{ $cliente->apellido }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="id_pago" class="form-label">Forma de Pago</label>
            <select name="id_pago" class="form-control">
                @foreach ($formas_pago as $forma)
                    <option value="{{ $forma->id }}">{{ $forma->nombre_forma_pago }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="id_producto" class="form-label">Producto</label>
            <select name="id_producto" class="form-control">
                @foreach ($productos as $producto)
                    <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="number" name="cantidad" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('facturas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
