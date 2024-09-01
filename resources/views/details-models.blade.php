@extends('layouts.welcome.navbar-layout')

@section('title', 'Detalle de Modelos')

@section('content')
<div class="container mt-3 d-flex justify-content-between">
    <div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb custom-breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#" style="color: #dc3545;">Detalles</a>
                </li>
                <li class="breadcrumb-separator">&gt;</li>
                <li class="breadcrumb-item">
                    <a href="#" style="color: #ffffff;">Argentina</a>
                </li>
                <li class="breadcrumb-separator">&gt;</li>
                <li class="breadcrumb-item">
                    <a href="#" style="color: #ffffff;">Buenos Aires</a>
                </li>
                <li class="breadcrumb-separator">&gt;</li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #ffffff;">Dana</li>
            </ol>
        </nav>

        <div class="custom-vip-section d-flex align-items-center mt-3" style="margin-left: -150px;">
            <i class="fas fa-star" style="color: white; font-size: 1.5rem; margin-right: 20px;"></i>
            <span class="ms-2" style="color: white; font-size: 1.2rem; margin-right: 30px;">VIP Dana</span>
            <i class="fas fa-check" style="color: #dc3545; font-size: 2rem; margin-right: 20px;"></i>
            <span class="ms-2" style="color: #dc3545; font-size: 1.2rem;">Modelo Verificada</span>
        </div>
    </div>

    <div class="custom-phone-section d-flex align-items-center mt-3" style="margin-right: -150px;">
        <div class="d-flex flex-column align-items-end">
            <div class="d-flex align-items-center mb-2">
                <i class="fas fa-phone-alt" style="color: white; font-size: 1.5rem; margin-right: 10px;"></i>
                <span class="ms-2" style="color: white; font-size: 1.2rem;">24586658489</span>
                <i class="fab fa-whatsapp" style="color: white; font-size: 1.5rem; margin-left: 10px;"></i>
            </div>
            <div class="d-flex align-items-center mb-2">
                <i class="fas fa-envelope" style="color: white; font-size: 1.5rem; margin-right: 10px;"></i>
                <span class="ms-2" style="color: white; font-size: 1.2rem;">Ejemplo@gmail.com</span>
                <span class="ms-2" style="color: #28a745; font-size: 1.2rem; display: flex; align-items: center; margin-left: 15px;">
                    <i class="fas fa-circle" style="font-size: 0.8rem; margin-right: 5px;"></i> Activo
                </span>
            </div>
        </div>
    </div>
</div>

<!-- Glider Slider -->
<div class="container mt-5">
    <div class="glider-contain">
        <div class="glider">
            <!-- Imágenes -->
            <div class="glider-slide">
                <div class="card-img">
                    <img src="{{ asset('images/slide.png') }}" alt="Imagen 1">
                </div>
            </div>
            <div class="glider-slide">
                <div class="card-img">
                    <img src="{{ asset('images/slider2.png') }}" alt="Imagen 2">
                </div>
            </div>
            <div class="glider-slide">
                <div class="card-img">
                    <img src="{{ asset('images/slider3.png') }}" alt="Imagen 3">
                </div>
            </div>
            <div class="glider-slide">
                <div class="card-img">
                    <img src="{{ asset('images/slide.png') }}" alt="Imagen 4">
                </div>
            </div>
            <div class="glider-slide">
                <div class="card-img">
                    <img src="{{ asset('images/slider2.png') }}" alt="Imagen 5">
                </div>
            </div>
            <div class="glider-slide">
                <div class="card-img">
                    <img src="{{ asset('images/slider3.png') }}" alt="Imagen 6">
                </div>
            </div>
            <div class="glider-slide">
                <div class="card-img">
                    <img src="{{ asset('images/slide.png') }}" alt="Imagen 7">
                </div>
            </div>
            <div class="glider-slide">
                <div class="card-img">
                    <img src="{{ asset('images/slider2.png') }}" alt="Imagen 8">
                </div>
            </div>
            <div class="glider-slide">
                <div class="card-img">
                    <img src="{{ asset('images/slider3.png') }}" alt="Imagen 9">
                </div>
            </div>
        </div>
        <!-- Puntos de navegación (dots) -->
        <div id="dots" class="glider-dots"></div>
        <!-- Agregar botones de navegación -->
        <button aria-label="Previous" class="glider-prev">&lt;</button>
        <button aria-label="Next" class="glider-next">&gt;</button>
    </div>
