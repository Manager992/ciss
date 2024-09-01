@extends('layouts.auth.auth-layout')

@section('title', 'Iniciar Sesión')

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
        padding-right: 3rem;
        padding: 1rem 1.5rem;
        border-radius: 50px;
        font-size: 1.25rem;
        height: calc(2.75rem + 2px);
    }
    .input-group-custom .form-control::placeholder {
        color: #fff;
        font-size: 1.25rem;
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
        font-size: 1.5rem;
    }
    .btn-custom {
        background-color: #000;
        border-color: #dc3545;
        color: #fff;
        transition: background-color 0.3s, color 0.3s;
        padding: 1rem 1.5rem;
        font-size: 1.25rem;
    }
    .forgot-password-link {
        color: #dc3545;
        text-decoration: none;
    }
    .forgot-password-link:hover {
        text-decoration: underline;
    }
    .btn-custom:hover {
        background-color: #dc3545;
        color: #fff;
    }
    .btn-secondary-custom {
        background-color: #000;
        border-color: #fff;
        color: #fff;
        transition: background-color 0.3s, color 0.3s;
        padding: 1rem 1.5rem;
        font-size: 1.25rem;
    }
    .btn-secondary-custom:hover {
        background-color: #fff;
        color: #000;
        border-color: #000;
    }
    .modal-loader {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1050;
        background-color: rgba(0, 0, 0, 0.75);
        color: #fff;
        padding: 1rem;
        border-radius: 10px;
        text-align: center;
    }
    .verification-modal {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1060;
        background-color: #fff;
        color: #000;
        padding: 2rem;
        border-radius: 15px;
        width: 580px;
        text-align: center;
    }
    .verification-modal h3 {
        font-size: 1.5rem;
        margin-bottom: 1rem;
    }
    .verification-modal p {
        font-size: 1rem;
        margin-bottom: 1rem;
        color: #333;
    }
    .verification-modal .highlight {
        font-weight: bold;
        color: #000;
    }
    .verification-modal .qr-code {
        margin: 1rem 0;
    }
    .verification-modal .secret-key {
        background-color: #f8f9fa;
        border: 1px solid #ddd;
        padding: 0.75rem;
        border-radius: 5px;
        display: inline-block;
        margin-bottom: 1rem;
        font-family: monospace;
        color: #333;
    }
    .verification-modal .copy-icon {
        cursor: pointer;
        margin-left: 10px;
        font-size: 1.25rem;
        color: #dc3545;
    }
    .verification-modal .btn-next {
        background-color: #000;
        border-color: #dc3545;
        color: #dc3545;
        padding: 0.75rem 1.5rem;
        font-size: 1rem;
        border-radius: 50px;
        transition: background-color 0.3s, color 0.3s;
    }
    .verification-modal .btn-next:hover {
        background-color: #dc3545;
        color: #fff;
    }

    .image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .verification-modal-2 {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1060;
    background-color: #fff;
    color: #000;
    padding: 2rem;
    border-radius: 15px;
    width: 580px;
    text-align: center;
}

.verification-modal-2 h3 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
}

.verification-modal-2 p {
    font-size: 1rem;
    margin-bottom: 1rem;
    color: #333;
}

.verification-modal-2 input[type="text"] {
    width: 100%;
    height: 40px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 18px;
}

.verification-modal-2 .btn-custom {
    background-color: #dc3545;
    color: #fff;
    border: 1px solid #dc3545;
    border-radius: 50px;
    padding: 10px 20px;
    font-size: 18px;
}

.verification-modal-2 .btn-custom:hover {
    background-color: #fff;
    color: #dc3545;
    border-color: #dc3545;
}
</style>

<div class="container-fluid">
    <div class="row min-vh-100">
        <!-- Formulario -->
        <div class="col-md-6 d-flex align-items-center justify-content-center bg-dark-custom text-white">
            <div class="w-75">
                <h2 class="mb-5 text-white" style="margin-top: -10rem;">Iniciar Sesión en la cuenta</h2>
                <form id="login-form" action="/login" method="POST">
                    @csrf
                    <div class="mb-4 input-group-custom">
                        <input type="email" name="email" class="form-control" placeholder="Dirección de correo electrónico" required>
                        <span class="input-group-text">
                            <i class="fas fa-envelope"></i>
                        </span>
                    </div>
                    <div class="mb-4 input-group-custom">
                        <input type="password" name="password" class="form-control" placeholder="Ingrese su contraseña" required>
                        <span class="input-group-text toggle-password">
                            <i class="fas fa-eye"></i>
                        </span>
                    </div>
                    <div class="mb-4 d-flex align-items-center justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                            <label class="form-check-label text-white" for="remember_me">Recuérdame</label>
                        </div>
                        <a href="/password/reset" class="forgot-password-link">¿Has olvidado tu contraseña?</a>
                    </div>
                    <button type="submit" class="btn btn-custom rounded-pill w-100 py-2 mb-3">INICIA SESIÓN EN MI CUENTA</button>
                    <button type="button" class="btn btn-secondary-custom rounded-pill w-100 py-2" onclick="window.location.href='/auth/register'">CREAR UNA NUEVA CUENTA</button>
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

