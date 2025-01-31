<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Índice de Concentración Ponderada</title>
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
        .suma-column {
            background-color: #0052c6 !important;
            color: white !important;
        }
        .promedio-column {
            background-color: #5097ff !important;
            color: white !important;
        }
        .concentracion-column {
            background-color: #a0bef1 !important;
        }
    </style>
</head>
<body>
    @include('components.banner')

    <div class="container my-4">
        <div class="mt-4">
            <h1 class="h4">Índice de Concentración Ponderada <span class="text-muted">ICP</span></h1>
            <p class=" text-justify">
                Índice de Competitividad Ponderada permite sintetizar en un solo dato la caracterización global del comportamiento de este indicador en una serie temporal. La estructura de la medición sería exactamente igual que aquella creada para la concentración ponderada, pero tomando como referencia:
            </p>
            <ul>
                <li>a) 1 a la competitividad alta (menor o igual al 7.5 por ciento)</li>
                <li>b) 0.5 a la competitividad media (mayor a 7.5 y menor a 15 por ciento)</li>
                <li>c) 0 a la competitividad baja (mayor o igual al 15 por ciento)</li>
            </ul>

        </div>

        <div class="my-4 d-flex justify-content-start gap-2">
            <button class="btn btn-primary">Configurar Comicios</button>
            <button class="btn btn-success">Agregar Nuevo</button>
        </div>

        <div class="table-responsive col-md-11">
            <table class="table table-striped table-bordered">
                <thead class="table-light">
                    <tr>
                        <th class="text-center">Unidad Territorial</th>
                        <th class="text-center">1938</th>
                        <th class="text-center">2003</th>
                        <th class="text-center">2008</th>
                        <th class="text-center">2013</th>
                        <th class="text-center">2018</th>
                        <th class="text-center suma-column">Suma</th>
                        <th class="text-center promedio-column">Promedio</th>
                        <th class="text-center concentracion-column">ICoP</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 10; $i++)
                    <tr>
                        <td class="text-center">Concepción</td>
                        <td class="text-center">1</td>
                        <td class="text-center">0.5</td>
                        <td class="text-center">1</td>
                        <td class="text-center">1</td>
                        <td class="text-center">1</td>
                        <td class="text-center suma-column">4.5</td>
                        <td class="text-center promedio-column">0.9</td>
                        <td class="text-center concentracion-column">ALTA</td>
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
                <tfoot class="table-light">
                    <tr>
                        <th class="text-center suma-column">Sumatoria</th>
                        <td class="text-center suma-column">17</td>
                        <td class="text-center suma-column">9.5</td>
                        <td class="text-center suma-column">11</td>
                        <td class="text-center suma-column">14.5</td>
                        <td class="text-center suma-column">14.5</td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                    </tr>
                    <tr>
                        <th class="text-center promedio-column">Promedio</th>
                        <td class="text-center promedio-column">1</td>
                        <td class="text-center promedio-column">0.55</td>
                        <td class="text-center promedio-column">0.845</td>
                        <td class="text-center promedio-column">0.85</td>
                        <td class="text-center promedio-column">0.91</td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                    </tr>
                    <tr>
                        {{-- <th class="text-center concentracion-column">ICoP</th>
                        <td class="text-center concentracion-column">ALTA</td>
                        <td class="text-center concentracion-column">MEDIA</td>
                        <td class="text-center concentracion-column">MEDIA</td>
                        <td class="text-center concentracion-column">ALTA</td>
                        <td class="text-center concentracion-column">ALTA</td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td> --}}
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>