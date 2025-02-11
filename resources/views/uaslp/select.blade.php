<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Ingeniería Electoral</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistema de Ingenieria electoral</title>

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
    <style>
        .card {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
        }

        .card-footer {
            display: flex;
            justify-content: space-between;
            background-color: white;
            border-top: none;
        }

        .card-footer a {
            background-color: white;
            color: #0d6efd;
            text-decoration: none;
        }

        .card-footer a:hover {
            text-decoration: underline;
        }

        .card-body {
            min-height: 200px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
    </style>
</head>

<body>
    <!-- Banner -->
    @include('components.banner')

    <div class="container mt-4">



        <!-- Tarjetas -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Tarjeta 1 -->
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Número Efectivo de Partidos</h5>
                        <p class="card-subtitle text-muted">NEP</p>
                        <p class="card-text mt-3">
                            El indicador contribuye a identificar el grado de apertura o pluralidad que existe en un
                            sistema de partidos.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="link-primary">Descripción</a>
                        <a href="{{ route('nep.index') }}" class="link-primary">Calcular</a>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 2 -->
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Índice de Concentración Electoral</h5>
                        <p class="card-text mt-3">
                            Es el porcentaje de votantes que inclinan sus preferencias entre dos fuerzas políticas con
                            mayor votación.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="link-primary">Descripción</a>
                        <a href="{{ route('ice.index') }}" class="link-primary">Calcular</a>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 3 -->
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Índice de Concentración Ponderada</h5>
                        <p class="card-subtitle text-muted">ICP</p>
                        <p class="card-text mt-3">
                            Ofrece una caracterización promedio de la concentración para cada unidad territorial.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="link-primary">Descripción</a>
                        <a href="{{ route('icp.index') }}" class="link-primary">Calcular</a>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 4 -->
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Índice de Competitividad</h5>
                        <p class="card-text mt-3">
                            Se centra en el margen de diferencia entre los dos partidos más votados en una elección
                            determinada.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="link-primary">Descripción</a>
                        <a href="{{ route('icomp.index') }}" class="link-primary">Calcular</a>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 5 -->
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Índice de Competitividad Ponderada</h5>
                        <p class="card-subtitle text-muted">ICoP</p>
                        <p class="card-text mt-3">
                            Permite sintetizar la caracterización global del comportamiento de este indicador en una
                            serie temporal.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="link-primary">Descripción</a>
                        <a href="{{ route('icop.index') }}" class="link-primary">Calcular</a>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 6 -->
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Índice de Volatilidad Agregada</h5>
                        <p class="card-text mt-3">
                            Representa el cambio neto en las preferencias de los votantes de una elección a otra
                            (lealtad).
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="link-primary">Descripción</a>
                        <a href="{{ route('iva.index') }}" class="link-primary">Calcular</a>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 7 -->
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Índice de Fluidez</h5>
                        <p class="card-text mt-3">
                            Se centra en el margen de diferencia entre los dos partidos más votados en una elección
                            determinada.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="link-primary">Descripción</a>
                        <a href="{{ route('idf.index') }}" class="link-primary">Calcular</a>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 8 -->
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Índice de Natalidad Partidista</h5>
                        <p class="card-text mt-3">
                            Es el número de partidos que obtienen escaños en una elección y que previamente no los
                            tenían.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="link-primary">Descripción</a>
                        <a href="{{ route('inymp.index') }}" class="link-primary">Calcular</a>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 9 -->
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Índice de Mortalidad Partidista</h5>
                        <p class="card-text mt-3">
                            Es el número de partidos que habían obtenido escaños en una elección anterior y los pierden
                            en una posterior.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="link-primary">Descripción</a>
                        <a href="{{ route('inymp.index') }}" class="link-primary">Calcular</a>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 10 -->
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Índice de Cohesión Partidista</h5>
                        <p class="card-subtitle text-muted">UNITY</p>
                        <p class="card-text mt-3">
                            Es el nivel de unidad que tienen los partidos políticos a partir del patrón del voto.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="link-primary">Descripción</a>
                        <a href="{{ route('icoehp.index') }}" class="link-primary">Calcular</a>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 11 -->
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Índice de Polarización No Ponderada</h5>
                        <p class="card-text mt-3">
                            Calcula la distancia entre los partidos ubicados más a los extremos de la escala ideológica.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="link-primary">Descripción</a>
                        <a href="{{ route('ipnp.index') }}" class="link-primary">Calcular</a>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 12 -->
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Índice de Polarización Ponderada</h5>
                        <p class="card-text mt-3">
                            Mide las distancias ideológicas de los partidos en función de la proporción de escaños que
                            ocupan.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="link-primary">Descripción</a>
                        <a href="{{ route('ipp.index') }}" class="link-primary">Calcular</a>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 13 -->
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Índice de Nacionalización</h5>
                        <p class="card-subtitle text-muted">INP</p>
                        <p class="card-text mt-3">
                            Identifica el grado de implantación de los partidos y evidencia la distribución territorial
                            de sus apoyos.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="link-primary">Descripción</a>
                        <a href="{{ route('inp.index') }}" class="link-primary">Calcular</a>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 14 -->
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Índice de Nacionalización del Sistema de Partidos</h5>
                        <p class="card-subtitle text-muted">INSP</p>
                        <p class="card-text mt-3">
                            Pondera el INP de cada partido por el peso electoral obtenido en las últimas elecciones.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="link-primary">Descripción</a>
                        <a href="{{ route('insp.index') }}" class="link-primary">Calcular</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

<script type="text/javascript">
    $(function() {
        window.onscroll = function() {
            scrollFunction()
        };
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

</html>
