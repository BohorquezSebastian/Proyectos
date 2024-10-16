<!-- resources/views/pages/arepas.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Arepas</h1>
    <p>Contenido de la página de arepas.</p>
    <!-- resources/views/pages/arepas.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arepas</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <h1>Deliciosas Arepas</h1>
    </header>
    <main>
        <section>
            <h2>Sobre nuestras Arepas</h2>
            <p>Las arepas son una comida tradicional de varias regiones de América Latina, especialmente de Colombia y Venezuela. Son deliciosas, versátiles y pueden ser rellenas con una variedad de ingredientes.</p>
        </section>
        <section>
            <h2>Tipos de Arepas</h2>
            <ul>
                <li>Arepa de Queso</li>
                <li>Arepa de Choclo</li>
                <li>Arepa Rellena de Pollo</li>
                <li>Arepa de Huevo</li>
            </ul>
        </section>
        <section>
            <h2>Galería de Imágenes</h2>
            <div class="gallery">
                <img src="{{ asset('images/arepa1.jpg') }}" alt="Arepa 1">
                <img src="{{ asset('images/arepa2.jpg') }}" alt="Arepa 2">
                <img src="{{ asset('images/arepa3.jpg') }}" alt="Arepa 3">
                <img src="{{ asset('images/arepa4.jpg') }}" alt="Arepa 4">
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Arepas Deliciosas. Todos los derechos reservados.</p>
    </footer>
</body>
</html>

</div>
@endsection
