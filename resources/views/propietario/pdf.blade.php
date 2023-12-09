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
        @foreach($propietarios as $propietario)
        <tr>
            <th>ID</th>
            <td>{{ $propietario->id }}</td>
        </tr>    
        <tr>
            <th>Fecha de Consulta</th>
            <td>{{ $propietario->fecha_consulta }}</td>
        </tr>
        <tr>
            <th>Nombre del Propietario:</th>
            <td>{{ $propietario->nombre_propietario }}</td>
        </tr>
        <tr>
            <th>Nombre de la Mascota:</th>
            <td>{{ $propietario->nombre_mascota }}</td>
        </tr>
        <tr>
            <th>Dirección</th>
            <td>{{ $propietario->direccion }}</td>
        </tr>
        <tr>
            <th>Telefono</th>
            <td>{{ $propietario->telefono }}</td>
        </tr>
        <tr>
        @endforeach
    </table>
    
   
</body>
</html>
