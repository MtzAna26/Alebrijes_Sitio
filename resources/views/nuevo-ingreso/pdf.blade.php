<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <style>
    body {
        border: 4px solid blue; 
    }

        h1,h5, img {
            text-align: center;

            font-family: 'Courier New', Courier, monospace;
        }
        img {

            display: block;
            margin: 0 auto 20px; 
        }
        table {
            font-family: Arial; 
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
            border: 1px solid #ddd;
            font-size: 20px;
        }

        th {
            background-color: #c5c7e6; 

        }

    </style>
</head>
<body>
    <img src="assets/logomodified.png" alt="" width="150px" height="150px" >
    <h1>"Alebrijes" Centro Veterinario</h1>
    <h5>Hoja de nuevo registro</h5>
    <table class="table table-bordered table-striped">
        @foreach($nuevosIngresos as $nuevoIngreso)
        <tr>
            <th>ID</th>
            <td>{{ $nuevoIngreso->id }}</td>
        </tr>    
        <tr>
            <th>Fecha de Consulta</th>
            <td>{{ $nuevoIngreso->fecha_consulta }}</td>
        </tr>
        <tr>
            <th>Nombre del Propietario:</th>
            <td>{{ $nuevoIngreso->nombre_propietario }}</td>
        </tr>
        <tr>
            <th>Nombre de la Mascota🐱🐶:</th>
            <td>{{ $nuevoIngreso->nombre_mascota }}</td>
        </tr>
        <tr>
            <th>Dirección</th>
            <td>{{ $nuevoIngreso->direccion }}</td>
        </tr>
        <tr>
            <th>Telefono</th>
            <td>{{ $nuevoIngreso->telefono }}</td>
        </tr>
        <tr>
            <th>Especie:</th>
            <td>{{ $nuevoIngreso->especie }}</td>
        </tr>
        <tr>
            <th>Sexo:</th>
            <td>{{ $nuevoIngreso->sexo }}</td>
        </tr>
        <tr>
            <th>Raza:</th>
            <td>{{ $nuevoIngreso->raza }}</td>
        </tr>
        <tr>
            <th>Color de la mascota:</th>
            <td>{{ $nuevoIngreso->color_mascota }}</td>
        </tr>
        <tr>
            <th>Señas particulares de la mascota:</th>
            <td>{{ $nuevoIngreso->senas_particulares }}</td>
        </tr>
        <tr>
            <th>Alergias:</th>
            <td>{{ $nuevoIngreso->alergias }}</td>
        </tr>
        <tr>
            <th>¿Tú mascota se encuentra esterilizada?</th>
            <td>{{ $nuevoIngreso->esterilizado }}</td>
        </tr>
        <tr>
            <th>Enfermedades previas:</th>
            <td>{{ $nuevoIngreso->enfermedades_previas }}</td>
        </tr>
        <tr>
            <th>Notas especiales:</th>
            <td>{{ $nuevoIngreso->notas }}</td>
        </tr>
        @endforeach
    </table>
    
   
</body>
</html>
