<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query'); // Obtén el término de búsqueda del formulario

        if ($query) {
            // Si se proporciona un término de búsqueda, realiza la búsqueda con Scout
            $mascotas = Mascota::search($query)->get();
            return view('mascotas.Search', compact('mascotas')); // Redirige a la vista de resultados
        } else {
            // Si no se proporciona un término de búsqueda, carga todos los registros de sesiones
            $mascotas = Mascota::all();
        

    }
        $mascotas = Mascota::all();
        return view('mascotas.index', compact('mascotas'));
    }

    public function create()
    {
        return view('mascotas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fecha_consulta' => 'required|date',
            'nombre_mascota' => 'required|string|max:255',
            'nombre_propietario' => 'required|string|max:255',
            'especie' => 'required|in:canino,felino',
            'sexo' => 'required|in:macho,hembra',
            'raza' => 'required|string|max:255',
            'color_mascota' => 'required|string|max:255',
            'senas_particulares' => 'required|string',
            'alergias' => 'required|string',
            'esterilizado' => 'required|in:si,no',
            'enfermedades_previas' => 'required|string',
            'notas' => 'nullable|string',
        ]);

        Mascota::create($request->all());

        return redirect()->route('mascotas.index')->with('success', 'Mascota guardada correctamente');
    }

    public function show(Mascota $mascota)
    {
        return view('mascotas.show', compact('mascota'));
    }

    public function edit(Mascota $mascota)
    {
        return view('mascotas.edit', compact('mascota'));
    }

    public function update(Request $request, Mascota $mascota)
    {
        $request->validate([
            'fecha_consulta' => 'required|date',
            'nombre_mascota' => 'required|string|max:255',
            'nombre_propietario' => 'required|string|max:255',
            'especie' => 'required|in:canino,felino',
            'sexo' => 'required|in:macho,hembra',
            'raza' => 'required|string|max:255',
            'color_mascota' => 'required|string|max:255',
            'senas_particulares' => 'required|string',
            'alergias' => 'required|string',
            'esterilizado' => 'required|in:si,no',
            'enfermedades_previas' => 'required|string',
            'notas' => 'nullable|string',
            
        ]);

        $mascota->update($request->all());

        return redirect()->route('mascotas.index')->with('success', 'Mascota actualizada correctamente');
    }

    public function destroy(Mascota $mascota)
    {
        $mascota->delete();

        return redirect()->route('mascotas.index')->with('success', 'Mascota eliminada correctamente');
    }
}
