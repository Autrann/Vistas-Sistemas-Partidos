<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Ingeniería Electoral</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
    </style>
</head>

<body>
    <div class="container mt-4">
        <!-- Banner -->
        @include('components.banner')

        <!-- Título -->
        <h1 class="text-center my-4">Sistema de Ingeniería Electoral</h1>

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
                        <a href="#" class="link-primary">Calcular</a>
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
                        <a href="#" class="link-primary">Calcular</a>
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
                        <a href="#" class="link-primary">Calcular</a>
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
                        <a href="#" class="link-primary">Calcular</a>
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
                        <a href="#" class="link-primary">Calcular</a>
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
                        <a href="#" class="link-primary">Calcular</a>
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
                        <a href="#" class="link-primary">Calcular</a>
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
                        <a href="#" class="link-primary">Calcular</a>
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
                        <a href="#" class="link-primary">Calcular</a>
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
                        <a href="#" class="link-primary">Calcular</a>
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
                        <a href="#" class="link-primary">Calcular</a>
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
                        <a href="#" class="link-primary">Calcular</a>
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
                        <a href="#" class="link-primary">Calcular</a>
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
                        <a href="#" class="link-primary">Calcular</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