</div>

<!-- Sección de Descripción y Detalles -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <div class="description-section" style="min-height: 300px;">
                <h2>Descripción:</h2>
                
                <!-- Cuadro "Acerca de mi" -->
                <div class="about-me-box" style="background-color: black; border: 2px solid #dc3545; border-radius: 10px; padding: 20px; color: white;">
                    <h3 style="color: #dc3545; font-size: 1.5rem;">Acerca de mi</h3>
                    <p style="font-size: 1rem;">Hello Darling
                        <br><br>
                        Soy una hermosa morena que le gusta entrenar.
                        <br><br>
                    </p>
                </div>
                
                <!-- Nuevo Cuadro de Breadcrumbs -->
                <div class="breadcrumbs-box mt-4" style="background-color: black; border: 2px solid #dc3545; border-radius: 10px; padding: 20px;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb custom-breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#" style="color: #dc3545;">Detalles</a>
                            </li>
                            <li class="breadcrumb-separator">&gt;</li>
                            <li class="breadcrumb-item">
                                <a href="#" style="color: #ffffff;">Argentina</a>
                            </li>
                            <li class="breadcrumb-separator">&gt;</li>
                            <li class="breadcrumb-item">
                                <a href="#" style="color: #ffffff;">Buenos Aires</a>
                            </li>
                            <li class="breadcrumb-separator">&gt;</li>
                            <li class="breadcrumb-item active" aria-current="page" style="color: #ffffff;">Dana</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex align-items-start">
            <!-- Cuadro "Detalles" -->
        <div class="details-box" style="background-color: black; border: 2px solid #dc3545; border-radius: 10px; padding: 20px; color: white; margin-top: 60px;">
        <h3 style="color: #dc3545; font-size: 1.5rem;">Detalles</h3>
        <p style="font-size: 1rem;">
            Genero: <span style="color: #dc3545;">Femenino</span><br>
            Edad:<span style="color: #dc3545;"> 27</span><br>
            Color del cabello: <span style="color: #dc3545;"> Negro</span><br>
            Color de ojos: <span style="color: #dc3545;">Marrones</span><br>
            Altura: <span style="color: #dc3545;">1.68</span><br>
            Gustos: <span style="color: #dc3545;">Hombres</span><br>

            <br><br>


            </p>
            </div>
        </div>
    </div>
</div>


<!-- Glider.js JS -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Glider(document.querySelector('.glider'), {
            slidesToShow: 3, // Muestra 3 imágenes a la vez
            slidesToScroll: 3, // Desplaza 3 imágenes por vez
            dots: '#dots',
            draggable: true,
            arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            },
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
</script>

<style>
    .glider {
        position: relative;
        overflow: hidden;
        width: 100%;
        height: 680px;
    }

    .glider-slide {
        margin-right: 20px; /* Espacio entre las tarjetas */
        width: 400px; /* Ancho del contenedor de la imagen */
        height: 100%; /* Ajusta la altura del contenedor de la imagen */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .card-img {
        width: 100%;
        height: 100%;
        overflow: hidden;
        border-radius: 8px; /* Opcional: agrega bordes redondeados */
    }

    .card-img img {
        width: 100%;
        height: auto;
        object-fit: cover; /* Ajusta la imagen para que cubra el contenedor sin recortarla */
    }

    .glider-prev,
    .glider-next {
        position: absolute;
        top: 50%;
        width: 40px;
        height: 40px;
        background: rgba(0, 0, 0, 0.5);
        color: white;
        border: none;
        border-radius: 50%;
        font-size: 20px;
        transform: translateY(-50%);
        cursor: pointer;
        z-index: 10;
    }

    .glider-prev {
        left: -20px; /* Mueve el botón de "Previous" hacia la izquierda */
    }

    .glider-next {
        right: -20px; /* Mueve el botón de "Next" hacia la derecha */
    }

    .glider-dots {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .glider-dot {
        width: 10px;
        height: 10px;
        background: #ddd;
        border-radius: 50%;
        margin: 0 5px;
        cursor: pointer;
    }

    .glider-dot.active {
        background: #dc3545;
    }

    
</style>
@endsection
