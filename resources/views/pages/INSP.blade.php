<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Índice de Nacionalización del Sistema de Partidos</title>
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
            <h1 class="h4">Índice de Nacionalización del Sistema de Partidos <span class="text-muted">(INSP)</span>
            </h1>
            <br>
            <p class=" text-justify">
                Esta medida se construye a partir del INP de todos los partidos que compiten en un mismo sistema y se
                pondera cada uno de ellos por el peso electoral obtenido en las últimas elecciones. El indice oscila
                entre un valor mínimo de 0 y uno máximo de 100. En ese sentido, valores mås cercanos al limite superior
                de la escala (100) indicarían mayor nacionalización y, por el contrario, resultados mäs próximos al
                limite inferior (0) darían cuenta de un sistema poco nacionalizado. De acuerdo con Io anterior, el
                indice se construye a partir de la sumatoria de los productos del INP de cada partido multiplicados por
                el porcentaje de votación alcanzado en las elecciones mås recientes.
            </p>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
