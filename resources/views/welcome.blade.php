@extends('layouts.welcome.navbar-layout')

@section('title', 'CITASESCORTS')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center mb-4">
            <div class="text-white">
                Acompañantes en:
            </div>
            <button class="btn" style="background-color: #000; color: #dc3545; border: 2px solid #dc3545; border-radius: 50px;">
                Cambiar a vista de Mapa
            </button>
        </div>
        <div class="row">
            <div class="col-6 d-flex justify-content-start mb-3 position-relative">
                <select id="paisSelect" class="form-select text-white no-outline" style="background-color: #000; border: none; border-bottom: 2px solid #dc3545; appearance: none;">
                    <option selected disabled>País</option>
                    <option value="1">Opción 1</option>
                    <option value="2">Opción 2</option>
                    <option value="3">Opción 3</option>
                </select>
                <button class="btn position-absolute" style="right: 10px; top: 0; bottom: 0; margin: auto; background-color: transparent; color: #dc3545;" onclick="document.getElementById('paisSelect').click()">
                    <i class="fas fa-chevron-down"></i>
                </button>
            </div>
            <div class="col-6 d-flex justify-content-end mb-3 position-relative">
                <select id="departamentoSelect" class="form-select text-white no-outline" style="background-color: #000; border: none; border-bottom: 2px solid #dc3545; appearance: none;">
                    <option selected disabled>Departamento</option>
                    <option value="1">Opción 1</option>
                    <option value="2">Opción 2</option>
                    <option value="3">Opción 3</option>
                </select>
                <button class="btn position-absolute" style="right: 10px; top: 0; bottom: 0; margin: auto; background-color: transparent; color: #dc3545;" onclick="document.getElementById('departamentoSelect').click()">
                    <i class="fas fa-chevron-down"></i>
                </button>
            </div>
        </div>

        <!-- Section for Historias de las modelos -->
        <div class="col-12 d-flex flex-column justify-content-start align-items-start mt-3">
            <div class="text-uppercase" style="color: #dc3545; font-weight: bold;">
                Historias de las modelos
            </div>
            <div class="mt-1 mb-4" style="width: 100%; height: 2px; background-color: #dc3545;"></div>
        </div>

        <div class="col-12">
            <div class="overlay-container" style="overflow-x: auto; white-space: nowrap; border-bottom: 2px solid #dc3545; padding-bottom: 10px;">
                @for ($i = 0; $i < 18; $i++)
                    <div class="d-inline-block image-wrapper" style="width: 120px; height: 120px; border-radius: 50%; overflow: hidden; border: 2px solid #dc3545; margin-right: 10px;">
                        <img src="{{ asset('images/historias.webp') }}" alt="Avatar" data-id="{{ $i }}" class="clickable-image" style="width: 110%; height: 110%; object-fit: cover; transition: transform 0.3s ease-in-out;" onclick="showModal('{{ asset('images/modelo1.png') }}')">
                    </div>
                @endfor
            </div>
        </div>
        
        <!-- Modal with slider -->
