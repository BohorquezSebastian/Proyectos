@extends('layouts.app')

@section('content')
<style>
        /* También puedes incluir CSS directamente en el archivo HTML si prefieres */
        .background-div {
            width: 100%;
            height: 300px;
            background-image: url('../../imagenes/arepas1200x800.jpg'); /* Imagen de fondo */
            background-size: cover; /* Ajustar el tamaño de la imagen para cubrir todo el div */
            background-position: center; /* Centrar la imagen */
            background-repeat: no-repeat; /* No repetir la imagen */
        }
    </style>
<div  class=".background-div">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
