@extends('layouts.app')

@section('title', 'Lista de Facturas')

@section('content')
    <h1>Facturas</h1>
    <a href="{{ route('facturas.create') }}" class="btn btn-success mb-3">Nueva Factura</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha</th>
                <th>Empleado</th>
                <th>Cliente</th>
                <th>Forma de Pago</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Total</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($facturas as $factura)
                <tr>
                    <td>{{ $factura->id }}</td>
                    <td>{{ $factura->fecha }}</td>
                    <td>{{ $factura->empleado->nombre }} {{ $factura->empleado->apellido }}</td>
                    <td>{{ $factura->cliente->nombre }} {{ $factura->cliente->apellido }}</td>
                    <td>{{ $factura->formaPago->nombre_forma_pago }}</td>
                    <td>{{ $factura->producto->nombre }}</td>
                    <td>{{ $factura->cantidad }}</td>
                    <td>${{ number_format($factura->total, 2) }}</td>
                    <td>
                        <a href="{{ route('facturas.show', $factura) }}" class="btn btn-info btn-sm">Ver</a>
                        <form action="{{ route('facturas.destroy', $factura) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar esta factura?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
