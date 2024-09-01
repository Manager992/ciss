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
<span class="text-white ms-2" style="padding-top: 10px; margin-bottom: 20px;">Detalles del anuncio</span><br>
<div class="fixed-btn">
    <button class="create-ad-btn">Crear un nuevo anuncio</button>
</div>
<div id="details-service"></div>
@endsection