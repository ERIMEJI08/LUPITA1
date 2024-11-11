@extends('layouts.app')

@section('content')
    <h1 style="text-align: center; color: #ff85a2;">Lista de Dispensadores</h1>
    <a href="{{ route('dispensadores.create') }}" class="btn-create">
        🐾 Crear Dispensador
    </a>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Ubicación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dispensadores as $dispensador)
                <tr>
                    <td>{{ $dispensador->nombre }}</td>
                    <td>{{ $dispensador->tipo }}</td>
                    <td>{{ $dispensador->ubicacion }}</td>
                    <td>
                        <a href="{{ route('dispensadores.edit', $dispensador->id) }}" class="btn-edit">✏️ Editar</a>
                        <form action="{{ route('dispensadores.destroy', $dispensador->id) }}" method="POST" style="display: inline-block; margin-left: 10px;" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete">🗑️ Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center mt-4">
        {{ $dispensadores->links('pagination.custom') }}
    </div>

@endsection

@push('styles')
    <style>
        /* Estilos previos (puedes mantener los que ya has usado) */
    </style>
@endpush

@push('scripts')
    <script>
        // Mostrar el mensaje de éxito si existe en la sesión
        @if(session('success'))
            Swal.fire({
                title: '¡Éxito!',
                text: '{{ session('success') }}',
                icon: 'success',
                timer: 3000, // El mensaje desaparecerá automáticamente después de 3 segundos
                showConfirmButton: false,
            });
        @endif

        // Confirma la eliminación con SweetAlert2
        document.querySelectorAll('.delete-form').forEach(form => {
            form.addEventListener('submit', function(event) {
                event.preventDefault();  // Prevenir que el formulario se envíe inmediatamente

                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "¡Este dispensador será eliminado permanentemente!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#ff85a2',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí, eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.submit();  // Enviar el formulario si el usuario confirma
                    }
                });
            });
        });
    </script>
@endpush
