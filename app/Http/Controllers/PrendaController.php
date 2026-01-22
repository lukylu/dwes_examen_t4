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
        $request->validate([
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric|max:999.99',
        ]);

        Prenda::create($request->all());

        return redirect('/')->with('success', 'Prenda creada correctamente');
    }

    public function show($id)
    {
        $prenda = Prenda::findOrFail($id);
        return view('prendas.ver', compact('prenda'));
    }

    public function edit($id)
    {
        $prenda = Prenda::findOrFail($id);
        return view('prendas.editar', compact('prenda'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric|max:999.99',
        ]);

        $prenda = Prenda::findOrFail($id);
        $prenda->update($request->all());

        return redirect('/')->with('success', 'Prenda actualizada correctamente');
    }

    public function confirmDelete($id)
    {
        $prenda = Prenda::findOrFail($id);
        return view('prendas.confirmar-eliminar', compact('prenda'));
    }

    public function destroy($id)
    {
        $prenda = Prenda::findOrFail($id);
        $prenda->delete();

        return redirect('/')->with('success', 'Prenda eliminada correctamente');
    }
}
