@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alebrijes Centro Veterinario</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'figtree', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            overflow-x: hidden; /* Evita la barra de desplazamiento horizontal */
        }
        .card {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px; /* Ajusta el radio de la esquina según tu preferencia */
            overflow: hidden;
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2); /* Ajusta la sombra según tu preferencia */
            transition: transform 0.3s ease-in-out;
            margin-bottom: 20px;
            width: 400px;
     }
     .card h3 {
        text-align: center;
        font-size: 2.0rem; 
        font-family: 'figtree', sans-serif;
        font-weight: bold;
        margin-bottom: 10px; 
    }

        .card-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin: 20px; /* Ajusta según tu diseño */
        }


        .card:hover {
            transform: scale(1.02);
        }

        .card img {
            max-width: 100%;
            height: auto;
        }
        .card-link {
    text-decoration: none; /* Para quitar el subrayado del enlace */
    color: inherit; /* Para heredar el color del texto del contenedor padre (puede ajustarse según tu diseño) */
}

    </style>
</head>
<body>
    <div class="card-container">
        <a href="{{ route('nuevo-ingreso.store') }}" class="card-link">
            <div class="card">
                <img src="{{ asset('assets/dog3.png') }}" alt="Dog Image">
                <h3 class="text-lg font-semibold mb-2">Nuevo Ingreso</h3>
                <p class="text-gray-600">Aquí podrás agregar una nueva hoja de ingreso.</p>
            </div>
        </a>

        <a href="{{ route('propietario.store') }}" class="card-link">
            <div class="card">
                <img src="{{ asset('assets/dog4.png') }}" alt="Dog Image">
                <h3 class="text-lg font-semibold mb-2">Propietarios</h3>
                <p class="text-gray-600">Aquí encontrarás información sobre los propietarios.</p>
            </div>
        </a>

        <a href="{{ route('mascotas.store') }}" class="card-link">
            <div class="card">
                <img src="{{ asset('assets/cat2.png') }}" alt="Cat Image">
                <h3 class="text-lg font-semibold mb-2">Mascotas</h3>
                <p class="text-gray-600">Aquí encontrarás información sobre las mascotas.</p>
            </div>
        </a>
    </div>
</body>
</html>

@endsection
