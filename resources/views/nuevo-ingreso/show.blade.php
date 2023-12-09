<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles del Nuevo Ingreso 🐾</h1>

        <table class="table">
            <tbody> <tbody>
                <tr>
                    <th tr class="hover:bg-blue-100">ID del Propietario</th>
                    <td>{{ $nuevoIngreso->id }}</td>
                </tr>
                <tr>
                    <th tr class="hover:bg-blue-100">Fecha de Consulta del Propietario</th>
                    <td>{{ $nuevoIngreso->fecha_consulta }}</td>
                </tr>
                
                <!-- Propiedades específicas de NuevoIngreso -->
                <tr>
                    <th tr class="hover:bg-blue-100">ID</th>
                    <td>{{ $nuevoIngreso->id }}</td>
                </tr>
                <tr>
                    <th tr class="hover:bg-blue-100">Fecha de Consulta</th>
                    <td>{{ $nuevoIngreso->fecha_consulta }}</td>
                </tr>
                <tr>
                    <th tr class="hover:bg-blue-100">Nombre del Propietario</th>
                    <td>{{ $nuevoIngreso->nombre_propietario }}</td>
                </tr>
                <tr>
                    <th tr class="hover:bg-blue-100">Nombre de la Mascota:</th>
                    <td>{{ $nuevoIngreso->nombre_mascota }}</td>
                </tr>
                <tr>
                    <th tr class="hover:bg-blue-100">Dirección</th>
                    <td>{{ $nuevoIngreso->direccion }}</td>
                </tr>
                <tr>
                    <th tr class="hover:bg-blue-100">Telefono</th>
                    <td>{{ $nuevoIngreso->telefono }}</td>
                </tr>
                <tr>
                    <th tr class="hover:bg-blue-100">Especie:</th>
                    <td>{{ $nuevoIngreso->especie }}</td>
                </tr>
                <tr>
                    <th tr class="hover:bg-blue-100">Sexo:</th>
                    <td>{{ $nuevoIngreso->sexo }}</td>
                </tr>
                <tr>
                    <th tr class="hover:bg-blue-100">Raza:</th>
                    <td>{{ $nuevoIngreso->raza }}</td>
                </tr>
                <tr>
                    <th tr class="hover:bg-blue-100">Color de la mascota:</th>
                    <td>{{ $nuevoIngreso->color_mascota }}</td>
                </tr>
                <tr>
                    <th tr class="hover:bg-blue-100">Señas particulares de la mascota:</th>
                    <td>{{ $nuevoIngreso->senas_particulares }}</td>
                </tr>
                <tr>
                    <th tr class="hover:bg-blue-100">Alergias:</th>
                    <td>{{ $nuevoIngreso->alergias }}</td>
                </tr>
                <tr>
                    <th tr class="hover:bg-blue-100">¿Tú mascota se encuentra esterilizada?</th>
                    <td>{{ $nuevoIngreso->esterilizado }}</td>
                </tr>
                <tr>
                    <th tr class="hover:bg-blue-100">Enfermedades previas:</th>
                    <td>{{ $nuevoIngreso->enfermedades_previas }}</td>
                </tr>
                <tr>
                    <th tr class="hover:bg-blue-100">Notas especiales:</th>
                    <td>{{ $nuevoIngreso->notas }}</td>
                </tr>
                <!-- Continúa con el resto de los atributos -->

            </tbody>
        </table>

        <a href="{{ route('nuevo-ingreso.index') }}" class="btn btn-secondary">Volver a la lista de ingresos</a>
        <a href="{{ route('nuevo-ingreso.pdf', ['id' => $nuevoIngreso->id]) }}" class="btn btn-primary" target="_blank">Imprimir PDF</a>
        <a href="{{ route('copiaSeguridad') }}" class="btn btn-success">Crear Copia de Seguridad</a>

    </div>
@endsection
