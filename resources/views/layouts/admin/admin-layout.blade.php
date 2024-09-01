<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Si usas CDN para Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <!-- Agrega tus estilos personalizados aquí -->
    <style>
        .navbar-custom {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #000;
            padding: 1rem 2rem;
        }
        .navbar-brand {
            font-family: 'Arial', sans-serif;
            font-size: 1.5rem;
            font-weight: bold;
        }
        .navbar-brand .citas {
            color: #dc3545; /* Citas en rojo */
        }
        .navbar-brand .escorts {
            color: #fff; /* Escorts en blanco */
        }

        .menu-options a {
            color: #ffc107;
            margin-right: 1rem;
            text-decoration: none;
            font-size: 1.1rem; /* Aumentar tamaño del texto */
        }
        .menu-options a:hover {
            color: #fff;
        }
        .search-container {
            position: relative;
            display: flex;
            align-items: center;
        }
        .search-input {
            display: flex;
            align-items: center;
            background-color: #000; /* Fondo negro */
            border: 1px solid #dc3545; /* Borde rojo */
            border-radius: 0.3rem; /* Bordes redondeados */
            padding: 0.1rem;
            width: 200px;
        }
        .search-input input {
            border: none;
            outline: none;
            background: transparent;
            color: #fff; /* Texto blanco */
            width: calc(100% - 2rem);
            padding: 0.2rem;
        }
        .search-input button {
            background: transparent;
            border: none;
            color: #fff; /* Color del ícono */
            cursor: pointer;
            margin-left: 0.5rem;
        }
        .search-input button:hover {
            color: #dc3545; /* Color del ícono al pasar el ratón */
        }
        .divider {
            height: 2rem;
            border-left: 2px solid #dc3545;
            margin: 0 1rem;
        }
        .btn-publish {
            color: #dc3545 !important; /* PUBLICAR ANUNCIO en rojo */
            text-decoration: none;
            font-weight: bold;
            font-size: 1.1rem; /* Aumentar tamaño del texto */
        }
        .btn-publish:hover {
            color: #fff;
        }
        .btn-search {
            color: #fff;
            display: flex;
            align-items: center;
            margin-right: 1rem;
        }
        .btn-search i {
            margin-left: 0.5rem;
        }
        /* Estilos para el pie de página */
        .footer {
            background-color: #000;
            color: #fff;
            padding: 2rem;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            position: relative;
        }
        .footer .footer-section {
            margin-right: 2rem;
        }
        .footer .footer-section h4 {
            color: #dc3545;
            font-weight: bold;
            font-size: 1.5rem; /* Tamaño del título aumentado */
            margin-bottom: 1rem;
        }
        .footer .footer-section p {
            margin: 0.5rem 0;
            font-size: 1.2rem; /* Tamaño del texto aumentado */
        }
        .footer .footer-section a {
            color: #fff;
            text-decoration: none;
            display: block;
            margin: 0.5rem 0;
            font-size: 1.2rem; /* Tamaño del texto aumentado */
        }
        .footer .footer-section a:hover {
            color: #dc3545;
        }
        .footer .footer-image {
            width: 600px; /* Aumenta el tamaño según sea necesario */
            height: auto; /* Ajusta la altura automáticamente */
            opacity: 50%; /* Agrega opacidad a la imagen */
        }
        .footer .social-section h4 {
            color: #dc3545;
            font-size: 1.5rem; /* Tamaño del título aumentado */
        }
        .footer .social-section a {
            color: #fff;
            font-size: 1.2rem; /* Tamaño del texto aumentado */
        }
        .back-to-top {
    position: absolute;
    bottom: 1rem;
    right: 1rem;
    background-color: #dc3545; /* Fondo rojo */
    color: #fff; /* Texto blanco */
    padding: 0.5rem 1rem;
    border: none;
    border-radius: 0.3rem;
    cursor: pointer;
    display: flex;
    align-items: center;
    font-size: 1rem;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.back-to-top:hover {
    background-color: #c82333; /* Fondo rojo más oscuro al pasar el ratón */
}

.back-to-top i {
    margin-right: 0.5rem; /* Espacio entre el ícono y el texto */
}
    </style>
</head>
<body class="bg-black text-white">
    <header class="navbar-custom">
        <div class="navbar-brand">
            <a href="/" style="text-decoration: none; color: inherit;">
                <span class="citas" style="font-size: 25px">CITAS</span><span class="escorts" style="font-size: 25px">ESCORTS</span>
            </a>
        </div>
        <div class="menu-options d-flex align-items-center">
            <button style="
    background-color: #000; /* Fondo negro */
    border: 2px solid #dc3545; /* Borde rojo */
    color: #dc3545; /* Texto rojo */
    border-radius: 50px; /* Bordes redondeados */
    padding: 0.5rem 1.5rem; /* Espaciado interno */
    margin-right: 1rem; /* Margen derecho para mover a la izquierda */
    transition: color 0.3s, border-color 0.3s; /* Transición suave */
" 
class="btn" onmouseover="this.style.color='#fff'; this.style.borderColor='#fff';" onmouseout="this.style.color='#dc3545'; this.style.borderColor='#dc3545';">
    ESCORTS
</button>

            
            <a href="#">VIP</a>
            <a href="#">PREMIUM</a>
            <a href="#">GOLD</a>
            <a href="#">SILVER</a>
            <div class="search-container">
                <div class="search-input" id="searchInput">
                    <input type="text" placeholder="Buscar...">
                    <button onclick="toggleSearch()"><i class="fas fa-search"></i></button>
                </div>
            </div>
            <div class="divider"></div>
            <a href="/auth/register" class="btn-publish">PUBLICAR ANUNCIO</a> <!-- PUBLICAR ANUNCIO en rojo -->
        </div>
    </header>
    @yield('content')

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-section">
            <h4>Legal</h4>
            <a href="#">Privacidad</a>
            <a href="#">Términos & Condiciones</a>
            <a href="#">Acerca de CitasEscorts/Ads</a>
            <a href="#">Quejas Fotográficas</a>
            <a href="#">Denunciar Tráfico</a>
            <a href="#">Ley Aplicable</a>
            <a href="#">CITASESCORTS Verificadas</a>
            <a href="#">Reportar Abuso</a>
            <p style="margin-top: 1rem; font-size: 1.4rem; color: #fff; opacity: 50%">
                En Chile, anuncios de acompañantes, lolitas y escorts con perfiles verificados y una interfaz amigable, garantizando variedad y seguridad.
            </p>
            <p style="margin-top: 1rem; font-size: 1.4rem; color: #fff; opacity: 50%"">
                En Colombia, facilitamos los anuncios de prepagos, pasion y acompañantes en diversas ciudades, asegurando discreción y satisfacción. En
            </p>
            <p style="margin-top: 1rem; font-size: 1.4rem; color: #fff; opacity: 50%"">
                Ecuador, servicios anuncios de prepagos y escorts destacan por la calidad y atención personalizada para cenas o eventos. 
            </p>
            <p style="margin-top: 1rem; font-size: 1.4rem; color: #fff; opacity: 50%"">
                En Perú y argentina, nuestras anuncios de kines y kinesiologas brindan masajes y terapias de relajación con profesionales altamente especializadas para el bienestar del cliente.
            </p>
        </div>
        <div class="footer-section">
            <h4>Recursos</h4>
            <a href="#">Publicidad con CITASESCORTS.Com</a>
            <a href="#">Contáctanos</a>
            <h4>Social</h4>
            <a href="#">CitasEscorts en Twitter</a>
        </div>
        <div class="footer-image">
            <!-- Agrega la ruta a tu imagen aquí -->
            <img src="{{ asset('images/footer-welcome.png') }}" alt="Footer Image" style="width: 100%; height: auto; opacity: 0.8;">
        </div>
        <button class="back-to-top" onclick="scrollToTop()">
            <i class="fas fa-arrow-up"></i> Regresar arriba
        </button>
    </footer>

    <!-- Script para el botón "Regresar arriba" -->
    <script>
        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    </script>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>
</body>
</html>