<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Índice de Polarización No Ponderada</title>
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
            <h1 class="h4">Índice de Polarización No Ponderada</h1>
            <p class=" text-justify">
                Este indicador consiste en medir la separación existente entre los dos polos de un sistema de partidos
                al calcular Ia distancia que aparta a los partidos cuyas ubicaciones ideológicas son mås extremas en el
                continuo izquierda-derecha. Si bien esta medición es muy intuitiva y sencilla de calcular omite ponderar
                el peso que los partidos tienen en el sistema.
            </p>
            <p class=" text-justify">
                La polarización no ponderada calcula la distancia entre los partidos ubicados más a los extremos de la
                escala ideológica, por 10 que una mayor brecha sugeriría mayor polarización y viceversa. A partir de una
                escala de 1 (izquierda) a 10 (derecha), el valor máximo de esta medida sería de 9 grados que solo sería
                posible si los partidos más distanciados se ubicaran ideológicamente en los extremos de la escala. Sin
                embargo, cuando la distancia es superior a 3 estaríamos frente a sistemas de polarización alta, y cuando
                estos son menores a 1.5 se consideraría como de polarización baja.
            </p>
        </div>

        {{-- Botón --}}
        <div class="d-grid justify-content-start my-4">
            <button class="btn btn-primary float-right">Agregar Nuevo</button>
        </div>
        <div class="row row-cols-2">
            {{-- tabla --}}
            <div class="table-responsive col-4">
                <table class="table table-striped table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th class="text-left">Partido</th>
                            <th class="text-left">Ubicación Ideológica</th>
                            <th class="text-left"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle bg-warning">PAN</td>
                            <td class="align-middle bg-warning">7.47</td>
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
                        @for ($i = 0; $i < 10; $i++)
                            <tr>
                                <td class="align-middle">PRD</td>
                                <td class="align-middle">3.50</td>
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
            <div class="column">
                <div class="col-md-4">
                    <p class="fw-bold text-secondary">Polarización No Ponderada</p>
                    <input type="text" class="form-control" value="5.14" readonly>
                </div>
            </div>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
