<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Efectivo de Partidos</title>
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
</head>
<body>
    @include('components.banner')
<div class="container my-4">

    <div class="mt-4">
        <h1 class="h4">Número Efectivo de Partidos</h1>
        <p class="text-muted text-justify">
            El indicador contribuye a identificar el grado de apertura o pluralidad que existe en un sistema de partidos en específico, 
            así como también a formarse una idea de lo fácil o difícil que puede llegar a ser construir consensos y garantizar la gobernabilidad 
            sin tomar en cuenta la polarización que pueda haber al interior de un sistema de partidos.
        </p>
    </div>

    <div class="my-4">
        <button class="btn btn-primary">Agregar Nuevo</button>
    </div>

    <div class="table-responsive w-50">
        <table class="table table-striped table-sm">
            <thead class="table-light">
                <tr>
                    <th class="text-center text-muted">Partido</th>
                    <th class="text-center text-muted">Porcentaje de Votación</th>
                    <th class="text-center text-muted">Proporción de Votación</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 7; $i++)
                <tr>
                    <td class="text-center">Partido {{ $i + 1 }}</td>
                    <td class="text-center">{{ rand(1, 50) }}.{{ rand(0, 99) }}</td>
                    <td class="text-center">{{ '0.' . rand(100, 999) }}</td>
                    <td class="text-center">
                        <button class="btn icon-only" onmouseover="this.style.transform='scale(1.2)'" onmouseout="this.style.transform='scale(1)'">
                            <i class="bi bi-pencil-fill text-success fs-5"></i>
                        </button>
                        <button class="btn icon-only" onmouseover="this.style.transform='scale(1.2)'" onmouseout="this.style.transform='scale(1)'">
                            <i class="bi bi-trash-fill text-danger fs-5"></i>
                        </button>
                    </td>
                </tr>
                @endfor
            </tbody>
        </table>
    </div>
 
    <div class="mt-4">
        <p class="fw-bold text-secondary">Número Efectivo de Partidos</p>
        <input type="text" class="form-control w-25" value="5.080149" readonly>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
