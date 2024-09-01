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

    .fixed-btn {
        position: fixed;
        right: 50px; /* Mueve el botón 50px hacia la izquierda */
        top: 80px; /* Sube el botón 40px hacia arriba */
    }

    /* Cuadro blanco centrado */
    .info-box {
        background-color: #fff; /* Fondo blanco */
        color: #000; /* Texto negro */
        padding: 20px;
        border-radius: 10px;
        width: 80%; /* Ancho del cuadro */
        margin: 20px auto; /* Centra el cuadro horizontalmente */
        box-shadow: 0 4px 8px rgba(0,0,0,0.2); /* Sombra */
        text-align: center; /* Alineación del texto al centro */
        position: relative; /* Para el posicionamiento absoluto de los botones */
    }

    /* Contenedor para los botones */
    .buttons-container {
        display: flex;
        justify-content: flex-end; /* Alineación de los botones a la derecha */
        gap: 10px; /* Espacio entre los botones */
        position: absolute; /* Posiciona el contenedor en relación al cuadro blanco */
        bottom: -70px; /* Mueve el contenedor hacia abajo desde el borde del cuadro blanco */
        right: 20px; /* Ajusta la distancia desde la parte derecha del cuadro blanco */
    }

    /* Estilo para el botón de cancelar */
    .cancel-btn {
        background-color: #000; /* Fondo negro */
        color: #fff; /* Texto blanco */
        border: 2px solid #fff; /* Borde blanco */
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
    }

    .cancel-btn:hover {
        background-color: #000; /* Fondo negro al pasar el mouse */
        color: #ff1900; /* Texto rojo al pasar el mouse */
        border: 2px solid #ff1900; /* Borde rojo al pasar el mouse */
    }

    /* Estilo para el botón de continuar */
    .continue-btn {
        background-color: #000; /* Fondo negro */
        color: #ff1900; /* Texto rojo */
        border: 2px solid #ff1900; /* Borde rojo */
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
    }

    .continue-btn:hover {
        background-color: #ff1900; /* Fondo rojo al pasar el mouse */
        color: #fff; /* Texto blanco al pasar el mouse */
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
<span class="text-white ms-2" style="padding-top: 10px; margin-bottom: 20px;">Advertencia de Anuncio</span><br>

<!-- Botón para crear un nuevo anuncio -->
<div class="fixed-btn">
    <button class="create-ad-btn">Crear un nuevo anuncio</button>
</div>

<!-- Cuadro blanco centrado -->
<div class="info-box">
    <p>Prepare una identificación, licencia de manejar o pasaporte válido y al menos una foto para su anuncio. Si esta foto no muestra su rostro, cargue también una "Foto alterna" para nosotros.</p>

    <!-- Contenedor para los botones de cancelar y continuar -->
    <div class="buttons-container">
        <button class="cancel-btn" onclick="history.back();">Cancelar</button>
        <button class="continue-btn" onclick="window.location.href='/admin/services/create/create-new-advertiser';">Continuar</button>
    </div>
</div>

@endsection
