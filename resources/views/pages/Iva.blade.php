<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Índice de Volatilidad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<style>
    .suma-column {
            background-color: #0052c6 !important;
            color: white !important;
        }
</style>
<body>
    @include('components.banner')

    <div class="container my-4">
        <div class="mt-4">
            <h1 class="h4">Índice de Volatilidad</h1>
            <p>
                Con este indicador se busca capturar el cambio neto en las preferencias electorales de los votantes de una elección a otra, o bien, el grado de lealtad de los electores hacia los partidos políticos que conforman un sistema.
            </p>
            <p>
                El índice se construye en una escala de 0 a 100 en la que un valor de cero, indicaría una hipotética invariabilidad en la captación de apoyos a los partidos por parte de los electores, los cuales votarían exactamente 50 igual en dos elecciones sucesivas; y, por el contrario, un valor de 100 reflejaría que se ha presentado un cambio profundo o radical, a tal punto que todos los votantes habrían cambiado sus votos de una elección a otra.            </p>
        </div>

        <div class="my-4">
            <button class="btn btn-primary">Agregar Nuevo</button>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead class="table-light">
                            <tr>
                                <th class="text-center text-muted">Partido</th>
                                <th class="text-center text-muted">2014 (t-1)</th>
                                <th class="text-center text-muted">2019 (t)</th>
                                <th class="text-center text-muted">Diferencia</th>
                                <th class="text-center text-muted">Diferencia Neta</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 10; $i++)
                            <tr>
                                <td class="text-center">Partido {{ $i + 1 }}</td>
                                <td class="text-center">{{ rand(1, 50) }}.{{ rand(0, 99) }}</td>
                                <td class="text-center">{{ rand(1, 50) }}.{{ rand(0, 99) }}</td>
                                <td class="text-center">{{ rand(-10, 10) }}.{{ rand(0, 99) }}</td>
                                <td class="text-center">{{ rand(0, 10) }}.{{ rand(0, 99) }}</td>
                                <td class="text-center">
                                    <button class="btn icon-only" onmouseover="this.style.transform='scale(1.2)'" onmouseout="this.style.transform='scale(1)'"><i class="bi bi-pencil-fill text-success fs-5"></i></button>
                                    <button class="btn icon-only" onmouseover="this.style.transform='scale(1.2)'" onmouseout="this.style.transform='scale(1)'"><i class="bi bi-trash-fill text-danger fs-5"></i></button>
                                </td>
                            </tr>
                            @endfor
                        </tbody>
                        <tfoot>
                            <tr class="">
                                <td class="text-center fw-bold suma-column">Sumatoria</td>
                                <td class="text-center fw-bold suma-column">99.96</td>
                                <td class="text-center fw-bold"></td>
                                <td class="text-center fw-bold"></td>
                                <td class="text-center fw-bold suma-column">28.65</td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mt-4">
                    <p class="fw-bold text-secondary">Índice de Volatilidad</p>
                    <input type="text" class="form-control" value="14.325" readonly>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
