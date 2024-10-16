@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Item</h1>
    <div class="card">
        <div class="card-header">
            {{ $inventario->Titulo }}
        </div>
        <div class="card-body">
            <p><strong>Descripción: </strong>{{ $inventario->Descripcion }}</p>
            <p><strong>Precio: </strong>{{ $inventario->Precio }}</p>
            <p><strong>Stock: </strong>{{ $inventario->Stock }}</p>
            <p><strong>Categoría: </strong>{{ $inventario->Categoria }}</p>
            <img src="{{ asset('storage/' . $inventario->Foto) }}" alt="{{ $inventario->Titulo }}" width="200">
            <br><br>
            <a href="{{ route('inventarios_final.index') }}" class="btn btn-primary">Volver</a>
        </div>
    </div>
</div>
@endsection
