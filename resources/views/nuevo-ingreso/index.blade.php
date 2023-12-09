
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alebrijes Centro Veterinario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="icon" href="{{ asset('assets/logomodified.png') }}" type="image/x-icon"/>
    <style>
       body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: url('{{ asset('assets/fondo.jpeg') }}') center/cover no-repeat; /* Set background image to cover entire screen */
    overflow-x: hidden;
    }
        header {
            background-color: #f79618c7;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        nav{
            width: 100%;
            background-color: #f7961873;
            padding: 10px;
            text-align: center;
            margin-bottom: 20px;
        }

        nav a {
            display: inline-block;
            color: #000000;
            text-decoration: none;
            padding: 10px;
            margin: 0 5px;
            border-radius: 5px;
            transition: background-color 0.3s;
            overflow: hidden;
        }

        nav a:hover {
           background-color: #fcbc0c;
        }

        .custom-btn {
            background-color: #d55d21;
            border-color: #d55d21;
        }

        .custom-btn:hover {
            background-color: hsl(20, 65%, 58%);
            border-color: hsl(20, 65%, 58%);
        }

.search-form button {
    color: #fff; /* Color del texto en el botón */
    background-color: #f79618c7;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
}

.search-form button:focus {
    outline: 2px solid #fff; /* Contorno de enfoque más visible */
    color: #000; /* Cambiar el color del texto cuando está enfocado */
}

/* ... (otros estilos) ... */

.btn {

    transition: background-color 0.3s;
}
.btn:hover {
    background-color: hsl(20, 65%, 58%); 
}
        .search-form input {
            flex: 1;
            color: #000000;
            margin-right: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        .search-form button {
            color: #000000;
            background-color: #f79618c7;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 20px;
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .new-entry-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .card {
            background-color: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.02);
        }

        .card img {
            max-width: 100%;
            height: auto;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }

        .card h2 {
            font-size: 1.8rem;
            font-family: 'Otro Tipo de Letra', sans-serif;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card p {
            margin-bottom: 10px;
        }

        .btn {
            background-color: #d55d21;
            color: #fff;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: hsl(20, 65%, 58%);
        }
    </style>
</head>
<body>
    <header>
        <h1>Alebrijes Centro Veterinario</h1>
    </header>
    <nav>
        <a href="{{ route('home') }}">Inicio</a>
        <a href="{{ route('nuevo-ingreso.store') }}">Nuevo Ingreso</a>
        <a href="{{ route('propietario.store') }}">Propietarios</a>
        <a href="{{ route('mascotas.store') }}">Mascotas</a>
    </nav>
    <div class="container mx-auto p-4">
        <form method="GET" action="{{ route('nuevo-ingreso.index') }}" class="max-w-md mx-auto bg-transparent p-6 rounded-lg shadow-md flex items-center justify-end">
            <input type="text" name="query" placeholder="Término de búsqueda" class="flex-1 appearance-none rounded-md py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline border border-gray-300 bg-white bg-opacity-75">
<button type="submit" class="ml-4 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline">
    <span class="text-lg">Buscar</span>
</button>

            
        </form>
    </div>
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Listado de nuevo Ingreso.🐱🐶👩‍⚕️</h1>
        @if(session('mensaje'))
    <div class="alert alert-success">
        {{ session('mensaje') }} Agregado correctamente.
    </div>
@endif

        <a href="{{ route('nuevo-ingreso.create') }}" class="btn btn-primary mb-4" onclick="return confirm('¿Estás seguro de agregar un nuevo listado?')">Agregar Nuevo Ingreso</a>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($nuevosIngresos as $nuevoIngreso)
                <div class="bg-white p-4 rounded-lg shadow">
                    <h2 class="text-lg font-semibold mb-2">{{ $nuevoIngreso->nombre_mascota }}</h2>
                    <p>ID: {{ $nuevoIngreso->id }}</p>
                    <p>Fecha de Consulta: {{ $nuevoIngreso->fecha_consulta }}</p>
                    <p>Nombre del Propietario: {{ $nuevoIngreso->nombre_propietario }}</p>
                    <!-- ... (otras propiedades) ... -->
                    <div class="mt-3">
                        <a href="{{ route('nuevo-ingreso.show', $nuevoIngreso->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('nuevo-ingreso.edit', $nuevoIngreso->id) }}" class="btn btn-warning" onclick="return confirm('¿Estás seguro de editar este ingreso?')">Editar</a>
                        <form action="{{ route('nuevo-ingreso.destroy', $nuevoIngreso->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta hoja de ingreso?')">Eliminar</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
