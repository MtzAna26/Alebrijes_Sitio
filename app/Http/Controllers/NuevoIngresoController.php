<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NuevoIngreso;
use App\Models\Propietario;
use Barryvdh\DomPDF\Facade as PDF;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;

class NuevoIngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $request->input('query');
    
        if ($query) {
            // Si se proporciona un término de búsqueda, realiza la búsqueda con Scout
            $nuevosIngresos = NuevoIngreso::search($query)->get();
            return view('nuevo-ingreso.search', compact('nuevosIngresos')); // Redirige a la vista de resultados
        } else {
            // Cargar nuevos ingresos
            $nuevosIngresos = NuevoIngreso::all();
    
            return view('nuevo-ingreso.index', compact('nuevosIngresos'));
        }
    }
    
    public function pdf()
    {
        $nuevosIngresos = NuevoIngreso::all();
        $pdf = FacadePdf::loadView('nuevo-ingreso.pdf', compact('nuevosIngresos'));
        return $pdf->stream('alebrijes.pdf', ['Attachment' => false]);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('nuevo-ingreso.create');
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

    // guardar el nuevo ingreso en la base de datos
    NuevoIngreso::create($request->all());

    return redirect()->route('nuevo-ingreso.index')->with('success', 'Nuevo ingreso creado correctamente');
    try {
        NuevoIngreso::create($request->all());
        return redirect()->route('nuevo-ingreso.index')->with('success', 'Nuevo ingreso creado correctamente');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Error al guardar el nuevo ingreso. Detalles: ' . $e->getMessage())->withInput();
    }
    $nuevoIngreso = NuevoIngreso::create($request->all());

    // Obtener o crear al propietario
    $propietario = Propietario::firstOrCreate(['nombre_propietario' => $request->nombre_propietario]);

    // Relacionar el nuevo ingreso con el propietario
    $nuevoIngreso->propietario()->associate($propietario);
    $nuevoIngreso->save();

    return redirect()->route('nuevo-ingreso.index')->with('success', 'Nuevo ingreso creado correctamente');
    
}
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            // Mostrar los detalles del ingreso
            $nuevoIngreso = NuevoIngreso::findOrFail($id);
    
            // Obtener el propietario a través de la relación definida en el modelo NuevoIngreso
            $propietario = $nuevoIngreso->propietario;
    
            return view('nuevo-ingreso.show', compact('nuevoIngreso', 'propietario'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // Manejar la excepción si no se encuentra el ingreso
            return redirect()->route('nuevo-ingreso.index')->with('error', 'Ingreso no encontrado');
        }
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // para mostrar el formulario de edición
        $nuevoIngreso = NuevoIngreso::findOrFail($id);
        return view('nuevo-ingreso.edit', compact('nuevoIngreso'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validación de datos
        $request->validate([
            'fecha_consulta' => 'required|date',
            'nombre_propietario' => 'required|string|max:255',
            // Agrega las reglas de validación para los demás campos
        ]);

        //  para actualizar el ingreso en la base de datos
        $nuevoIngreso = NuevoIngreso::findOrFail($id);
        $nuevoIngreso->update($request->all());

        return redirect()->route('nuevo-ingreso.index')->with('success', 'Ingreso actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // para eliminar el ingreso de la base de datos
        $nuevoIngreso = NuevoIngreso::findOrFail($id);
        $nuevoIngreso->delete();

        return redirect()->route('nuevo-ingreso.index')->with('success', 'Ingreso eliminado correctamente');
    }
    
}
