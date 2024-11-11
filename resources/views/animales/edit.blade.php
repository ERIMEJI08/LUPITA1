@extends('layouts.app')

@section('content')
    <h1>Editar Animal</h1>
    <form action="{{ route('animales.update', $animal->id) }}" method="POST" style="max-width: 500px; margin: 0 auto; padding: 20px; border: 2px solid #ff85a2; border-radius: 10px; background-color: #fce4ec;">
        @csrf
        @method('PUT')
        <div style="margin-bottom: 15px;">
            <label for="nombre" style="font-size: 16px; color: #ff85a2;">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="{{ $animal->nombre }}" required style="width: 100%; padding: 8px; margin-top: 5px; border: 2px solid #ff85a2; border-radius: 5px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="especie" style="font-size: 16px; color: #ff85a2;">Especie</label>
            <input type="text" id="especie" name="especie" value="{{ $animal->especie }}" required style="width: 100%; padding: 8px; margin-top: 5px; border: 2px solid #ff85a2; border-radius: 5px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="edad" style="font-size: 16px; color: #ff85a2;">Edad</label>
            <input type="number" id="edad" name="edad" value="{{ $animal->edad }}" required style="width: 100%; padding: 8px; margin-top: 5px; border: 2px solid #ff85a2; border-radius: 5px;">
        </div>
        <button type="submit" style="background-color: #ff85a2; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">
            🐾 Actualizar
        </button>
    </form>
@endsection
