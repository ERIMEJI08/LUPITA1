@extends('layouts.app')

@section('content')
    <h1 style="text-align: center; color: #ff85a2;">Lista de Alimentos</h1>
    <a href="{{ route('alimentos.create') }}" style="background-color: #ff85a2; color: white; padding: 10px 20px; border-radius: 5px; font-size: 16px; text-decoration: none; display: inline-block; margin-bottom: 20px;">
        🐾 Crear Alimento
    </a>
    <table style="width: 100%; border-collapse: collapse; margin: 0 auto; border: 2px solid #ff85a2; border-radius: 10px; background-color: #fce4ec;">
        <thead>
            <tr style="background-color: #ff85a2; color: white; text-align: left; padding: 10px;">
                <th style="padding: 10px;">Nombre</th>
                <th style="padding: 10px;">Precio</th>
                <th style="padding: 10px;">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alimentos as $alimento)
                <tr style="border-bottom: 1px solid #ff85a2;">
                    <td style="padding: 10px;">{{ $alimento->nombre }}</td>
                    <td style="padding: 10px;">{{ $alimento->precio }}</td>
                    <td style="padding: 10px;">
                        <a href="{{ route('alimentos.edit', $alimento->id) }}" style="color: #ff85a2; text-decoration: none; font-weight: bold;">
                            ✏️ Editar
                        </a>
                        <form action="{{ route('alimentos.destroy', $alimento->id) }}" method="POST" style="display: inline-block; margin-left: 10px;" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background-color: #ff85a2; color: white; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;">
                                🗑️ Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Paginación con diseño bonito -->
    <div class="d-flex justify-content-center mt-4">
        {{ $alimentos->links('pagination.custom') }}
    </div>

@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>

        document.querySelectorAll('.delete-form').forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                Swal.fire({
                    title: '¿Estás seguro?',
                    text: 'No podrás revertir esta acción.',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#ff85a2',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí, eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
@endpush
