@extends('layouts.app')

@section('title', 'Formas de Pago')

@section('content')
    <h1>Formas de Pago</h1>
    <a href="{{ route('formas_pago.create') }}" class="btn btn-success mb-3">Agregar Forma de Pago</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($formasPago as $forma)
                <tr>
                    <td>{{ $forma->id }}</td>
                    <td>{{ $forma->nombre_forma_pago }}</td>
                    <td>
                        <a href="{{ route('formas_pago.edit', $forma) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('formas_pago.destroy', $forma) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar esta forma de pago?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