<div id="imageModal" class="modal" style="display: none;">
    <div class="modal-content" style="max-width: 500px; padding: 20px; border-radius: 10px; background-color: #000;">
        <button class="close-button" style="position: absolute; top: 10px; right: 10px; background: transparent; border: none; color: #fff; font-size: 24px;" onclick="closeModal()"><i class="fas fa-times"></i></button>
        <div class="glider-contain">
            <div class="glider">
                <div class="glider-slide">
                    <div class="slide-header">
                        <div class="slide-avatar">
                            <img src="{{ asset('images/historias.webp') }}" alt="Avatar" class="avatar">
                        </div>
                        <div class="slide-info">
                            <div class="slide-name">Dana</div>
                            <div class="slide-date">2/8/2024</div>
                        </div>
                    </div>
                    <img src="{{ asset('images/modelo1.png') }}" alt="Modelo 1" class="slide-image">
                    <div class="slide-heart">
                        <i class="far fa-heart" onclick="toggleHeart(this)"></i>
                        <span class="heart-counter">0</span>
                    </div>
                </div>
                <div class="glider-slide">
                    <div class="slide-header">
                        <div class="slide-avatar">
                            <img src="{{ asset('images/historias.webp') }}" alt="Avatar" class="avatar">
                        </div>
                        <div class="slide-info">
                            <div class="slide-name">Dana</div>
                            <div class="slide-date">2/8/2024</div>
                        </div>
                    </div>
                    <img src="{{ asset('images/historias.webp') }}" alt="Modelo 2" class="slide-image">
                    <div class="slide-heart">
                        <i class="far fa-heart" onclick="toggleHeart(this)"></i>
                        <span class="heart-counter">0</span>
                    </div>
                </div>
                <div class="glider-slide">
                    <div class="slide-header">
                        <div class="slide-avatar">
                            <img src="{{ asset('images/historias.webp') }}" alt="Avatar" class="avatar">
                        </div>
                        <div class="slide-info">
                            <div class="slide-name">Dana</div>
                            <div class="slide-date">2/8/2024</div>
                        </div>
                    </div>
                    <img src="{{ asset('images/slider2.png') }}" alt="Modelo 3" class="slide-image">
                    <div class="slide-heart">
                        <i class="far fa-heart" onclick="toggleHeart(this)"></i>
                        <span class="heart-counter">0</span>
                    </div>
                </div>
            </div>
            <button aria-label="Previous" class="glider-prev">‹</button>
            <button aria-label="Next" class="glider-next">›</button>
            <div class="glider-dots"></div>
        </div>
    </div>
</div>
        
        <!-- Section with text, horizontal line, and icons -->
        <div class="col-12 d-flex align-items-center mt-4">
            <div class="text-white me-3" style="font-weight: bold;">
                Conoce nuestra selección de modelos:
            </div>
            <div style="flex-grow: 1; height: 2px; background-color: #dc3545; margin: 0 15px;"></div>
            <div class="d-flex">
                <i class="fas fa-th-large me-3" style="color: #dc3545; font-size: 24px;"></i>
                <i class="fas fa-list" style="color: #dc3545; font-size: 24px;"></i>
            </div>
        </div>

        <div class="col-12 mt-4">
            <div class="row">
                @for ($i = 0; $i < 12; $i++)
    <div class="col-md-3 mb-4">
        <a href="{{ route('details-models') }}" style="text-decoration: none; color: inherit;">
            <div class="card" style="border: 4px solid #dc3545; border-radius: 15px; background-color: #000; color: #fff; position: relative; overflow: hidden;">
                <img src="{{ asset('images/modelo1.png') }}" class="card-img-top" alt="Model Image" style="border-top-left-radius: 15px; border-top-right-radius: 15px; transform: scale(1.1);">
                <div class="verified-badge" style="position: absolute; top: 10px; left: -20px; background-color: #ffff00; color: #dc3545; padding: 15px 20px; border-radius: 0 0 15px 0; font-size: 18px; font-weight: bold; transform: rotate(-45deg);">Verificado</div>
                <div class="vip-badge" style="position: absolute; top: 0; right: 0; border-radius: 15px; background-color: #dc3545; color: #fff; padding: 10px 20px; border-radius: 0 15px 0 15px; font-size: 18px; font-weight: bold;">VIP</div>
                <div class="card-body p-0">
                    <!-- Empty card body to ensure overlay sits correctly -->
                </div>
                <div class="overlay" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(255, 255, 255, 0.7); border-top: 4px solid #dc3545; border-radius: 0 0 15px 15px; padding: 10px; display: none; display: flex; align-items: center; justify-content: space-between;">
                    <span style="color: #dc3545; font-weight: bold; font-size: 1.2rem;">Diani</span>
                    <i class="fas fa-venus" style="color: #ff69b4; font-size: 1.5rem;"></i>
                </div>
            </div>
        </a>
    </div>
@endfor
            </div>
        </div>
    <!-- Section for visitor count -->
    <div class="col-12 d-flex align-items-center mt-4">
        <button id="visitorButton" class="btn" style="background-color: #000; color: #ffffff; border: 2px solid #dc3545; border-radius: 0; margin-right: 10px;">
            Número de Visitantes
        </button>
        <div id="visitorCount" class="d-flex align-items-center justify-content-center" style="background-color: #000; color: #ffffff; border: 2px solid #dc3545; width: 100px; height: 50px; border-radius: 0; font-size: 1.2rem; font-weight: bold;">
            0
                </div>
            </div>
    </div>
