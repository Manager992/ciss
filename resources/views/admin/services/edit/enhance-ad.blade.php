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

.container {
    width: 100%;
    height: 68vh;
    background-color: white;
    display: flex;
    overflow-x: hidden;
    overflow-y: auto;
    padding: 20px;
  }
  
  .content {
    width: 90%;
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
  }
  
  .box {
    width: calc(33.33% - 20px);
    height: 120px;
    background-color: #000000;
    color: #ddd;
    padding: 10px;
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    text-align: center;
    margin: 0 auto;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.8); /* Sombra suave */
    transition: box-shadow 0.3s ease; /* Transición para el efecto hover */
  }
  
  .box:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Sombra más intensa al pasar el mouse */
  }
  
  .box-aligned {
    width: calc(66.66% - 20px);
    display: flex;
    flex-direction: column;
    gap: 10px;
    align-items: flex-end;
  }
  
  .box-item {
    width: 100%;
    height: 60px; /* Ajusta la altura del cuadro */
    background-color: #000000;
    color: #ddd;
    padding: 10px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    text-align: left;
    box-sizing: border-box;
    margin-bottom: 20px; /* Añadir margen inferior para separar los cuadros */
  }
  
  .box-right {
    width: calc(66.66% - 20px); /* Ajusta el ancho para alinearlo */
    display: flex;
    flex-direction: column;
    gap: 10px;
    align-items: flex-end;
  }
  
  .gold-placement {
    height: 180px; /* Mantén la altura para "GOLD PLACEMENT" */
    display: flex;
    flex-direction: column;
    justify-content: center; /* Centra el contenido verticalmente */
  }
  
  .featured-entertainer {
    height: 180px; /* Ajusta la altura del cuadro "WHAT'S NEW FEATURED ENTERTAINER" */
    display: flex;
    flex-direction: column;
    justify-content: space-between; /* Ajusta el contenido para que el botón se mantenga dentro del cuadro */
    margin-top: -25px; /* Ajusta el margen superior para subir el cuadro */
    margin-left: 20px; /* Mueve el cuadro un poco más a la derecha */
  }
  
  .title {
    font-size: 1em;
    font-weight: bold;
  }
  
  .text {
    font-size: 0.8em;
    font-weight: 300;
    margin: 10px 0;
  }
  
  .price {
    font-size: 1em;
    font-weight: 400;
  }
  
  .button {
    background-color: #ff0000;
    color: #222;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1em;
    font-weight: 500;
    align-self: center; /* Centra el botón dentro del cuadro */
    transition: background-color 0.3s ease, color 0.3s ease; /* Transición suave para hover */
  }
  
  .button:hover {
    color: #fff; /* Cambia el color del texto a blanco */
  }
    
  .adjust-left {
    margin-left: -10px; /* Ajusta este valor para mover el precio más a la izquierda */
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
<span class="text-white ms-2" style="padding-top: 10px; margin-bottom: 20px;">Mejorar Anuncio</span><br>
<div class="fixed-btn">
    <button class="create-ad-btn">Crear un nuevo anuncio</button>
</div>
<div class="container">
    <div class="content">
      <div class="box">
        <div class="title">CHICA DEL DÍA</div>
        <div class="price">Desde $20.00</div>
        <button class="button">VER DETALLES</button>
      </div>
      <div class="box">
        <div class="title">COLOCACIÓN DE MOSAICO</div>
        <div class="price">Desde $51.00</div>
        <button class="button">VER DETALLES</button>
      </div>
      <div class="box">
        <div class="title">COLOCACIÓN DE RUBÍES</div>
        <div class="price">Desde $40.00</div>
        <button class="button">VER DETALLES</button>
      </div>
      <div class="box gold-placement">
        <div class="title">COLOCACIÓN DE ORO</div>
        <div class="text">
          Oro, el color de la realeza. ¿Quieres la MEJOR ubicación en uno de nuestras
          ¿Categorías?
        </div>
        <div class="price">Desde $12.00</div>
        <button class="button">VER DETALLES</button>
      </div>
      <div class="box-aligned">
        <div class="box-item">
          <div class="title">COLOCACIÓN DE ORO YA DISPONIBLE</div>
          <div class="price adjust-left">Desde $15.00</div>
          <button class="button">VER DETALLES</button>
        </div>
        <div class="box-item">
          <div class="title">COLOCACIÓN DE PLATA</div>
          <div class="price adjust-left">Desde $10.00</div>
          <button class="button">VER DETALLES</button>
        </div>
        <div class="box-item">
          <div class="title">BANNER DE CATEGORÍA</div>
          <div class="price adjust-left">Desde $15.00</div>
          <button class="button">VER DETALLES</button>
        </div>
      </div>
      <div class="box featured-entertainer">
        <div class="title">NOVEDADES ANIMADOR DESTACADO</div>
        <div class="text">
          Apunta a las estrellas. ¿Quieres que todo el mundo conozca la NUEVA ESTRELLA en la ciudad?
          Página de novedades - Onl
        </div>
        <div class="price">Desde $60.00</div>
        <button class="button">VER DETALLES</button>
      </div>
      <div class="box-right">
        <div class="box-item">
          <div class="title">NOVEDADES BANNER SUPERIOR</div>
          <div class="price">Desde $5.00</div>
          <button class="button">VER DETALLES</button>
        </div>
        <div class="box-item">
          <div class="title">NOVEDADES BANNER INFERIOR</div>
          <div class="price">Desde $5.00</div>
          <button class="button">VER DETALLES</button>
        </div>
      </div>
    </div>
  </div>
@endsection