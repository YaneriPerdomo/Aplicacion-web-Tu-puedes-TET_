<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progreso del usuario| Tú puedes</title>
    <link rel="icon" type="image/x-icon" href="../../../../img/icono/icono.ico">
    <link rel="stylesheet" href="../../../../css/includeHTML/header_admin.css">
    <link rel="stylesheet" href="../../../../css/admin/admin.css">
    <link rel="stylesheet" href="../../../../css/admin/alumni/progress.css">
    <link rel="stylesheet" href="../../../../css/efectos_siempre/scrollbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div data-include="../../../includeHTMLsinPhp/admin/header_admin_alumni.php"></div>
    <main class="container-xxl mb-5 informationUser" >
        <section class="row progressUser w-100">
            <div class="col-md-6 col-12">
                <h1>Informacion del aprendizaje</h1>
                <div class="progreso_circulo">
                    <h3 style="color: var(--color-azul)">PROGRESO</h3>
                    <p style="color:grey">Durante todo el aprendizaje</p>
                    <div class="">
                        <div class="progress" style="border: solid 2px grey;" role="progressbar"
                            aria-label="Animated striped example" aria-valuenow="10" aria-valuemin="0"
                            aria-valuemax="100">
                            <div class="progress-bar  progress-bar-striped progress-bar-animated" style="width: 3%">
                                3%</div>
                        </div>
                        <div class="d-flex mt-2 justify-content-between">
                            <span><i class="bi bi-star me-1"></i>Estrellas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="progreso_circulo">
                    <span class="fw-bold" style="color: var(--color-azul)">Etapa 1</span>
                    <p style="color:grey"> 14 Lecciones </p>
                    <div class="">
                        <div class="progress" style="border: solid 2px grey;" role="progressbar"
                            aria-label="Animated striped example" aria-valuenow="10" aria-valuemin="0"
                            aria-valuemax="100">
                            <div class="progress-bar  progress-bar-striped progress-bar-animated" style="width: 3%">
                                3%</div>
                        </div>
                        <div class="d-flex mt-2 justify-content-between">
                            <span><i class="bi bi-star me-1"></i>Estrellas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="progreso_circulo">
                    <span class="fw-bold" style="color: var(--color-azul)">Etapa 2</span>
                    <p style="color:grey"> 2 Lecciones </p>
                    <div class="">
                        <div class="progress" style="border: solid 2px grey;" role="progressbar"
                            aria-label="Animated striped example" aria-valuenow="10" aria-valuemin="0"
                            aria-valuemax="100">
                            <div class="progress-bar  progress-bar-striped progress-bar-animated" style="width: 3%">
                                3%</div>
                        </div>
                        <div class="d-flex mt-2 justify-content-between">
                            <span><i class="bi bi-star me-1"></i>Estrellas</span>
                            <span>0</span>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="d-flex  justify-content-between">
                    <span>Lecciones totales</span>
                    <span>0</span>
                </div>
                <details>
                    <summary>Mostrar detalles...</summary>
                    <ol>
                        <li class="d-flex  justify-content-between">
                            <span>Etapa 1</span>
                            <span>0</span>
                        </li>
                        <li class="d-flex  justify-content-between">
                            <span>Etapa 2</span>
                            <span>0</span>
                        </li>
                    </ol>
                </details>
                <hr>
                <div class="d-flex  justify-content-between">
                    <span>Lecciones que quedan</span>
                    <span>0</span>
                </div>
                <details>
                    <summary>Mostrar detalles...</summary>
                    <ol>
                        <li class="d-flex  justify-content-between">
                            <span>Etapa 1</span>
                            <span>0</span>
                        </li>
                        <li class="d-flex  justify-content-between">
                            <span>Etapa 2</span>
                            <span>0</span>
                        </li>
                    </ol>
                </details>
                <hr>
            </div>
            <div class="col-md-6 col-12">
                <h2>Detalles de actividad</h2>
                <h3>Tiempo de uso</h3>
                <input type="date" name="" id="fechaActual">
                <hr>
                <div class="contenedor">
                    <div class="svg">
                        <svg width="250" height="250">
                            <svg width="250" height="250">
                                <circle r="100" cx="125" cy="125" class="progress2"></circle>
                                <circle r="100" cx="125" cy="125" class="progressTiempo" id="progressTiempo"></circle>
                            </svg>
                        </svg>
                    </div>
                    <div class="box_percentage">
                        <p>1 hora y 2 minutos</p>
                    </div>
                </div>
                <hr>
                <div class="d-flex  justify-content-between">
                    <span>Leccion(es) nueva(s)</span>
                    <span>0</span>
                </div>
                <details>
                    <summary>Mostrar detalles...</summary>
                    <ol>
                        <li class="d-flex  justify-content-between">
                            <span>Etapa 1</span>
                            <span>0</span>
                        </li>
                        <li class="d-flex  justify-content-between">
                            <span>Etapa 2</span>
                            <span>0</span>
                        </li>
                    </ol>
                </details>
                <hr>
                <div class="d-flex  justify-content-between">
                    <span>Leccion(es) repetida(s)</span>
                    <span>0</span>
                </div>
                <details>
                    <summary>Mostrar detalles...</summary>
                    <ol>
                        <li class="d-flex  justify-content-between">
                            <span>Etapa 1</span>
                            <span>0</span>
                        </li>
                        <li class="d-flex  justify-content-between">
                            <span>Etapa 2</span>
                            <span>0</span>
                        </li>
                    </ol>
                </details>
            </div>
        </section>
      
    </main>
    <div data-include="../../../includeHTMLsinPhp/admin/footer_admin.php"></div>
    <script src="../../../../js/ajax/include-html.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
      <script src="../../../../js/admin/alumni/progress.js"></script>

</body>

</html>