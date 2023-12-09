<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <table class="table">
        <tbody>
            <tr>
                <th tr class="hover:bg-blue-100">ID del Propietario</th>
                <td>{{ $propietario->propietario }}</td>
            </tr>
            <tr>
                <th tr class="hover:bg-blue-100">Fecha de Consulta</th>
                <td>{{ $propietario->fecha_consulta }}</td>
            </tr>
            <tr>
                <th tr class="hover:bg-blue-100">Nombre del Propietario</th>
                <td>{{ $propietario->nombre_propietario }}</td>
            </tr>
            <tr>
                <th tr class="hover:bg-blue-100">Nombre de la Mascota:</th>
                <td>{{ $propietario->nombre_mascota }}</td>
            </tr>
            <tr>
                <th tr class="hover:bg-blue-100">Dirección</th>
                <td>{{ $propietario->direccion }}</td>
            </tr>
            <tr>
                <th tr class="hover:bg-blue-100">Telefono</th>
                <td>{{ $propietario->telefono }}</td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('propietario.index') }}" class="btn btn-secondary">Volver a la lista de ingresos</a>
    <a href="{{ route('propietario.pdf', ['id' => $propietario->id]) }}" class="btn btn-primary" target="_blank">Imprimir PDF</a>
    <a href="{{ route('copiaSeguridad') }}" class="btn btn-success">Crear Copia de Seguridad</a>
</div>
@endsection
