<?php

namespace App\Http\Controllers;

use App\Models\Dispensador;
use Illuminate\Http\Request;

class DispensadorController extends Controller
{

    public function index()
    {
        $dispensadores = Dispensador::paginate(2);

        return view('dispensadores.index', compact('dispensadores'));
    }


    public function create()
    {
        return view('dispensadores.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'tipo' => 'required|string|max:255',
            'ubicacion' => 'required|string|max:255',
        ]);

        Dispensador::create($request->all());

        return redirect()->route('dispensadores.index')->with('success', 'Dispensador creado exitosamente');
    }


    public function edit(Dispensador $dispensador)
    {
        return view('dispensadores.edit', compact('dispensador'));
    }


    public function update(Request $request, Dispensador $dispensador)
    {

        $request->validate([
            'nombre' => 'required|string|max:255',
            'tipo' => 'required|string|max:255',
            'ubicacion' => 'required|string|max:255',
        ]);


        $dispensador->update($request->all());


        return redirect()->route('dispensadores.index')->with('success', 'Dispensador actualizado exitosamente');
    }


    public function destroy(Dispensador $dispensador)
    {
        $dispensador->delete();

        return redirect()->route('dispensadores.index')->with('success', 'Dispensador eliminado exitosamente');
    }
}
