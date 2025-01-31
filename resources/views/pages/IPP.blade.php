<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Índice de Polarización Ponderada</title>
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
        {{-- texto --}}
        <div class="mt-4">
            <h1 class="h4">Índice de Polarización Ponderada</h1>
            <br>
            <p class=" text-justify">
                Para la construcción de este indicador es imprescindible contar con datos sobre la ubicación ideológica
                de los partidos políticos; y para el caso del cálculo de la polarización
                ponderada, resulta necesario, además, la proporción de escaños que ocupa cada partido en las cámaras
                legislativas.
            </p>
            <p class=" text-justify">
                La polarización ponderada se considera como una fórmula mås sofisticada puesto que mide las distancias
                ideológicas ponderando el peso de los partidos en función de la proporción de escajos que ocupan. Con
                ello se evita el sesgo de la medición original en la que se podría estar sobre-dimensionando la
                existencia de partidos muy extremos pero de poca relevancia en el sistema politico.
            </p>
        </div>

        {{-- Botón --}}
        <div class="d-grid justify-content-start my-4">
            <button class="btn btn-primary float-right">Agregar Nuevo</button>
        </div>
        {{-- tabla --}}
        <div class="table-responsive col-md-14 col-lg-7">
            <table class="table table-striped table-bordered">
                <thead class="table-light">
                    <tr>
                        <th class="text-left">Partido</th>
                        <th class="text-left">Ubicación Ideológica</th>
                        <th class="text-left">Escaños</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 10; $i++)
                        <tr>
                            <td class="align-middle">PAN</td>
                            <td class="align-middle">7.47</td>
                            <td class="align-middle">78</td>
                            <td class="align-middle">0.156</td>
                            <td class="align-middle">1.16532</td>
                            <td class="align-middle">9.38699299</td>
                            <td class="align-middle">1.4637091</td>
                        </tr>
                    @endfor
                </tbody>
                <tfoot>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>500</td>
                        <td>1</td>
                        <td>4.40618</td>
                        <td></td>
                        <td>2.58699027</td>
                    </tr>
                </tfoot>
            </table>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
