@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Animales</h1>


    <div class="mb-3">
        <a href="{{ route('animales.create') }}" class="btn btn-pink">
            🐶 Crear Nuevo Animal
        </a>
    </div>


    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Especie</th>
                <th>Edad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($animales as $animal)
                <tr>
                    <td>{{ $animal->nombre }}</td>
                    <td>{{ $animal->especie }}</td>
                    <td>{{ $animal->edad }}</td>
                    <td>
                        <a href="{{ route('animales.edit', $animal->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('animales.destroy', $animal->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Paginación  -->
    <div class="d-flex justify-content-center">
        {{ $animales->links('pagination.custom') }}
    </div>
</div>
@endsection
