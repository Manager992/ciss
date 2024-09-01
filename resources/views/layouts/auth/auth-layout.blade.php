<!-- layouts/register-layout.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'CITASESCORTS')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome CSS (si estás usando íconos) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <style>
        .bg-dark-custom {
            background-color: #000 !important;
        }
        .logo {
            color: #fff; /* Texto blanco */
            font-weight: bold; /* Fuente en negrita */
            margin-left: 20px; /* Espacio corto a la izquierda */
            text-decoration: none; /* Quitar subrayado del enlace */
        }
        .logo span {
            color: #dc3545; /* Texto rojo para "CITAS" */
            font-weight: bold; /* Fuente en negrita */
        }
        .logo span.dot {
            color: #dc3545; /* Punto rojo */
        }
        .nav-link {
            color: #fff; /* Texto blanco */
            margin-right: 20px; /* Espacio entre elementos del menú */
            transition: color 0.2s ease; /* Transición para el efecto hover */
        }
        .nav-link:hover {
            color: #dc3545; /* Color rojo al pasar el mouse */
        }
        .logo:hover {
            color: #fff; /* No cambia de color al pasar el mouse */
            text-decoration: none; /* No cambia de estilo al pasar el mouse */
        }
        .bg-dark-custom {
        background-color: #1a1a1a !important; /* Fondo negro más oscuro */
    }
    .footer-nav-link {
    color: #fff; /* Texto blanco */
    margin-right: 20px; /* Espacio entre elementos del menú */
    transition: color 0.2s ease; /* Transición para el efecto hover */
    text-decoration: none; /* Quitar subrayado del enlace */
}
    .footer-nav-link:hover {
        color: #dc3545; /* Color rojo al pasar el mouse */
        text-decoration: none; /* Quitar subrayado del enlace al pasar el mouse */
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark-custom">
        <div class="container-fluid">
            <a class="navbar-brand logo" href="/"> <!-- Enlace al inicio de la página -->
                <span>CITAS</span>ESCORDS<span class="dot">.</span>COM
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/precios">Precios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/preguntas-frecuentes">Preguntas Frecuentes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="border-bottom border-danger"></div>
    @yield('content')

    <footer class="bg-dark-custom py-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 text-md-start">
                    <a href="/" class="logo text-white" style="font-size: 24px;">
                        <span>CITAS</span>ESCORDS<span class="dot">.</span>COM
                    </a>
                </div>
                <div class="col-md-6 text-md-end">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a href="/contact" class="footer-nav-link">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="/privacy-policy" class="footer-nav-link">Privacy</a>
                        </li>
                        <li class="nav-item">
                            <a href="/terms" class="footer-nav-link">Terms & Conditions</a>
                        </li>
                        <li class="nav-item">
                            <a href="/advertiser-agreement" class="footer-nav-link">Advertiser Agreement</a>
                        </li>
                        <li class="nav-item">
                            <a href="/faq" class="footer-nav-link">F.A.Q.</a>
                        </li>
                        <li class="nav-item">
                            <a href="/about" class="footer-nav-link">About CITASESCORTS</a>
                        </li>
                        <li class="nav-item">
                            <a href="/dmca-complaints" class="footer-nav-link">DMCA Complaints</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>