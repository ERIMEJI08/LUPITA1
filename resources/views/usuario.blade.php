<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel del Usuario - Dispensador de Alimentos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="text-center">
            <h1>Bienvenido, {{ Auth::user()->name }}</h1>
            <p>Este es el panel de control de tu dispensador de alimentos para mascotas.</p>
        </div>
        <div class="row mt-4">
            <!-- Sección de Información de Mascotas -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Información de Mascotas</h5>
                        <p class="card-text"> mascotas.</p>
                        <a href="{{ route('animales.index') }}" class="btn btn-primary">Ver Mascotas</a>
                    </div>
                </div>
            </div>
            <!-- Sección de Alimentos -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Alimentos Disponibles</h5>
                        <p class="card-text">alimentos.</p>
                        <a href="{{ route('alimentos.index') }}" class="btn btn-primary">Ver Alimentos</a>
                    </div>
                </div>
            </div>
            <!-- Sección de Configuración del Dispensador -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Configuración del Dispensador</h5>
                        <p class="card-text">dispensador</p>
                        <a href="{{ route('dispensadores.index') }}" class="btn btn-primary">Configurar Dispensador</a>
                    </div>
                </div>

    </div>
</body>
</html>
