<?php

namespace App\Http\Controllers;

use App\Models\Prenda;
use Illuminate\Http\Request;

class PrendaController extends Controller
{
    public function index()
    {
        $prendas = Prenda::all();
        return view('prendas.listar', compact('prendas'));
    }

    public function create()
    {
        return view('prendas.crear');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric|min:0.01|regex:/^\d+(\.\d{1,2})?$/',
        ]);

        Prenda::create($validated);

        return redirect()->route('prendas.index')
                        ->with('success', 'Prenda creada correctamente.');
    }

    public function show(Prenda $prenda)
    {
        return view('prendas.ver', compact('prenda'));
    }

    public function edit(Prenda $prenda)
    {
        return view('prendas.editar', compact('prenda'));
    }

    public function update(Request $request, Prenda $prenda)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric|min:0.01|regex:/^\d+(\.\d{1,2})?$/',
        ]);

        $prenda->update($validated);

        return redirect()->route('prendas.show', $prenda->id)
                        ->with('success', 'Prenda actualizada correctamente.');
    }

    public function confirmDelete(Prenda $prenda)
    {
        return view('prendas.confirmar-eliminar', compact('prenda'));
    }

    public function destroy(Prenda $prenda)
    {
        $prenda->delete();

        return redirect()->route('prendas.index')
                        ->with('success', 'Prenda eliminada correctamente.');
    }
}
