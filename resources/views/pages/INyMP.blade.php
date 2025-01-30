<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Índice de Natalidad Partidista</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .even-row {
            background-color: #5097ff !important;
            color: white !important;
        }

        .pair-row {
            background-color: #0052c6 !important;
            color: white !important;
        }
    </style>
</head>

<body>
    @include('components.banner')

    <div class="container my-4">
        {{-- texto --}}
        <div class="mt-4">
            <h1 class="h4">Índice de Natalidad y Mortalidad Partidista</h1>
            <p class=" text-justify">
                EI índice de natalidad partidista remite al número de partidos que obteniendo escaños en una elección
                (t) previamente no los tenían (t-l)
            </p>
            <p>
                EI índice de mortalidad refiere al efecto contrario, es decir, el número de partidos que habiendo
                obtenido escaños en t-l no obtuvieron ninguno en t.
            </p>
        </div>

        <div class="row row-cols-2">
            {{-- Botón --}}
            <div class="d-grid justify-content-end my-4">
                <button class="btn btn-primary float-right">Agregar Nuevo</button>
            </div>
            <div></div>
        </div>
        <div class="row row-cols-2">
            {{-- tabla --}}
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th class="text-left">Partido</th>
                            <th class="text-left">2018-2022 <span class="fst-italic">(t-1)</span></th>
                            <th class="text-left">2022-2026 <span class="fst-italic">(t)</span></th>
                            <th class="text-left"></th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- PLN --}}
                        <tr>
                            <td class="align-middle">PLN</td>
                            <td class="align-middle">17</td>
                            <td class="align-middle">19</td>
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
                        {{-- RN --}}
                        <tr>
                            <td class="align-middle">RN</td>
                            <td class="align-middle">14</td>
                            <td class="align-middle table-danger"></td>
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
                        {{-- PAC --}}
                        <tr>
                            <td class="align-middle">PAC</td>
                            <td class="align-middle">10</td>
                            <td class="align-middle table-danger"></td>
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
                        {{-- PUSC --}}
                        <tr>
                            <td class="align-middle">PUSC</td>
                            <td class="align-middle">9</td>
                            <td class="align-middle">9</td>
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
                        {{-- PIN --}}
                        <tr>
                            <td class="align-middle">PIN</td>
                            <td class="align-middle">4</td>
                            <td class="align-middle table-danger"></td>
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
                        {{-- PRSC --}}
                        <tr>
                            <td class="align-middle">PRCS</td>
                            <td class="align-middle">2</td>
                            <td class="align-middle table-danger"></td>
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
                        {{-- FA --}}
                        <tr>
                            <td class="align-middle">FA</td>
                            <td class="align-middle">1</td>
                            <td class="align-middle">6</td>
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
                        {{-- PNR --}}
                        <tr>
                            <td class="align-middle">PNR</td>
                            <td class="align-middle"></td>
                            <td class="align-middle table-success">6</td>
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
                        {{-- PPSD --}}
                        <tr>
                            <td class="align-middle">PPSD</td>
                            <td class="align-middle"></td>
                            <td class="align-middle table-success">9</td>
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
                        {{-- PLP --}}
                        <tr>
                            <td class="align-middle">PLP</td>
                            <td class="align-middle"></td>
                            <td class="align-middle table-success">6</td>
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
                    </tbody>
                    <tfoot class="table-light">
                        <tr>
                            <th class="even-row">No. Partidos</th>
                            <td class="even-row">7</td>
                            <td class="even-row">6</td>
                        </tr>
                        <tr>
                            <td class="pair-row" colspan="2">Nuevos Partidos</td>
                            <td class="pair-row">3</td>
                        </tr>
                        <tr>
                            <td class="even-row" colspan="2">Partidos Desaparecidos</td>
                            <td class="even-row">4</td>
                        </tr>
                        <tr>
                            <td class="pair-row" colspan="2">Magnitud de la cámara</td>
                            <td class="pair-row">500</td>
                        </tr>
                        <tr>
                            <td class="even-row" colspan="2">Fluidez</td>
                            <td class="even-row">11.4</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="column">
                <div class="col-md-4">
                    <p class="fw-bold text-secondary">Índice de Natalidad</p>
                    <input type="text" class="form-control" value="50" readonly>
                </div>
                <div class="col-md-4">
                    <p class="fw-bold text-secondary">Índice de Mortalidad</p>
                    <input type="text" class="form-control" value="57.14" readonly>
                </div>
            </div>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
