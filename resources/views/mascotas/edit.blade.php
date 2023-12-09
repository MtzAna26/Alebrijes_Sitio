<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Detalles de la Mascota 🐶🐱</h1>
        
        <form action="{{ route('mascotas.update', $mascota->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="fecha_consulta" class="form-label">Fecha de Consulta:</label>
                <input type="date" class="form-control" id="fecha_consulta" name="fecha_consulta" value="{{ $mascota->fecha_consulta }}" required>
            </div>
            
            <div class="mb-3">
                <label for="nombre_mascota" class="form-label">Nombre de la Mascota 🐶🐱</label>
                <input type="text" class="form-control" id="nombre_mascota" name="nombre_mascota" value="{{ $mascota->nombre_mascota }}" required>
            </div>
            <div class="mb-3">
                <label for="nombre_propietario" class="form-label">Nombre del Propietario:</label>
                <input type="text" class="form-control" id="nombre_propietario" name="nombre_propietario" value="{{ $mascota->nombre_propietario }}" required>
            </div>
            <div class="mb-3">
                <label for="especie" class="form-label">Especie:</label>
                <input type="text" class="form-control" id="especie" name="especie" value="{{ $mascota->especie }}" required>
            </div>
            <div class="mb-3">
                <label for="sexo" class="form-label">Sexo:</label>
                <input type="text" class="form-control" id="sexo" name="sexo" value="{{ $mascota->sexo }}" required>
            </div>
            <div class="mb-3">
                <label for="raza" class="form-label">Raza:</label>
                <input type="text" class="form-control" id="raza" name="raza" value="{{ $mascota->raza }}" required>
            </div>
            <div class="mb-3">
                <label for="color_mascota" class="form-label">Color de la mascota:</label>
                <input type="text" class="form-control" id="color_mascota" name="color_mascota" value="{{ $mascota->color_mascota }}" required>
            </div>
            <div class="mb-3">
                <label for="senas_particulares" class="form-label">Señas Particulares:</label>
                <input type="text" class="form-control" id="senas_particulares" name="senas_particulares" value="{{ $mascota->senas_particulares }}" required>
            </div>
            <div class="mb-3">
                <label for="enfermedades_previas" class="form-label">Enfermedades Previas:</label>
                <input type="text" class="form-control" id="enfermedades_previas" name="enfermedades_previas" value="{{ $mascota->enfermedades_previas }}" required>
            </div>
            <!-- Agrega los campos restantes con su valor actual -->
            
            <div class="mb-3">
                <label for="notas" class="form-label">Notas Especiales</label>
                <textarea class="form-control" id="notas" name="notas" rows="3">{{ $mascota->notas }}</textarea>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                <a href="{{ route('mascotas.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
