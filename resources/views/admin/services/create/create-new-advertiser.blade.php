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

    /* Línea de tiempo */
    .timeline {
        position: relative;
        margin: 20px 0;
        padding: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 80%; /* Ajusta el ancho según tu diseño */
        margin: 20px auto; /* Centra horizontalmente */
    }

    .timeline::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateX(-50%);
        height: 2px;
        width: 100%;
        background-color: #ff1900;
        z-index: 1;
    }

    .timeline-step {
        position: relative;
        z-index: 2;
        text-align: center;
    }

    .timeline-step::before {
        content: '';
        display: block;
        width: 20px;
        height: 20px;
        background-color: #fff; /* Fondo blanco */
        border: 2px solid #ff1900; /* Borde rojo */
        border-radius: 50%;
        margin: 0 auto;
        margin-bottom: 5px;
    }

    .timeline-step.completed::before {
        background-color: #ff1900; /* Fondo rojo para pasos completados */
        border-color: #ff1900; /* Borde rojo para pasos completados */
    }

    .timeline-step span {
        color: #fff; /* Texto blanco */
        display: block;
    }

    .form-container {
        background-color: #fff; /* Fondo blanco para el formulario */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        margin: 20px auto; /* Centra el cuadro horizontalmente */
        width: 90%; /* Ajusta el ancho según tu diseño */
        height: 485px; /* Altura para mostrar el overflow */
        overflow-y: auto; /* Agrega desplazamiento vertical */
        position: relative; /* Necesario para el overflow del select */
        display: flex; /* Permite la colocación de elementos lado a lado */
        justify-content: space-between; /* Distribuye el espacio de forma uniforme */
    }

    .info-box {
        background-color: #fff; /* Fondo blanco */
        color: #000; /* Texto negro */
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.2); /* Sombra */
        padding: 20px;
        width: 250px; /* Ancho del cuadro */
        margin-bottom: 20px; /* Espacio inferior */
        transition: box-shadow 0.3s ease; /* Agrega una transición para el box-shadow */
    }

    .info-box.active {
        box-shadow: 0 0 5px 5px #ff1900; /* Box shadow rojo cuando está seleccionado */
    }

    .form-actions {
        display: flex;
        justify-content: flex-end;
        gap: 10px; /* Espacio entre los botones */
        margin-top: 20px; /* Espacio superior */
    }

    .cancel-btn {
        background-color: #040404; /* Fondo negro */
        color: #fff; /* Texto blanco */
        border: 2px solid #fff; /* Borde blanco */
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s, color 0.3s, border-color 0.3s;
    }

    .cancel-btn:hover {
        background-color: #fff; /* Fondo blanco al pasar el mouse */
        color: #ff1900; /* Texto rojo al pasar el mouse */
        border-color: #ff1900; /* Borde rojo al pasar el mouse */
    }

    .continue-btn {
        background-color: #000; /* Fondo negro */
        color: #ff1900; /* Texto rojo */
        border: 2px solid #ff1900; /* Borde rojo */
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s, color 0.3s;
    }

    .continue-btn:hover {
        background-color: #ff1900; /* Fondo rojo al pasar el mouse */
        color: #fff; /* Texto blanco al pasar el mouse */
    }

    .select-container {
        margin-top: 20px;
        width: 250px; /* Ajusta el ancho del select */
        position: relative; /* Necesario para el overflow del select */
    }

    .select-container select {
        width: 100%; /* El select tomará el 100% del contenedor */
        padding: 10px;
        border-radius: 5px;
        border: 2px solid #ff1900; /* Borde rojo */
        background-color: #fff; /* Fondo blanco */
        color: #000; /* Texto negro */
        box-sizing: border-box; /* Asegura que el padding no afecte el ancho total */
        position: relative; /* Asegura que el select no se desborde */
        z-index: 2; /* Asegura que el select esté por encima del contenedor */
    }

    /* Asegura que el desplegable del select no se salga del cuadro blanco */
    .select-container select::-ms-expand {
        display: none; /* Oculta la flecha en el select para navegadores antiguos */
    }

    /* Estilos para el contenedor de los cuadros de información */
    .info-boxes {
        display: flex;
        justify-content: space-between; /* Alinea los cuadros lado a lado */
        gap: 20px; /* Espacio entre los cuadros */
    }

    .info-box.multi-persona {
    margin-left: 485px; /* Esto empuja el cuadro hacia la derecha */
}

    /* Estilos para la imagen */
    .image-container {
        width: 250px; /* Ajusta el ancho de la imagen */
        height: 250px; /* Ajusta la altura de la imagen */
        margin-bottom: 20px; /* Espacio inferior */
        border-radius: 10px; /* Borde redondeado */
        overflow: hidden; /* Ocultar el overflow para que la imagen no se salga */
    }

    .image-container img {
        width: 100%; /* La imagen tomará el 100% del ancho del contenedor */
        height: auto; /* La altura se ajustará automáticamente para mantener la proporción */
        display: block; /* Evita que la imagen tenga un espacio en blanco debajo */
    }

    .button-container {
        display: flex;
        justify-content: flex-end; /* Alinea los botones a la derecha */
        gap: 10px; /* Espacio entre los botones */
        margin-top: 20px; /* Espacio superior */
    }

    .form-actions {
        display: none;
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
<span class="text-white ms-2" style="padding-top: 10px; margin-bottom: 20px;">Crear un nuevo anuncio</span><br>

<div class="fixed-btn">
    <button class="create-ad-btn">Crear un nuevo anuncio</button>
</div>

<!-- Línea de tiempo -->
<div class="timeline" id="timeline">
    @for ($i = 1; $i <= 13; $i++)
        <div class="timeline-step" data-step="{{ $i }}">
            <span>Paso {{ $i }}</span>
        </div>
    @endfor
</div>

<!-- Contenedor blanco del formulario -->
<div class="form-container">
    <form id="multiStepForm">
        <!-- Paso 1 -->
        <div class="form-step" data-step="1">
            <h2>Seleccionar el tipo de anuncio</h2> <!-- Título agregado -->

            <!-- Contenedor para los cuadros de información -->
            <div class="info-boxes">
                <div class="info-box" onclick="toggleActive(this)">
                    <h3>Persona Soltera</h3>
                    <p>Fotos animadas</p>
                    <p>Mejorado</p>
                    <p>Verificado</p>
                    <p>Opción VIP</p>
                    <div class="image-container">
                        <img style="opacity: 50%" src="{{ asset('images/silueta.jpg') }}" alt="Silueta">
                    </div>
                </div>

                <div class="info-box multi-persona" onclick="toggleActive(this)">
                    <h3>Multi Persona</h3>
                    <p>Más de 1 persona en el anuncio</p>
                    <p>Fotos animadas</p>
                    <p>Mejorado aún más</p>
                    <div class="image-container">
                        <img style="opacity: 50%" src="{{ asset('images/silueta2.jpg') }}" alt="Otra imagen">
                    </div>
                </div>
            </div>

            <!-- Contenedor para la imagen -->
            

            <!-- Select debajo del cuadro -->
            <div class="select-container">
                <select>
                    <option>Agregar una nueva persona</option>
                    <option>Vanessa</option>
                    <option>Celia</option>
                </select>
            </div>

            <!-- Contenedor para los botones -->
            <div class="button-container">
                <button type="button" class="cancel-btn" onclick="history.back();">Cancelar</button>
                <button type="button" class="continue-btn" onclick="nextStep();">Continuar</button>
            </div>
        </div>
        <!-- Otros pasos aquí -->
    </form>
</div>

<script>
    let currentStep = 1;

    function showStep(step) {
        // Oculta todos los pasos
        document.querySelectorAll('.form-step').forEach(step => {
            step.style.display = 'none';
        });

        // Muestra el paso actual
        document.querySelector('.form-step[data-step="' + step + '"]').style.display = 'block';

        // Marca los pasos completados en la línea de tiempo
        document.querySelectorAll('.timeline-step').forEach((timelineStep, index) => {
            if (index < step) {
                timelineStep.classList.add('completed');
            } else {
                timelineStep.classList.remove('completed');
            }
        });
    }

    function nextStep() {
        currentStep++;
        if (currentStep > 13) {
            currentStep = 13; // Limita al paso 13
        }
        showStep(currentStep);
    }

    function toggleActive(element) {
        // Remueve la clase 'active' de todos los elementos
        document.querySelectorAll('.info-box').forEach(box => {
            box.classList.remove('active');
        });

        // Agrega la clase 'active' al elemento actual
        element.classList.add('active');
    }

    // Muestra el primer paso al cargar la página
    showStep(currentStep);
</script>

@endsection