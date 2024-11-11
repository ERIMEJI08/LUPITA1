@extends('layouts.app')

@section('content')
    <h1 style="text-align: center; color: #ff85a2;">Crear Alimento</h1>
    <form action="{{ route('alimentos.store') }}" method="POST" style="max-width: 500px; margin: 0 auto; padding: 20px; border: 2px solid #ff85a2; border-radius: 10px; background-color: #fce4ec;">
        @csrf
        <div style="margin-bottom: 15px;">
            <label for="nombre" style="font-size: 16px; color: #ff85a2;">Nombre</label>
            <input type="text" id="nombre" name="nombre" required style="width: 100%; padding: 8px; margin-top: 5px; border: 2px solid #ff85a2; border-radius: 5px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="precio" style="font-size: 16px; color: #ff85a2;">Precio</label>
            <input type="number" id="precio" name="precio" step="0.01" required style="width: 100%; padding: 8px; margin-top: 5px; border: 2px solid #ff85a2; border-radius: 5px;">
        </div>
        <button type="submit" style="background-color: #ff85a2; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; font-size: 16px;">
            🐾 Guardar
        </button>
    </form>

    <!-- SweetAlert Script -->
    @if(session('success'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Swal.fire({
                title: 'Éxito',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonText: 'Aceptar',
                confirmButtonColor: '#ff85a2'
            });
        </script>
    @endif
@endsection
