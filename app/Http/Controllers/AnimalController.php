<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
{
    $animales = Animal::paginate(2);
    return view('animales.index', compact('animales'));
}



    public function create()
    {
        return view('animales.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'especie' => 'required|string|max:255',
            'edad' => 'required|integer',
        ]);

        Animal::create($request->all());

        return redirect()->route('animales.index')->with('success', 'Animal creado exitosamente');
    }


    public function edit(Animal $animal)
    {
        return view('animales.edit', compact('animal'));
    }


    public function update(Request $request, Animal $animal)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'especie' => 'required|string|max:255',
            'edad' => 'required|integer',
        ]);

        $animal->update($request->all());

        return redirect()->route('animales.index')->with('success', 'Animal actualizado exitosamente');
    }


    public function destroy(Animal $animal)
    {
        $animal->delete();

        return redirect()->route('animales.index')->with('success', 'Animal eliminado exitosamente');
    }
}
