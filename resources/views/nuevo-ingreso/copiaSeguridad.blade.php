@extends('layouts.app')

@section('title', 'Copia de Seguridad')

@section('content')
<div class="container mx-auto mt-8 p-8 bg-white rounded shadow-md text-center">
        <h2 class="text-4xl font-bold mb-6">Copia de Seguridad</h2>
        <p class="text-lg text-gray-700 mb-4">
            Aquí puedes realizar la copia de seguridad de tus datos. Asegúrate de guardar el archivo en un lugar seguro.
        </p>
        <p class="text-lg text-gray-700 mb-8">
            Recuerda que mantener copias de seguridad periódicas es crucial para la seguridad de tus datos.
        </p>

        <!-- Información adicional o instrucciones -->
        <div class="mt-8">
            <h3 class="text-2xl font-bold mb-2">Instrucciones adicionales:</h3>
            <ul class="list-disc pl-6 text-lg">
                <li>Guarda la copia de seguridad en un lugar seguro, preferiblemente fuera de tu servidor principal.</li>
                <li>Verifica regularmente la integridad de tus copias de seguridad.</li>
                <li>Ajusta según sea necesario para evitar problemas.</li>
                <li>Verifica regularmente el espacio en tu dispositivo de respaldo.</li>
                <!-- Agrega más puntos según sea necesario -->
            </ul>
        </div>
        <a href="{{ route('generar.copia.seguridad') }}" class="btn btn-primary text-lg">Comienza la copia de seguridad aquí</a>

        <a href="javascript:window.history.back()" class="btn btn-secondary ml-4 text-lg">Regresar a detalles</a>
    </div>
@endsection
