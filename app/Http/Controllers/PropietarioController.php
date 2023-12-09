<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propietario;
use App\Models\NuevoIngreso;
use Barryvdh\DomPDF\Facade as PDF;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
class PropietarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $request->input('query'); // Obtén el término de búsqueda del formulario
    
        if ($query) {
            // Si se proporciona un término de búsqueda, realiza la búsqueda con Scout
            $propietarios = Propietario::search($query)->get();
            return view('propietario.search', compact('propietarios')); // Redirige a la vista de resultados
        } else {
            // Cargar propietarios
            $propietarios = Propietario::all();
    
            return view('propietario.index', compact('propietarios'));
        }
    }
    public function pdf()
    {
        $propietarios = NuevoIngreso::all();
        $pdf = FacadePdf::loadView('propietario.pdf', compact('propietarios'));
        return $pdf->stream('alebrijes.pdf', ['Attachment' => false]);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('propietario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'fecha_consulta' => 'required|date',
            'nombre_propietario' => 'required|string|max:255',
            'nombre_mascota' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
        ]);

        try {
            // Guardar el nuevo propietario en la base de datos
            $propietario = Propietario::create($request->all());

            return redirect()->route('propietario.index')->with('success', 'Nuevo propietario creado correctamente');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al guardar el nuevo propietario. Detalles: ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            // Mostrar los detalles del propietario
            $propietario = Propietario::findOrFail($id);

            return view('propietario.show', compact('propietario'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // Manejar la excepción si no se encuentra el propietario
            return redirect()->route('propietario.index')->with('error', 'Propietario no encontrado');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Para mostrar el formulario de edición
        $propietario = Propietario::findOrFail($id);
        return view('propietario.edit', compact('propietario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validación de datos
        $request->validate([
            'nombre_propietario' => 'required|string|max:255',
            'nombre_mascota' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
        ]);

        // Actualizar el propietario en la base de datos
        $propietario = Propietario::findOrFail($id);
        $propietario->update($request->all());

        return redirect()->route('propietario.index')->with('success', 'Propietario actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $propietario = Propietario::findOrFail($id);
            $propietario->delete();

            return redirect()->route('propietario.index')->with('success', 'Propietario eliminado correctamente');
        } catch (\Exception $e) {
            return redirect()->route('propietario.index')->with('error', 'Error al eliminar el propietario. Detalles: ' . $e->getMessage());
        }
    }
}
