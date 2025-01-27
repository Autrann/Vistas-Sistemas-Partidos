<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Índice de Concentración Ponderada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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
                Para analizar con mayor detenimiento la magnitud de la concentración en el sistema de partidos proponemos un Índice de Concentración Ponderada que permita capturar una medida discriminativa y ofrezca una caracterización promedio de la concentración para cada unidad territorial en lo individual y para el conjunto de estas en lo general. El índice se construye a partir de una clasificación sobre los niveles de concentración de votos:
            </p>
            <ul>
                <li>a) baja (menor a 55 por ciento)</li>
                <li>b) media (entre 56 y 79 por ciento)</li>
                <li>c) alta (mayor de 80 por ciento).</li>
            </ul>
            <p class=" text-justify">
                Para ponderar el grado de concentración del voto en una unidad territorial determinada asignamos un valor entre 0 y 1 a cada elección celebrada en el periodo bajo estudio (N), de acuerdo con el nivel de concentración:
            </p>
            <ul>
                <li>a) 0 cuando la concentración es menor a 55 por ciento</li>
                <li>b) 0.5 cuando la concentración oscila entre 56 y 79 por ciento</li>
                <li>c) 1 cuando la concentración es superior al 80 por ciento de los votos</li>
            </ul>
            <p class="text-justify">
                Estos valores se suman y posteriormente se dividen entre el número de comicios realizados en un periodo determinado. El resultado final es un valor entre 0 y 1, donde los valores cercanos a 0 indican una menor concentración de votos y los valores cercanos a 1 indican una mayor concentración de los mismos. Este índice permite ofrecer una visión más clara sobre cómo se distribuyen los votos en las distintas elecciones celebradas en un determinado periodo.
            </p>
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
                        <th class="text-center concentracion-column">Concentración</th>
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
                        <th class="text-center concentracion-column">Concentración</th>
                        <td class="text-center concentracion-column">ALTA</td>
                        <td class="text-center concentracion-column">MEDIA</td>
                        <td class="text-center concentracion-column">MEDIA</td>
                        <td class="text-center concentracion-column">ALTA</td>
                        <td class="text-center concentracion-column">ALTA</td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
