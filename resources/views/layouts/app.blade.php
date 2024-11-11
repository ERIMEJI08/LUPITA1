<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Lupita1</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9f9f9;
            font-family: 'Arial', sans-serif;
        }
        .navbar {
            background-color: #6c757d;
        }
        .navbar a {
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #5a6268;
            border-radius: 5px;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .btn-custom {
            background-color: #6c757d;
            color: white;
            border-radius: 5px;
            padding: 10px 20px;
        }
        .btn-custom:hover {
            background-color: #5a6268;
        }
        footer {
            background-color: #6c757d;
            color: #fff;
            padding: 20px;
            text-align: center;
            margin-top: 30px;
            border-radius: 0 0 10px 10px;
        }
        .carousel-item img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <!-- Menú de navegación -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">Proyecto Lupita</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{ url('alimentos') }}" class="nav-link">🍔 Alimentos</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('animales') }}" class="nav-link">🐶 Animales</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('dispensadores') }}" class="nav-link">🐱 Dispensadores</a>
                    </li>
                </ul>
            </div>
        </nav>


        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://th.bing.com/th/id/R.66e173a08329b1995412b0e2ea94cd43?rik=%2fZez%2fzyGG7tuRw&riu=http%3a%2f%2fmundoanimaltic.files.wordpress.com%2f2011%2f03%2fanimales-domesticos.jpg&ehk=F%2fqygkTdeqIKKR%2bFFtX%2fWAoHY%2b85ZvoSGP9bzpazh%2fM%3d&risl=&pid=ImgRaw&r=0" class="d-block w-100" alt="Imagen 1">
                </div>
                <div class="carousel-item">
                    <img src="https://th.bing.com/th/id/R.7bea46c921171faee86b7b661aaaaed9?rik=V2kcuXLiidZmMQ&pid=ImgRaw&r=0" class="d-block w-100" alt="Imagen 2">
                </div>
                <div class="carousel-item">
                    <img src="https://http2.mlstatic.com/D_NQ_NP_2X_734098-MCO31006495620_062019-F.jpg" class="d-block w-100" alt="Imagen 3">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>

        <!-- Contenido principal -->
        <div class="mt-4">
            @yield('content')
        </div>


    </div>

    <footer>
        <p>&copy; 2024 Proyecto Lupita - Todos los derechos reservados</p>
    </footer>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel</title>
        <!-- Agregar Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

<!-- Incluir SweetAlert 2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
