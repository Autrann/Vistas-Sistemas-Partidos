<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Índice de Cohesión Partidista</title>
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
        .unity-column {
            background-color: #0052c6 !important;
            color: white !important;
        }

        .resta-column {
            background-color: #5097ff !important;
            color: white !important;
        }
    </style>
</head>

<body>
    @include('components.banner')

    <div class="container my-4">
        <div class="mt-4">
            <h1 class="h4">Índice de Cohesión Partidista</h1>
            <p class=" text-justify">
                Este indicador permite estudiar el nivel de unidad que tienen los partidos políticos a partir del patrón
                del voto de los mismos en el Poder Legislativo.
            </p>
            <ol type="a">
                <li>La coherencia da cuenta de la unidad en las preferencias y actitudes de los miembros de un
                    partido con relación a la ideología y el programa que postula, es decir, indaga sobre las
                    diferencias o tensiones que existen entre la cúpula y la militancia del partido;</li>
                <li>La disciplina partidista hace referencia a las acciones que se llevan a cabo para lograr la
                    unidad en los comportamientos de los legisladores de un partido y controlar sus
                    votos, ya sea a través de incentivos o el acceso a recursos o privilegios;</li>
                <li>La lealtad partidista, por su parte, tiene que ver con la permanencia de los integrantes dentro
                    de su partido</li>
            </ol>

        </div>

        <div class="d-grid justify-content-start my-4">
            <button class="btn btn-primary">Agregar Nuevo</button>
        </div>

        <div class="table-responsive col-8">
            <table class="table table-striped table-bordered">
                <thead class="table-light">
                    <tr>
                        <th class="align-middle">Partido</th>
                        <th class="align-middle">AYE</th>
                        <th class="align-middle">NAY</th>
                        <th class="align-middle">No Votos</th>
                        <th class="align-middle">Grupo Parlamentario</th>
                        <th class="align-middle resta-column">AYE - NAY</th>
                        <th class="align-middle unity-column">UNITY</th>
                        <th class="align-middle"></th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 10; $i++)
                        <tr>
                            <td class="align-middle">UP</td>
                            <td class="align-middle">0</td>
                            <td class="align-middle">97</td>
                            <td class="align-middle">2</td>
                            <td class="align-middle">99</td>
                            <td class="align-middle resta-column">-97</td>
                            <td class="align-middle unity-column">-0.97</td>
                            <td class="text-center">
                                <button class="btn icon-only" onmouseover="this.style.transform='scale(1.2)'"
                                    onmouseout="this.style.transform='scale(1)'">
                                    <i class="bi bi-pencil-fill text-success fs-5"></i>
                                </button>
                                <button class="btn icon-only" onmouseover="this.style.transform='scale(1.2)'"
                                    onmouseout="this.style.transform='scale(1)'">
                                    <i class="bi bi-trash-fill text-danger fs-5"></i>
                                </button>
                            </td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
