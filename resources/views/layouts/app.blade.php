<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Herrepuestos - @yield('title')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilo general del sistema -->
    <style>
        body {
            background: #f0f0f0; /* Gris claro para uniformidad */
        }
        .navbar-custom {
            background: #343a40 !important; /* Gris oscuro profesional */
        }
        .navbar-brand {
            font-weight: bold;
            letter-spacing: 1px;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom shadow-sm">
    <div class="container">

        <a class="navbar-brand" href="{{ route('dashboard') }}">HERREPUESTOS</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

            @auth
                <a href="{{ route('logout') }}" class="btn btn-outline-light ms-2">
                    Cerrar sesión
                </a>
            @endauth

        </div>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
