@extends('layouts.admin.admin-layout')

@section('content')

<style>
    /* Cuadro rojo con texto blanco */
    .welcome-box {
        display: flex;
        align-items: center;
        justify-content: space-between; /* Espacio entre elementos */
        background-color: #ff1900; /* Fondo rojo */
        color: #fff; /* Texto blanco */
        padding: 10px 40px; /* Espacio interno */
        border-radius: 5px;
        width: 50%; /* Haz el cuadro más largo */
        margin: 0 auto; /* Centra el cuadro horizontalmente */
        margin-top: 20px; /* Ajusta la distancia desde la parte superior */
        position: absolute;
        top: 20px;
        left: 50%;
        transform: translateX(-50%); /* Centra el cuadro en el viewport */
    }

    .welcome-box i {
        margin-left: 20px; /* Espacio entre el texto y el icono */
    }

    /* Estilo para el texto debajo del cuadro rojo */
    .ad-services-text {
        color: #fff; /* Color del texto en blanco */
        margin-top: 85px; /* Reducimos el espacio desde el cuadro rojo */
        margin-left: 50px; /* Alineación hacia la izquierda */
        font-size: 18px; /* Tamaño de fuente */
        margin-bottom: 20px; /* Agregamos un salto de línea debajo del texto */
    }

    .create-ad-btn {
        background-color: #000; /* Fondo negro */
        color: #ff1900; /* Texto rojo */
        border: 2px solid #ff1900; /* Borde rojo */
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
    }

    .create-ad-btn:hover {
        background-color: #ff1900; /* Fondo rojo al pasar el mouse */
        color: #fff; /* Texto blanco al pasar el mouse */
    }

    /* Contenedor gris oscuro */
    .container-dark {
        background-color: #333; /* Fondo gris oscuro */
        padding: 20px;
        border-radius: 10px;
        margin: 20px auto;
        width: 80%;
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        position: relative; /* Posicionamiento relativo para el botón */
    }

    /* Card */
    .card {
        background-color: #000; /* Fondo negro */
        color: #fff; /* Texto blanco */
        border: 2px solid #000000; /* Borde negro */
        border-radius: 10px;
        padding: 15px;
        margin: 10px;
        flex: 1; /* Flexibilidad para ocupar espacio en el contenedor */
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .card-title {
        background-color: #ff1900; /* Fondo rojo */
        color: #fff; /* Texto blanco */
        padding: 10px;
        border-radius: 5px;
        font-size: 18px;
        width: 100%;
        text-align: center;
        margin-bottom: 10px;
    }

    /* Contenedor para las tarjetas */
    .cards-container {
        display: flex;
        justify-content: space-between; /* Espacio entre tarjetas */
    }

    /* Estilo para el enlace de retroceso */
    .back-link {
        color: #fff; /* Texto blanco */
        margin-left: 20px;
    }

    .back-link i {
        font-size: 18px; /* Tamaño del icono */
    }

    /* Estilo adicional para el contenido dentro de las tarjetas */
    .card-content {
        margin-top: 10px;
        text-align: left; /* Alinea el texto a la izquierda */
    }

    .card-content div {
        margin-bottom: 10px;
        display: flex;
        align-items: center;
    }

    .card-content .checklist {
        color: #ff1900; /* Color rojo para el checklist */
        margin-right: 10px; /* Espacio entre el checklist y el texto */
    }

    .attention {
        color: #ff1900; /* Texto en rojo */
    }

    .bio {
        margin-top: 20px;
    }

    /* Estilo para el botón en la tarjeta */
    .card-button {
        background-color: #000; /* Fondo negro */
        color: #ff1900; /* Texto rojo */
        border: 2px solid #ff1900; /* Borde rojo */
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        text-align: center;
        margin-top: 20px; /* Espacio arriba del botón */
        display: inline-block;
        transition: background-color 0.3s, color 0.3s; /* Transición suave para los cambios de color */
    }

    .card-button:hover {
        background-color: #ff1900; /* Fondo rojo al pasar el mouse */
        color: #fff; /* Texto blanco al pasar el mouse */
    }

    /* Estilo para el texto de los estándares de publicación */
    .standards-text {
        color: #ffffff; /* Texto en blanco */
        margin-top: 10px; /* Espacio superior */
        display: flex;
        align-items: center; /* Alinea el texto y el asterisco verticalmente */
    }

    .standards-text span {
        margin-right: 10px; /* Espacio entre el asterisco y el texto */
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

<!-- Enlace para retroceso y texto -->
<a href="#" onclick="history.back();" class="back-link"><i class="fas fa-arrow-left"></i></a>
<span class="text-white ms-2" style="padding-top: 10px; margin-bottom: 20px;">Crear nuevo anuncio</span>

<!-- Contenedor gris oscuro con tarjetas -->
<div class="container-dark">
    <div class="cards-container">
        <!-- Tarjeta Anuncio Regular -->
        <div class="card">
            <div class="card-title">Anuncio Regular</div>
            <div class="card-content">
                <div><i class="fas fa-check checklist"></i> El anuncio estará en línea después de:</div>
                <div class="attention"><i class="fas fa-check checklist"></i> 24 Horario de Atención *</div>
                <div><i class="fas fa-check checklist"></i> 8 fotos</div>
                <div><i class="fas fa-check checklist"></i> Opción VIP</div>
                <div><i class="fas fa-check checklist"></i> Mejora tu anuncio</div>
                <div class="bio"><i class="fas fa-check checklist"></i> Bio</div>
                <!-- Botón debajo de Bio -->
                <button class="card-button" onclick="window.location.href='/admin/services/create/create-ad-window';">Crear un anuncio Regular</button>
                <!-- Texto de estándares de publicación -->
                <div class="standards-text">
                    <span>*</span>
                    Si el contenido del anuncio cumple con nuestros estándares de publicación
                </div>
            </div>
        </div>
        <!-- Tarjeta Anuncio Rápido -->
        <div class="card">
            <div class="card-title">Anuncio Rápido</div>
            <div class="card-content">
                <div><i class="fas fa-check checklist"></i> El anuncio estará en línea después de:</div>
                <div class="attention"><i class="fas fa-check checklist"></i> 1.5 Horario de Atención *</div>
                <div><i class="fas fa-check checklist"></i> 8 fotos</div>
                <div><i class="fas fa-check checklist"></i> Opción VIP</div>
                <div><i class="fas fa-check checklist"></i> Mejora tu anuncio</div>
                <div class="bio"><i class="fas fa-check checklist"></i> Bio</div>
                <!-- Botón debajo del contenido -->
                <button class="card-button" onclick="window.location.href='/admin/services/create/create-ad-window';">Crear un anuncio Rápido</button>
                                <!-- Texto de estándares de publicación -->
                                <div class="standards-text">
                                    <span>*</span>
                                    Si el contenido del anuncio cumple con nuestros estándares de publicación
                            </div>
            </div>
        </div>
    </div>
</div>

@endsection
