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
    <div class="content-subheader">Modelo en Alabama</div>
    <div class="content-email">ever.diestra@icloud.com</div>

    <!-- Slider de imágenes -->
    <div class="glider-contain mt-4">
        <div class="glider">
            <div class="glider-slide">
                <img src="{{ asset('images/modelo1.png') }}" alt="VIP Silvia" class="content-image">
            </div>
            <div class="glider-slide">
                <img src="{{ asset('images/modelo1.png') }}" alt="VIP Silvia" class="content-image">
            </div>
            <div class="glider-slide">
                <img src="{{ asset('images/modelo1.png') }}" alt="VIP Silvia" class="content-image">
            </div>
        </div>
        <div id="dots" class="glider-dots"></div>
        <button aria-label="Previous" class="glider-prev">&lt;</button>
        <button aria-label="Next" class="glider-next">&gt;</button>
    </div>

</div>

@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Glider(document.querySelector('.glider'), {
            slidesToShow: 1,
            slidesToScroll: 1,
            draggable: true,
            dots: '#dots',
            arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            }
        });
    });
</script>
@endsection
