@extends('layouts.auth.auth-layout')

@section('title', 'Registrar nueva cuenta')

@section('content')
<style>
    .bg-dark-custom {
        background-color: #000 !important;
    }
    .input-group-custom {
        position: relative;
    }
    .input-group-custom .form-control {
        background-color: #000;
        color: #fff;
        border: 1px solid #dc3545;
        padding-right: 3rem; /* Espacio para el icono */
        padding: 1rem 1.5rem; /* Ajusta el relleno interno */
        border-radius: 50px;
        font-size: 1.25rem; /* Aumenta el tamaño de la fuente */
        height: calc(2.75rem + 2px); /* Aumenta la altura del input */
    }
    .input-group-custom .form-control::placeholder {
        color: #fff;
        font-size: 1.25rem; /* Aumenta el tamaño del placeholder */
    }
    .input-group-custom .form-control:focus {
        background-color: #000;
        color: #fff;
        border-color: #dc3545;
        box-shadow: none;
    }
    .input-group-custom .input-group-text {
        position: absolute;
        right: 1rem;
        top: 50%;
        transform: translateY(-50%);
        background-color: transparent;
        border: none;
        color: #dc3545;
        cursor: pointer;
        font-size: 1.5rem; /* Aumenta el tamaño del icono */
    }
    .btn-custom {
        background-color: #000;
        border-color: #dc3545;
        color: #dc3545;
        transition: background-color 0.3s, color 0.3s;
        padding: 1rem 1.5rem;
        font-size: 1.25rem;
    }
    .btn-custom:hover {
        background-color: #dc3545;
        color: #fff;
    }
    .terms {
        margin-top: 20px;
    }
    .terms a {
        color: #dc3545;
        text-decoration: none;
    }
    .terms a:hover {
        text-decoration: underline;
    }
    .image-container {
        position: relative;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }
    .image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        pointer-events: none;
    }
    .login-link {
        color: #fff;
        text-decoration: none;
    }
    .login-link:hover {
        color: #dc3545;
    }
</style>

<div class="container-fluid">
    <div class="row min-vh-100">
        <!-- Formulario -->
        <div class="col-md-6 d-flex align-items-center justify-content-center bg-dark-custom text-white">
            <div class="w-75">
                <h2 class="mb-5 text-white" style="margin-top: -10rem;">Crear una nueva cuenta</h2>
                <form action="/register" method="POST">
                    @csrf
                    <div class="mb-4 input-group-custom">
                        <input type="email" name="email" class="form-control email-placeholder" placeholder="Dirección de correo electrónico *" required>
                        <span class="input-group-text">
                            <i class="fas fa-envelope"></i>
                        </span>
                    </div>
                    <div class="mb-4 input-group-custom">
                        <input type="password" name="password" class="form-control password-placeholder" placeholder="Contraseña" required>
                        <span class="input-group-text toggle-password">
                            <i class="fas fa-eye"></i>
                        </span>
                    </div>
                    <div class="mb-4 input-group-custom">
                        <input type="password" name="password_confirmation" class="form-control password-placeholder" placeholder="Confirmar contraseña" required>
                        <span class="input-group-text toggle-password">
                            <i class="fas fa-eye"></i>
                        </span>
                    </div>
                    <div class="mb-4 d-flex align-items-center">
                        <input type="checkbox" id="accept_terms" name="accept_terms" required>
                        <label for="accept_terms" class="text-white ms-2">
                            Al registrarse, usted acepta nuestros 
                            <a href="/terms" class="text-danger">Términos y condiciones</a> 
                            & 
                            <a href="/privacy-policy" class="text-danger">Política de privacidad</a>.
                        </label>
                    </div>
                    <button type="submit" class="btn btn-custom rounded-pill w-100 py-2">Crear cuenta</button>
                    <p class="text-white mt-2">Ya tienes cuenta? <a href="/auth/login" class="login-link">Inicia sesión</a></p>
                </form>
            </div>
        </div>
        <!-- Imagen -->
        <div class="col-md-6 p-0">
            <div class="image-container">
                <img src="{{ asset('images/register_login.jpg') }}" alt="Imagen de registro">
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.toggle-password').forEach(function(element) {
        element.addEventListener('click', function() {
            let input = this.previousElementSibling;
            if (input.type === 'password') {
                input.type = 'text';
                this.innerHTML = '<i class="fas fa-eye-slash"></i>';
            } else {
                input.type = 'password';
                this.innerHTML = '<i class="fas fa-eye"></i>';
            }
        });
    });
</script>
@endsection
