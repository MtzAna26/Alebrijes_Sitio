
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Propietario. 👩‍⚕️</h1>
        <form action="{{ route('propietario.update', $propietario->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="fecha_consulta" class="form-label">Fecha de Consulta</label>
                <input type="date" class="form-control" id="fecha_consulta" name="fecha_consulta" value="{{ $propietario->fecha_consulta }}" required>
            </div>
            <div class="mb-3">
                <label for="nombre_propietario" class="form-label">Nombre del Propietario</label>
                <input type="text" class="form-control" id="nombre_propietario" name="nombre_propietario" value="{{ $propietario->nombre_propietario }}" required>
            </div>
            <div class="mb-3">
                <label for="nombre_mascota" class="form-label">Nombre de las mascota.</label>
                <input type="text" class="form-control" id="nombre_mascota" name="nombre_mascota" value="{{ $propietario->nombre_mascota }}" required>
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección.</label>
                <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $propietario->direccion }}" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Telefono.</label>
                <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $propietario->telefono }}" required>
            </div>


            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
        </form>
    </div>
@endsection
