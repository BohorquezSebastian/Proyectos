<!-- resources/views/reporte_pdf.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Reporte de Empleados</title>
</head>
<body>
    <h1>Reporte de Empleados</h1>
    <table width="100%" border="1" cellspacing="0" cellpadding="5">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Dirección</th>
            </tr>
        </thead>
        <tbody>
            @foreach($empleados as $empleado)
                <tr>
                    <td>{{ $empleado->Nombre }}</td>
                    <td>{{ $empleado->Apellido }}</td>
                    <td>{{ $empleado->Correo }}</td>
                    <td>{{ $empleado->Direccion }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

<!-- resources/views/reporte.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Reportes</h1>

    <a href="{{ route('reporte.pdf') }}" class="btn btn-danger">Exportar a PDF</a>
    <a href="{{ route('reporte.excel') }}" class="btn btn-success">Exportar a Excel</a>

    @if($empleados->isEmpty())
        <p>No hay empleados para mostrar.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Dirección</th>
                </tr>
            </thead>
            <tbody>
                @foreach($empleados as $empleado)
                    <tr>
                        <td>{{ $empleado->Nombre }}</td>
                        <td>{{ $empleado->Apellido }}</td>
                        <td>{{ $empleado->Correo }}</td>
                        <td>{{ $empleado->Direccion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

</div>
@endsection

</html>
