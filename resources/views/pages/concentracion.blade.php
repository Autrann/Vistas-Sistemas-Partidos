<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Índice de Concentración Electoral</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    @include('components.banner')

    <div class="container my-4">

        <div class="mt-4">
            <h1 class="h4">Índice de Concentración Electoral</h1>
            <p class="text-muted">
                Por lo que se refiere a la concentración, este indicador se acomete a capturar el porcentaje de votantes que inclinan sus preferencias en las dos fuerzas políticas con mayor votación. 
                De este modo, el indicador se construye con base en una adición cuyo rango de medición oscila entre 0 y 100.
            </p>
        </div>

        <div class="my-4">
            <button class="btn btn-primary">Agregar Nuevo</button>
        </div>

        <div class="row">
            <div class="col-md-5">
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead class="table-light">
                            <tr>
                                <th class="text-center text-muted">Partido</th>
                                <th class="text-center text-muted">Porcentaje de Votación</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 8; $i++)
                            <tr>
                                <td class="text-center">Partido {{ $i + 1 }}</td>
                                <td class="text-center">{{ rand(1, 50) }}.{{ rand(0, 99) }}</td>
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
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                <p class="fw-bold text-secondary">Índice de Concentración Electoral</p>
                <input type="text" class="form-control" value="85.99" readonly>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
