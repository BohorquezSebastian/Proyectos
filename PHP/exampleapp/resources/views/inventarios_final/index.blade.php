@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Inventario</h1>
    <a href="{{ route('inventarios_final.create') }}" class="btn btn-primary">Agregar Item</a>
    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>Título</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Imagen</th>
                <th>Stock</th>
                <th>Categoría</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inventarios as $inventario)
            <tr>
                <td>{{ $inventario->Titulo }}</td>
                <td>{{ $inventario->Descripcion }}</td>
                <td>{{ $inventario->Precio }}</td>
                <td><img src="{{ asset('storage/' . $inventario->Foto) }}" alt="{{ $inventario->Titulo }}" width="100"></td>
                <td>{{ $inventario->Stock }}</td>
                <td>{{ $inventario->Categoria }}</td>
                <td>
                    <a href="{{ route('inventarios_final.show', $inventario->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('inventarios_final.edit', $inventario->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('inventarios_final.destroy', $inventario->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