<!-- Loader -->
<div class="modal-loader">
    <div class="spinner-border text-light" role="status">
        <span class="visually-hidden">Cargando...</span>
    </div>
</div>

<!-- Modal de Verificación -->
<div class="verification-modal">
    <h3>Verificación del dispositivo 1/3</h3>
    <p>La seguridad de su cuenta es importante para nosotros. Para mejorar la protección, ahora exigimos a todos los anunciantes que utilicen una aplicación de autenticación de dos factores.</p>
    <p>Para verificar el dispositivo, <span class="highlight">escanee el QR</span> o ingrese la <span class="highlight">clave secreta</span> en su aplicación de autenticación de Google:</p>
    <div class="qr-code">
        <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=Example" alt="Código QR">
    </div>
    <div class="secret-key">
        ORTWYZSJFASTSVKMGZAEU5DNO53WWPRRMFAWOVCXEU3DG3LLLMWA
        <i class="fas fa-copy copy-icon" onclick="copySecretKey()"></i>
    </div>
    <p>Si tiene algún problema, puede ponerse en contacto con el soporte.</p>
    <button type="button" class="btn btn-next">Próximo</button>
</div>

<!-- Modal de verificación del dispositivo 2/3 -->
<div class="verification-modal-2">
    <h3>Verificación del dispositivo 2/3</h3>
    <p>Introduzca un código de verificación de 6 digitos para CITASESCORTS desde su aplicación Google Authenticator:</p>
    <input type="text" id="verificationCode" style="width: 100%; height: 40px; padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 18px;" />
    <p>Si tiene problemas para recibir el Código, puede ponerse en contacto con el <a href="#" style="color: #dc3545; text-decoration: underline;">Soporte</a>.</p>
    <div style="display: flex; justify-content: space-between; margin-top: 20px;">
        <button id="backButton" class="btn btn-custom" style="background-color: #fff; color: #333; border: 1px solid #ccc; border-radius: 50px; padding: 10px 20px;">Atrás</button>
        <button id="verifyButton" class="btn btn-custom" style="background-color: #dc3545; color: #fff; border: 1px solid #dc3545; border-radius: 50px; padding: 10px 20px;">Verificar</button>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>

<script>
    // ...
    document.querySelector('.verification-modal-2 #verifyButton').addEventListener('click', function() {
      // Mostrar ventana emergente de SweetAlert
    Swal.fire({
        title: 'Verificación completada',
        text: '¡La verificación del dispositivo ha sido completada con éxito!',
        icon: 'success',
        confirmButtonText: 'Aceptar'
        });
    });
</script>

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

    document.getElementById('login-form').addEventListener('submit', function(event) {
        event.preventDefault(); // Evita el envío inmediato del formulario

        // Mostrar el loader
        document.querySelector('.modal-loader').style.display = 'block';

        // Esperar 2 segundos y luego mostrar la verificación del dispositivo
        setTimeout(function() {
            document.querySelector('.modal-loader').style.display = 'none';
            document.querySelector('.verification-modal').style.display = 'block';
        }, 2000);
    });

    function copySecretKey() {
        var secretKey = "ORTWYZSJFASTSVKMGZAEU5DNO53WWPRRMFAWOVCXEU3DG3LLLMWA";
        navigator.clipboard.writeText(secretKey).then(function() {
            alert('Clave secreta copiada al portapapeles');
        });
    }
</script>

<script>
    // Mostrar el modal de verificación del dispositivo 2/3 cuando se haga clic en el botón "Próximo" del modal de verificación del dispositivo 1/3
document.querySelector('.verification-modal .btn-next').addEventListener('click', function() {
    document.querySelector('.verification-modal').style.display = 'none';
    document.querySelector('.verification-modal-2').style.display = 'block';
});

// Ocultar el modal de verificación del dispositivo 2/3 cuando se haga clic en el botón "Atrás"
document.querySelector('.verification-modal-2 #backButton').addEventListener('click', function() {
    document.querySelector('.verification-modal-2').style.display = 'none';
    document.querySelector('.verification-modal').style.display = 'block';
});

// Verificar el código de verificación cuando se haga clic en el botón "Verificar"
document.querySelector('.verification-modal-2 #verifyButton').addEventListener('click', function() {
    // Aquí puedes agregar la lógica para verificar el código de verificación
    // ...
});
</script>
@endsection
