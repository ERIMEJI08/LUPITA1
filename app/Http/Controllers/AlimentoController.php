<?php

namespace App\Http\Controllers;

use App\Models\Alimento;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AlimentoController extends Controller
{

    public function index()
    {
        $alimentos = Alimento::paginate(3);
        return view('alimentos.index', compact('alimentos'));
    }


    public function create()
    {
        return view('alimentos.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
        ]);


        Alimento::create($request->all());

        Alert::success('Éxito', '¡Alimento creado exitosamente!');

        return redirect()->route('alimentos.index');
    }

    public function edit($id)
    {
        $alimento = Alimento::findOrFail($id);
        return view('alimentos.edit', compact('alimento'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
        ]);

        $alimento = Alimento::findOrFail($id);
        $alimento->update($request->all());


        Alert::success('Éxito', 'Alimento actualizado exitosamente.');

        return redirect()->route('alimentos.index');
    }


    public function destroy($id)
    {
        $alimento = Alimento::findOrFail($id);
        $alimento->delete();


        Alert::success('Éxito', 'Alimento eliminado correctamente.');

        return redirect()->route('alimentos.index');
    }
}
