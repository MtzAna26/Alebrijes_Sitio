<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles de la Mascota 🐶🐱</h1>
        
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th tr class="hover:bg-blue-100">Fecha de Consulta</th>
                    <td>{{ $mascota->fecha_consulta }}</td>
                </tr>
                <tr>
                    <th tr class="hover:bg-blue-100">Nombre de la Mascota</th>
                    <td>{{ $mascota->nombre_mascota }}</td>
                </tr>
                <tr>
                    <th tr class="hover:bg-blue-100">Nombre del Propietario</th>
                    <td>{{ $mascota->nombre_propietario }}</td>
                </tr>
                <tr>
                    <th tr class="hover:bg-blue-100">Especie</th>
                    <td>{{ $mascota->especie }}</td>
                </tr>
                <tr>
                    <th tr class="hover:bg-blue-100">Sexo</th>
                    <td>{{ $mascota->sexo }}</td>
                </tr>
                <tr>
                    <th tr class="hover:bg-blue-100"">Raza</th>
                    <td>{{ $mascota->raza }}</td>
                </tr>
                <tr>
                    <th tr class="hover:bg-blue-100">Color de la Mascota</th>
                    <td>{{ $mascota->color_mascota }}</td>
                </tr>
                <tr>
                    <th tr class="hover:bg-blue-100">Señas Particulares</th>
                    <td>{{ $mascota->senas_particulares }}</td>
                </tr>
                <tr>
                    <th tr class="hover:bg-blue-100">Alergias</th>
                    <td>{{ $mascota->alergias }}</td>
                </tr>
                <tr>
                    <th tr class="hover:bg-blue-100">Esterilizado</th>
                    <td>{{ $mascota->esterilizado }}</td>
                </tr>
                <tr>
                    <th tr class="hover:bg-blue-100">Enfermedades Previas</th>
                    <td>{{ $mascota->enfermedades_previas }}</td>
                </tr>
                {{-- Mostrar notas solo si existen --}}
                @if ($mascota->notas)
                    <tr>
                        <th tr class="hover:bg-blue-100">Notas Especiales</th>
                        <td>{{ $mascota->notas }}</td>
                    </tr>
                @endif
            </tbody>
        </table>
        <a href="{{ route('mascotas.index') }}" class="btn btn-secondary">Volver a la lista de mascotas</a>
        <a href="{{ route('copiaSeguridad') }}" class="btn btn-success">Crear Copia de Seguridad</a>
    </div>
@endsection

