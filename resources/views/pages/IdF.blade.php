<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Índice de Fluidez</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<style>
    .suma-column {
        background-color: #0052c6 !important;
        color: white !important;
    }
    .gray-cell {
        background-color: #d3d3d3 !important;
    }
    .yellow-cell {
        background-color: #ffcc00 !important;
    }
</style>
<body>
    @include('components.banner')

    <div class="container my-4">
        <div class="mt-4">
            <h1 class="h4">Índice de Fluidez</h1>
            <p>
                La fluidez estima el grado de estabilidad de los integrantes de un sistema de partidos, la institucionalización mide la estabilidad de estos, así como el tipo de interacciones que tienen entre sí.
            </p>
            <p>
                Al centrarnos en la fluidez, prestamos atención a observar el número de partidos que ingresan o salen del Poder Legislativo de una elección a otra. Al considerar a la fluidez bajo la acepción de algo que se mueve o que se desplaza como producto de una escasa cohesión, un sistema se califica como fluido cuando no es constante el número de partidos que compiten para ganar puestos de representación            </p>
        </div>

        <div class="my-4">
            <button class="btn btn-primary">Agregar Nuevo</button>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead class="table-light">
                    <tr>
                        <th class="text-center">Partido</th>
                        <th class="text-center">2012-2015</th>
                        <th class="text-center">2015-2018</th>
                        <th class="text-center">2018-2021</th>
                        <th class="text-center">2021-2024</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 10; $i++)
                    <tr>
                        <td class="text-center">Partido {{ $i + 1 }}</td>
                        <td class="text-center gray-cell">{{ rand(10, 250) }}</td>
                        <td class="text-center gray-cell">{{ rand(10, 250) }}</td>
                        <td class="text-center yellow-cell">{{ rand(10, 250) }}</td>
                        <td class="text-center">{{ rand(10, 250) }}</td>
                        <td class="text-center">
                            <button class="btn icon-only"><i class="bi bi-pencil-fill text-success fs-5"></i></button>
                            <button class="btn icon-only"><i class="bi bi-trash-fill text-danger fs-5"></i></button>
                        </td>
                    </tr>
                    @endfor
                </tbody>
                <tfoot>
                    <tr>
                        <td class="text-center fw-bold suma-column">Nuevos Partidos</td>
                        <td class="text-center fw-bold suma-column">2</td>
                        <td class="text-center fw-bold suma-column">1</td>
                        <td class="text-center fw-bold suma-column">0</td>
                        <td class="text-center fw-bold suma-column"></td>
                    </tr>
                    <tr>
                        <td class="text-center fw-bold suma-column">Escaños de nuevos partidos</td>
                        <td class="text-center fw-bold suma-column">57</td>
                        <td class="text-center fw-bold suma-column">46</td>
                        <td class="text-center fw-bold suma-column">0</td>
                        <td class="text-center fw-bold suma-column"></td>
                    </tr>
                    <tr>
                        <td class="text-center fw-bold suma-column">Magnitud de la cámara</td>
                        <td class="text-center fw-bold suma-column">500</td>
                        <td class="text-center fw-bold suma-column">500</td>
                        <td class="text-center fw-bold suma-column">500</td>
                        <td class="text-center fw-bold suma-column">500</td>
                    </tr>
                    <tr>
                        <td class="text-center fw-bold suma-column">Fluidez</td>
                        <td class="text-center fw-bold suma-column">11.4</td>
                        <td class="text-center fw-bold suma-column">9.2</td>
                        <td class="text-center fw-bold suma-column">0</td>
                        <td class="text-center fw-bold suma-column"></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
