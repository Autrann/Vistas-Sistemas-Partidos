<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

     <!-- Favicon -->
     <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">

     <!-- Bootstrap -->
     <link href="{{ asset('content/bootstrap.min.css') }}" rel="stylesheet">
     <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
 
     <!-- Font Awesome -->
     <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
 
     <!-- Estilos personalizados -->
     <link href="{{ asset('content/OwnStyles/fuentes.css') }}" rel="stylesheet">
     <link href="{{ asset('content/OwnStyles/Site.css') }}" rel="stylesheet">
 
     <!-- jQuery -->
     <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
 
     <script type="text/javascript">
 
         $(function () {
             window.onscroll = function () { scrollFunction() };
         });
     
     
         function scrollFunction() {
             if ($(window).scrollTop() > 100) {
                 $(".logoUASLP").removeClass("d-block").addClass("d-none");
                 $(".textoUASLP").removeClass("d-none").addClass("d-block");
                 $(".divisorUASLP-ENTIDAD").removeClass("d-block").addClass("d-none");
                 $(".divisorUASLP-ENTIDADScroll").removeClass("d-none").addClass("d-block");
                 $(".header").css("height", "85px");
     
             }
             if ($(window).scrollTop() < 40) {
                 $(".logoUASLP").removeClass("d-none").addClass("d-block");
                 $(".textoUASLP").removeClass("d-block").addClass("d-none");
                 $(".divisorUASLP-ENTIDAD").removeClass("d-none").addClass("d-block");
                 $(".divisorUASLP-ENTIDADScroll").removeClass("d-block").addClass("d-none");
                 $(".header").css("height", "120px");
             }
         }
     </script>
    <style>
        .login-container {
            max-width: 300px;
            margin-left: 0;
        }
        .title-left {
            text-align: left;
        }
        .btn-small {
            width: auto;
        }
        .text-left {
            text-align: left;
        }
    </style>
</head>
<body>
    <!-- Header -->
    @include('components.banner')


    <!-- Login -->
    <div class="container mt-5">
        <h2 class="mb-4 title-left">Indicadores de Partidos y Sistemas de Partidos</h2>
        <div class="row justify-content-start">
            <div class="col-md-6 col-lg-4 login-container">
                <form action="{{ route('loginCheck') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
                    </div>

                    <!-- Mostrar errores de autenticación -->
                    @if ($errors->has('login_error'))
                        <div class="alert alert-danger" role="alert">
                            {{ $errors->first('login_error') }}
                        </div>
                    @endif

                    <div>
                        <button type="submit" class="btn btn-primary btn-small">Ingresar</button>
                    </div>
                </form>
                <div class="mt-4 text-left">
                    <p>Para registrar nuevo acceso <a href="/register">clic aquí</a></p>
                    <p><a href="/recover-password">¿Recuperar contraseña?</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
