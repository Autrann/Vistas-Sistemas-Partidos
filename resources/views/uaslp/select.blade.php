<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Ingeniería Electoral</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('components.banner')
    <div class="container mt-4">
        <!-- Banner -->
        

        <!-- Título -->
        <h1 class="text-center my-4">Sistema de Ingeniería Electoral</h1>

        <!-- Tarjetas -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Tarjeta 1 -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Número Efectivo de Partidos</h5>
                        <p class="card-subtitle text-muted">NEP</p>
                        <p class="card-text mt-3">
                            El indicador contribuye a identificar el grado de apertura o pluralidad que existe en un sistema de partidos.
                        </p>
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-link">Descripción</a>
                            <a href="#" class="btn btn-primary">Calcular</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 2 -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Índice de Concentración Electoral</h5>
                        <p class="card-text mt-3">
                            Es el porcentaje de votantes que inclinan sus preferencias entre dos fuerzas políticas con mayor votación.
                        </p>
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-link">Descripción</a>
                            <a href="#" class="btn btn-primary">Calcular</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 3 -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Índice de Concentración Ponderada</h5>
                        <p class="card-subtitle text-muted">ICP</p>
                        <p class="card-text mt-3">
                            Ofrece una caracterización promedio de la concentración para cada unidad territorial.
                        </p>
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-link">Descripción</a>
                            <a href="#" class="btn btn-primary">Calcular</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 4 -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Índice de Competitividad</h5>
                        <p class="card-text mt-3">
                            Se centra en el margen de diferencia entre los dos partidos más votados en una elección determinada.
                        </p>
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-link">Descripción</a>
                            <a href="#" class="btn btn-primary">Calcular</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 5 -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Índice de Competitividad Ponderada</h5>
                        <p class="card-subtitle text-muted">ICoP</p>
                        <p class="card-text mt-3">
                            Permite sintetizar la caracterización global del comportamiento de este indicador en una serie temporal.
                        </p>
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-link">Descripción</a>
                            <a href="#" class="btn btn-primary">Calcular</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 6 -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Índice de Volatilidad Agregada</h5>
                        <p class="card-text mt-3">
                            Representa el cambio neto en las preferencias de los votantes de una elección a otra (lealtad).
                        </p>
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-link">Descripción</a>
                            <a href="#" class="btn btn-primary">Calcular</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 7 -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Índice de Fluidez</h5>
                        <p class="card-text mt-3">
                            Se centra en el margen de diferencia entre los dos partidos más votados en una elección determinada.
                        </p>
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-link">Descripción</a>
                            <a href="#" class="btn btn-primary">Calcular</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 8 -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Índice de Natalidad Partidista</h5>
                        <p class="card-text mt-3">
                            Es el número de partidos que obtienen escaños en una elección y que previamente no los tenían.
                        </p>
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-link">Descripción</a>
                            <a href="#" class="btn btn-primary">Calcular</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 9 -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Índice de Mortalidad Partidista</h5>
                        <p class="card-text mt-3">
                            Es el número de partidos que habían obtenido escaños en una elección anterior y los pierden en una posterior.
                        </p>
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-link">Descripción</a>
                            <a href="#" class="btn btn-primary">Calcular</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Índice de Mortalidad Partidista</h5>
                        <p class="card-text mt-3">
                            Es el número de partidos que habían obtenido escaños en una elección anterior y los pierden en una posterior.
                        </p>
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-link">Descripción</a>
                            <a href="#" class="btn btn-link">Calcular</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
