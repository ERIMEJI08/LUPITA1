@extends('layouts.app')

@section('content')
    <h1>Editar Dispensador</h1>
    <form action="{{ route('dispensadores.update', $dispensador->id) }}" method="POST" style="max-width: 500px; margin: 0 auto; padding: 20px; border: 2px solid #ff85a2; border-radius: 10px; background-color: #fce4ec;">
        @csrf
        @method('PUT')
        <div style="margin-bottom: 15px;">
            <label for="nombre" style="font-size: 16px; color: #ff85a2;">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="{{ $dispensador->nombre }}" required style="width: 100%; padding: 8px; margin-top: 5px; border: 2px solid #ff85a2; border-radius: 5px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="tipo" style="font-size: 16px; color: #ff85a2;">Tipo</label>
            <input type="text" id="tipo" name="tipo" value="{{ $dispensador->tipo }}" required style="width: 100%; padding: 8px; margin-top: 5px; border: 2px solid #ff85a2; border-radius: 5px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="ubicacion" style="font-size: 16px; color: #ff85a2;">Ubicación</label>
            <input type="text" id="ubicacion" name="ubicacion" value="{{ $dispensador->ubicacion }}" required style="width: 100%; padding: 8px; margin-top: 5px; border: 2px solid #ff85a2; border-radius: 5px;">
        </div>
        <button type="submit" style="background-color: #ff85a2; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">
            🐾 Actualizar
        </button>
    </form>
@endsection
