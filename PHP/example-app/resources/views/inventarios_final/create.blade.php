@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Item</h1>
    <form action="{{ route('inventarios_final.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="Titulo">Título</label>
            <input type="text" class="form-control" id="Titulo" name="Titulo" required>
        </div>
        <div class="form-group">
            <label for="Descripcion">Descripción</label>
            <textarea class="form-control" id="Descripcion" name="Descripcion" required></textarea>
        </div>
        <div class="form-group">
            <label for="Precio">Precio</label>
            <input type="number" step="0.01" class="form-control" id="Precio" name="Precio" required>
        </div>
        <div class="form-group">
            <label for="Foto">Imagen</label>
            <input type="file" class="form-control" id="Foto" name="Foto" required>
        </div>
        <div class="form-group">
            <label for="Stock">Stock</label>
            <input type="number" class="form-control" id="Stock" name="Stock" required>
        </div>
        <div class="form-group">
            <label for="Categoria">Categoría</label>
            <input type="text" class="form-control" id="Categoria" name="Categoria" required>
        </div>
        <button type="submit" class="btn btn-success mt-3">Agregar</button>
    </form>
</div>
@endsection
