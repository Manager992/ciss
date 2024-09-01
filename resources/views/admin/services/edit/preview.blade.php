@extends('layouts.admin.admin-layout')

@section('content')

<style>
    /* Cuadro rojo con texto blanco */
    .welcome-box {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #ff1900;
        color: #fff;
        padding: 10px 40px;
        border-radius: 5px;
        width: 50%;
        margin: 0 auto;
        margin-top: 20px;
        position: absolute;
        top: 20px;
        left: 50%;
        transform: translateX(-50%);
    }

    .welcome-box i {
        margin-left: 20px;
    }

    /* Estilo para el texto debajo del cuadro rojo */
    .ad-services-text {
        color: #fff;
        margin-top: 85px;
        margin-left: 50px;
        font-size: 18px;
        margin-bottom: 20px;
    }

    .create-ad-btn {
        background-color: #000;
        color: #ff1900;
        border: 2px solid #ff1900;
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
    }

    .create-ad-btn:hover {
        background-color: #ff1900;
        color: #fff;
    }

    .fixed-btn {
        position: fixed;
        right: 50px;
        top: 80px;
    }

    /* Cuadro negro que contiene todo el contenido */
    .content-box {
        background-color: #000; /* Fondo negro */
        color: #fff; /* Texto blanco */
        border-radius: 5px;
        padding: 20px;
        margin-top: 20px;
        width: 90%; /* Ajusta el tamaño según sea necesario */
        max-height: 500px; /* Altura máxima del cuadro */
        overflow-y: auto; /* Activar desplazamiento vertical */
        margin-left: auto;
        margin-right: auto;
    }

    /* Estilos específicos para el contenido dentro del cuadro */
    .content-header {
        font-size: 24px;
        font-weight: bold;
        color: #ff5f60;
        margin-bottom: 10px;
    }

    .content-subheader {
        font-size: 18px;
        margin-bottom: 20px;
    }

    .content-email {
        text-align: right;
        color: #ff5f60;
        font-size: 16px;
    }

    /* Estilos para el carrusel de imágenes */
    .carousel-item img {
        max-width: 100%;
        height: 300px; /* Ajusta la altura de la imagen según tus necesidades */
        object-fit: cover; /* Recorta la imagen para llenar el contenedor */
        display: block; /* Asegura que la imagen sea un bloque para centrar */
        margin-left: auto;
        margin-right: auto;
    }

    .carousel-inner {
        background-color: #000; /* Fondo negro del carrusel */
        border-radius: 5px;
        overflow: hidden; /* Asegura que no se vean bordes fuera del contenedor */
    }

    /* Estilos para los indicadores del carrusel */
    .carousel-indicators {
        bottom: -30px; /* Mueve los indicadores hacia abajo */
    }

    .carousel-indicators [data-bs-target] {
        background-color: #ff1900; /* Puntos rojos */
    }

    .carousel-indicators .active {
        background-color: #dc3545; /* Puntos activos en rojo más oscuro */
    }

    /* Estilos para la sección de descripción */
    .description-section {
        margin-top: 20px;
        min-height: 300px;
    }

    .about-me-box,
    .breadcrumbs-box,
    .details-box {
        background-color: black;
        border: 2px solid #dc3545;
        border-radius: 10px;
        padding: 20px;
        color: white;
        margin-top: 20px;
    }

    .about-me-box h3,
    .details-box h3 {
        color: #dc3545;
        font-size: 1.5rem;
    }

    .about-me-box p,
    .details-box p {
        font-size: 1rem;
    }

    .breadcrumb {
        background: none;
        padding: 0;
        margin-bottom: 0;
    }

    .breadcrumb-item a {
        color: #ffffff;
    }

    .breadcrumb-item a:hover {
        color: #dc3545;
    }

    .breadcrumb-separator {
        color: #dc3545;
    }
</style>

<!-- Cuadro rojo con texto blanco -->
<div class="welcome-box">
    <span>Bienvenido Ever</span> 
    <span>Balance: $0.00</span>
    <i class="fas fa-shopping-cart"></i>
</div>
<!-- Texto debajo del cuadro rojo -->
<div class="ad-services-text">
    Tus anuncios y servicios (4)
</div>
<a href="#" onclick="history.back();" class="text-white ms-5"><i class="fas fa-arrow-left"></i></a>
<span class="text-white ms-2" style="padding-top: 10px; margin-bottom: 20px;">Vista previa</span><br>

<!-- Botón fijo -->
<div class="fixed-btn">
    <button class="create-ad-btn">Crear un nuevo anuncio</button>
</div>

<!-- Cuadro negro que contiene todo el contenido -->
<div class="content-box">
    <div class="content-header">VIP SILVIA</div>
    <div class="content-subheader">Modelo in Alabama</div>
    <div class="content-email">ever.diestra@icloud.com</div>

    <!-- Carrusel de Bootstrap -->
    <div id="carouselExampleIndicators" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/modelo1.png') }}" alt="VIP Silvia">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/modelo1.png') }}" alt="VIP Silvia">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/modelo1.png') }}" alt="VIP Silvia">
            </div>
            <!-- Agrega más elementos de carrusel según sea necesario -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Sección de Descripción y Detalles -->
    <div class="description-section">
        <h2>Descripción:</h2>
        
        <!-- Cuadro "Acerca de mi" -->
        <div class="about-me-box">
            <h3>Acerca de mi</h3>
            <p>
                Hello Darling<br><br>
                Soy una hermosa morena que le gusta entrenar.<br><br>
            </p>
        </div>
        
        <!-- Nuevo Cuadro de Breadcrumbs -->
        <div class="breadcrumbs-box mt-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb custom-breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Detalles</a></li>
                    <li class="breadcrumb-separator">&gt;</li>
                    <li class="breadcrumb-item"><a href="#">Argentina</a></li>
                    <li class="breadcrumb-separator">&gt;</li>
                    <li class="breadcrumb-item"><a href="#">Buenos Aires</a></li>
                    <li class="breadcrumb-separator">&gt;</li>
                    <li class="breadcrumb-item active" aria-current="page">Dana</li>
                </ol>
            </nav>
        </div>
        
        <!-- Cuadro "Detalles" -->
        <div class="details-box">
            <h3>Detalles</h3>
            <p>
                Genero: <span style="color: #dc3545;">Femenino</span><br>
                Edad: <span style="color: #dc3545;">27</span><br>
                Color del cabello: <span style="color: #dc3545;">Negro</span><br>
                Color de los ojos: <span style="color: #dc3545;">Castaño</span><br>
                Estatura: <span style="color: #dc3545;">1.75m</span><br>
                Peso: <span style="color: #dc3545;">55kg</span><br>
                Nacionalidad: <span style="color: #dc3545;">Argentina</span><br>
                Idiomas: <span style="color: #dc3545;">Español, Inglés</span><br>
            </p>
        </div>
    </div>
</div>

@endsection

<!-- Scripts de Bootstrap y Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.2/js/bootstrap.min.js"></script>
