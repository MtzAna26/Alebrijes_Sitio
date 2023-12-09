<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-4">Agregar Nuevo Propietario</h1>

    @if(session('mensaje'))
        <div class="alert alert-success">
            {{ session('mensaje') }}
        </div>
    @endif

    <form action="{{ route('propietario.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="fecha_consulta" class="form-label">Fecha de Consulta</label>
            <input type="date" class="form-control" id="fecha_consulta" name="fecha_consulta" required>
        </div>
        <div class="mb-4">
            <label for="nombre_propietario" class="block text-sm font-semibold text-gray-600">Nombre del Propietario:</label>
            <input type="text" name="nombre_propietario" id="nombre_propietario" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div class="mb-4">
            <label for="nombre_mascota" class="block text-sm font-semibold text-gray-600">Nombre de la Mascota:</label>
            <input type="text" name="nombre_mascota" id="nombre_mascota" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div class="mb-4">
            <label for="direccion" class="block text-sm font-semibold text-gray-600">Dirección:</label>
            <input type="text" name="direccion" id="direccion" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div class="mb-4">
            <label for="telefono" class="block text-sm font-semibold text-gray-600">Teléfono:</label>
            <input type="text" name="telefono" id="telefono" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <!-- Agrega más campos según sea necesario -->

        <div class="mt-4">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Guardar Propietario</button>
        </div>
    </form>
</div>
@endsection
