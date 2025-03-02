@extends('layouts.app')

@section('title', 'Detalles de la Forma de Pago')

@section('content')
    <h1>Detalles de la Forma de Pago</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $forma_pago->nombre_forma_pago }}</h5>
        </div>
    </div>

    <a href="{{ route('formas_pago.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection
