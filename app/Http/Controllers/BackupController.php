<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;

class BackupController extends Controller
{
    public function generarCopiaSeguridad()
    {
        try {
        // Ejecutar el comando pg_dump para generar la copia de seguridad
        $process = new Process([
            'C:\Program Files\PostgreSQL\14\bin\pg_dump',
            '--data-only',  // Agregar este parámetro
            '-U', env('postgres'),
            '-h', '127.0.0.1',
            '-p', env('5432'),
            '-d', env('datosalebrijes'),
            '-a',
            '-F', 'c', 
        ]);
        $process->start(); // Inicia el proceso
        //dump('Output:', $process->getOutput());
        //dump('Error:', $process->getErrorOutput());
        // Espera a que el proceso termine
        $process->wait();

        // Descargar el archivo de copia de seguridad
        $output = $process->getOutput();
        $utf8EncodedOutput = mb_convert_encoding($output, 'UTF-8', 'UTF-8');

        return response($utf8EncodedOutput)
            ->header('Content-Type', 'text/plain')
            ->header('Content-Disposition', 'attachment; filename=copia_seguridad.sql');
        } catch (\Exception $exception) {
            $utf8EncodedErrorMessage = mb_convert_encoding($exception->getMessage(), 'UTF-8', 'UTF-8');
            return response()->json(['error' => $utf8EncodedErrorMessage], 500);
        }
    }
}
