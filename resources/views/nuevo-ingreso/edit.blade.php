
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Nuevo Ingreso 🐾</h1>
        <form action="{{ route('nuevo-ingreso.update', $nuevoIngreso->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="fecha_consulta" class="form-label">Fecha de Consulta</label>
                <input type="date" class="form-control" id="fecha_consulta" name="fecha_consulta" value="{{ $nuevoIngreso->fecha_consulta }}" required>
            </div>
            <div class="mb-3">
                <label for="nombre_propietario" class="form-label">Nombre del Propietario</label>
                <input type="text" class="form-control" id="nombre_propietario" name="nombre_propietario" value="{{ $nuevoIngreso->nombre_propietario }}" required>
            </div>
            <div class="mb-3">
                <label for="nombre_mascota" class="form-label">Nombre de las mascota.🐶🐱</label>
                <input type="text" class="form-control" id="nombre_mascota" name="nombre_mascota" value="{{ $nuevoIngreso->nombre_mascota }}" required>
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección.</label>
                <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $nuevoIngreso->direccion }}" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Telefono.</label>
                <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $nuevoIngreso->telefono }}" required>
            </div>
            <div class="mb-3">
                <label for="especie" class="form-label">Especie🐱🐶</label>
                <select class="form-control" id="especie" name="especie" value="{{ $nuevoIngreso->especie }}" required>
                    <option value="" disabled selected>Selecciona la especie</option>
                    <option value="canino">Canino 🐶</option>
                    <option value="felino">Felino 🐱</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="sexo" class="form-label">Sexo.🐶🐱</label>
                <select class="form-select" id="sexo" name="sexo"  value="{{ $nuevoIngreso->sexo }}"required>
                    <option value="" disabled selected>Selecciona el sexo de tu mascota</option>
                    <option value="macho">Macho</option>
                    <option value="hembra">Hembra</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="raza" class="form-label">Raza.🐱🐶</label>
                <input type="text" class="form-control" id="raza" name="raza"  value="{{ $nuevoIngreso->raza }}" required>
            </div>
            <div class="mb-3">
                <label for="color_mascota" class="form-label">Color de la Mascota</label>
                <input type="text" class="form-control" id="color_mascota" name="color_mascota"  value="{{ $nuevoIngreso->color_mascota }}" required>
            </div>
            <div class="mb-3">
                <label for="senas_particulares" class="form-label">Señas particulares de tu mascota.🐱🐶</label>
                <input type="text" class="form-control" id="senas_particulares" name="senas_particulares" value="{{ $nuevoIngreso->senas_particulares }}" required>
            </div>
            <div class="mb-3">
                <label for="alergias" class="form-label">Alergias.🐱🐶</label>
                <input type="text" class="form-control" id="alergias" name="alergias" required>
            </div>
            <div class="mb-3">
                <label for="esterilizado" class="form-label">¿Tu mascota se encuentra esterilizada?.🐱🐶</label>
                <select class="form-select" id="esterilizado" name="esterilizado" value="{{ $nuevoIngreso->esterilizado }}" required>
                    <option value="" disabled selected>Selecciona una opción</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="enfermedades_previas" class="form-label">Enfermedades Previas.🐱🐶</label>
                <input type="text" class="form-control" id="enfermedades_previas" name="enfermedades_previas" value="{{ $nuevoIngreso->enfermedades_previas }}" required>
            </div>
            <div class="mb-3">
                <label for="notas" class="form-label">Notas Especiales</label>
                <textarea class="form-control" id="notas" name="notas" rows="3"></textarea>
            </div>


            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
        </form>
    </div>
@endsection