</div>

<!-- Modal de términos y condiciones -->
<div id="termsModal" class="modal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.7); z-index: 9999; justify-content: center; align-items: center;">
    <div style="background-color: #000; color: #fff; padding: 20px; border-radius: 10px; max-width: 1000px; width: 90%; position: relative; display: flex;">
        <div style="flex: 1; overflow: hidden; border-radius: 10px 0 0 10px;">
            <img src="{{ asset('images/footer-welcome.png') }}" alt="Imagen" style="width: 100%; height: 100%; object-fit: cover; opacity: 28%">
        </div>
        <div style="flex: 1.5; padding: 20px;">
            <h3 style="text-align: center; color: #dc3545;">SOLO ADULTOS!</h3>
            <p style="font-size: 16px;">
                Sólo se debe acceder a este sitio web por personas que tengan al 
                menos dieciocho (18) años de edad y el mayoría de edad en su 
                jurisdicción. Al acceder a este sitio web, usted nos declara que no eres menor 
                de edad. Al acceder a cualquier parte de este sitio web más allá 
                de esta ventana emergente, usted acepta nuestros Términos y 
                condiciones. Cualquier uso no autorizado de este sitio web puede 
                violar la ley aplicable.
                <br><br>
                CitasEscorts tiene una política de tolerancia cero hacia la trata de personas, prostitución y cualquier otra conducta ilegal.
Cooperamos con las fuerzas del orden, conforme al proceso apropiado, como una citación, en la investigación de actividades criminales. 
La actividad que viole nuestra política de tolerancia cero puede resultar en una remisión a la aplicación de la ley. No tengo intención de hacerlo ni lo haré. Utilizar este sitio en violación de las políticas de CitasEscorts o de cualquier ley federal, estatal o local, y acepto denunciar las infracciones a las autoridades correspondientes.
                <br><br>
                También acepto denunciar sospechas de explotación de menores y/o trata de personas a las autoridades correspondientes.
                <br>
                Al igual que acepto las cookies del sitio web.
            </p>
            <div style="margin-top: 20px;">
                <input type="checkbox" id="acceptTermsCheckbox" style="margin-right: 10px;">
                <label for="acceptTermsCheckbox">
                    He leído y acepto los términos y condiciones aquí listados y en los 
                    <a href="#" style="color: #dc3545; text-decoration: underline;">Términos y Condiciones de Uso</a>.
                </label>
            </div>
            <div style="display: flex; justify-content: center; align-items: center; margin-top: 20px;">
                <button id="enterButton" class="btn" style="background-color: #dc3545; color: #fff; border-radius: 50px; padding: 10px 20px;">
                    Ingresar a la web
                </button>
            </div>
            <div style="text-align: center; margin-top: 10px;">
                <a href="#" style="color: #dc3545; text-decoration: underline;">Leer términos y condiciones</a>
            </div>
        </div>
    </div>
</div>


<!-- Inline CSS for removing outline -->
<style>
    select:focus {
        outline: none !important;
        box-shadow: none !important;
        border-color: transparent !important;
    }

    .overlay-container::-webkit-scrollbar {
        height: 8px;
    }
    .overlay-container::-webkit-scrollbar-thumb {
        background-color: #dc3545;
        border-radius: 10px;
    }
    .overlay-container {
        scrollbar-color: #dc3545 transparent;
        scrollbar-width: thin;
    }

    .card:hover .overlay {
        display: flex;
    }

    /* Estilo para la imagen redonda en el slider */
    .clickable-image {
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    /* Animación al pasar el mouse */
    .clickable-image:hover {
        transform: scale(1.1); /* Aumenta el tamaño de la imagen al pasar el mouse */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Agrega una sombra alrededor de la imagen */
    }
    .modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        z-index: 9999;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .modal-content {
        background-color: #000;
        color: #fff;
        padding: 20px;
        border-radius: 10px;
        max-width: 80%;
        width: 600px;
        position: relative;
    }
    
    .glider {
        position: relative;
        max-width: 100%;
        margin: auto;
    }
    
    .glider-slide {
        position: relative;
        padding: 20px;
    }
    
    .slide-header {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }
    
    .slide-avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        overflow: hidden;
        margin-right: 10px;
    }
    
    .slide-avatar .avatar {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .slide-info {
        color: #fff;
    }
    
    .slide-name {
        font-weight: bold;
    }
    
    .slide-date {
        font-size: 0.9em;
    }
    
    .slide-image {
        width: 100%;
        border-radius: 10px;
        object-fit: cover;
    }
    
    .slide-heart {
        position: absolute;
        bottom: 10px;
        right: 10px;
        display: flex;
        align-items: center;
        color: #fff;
    }
    
    .slide-heart i {
        font-size: 24px;
        cursor: pointer;
        margin-right: 5px;
    }
    
    .slide-heart .heart-counter {
        font-size: 14px;
    }
    
    .glider-prev, .glider-next {
        position: absolute;
        top: 50%;
        width: 40px;
        height: 40px;
        background-color: #dc3545;
        color: #fff;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        transform: translateY(-50%);
        font-size: 24px;
    }
    
    .glider-prev {
        left: 10px;
    }
    
    .glider-next {
        right: 10px;
    }
    
    .glider-dots {
        text-align: center;
        margin-top: 10px;
    }
    
    .glider-dots button {
        background-color: #dc3545;
        border: none;
        border-radius: 50%;
        width: 10px;
        height: 10px;
        margin: 0 2px;
    }
    
    .glider-dots .active {
        background-color: #fff;
    }
    
    .close-button {
        position: absolute;
        top: 10px;
        right: 10px;
        background: none;
        border: none;
        color: #fff;
        font-size: 24px;
        cursor: pointer;
        padding: 0;
        line-height: 1;
    }

</style>

<!-- Glider.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>

<script>
    function showModal(imageSrc) {
        const modal = document.getElementById('imageModal');
        modal.style.display = 'flex';
        
        // Initialize Glider.js
        new Glider(document.querySelector('.glider'), {
            slidesToShow: 1,
            slidesToScroll: 1,
            draggable: true,
            dots: '.glider-dots',
            arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            }
        });
    }

    function closeModal() {
        document.getElementById('imageModal').style.display = 'none';
    }

    function toggleHeart(heartIcon) {
        const counter = heartIcon.nextElementSibling;
        if (heartIcon.classList.contains('far')) {
            heartIcon.classList.remove('far');
            heartIcon.classList.add('fas');
            heartIcon.style.color = 'red';
            counter.textContent = parseInt(counter.textContent) + 1;
        } else {
            heartIcon.classList.remove('fas');
            heartIcon.classList.add('far');
            heartIcon.style.color = '';
            counter.textContent = parseInt(counter.textContent) - 1;
        }
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('termsModal');
        const enterButton = document.getElementById('enterButton');
        const acceptTermsCheckbox = document.getElementById('acceptTermsCheckbox');

        // Verifica si el modal ya ha sido mostrado usando localStorage
        const hasSeenModal = localStorage.getItem('hasSeenModal');

        // Mostrar el modal solo si no se ha mostrado antes
        if (!hasSeenModal) {
            modal.style.display = 'flex';
        }

        // Manejar el cierre del modal
        function closeModal() {
            modal.style.display = 'none';
            localStorage.setItem('hasSeenModal', 'true'); // Marca el modal como visto
        }

        // Cerrar el modal cuando se haga clic en el botón "Ingresar a la web" y si el checkbox está marcado
        enterButton.addEventListener('click', function() {
            if (acceptTermsCheckbox.checked) {
                closeModal();
            } else {
                alert('Por favor, acepte los términos y condiciones.');
            }
        });

        // Opcional: también puedes cerrar el modal cuando se marque el checkbox
        acceptTermsCheckbox.addEventListener('change', function() {
            if (acceptTermsCheckbox.checked) {
                // Hacer algo si es necesario cuando el checkbox es marcado
            }
        });
    });
</script>

<script src="{{ mix('js/app.js') }}"></script>

@endsection
