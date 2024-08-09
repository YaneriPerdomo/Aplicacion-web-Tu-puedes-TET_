<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu puedes | Aprende</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../../../css/reset.css">
    <link rel="stylesheet" href="../../../css/efectos_siempre/scrollbar.css">
    <link rel="icon" type="image/x-icon" href="../../../img/icono/icono.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../css/player/read.css">
    <link rel="stylesheet" href="../../../css/efectos_siempre/scrollbar.css">
</head>

<body style="background-image: url(../../../img/player/fondo.png);">
    <div data-include="../../includeHTMLsinPhp/player/header.php"></div>
    <main>
        <div class="container-fluid w-100 h-100 mt-5">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-xl-10 col-lg-12">
                    <div class="mensaje_actualizacion" mensaje_actualizacion="show">
                        <div class="mensaje_actualizacion-body">
                            <strong class=" "> <i class="bi bi-volume-up mensaje__actualizacion--audio me-1 " style="font-size:1.1rem"></i>¿Notas algo... Diferente?</strong>
                            <p>Hemos actualizado la página, para que el aprendizaje sea mucho mejor.</p>
                        </div>
                        <button type="button" class=" me-2 m-auto mensaje_actualizacion--button"> <i class="bi bi-x-lg"></i></button>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
            <div class="row w-100 h-100 m-0 ">
                <div class="col-1"></div>
                <div class="col-md-12 col-lg-7 ">
                    <div class="read">
                        <div class="etapa_uno_seccion_uno">
                            <div class="d-flex justify-content-between  align-items-center " style="    margin: 0rem 1rem;">
                                <div>
                                    <div class=""><span class="fs-3"> <i class="bi bi-volume-up etapaUnoSeccionUno_audio me-1 fs-3 " style="font-size:1.1rem"></i>Etapa 1, Seccion 1</span><br>
                                        <span style="color:grey">Lecciones </span>
                                    </div>
                                </div>
                                <div class="container-guia guiaAudio">
                                    <i class="bi bi-journal-text"></i><span>GUIA</span>
                                </div>
                            </div>
                            <div class="container__styles_leccion">
                                <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#etapa_1_leccion_1">
                                    <div class="styles_cuaderno" style="background-image: linear-gradient(45deg, rgb(121, 198, 12) 30%, rgb(107 175 11) 30% 50%, rgb(121, 198, 12) 50% 60%, rgb(107 175 11) 60% 65%, rgb(121, 198, 12) 55% 100%);filter: drop-shadow(2px 4px 0px rgb(97 155 15));">
                                        <div class="black" style="position: absolute;width: 100%;height: 100%;background: rgb(47, 47, 47); width: 20px; height: 15px; top: 0.5rem; left: -0.5rem; border-radius: 0.5rem;"></div>
                                        <div class="black_dos"></div>
                                        <div class="black" style="  position: absolute;width: 100%;height: 100%;background: rgb(47, 47, 47);width: 20px;height: 15px;top: 2.5rem;left: -0.5rem;border-radius: 0.5rem;"></div>
                                        <div class="carita" style="text-align: center; color:white; ">
                                            <div>
                                                <div class="estado_juego">
                                                    <img src="../../../img/caritas/check.png" style="width:2.5rem" alt="">
                                                </div>
                                                <span><i class="bi bi-volume-up etapaUnoSeccionUnoL1_audio me-0 m-0 p-0  " style="font-size:1.1rem"></i>Lección 1</span>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </div>
                            <div class="container__styles_leccion">
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#no_acceso">
                                    <div class="styles_cuaderno" style="  filter: drop-shadow(2px 4px 0px #1795d1);background-image: linear-gradient(45deg, #1CB0F6 30%, #16a0e1 30% 50%, #1CB0F6 50% 60%, #16a0e1 60% 65%, #1CB0F6 56% 100%);">
                                        <div class="black" style="position: absolute;width: 100%;height: 100%;background: rgb(47, 47, 47); width: 20px; height: 15px; top: 0.5rem; left: -0.5rem; border-radius: 0.5rem;"></div>
                                        <div class="black_dos"></div>
                                        <div class="black" style="  position: absolute;width: 100%;height: 100%;background: rgb(47, 47, 47);width: 20px;height: 15px;top: 2.5rem;left: -0.5rem;border-radius: 0.5rem;"></div>
                                        <div class="carita" style="text-align: center; color:white; ">
                                            <div>
                                                <div class="estado_juego">
                                                    <img src="../../../img/caritas/candado.png" style="width:2.5rem" alt="">
                                                </div>
                                                <span><i class="bi bi-volume-up etapaUnoSeccionUnoL2_audio me-0 m-0 p-0  " style="font-size:1.1rem"></i>Lección 2</span>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#no_acceso">
                                    <div class="styles_cuaderno" style="  filter: drop-shadow(2px 4px 0px #1795d1);background-image: linear-gradient(45deg, #1CB0F6 30%, #16a0e1 30% 50%, #1CB0F6 50% 60%, #16a0e1 60% 65%, #1CB0F6 56% 100%);">
                                        <div class="black" style="position: absolute;width: 100%;height: 100%;background: rgb(47, 47, 47); width: 20px; height: 15px; top: 0.5rem; left: -0.5rem; border-radius: 0.5rem;"></div>
                                        <div class="black_dos"></div>
                                        <div class="black" style="  position: absolute;width: 100%;height: 100%;background: rgb(47, 47, 47);width: 20px;height: 15px;top: 2.5rem;left: -0.5rem;border-radius: 0.5rem;"></div>
                                        <div class="carita" style="text-align: center; color:white; ">
                                            <div>
                                                <div class="estado_juego">
                                                    <img src="../../../img/caritas/candado.png" style="width:2.5rem" alt="">
                                                </div>
                                                <span><i class="bi bi-volume-up etapaUnoSeccionUnoL3_audio me-0 m-0 p-0  " style="font-size:1.1rem"></i>Lección 3</span>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </div>
                            <div class="container__styles_leccion">
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#no_acceso">
                                    <div class="styles_cuaderno" style="background-image: linear-gradient(45deg, rgb(121, 198, 12) 30%, rgb(107 175 11) 30% 50%, rgb(121, 198, 12) 50% 60%, rgb(107 175 11) 60% 65%, rgb(121, 198, 12) 55% 100%);filter: drop-shadow(2px 4px 0px rgb(97 155 15));">
                                        <div class="black" style="position: absolute;width: 100%;height: 100%;background: rgb(47, 47, 47); width: 20px; height: 15px; top: 0.5rem; left: -0.5rem; border-radius: 0.5rem;"></div>
                                        <div class="black_dos"></div>
                                        <div class="black" style="  position: absolute;width: 100%;height: 100%;background: rgb(47, 47, 47);width: 20px;height: 15px;top: 2.5rem;left: -0.5rem;border-radius: 0.5rem;"></div>
                                        <div class="carita" style="text-align: center; color:white; ">
                                            <div>
                                                <div class="estado_juego">
                                                    <img src="../../../img/caritas/candado.png" style="width:2.5rem" alt="">
                                                </div>
                                                <span><i class="bi bi-volume-up etapaUnoSeccionUnoL4_audio me-0 m-0 p-0  " style="font-size:1.1rem"></i>Lección 4</span>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#no_acceso">
                                    <div class="styles_cuaderno" style="background-image: linear-gradient(45deg, rgb(227, 37, 0) 30%, rgb(209 40 6) 30% 50%, rgb(227, 37, 0) 50% 60%, rgb(209, 40, 7) 60% 65%, rgb(227, 37, 0) 55% 100%);    filter: drop-shadow(2px 4px 0px rgb(2323, 40, 6));">
                                        <div class="black" style="position: absolute;width: 100%;height: 100%;background: rgb(47, 47, 47); width: 20px; height: 15px; top: 0.5rem; left: -0.5rem; border-radius: 0.5rem;"></div>
                                        <div class="black_dos"></div>
                                        <div class="black" style="  position: absolute;width: 100%;height: 100%;background: rgb(47, 47, 47);width: 20px;height: 15px;top: 2.5rem;left: -0.5rem;border-radius: 0.5rem;"></div>
                                        <div class="carita" style="text-align: center; color:white; ">
                                            <div>
                                                <div class="estado_juego">
                                                    <img src="../../../img/caritas/candado.png" style="width:2.5rem" alt="">
                                                </div>
                                                <span><i class="bi bi-volume-up etapaUnoSeccionUnoL5_audio me-0 m-0 p-0  " style="font-size:1.1rem"></i>Lección 5</span>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </div>
                            <div class="container__styles_leccion">
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#no_acceso">
                                    <div class="styles_cuaderno" style="background-image: linear-gradient(45deg, rgb(255, 194, 1) 30%, rgb(252, 170, 1) 30% 50%, rgb(255, 193, 1) 50% 60%, rgb(252, 170, 1) 60% 65%, rgb(255, 194, 1) 55% 100%); filter: drop-shadow(2px 4px 0px rgb(212, 180, 1));">
                                        <div class="black" style="position: absolute;width: 100%;height: 100%;background: rgb(47, 47, 47); width: 20px; height: 15px; top: 0.5rem; left: -0.5rem; border-radius: 0.5rem;"></div>
                                        <div class="black_dos"></div>
                                        <div class="black" style="  position: absolute;width: 100%;height: 100%;background: rgb(47, 47, 47);width: 20px;height: 15px;top: 2.5rem;left: -0.5rem;border-radius: 0.5rem;"></div>
                                        <div class="carita" style="text-align: center; color:white; ">
                                            <div>
                                                <div class="estado_juego">
                                                    <img src="../../../img/caritas/candado.png" style="width:2.5rem" alt="">
                                                </div>
                                                <span> <i class="bi bi-volume-up etapaUnoSeccionUnoL6_audio me-0 m-0 p-0  " style="font-size:1.1rem"></i>Lección 6</span>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#no_acceso">
                                    <div class="styles_cuaderno" style="    background-image: linear-gradient(45deg, rgb(255, 194, 1) 30%, rgb(252, 170, 1) 30% 50%, rgb(255, 193, 1) 50% 60%, rgb(252, 170, 1) 60% 65%, rgb(255, 194, 1) 55% 100%); filter: drop-shadow(2px 4px 0px rgb(212, 180, 1));">
                                        <div class="black" style="position: absolute;width: 100%;height: 100%;background: rgb(47, 47, 47); width: 20px; height: 15px; top: 0.5rem; left: -0.5rem; border-radius: 0.5rem;"></div>
                                        <div class="black_dos"></div>
                                        <div class="black" style="  position: absolute;width: 100%;height: 100%;background: rgb(47, 47, 47);width: 20px;height: 15px;top: 2.5rem;left: -0.5rem;border-radius: 0.5rem;"></div>
                                        <div class="carita" style="text-align: center; color:white; ">
                                            <div>
                                                <div class="estado_juego">
                                                    <img src="../../../img/caritas/candado.png" style="width:2.5rem" alt="">
                                                </div>
                                                <span><i class="bi bi-volume-up etapaUnoSeccionUnoL7_audio me-0 m-0 p-0  " style="font-size:1.1rem"></i>Lección 7</span>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </div>
                            <div class="container__styles_leccion">
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#no_acceso">
                                    <div class="styles_cuaderno" style="background-image: linear-gradient(45deg, rgb(255, 194, 1) 30%, rgb(252, 170, 1) 30% 50%, rgb(255, 193, 1) 50% 60%, rgb(252, 170, 1) 60% 65%, rgb(255, 194, 1) 55% 100%); filter: drop-shadow(2px 4px 0px rgb(212, 180, 1));">
                                        <div class="black" style="position: absolute;width: 100%;height: 100%;background: rgb(47, 47, 47); width: 20px; height: 15px; top: 0.5rem; left: -0.5rem; border-radius: 0.5rem;"></div>
                                        <div class="black_dos"></div>
                                        <div class="black" style="  position: absolute;width: 100%;height: 100%;background: rgb(47, 47, 47);width: 20px;height: 15px;top: 2.5rem;left: -0.5rem;border-radius: 0.5rem;"></div>
                                        <div class="carita" style="text-align: center; color:white; ">
                                            <div>
                                                <div class="estado_juego">
                                                    <img src="../../../img/caritas/Lightning.png" style="width:2.5rem; height: 3rem;" alt="">
                                                </div>
                                                <span class="" style="color:rgb(47, 47, 47); background: rgb(47, 47, 47,0.1); border-radius:0.4rem; padding: 0.2rem"><i class="bi bi-volume-up etapaUnoSeccionUnoLFinal_audio me-0 m-0 p-0  " style="font-size:1.1rem"></i>Lección Final</span>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div><br><br>
                        <div class="etapa_uno_seccion_dos">
                            <div class="d-flex justify-content-between  align-items-center" style="margin: 0rem 1rem;">
                                <div>
                                    <div class=""><span class="fs-3"><i class="bi bi-volume-up etapaUnoSeccionDos_audio me-1 fs-3 " style="font-size:1.1rem"></i>Etapa 1, Seccion 2</span><br> <span style="color:grey">Lecciones </span></div>
                                </div>
                                <div class="container-guia">
                                    <i class="bi bi-journal-text"></i><span>GUIA</span>
                                </div>
                            </div>
                            <div class="container__styles_leccion">
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#no_acceso">
                                    <div class="styles_cuaderno">
                                        <div class="black" style="position: absolute;width: 100%;height: 100%;background: rgb(47, 47, 47); width: 20px; height: 15px; top: 0.5rem; left: -0.5rem; border-radius: 0.5rem;"></div>
                                        <div class="black_dos"></div>
                                        <div class="black" style="  position: absolute;width: 100%;height: 100%;background: rgb(47, 47, 47);width: 20px;height: 15px;top: 2.5rem;left: -0.5rem;border-radius: 0.5rem;"></div>
                                        <div class="carita" style="text-align: center; color:white; ">
                                            <div>
                                                <div class="estado_juego">
                                                    <img src="../../../img/caritas/candado.png" style="width:2.5rem" alt="">
                                                </div>
                                                <span><i class="bi bi-volume-up etapaUnoSeccionDosL1_audio me-0 m-0 p-0  " style="font-size:1.1rem"></i>Lección 1</span>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </div>
                            <div class="container__styles_leccion">
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#no_acceso">
                                    <div class="styles_cuaderno" style="  filter: drop-shadow(2px 4px 0px #1795d1);background-image: linear-gradient(45deg, #1CB0F6 30%, #16a0e1 30% 50%, #1CB0F6 50% 60%, #16a0e1 60% 65%, #1CB0F6 56% 100%);">
                                        <div class="black" style="position: absolute;width: 100%;height: 100%;background: rgb(47, 47, 47); width: 20px; height: 15px; top: 0.5rem; left: -0.5rem; border-radius: 0.5rem;"></div>
                                        <div class="black_dos"></div>
                                        <div class="black" style="  position: absolute;width: 100%;height: 100%;background: rgb(47, 47, 47);width: 20px;height: 15px;top: 2.5rem;left: -0.5rem;border-radius: 0.5rem;"></div>
                                        <div class="carita" style="text-align: center; color:white; ">
                                            <div>
                                                <div class="estado_juego">
                                                    <img src="../../../img/caritas/candado.png" style="width:2.5rem" alt="">
                                                </div>
                                                <span><i class="bi bi-volume-up etapaUnoSeccionDosL2_audio me-0 m-0 p-0  " style="font-size:1.1rem"></i>Lección 2</span>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#no_acceso">
                                    <div class="styles_cuaderno" style=" filter: drop-shadow(2px 4px 0px #1795d1);background-image: linear-gradient(45deg, #1CB0F6 30%, #16a0e1 30% 50%, #1CB0F6 50% 60%, #16a0e1 60% 65%, #1CB0F6 56% 100%);">
                                        <div class="black" style="position: absolute;width: 100%;height: 100%;background: rgb(47, 47, 47); width: 20px; height: 15px; top: 0.5rem; left: -0.5rem; border-radius: 0.5rem;"></div>
                                        <div class="black_dos"></div>
                                        <div class="black" style="  position: absolute;width: 100%;height: 100%;background: rgb(47, 47, 47);width: 20px;height: 15px;top: 2.5rem;left: -0.5rem;border-radius: 0.5rem;"></div>
                                        <div class="carita" style="text-align: center; color:white; ">
                                            <div>
                                                <div class="estado_juego">
                                                    <img src="../../../img/caritas/candado.png" style="width:2.5rem" alt="">
                                                </div>
                                                <span><i class="bi bi-volume-up etapaUnoSeccionDosL3_audio me-0 m-0 p-0  " style="font-size:1.1rem"></i>Lección 3</span>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </div>
                            <div class="container__styles_leccion">
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#no_acceso">
                                    <div class="styles_cuaderno" style="background-image: linear-gradient(45deg, rgb(255, 194, 1) 30%, rgb(252, 170, 1) 30% 50%, rgb(255, 193, 1) 50% 60%, rgb(252, 170, 1) 60% 65%, rgb(255, 194, 1) 55% 100%); filter: drop-shadow(2px 4px 0px rgb(212, 180, 1));">
                                        <div class="black" style="position: absolute;width: 100%;height: 100%;background: rgb(47, 47, 47); width: 20px; height: 15px; top: 0.5rem; left: -0.5rem; border-radius: 0.5rem;"></div>
                                        <div class="black_dos"></div>
                                        <div class="black" style="position: absolute;width: 100%;height: 100%;background: rgb(47, 47, 47);width: 20px;height: 15px;top: 2.5rem;left: -0.5rem;border-radius: 0.5rem;"></div>
                                        <div class="carita" style="text-align: center; color:white; ">
                                            <div>
                                                <div class="estado_juego">
                                                    <img src="../../../img/caritas/candado.png" style="width:2.5rem" alt="">
                                                </div>
                                                <span style="color: rgb(47, 47, 47);background: rgb(47, 47, 47, 0.1); border-radius: 0.4rem; padding: 0.2rem;"><i class="bi bi-volume-up etapaUnoSeccionDosL4_audio me-0 m-0 p-0  " style="font-size:1.1rem"></i>Lección 4</span>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#no_acceso">
                                    <div class="styles_cuaderno" style="background-image: linear-gradient(45deg, rgb(255, 194, 1) 30%, rgb(252, 170, 1) 30% 50%, rgb(255, 193, 1) 50% 60%, rgb(252, 170, 1) 60% 65%, rgb(255, 194, 1) 55% 100%); filter: drop-shadow(2px 4px 0px rgb(212, 180, 1));">
                                        <div class="black" style="position: absolute;width: 100%;height: 100%;background: rgb(47, 47, 47); width: 20px; height: 15px; top: 0.5rem; left: -0.5rem; border-radius: 0.5rem;"></div>
                                        <div class="black_dos"></div>
                                        <div class="black" style="position: absolute;width: 100%;height: 100%;background: rgb(47, 47, 47);width: 20px;height: 15px;top: 2.5rem;left: -0.5rem;border-radius: 0.5rem;"></div>
                                        <div class="carita" style="text-align: center; color:white; ">
                                            <div>
                                                <div class="estado_juego">
                                                    <img src="../../../img/caritas/candado.png" style="width:2.5rem" alt="">
                                                </div>
                                                <span style="color: rgb(47, 47, 47);background: rgb(47, 47, 47, 0.1); border-radius: 0.4rem; padding: 0.2rem;"><i class="bi bi-volume-up etapaUnoSeccionDosL5_audio me-0 m-0 p-0  " style="font-size:1.1rem"></i>Lección 5</span>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </div>
                            <div class="container__styles_leccion">
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#no_acceso">
                                    <div class="styles_cuaderno" style="background-image: linear-gradient(45deg, rgb(255, 194, 1) 30%, rgb(252, 170, 1) 30% 50%, rgb(255, 193, 1) 50% 60%, rgb(252, 170, 1) 60% 65%, rgb(255, 194, 1) 55% 100%); filter: drop-shadow(2px 4px 0px rgb(212, 180, 1));">
                                        <div class="black" style="position: absolute;width: 100%;height: 100%;background: rgb(47, 47, 47); width: 20px; height: 15px; top: 0.5rem; left: -0.5rem; border-radius: 0.5rem;"></div>
                                        <div class="black_dos"></div>
                                        <div class="black" style="position: absolute;width: 100%;height: 100%;background: rgb(47, 47, 47);width: 20px;height: 15px;top: 2.5rem;left: -0.5rem;border-radius: 0.5rem;"></div>
                                        <div class="carita" style="text-align: center; color:white; ">
                                            <div>
                                                <div class="estado_juego">
                                                    <img src="../../../img/caritas/Lightning.png" style="width:2.5rem; height: 3rem;" alt="">
                                                </div>
                                                <span style="color:rgb(47, 47, 47); background: rgb(47, 47, 47,0.1); border-radius:0.4rem; padding: 0.2rem"><i class="bi bi-volume-up etapaUnoSeccionDosLFinal_audio me-0 m-0 p-0  " style="font-size:1.1rem"></i>Lección Final</span>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5  col-xl-3 text-center">
                    <div class="progreso_tabla">
                        <div class="progreso_usuario-flex">
                            <span class="fs-4 "><i class="bi bi-volume-up progreso_audio fs-4 me-1 m-0 p-0  " style="font-size:1.1rem"></i>Tu Progreso</span>
                            <div class="num_start">
                                <i class="bi bi-star-fill"></i>
                                <strong>2</strong>
                                <e>Estrellas</e>
                            </div>
                        </div>
                        <div class="rayita"></div>
                        <div class="progress" role="progressbar" aria-label="Warning striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar progress-bar-striped bg-warning" style="width: 1%"></div>
                        </div>
                        <div class="rayita"></div>
                        <div class="">
                            <a href="./progress.php" class="boton_revisar revisar_audio">
                                <img src="" alt="">
                                <span><i class="bi bi-bar-chart-line  me-1 m-0 p-0  " style="font-size:1.1rem"></i>REVISAR</span>
                            </a>
                        </div>
                    </div><br><br>
                    <div class="leaderboard progreso_tabla">
                        <span class="fs-4" style="margin-bottom: 1rem; display: inline-block;">Tabla de clasificación</span>
                        <div class="d-flex  justify-content-around">
                            <div class="">
                                <span class="fs-5 week" style="cursor:pointer;color: #ff864c">Esta semana</span>
                            </div>
                            <div class="">
                                <span class="fs-5 month" style="cursor:pointer;">Este mes</span>
                            </div>
                        </div>
                        <div class="row selection_week_month" style="height: 4px; background: rgb(239, 239, 239);">
                            <div class="col-6 selection_week" style="background: #ff864c; "></div>
                            <div class="col-6 selection_month"></div>
                        </div>
                        <div style="overflow-y: scroll; height: 400px;" class="">
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
        </div>
    </main>
    <br><br><br><br><br><br><br>
    <div data-include="../../includeHTMLsinPhp/player/footer.php"></div>
    <div class="modal fade " id="etapa_1_leccion_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class=" modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header modal-header--comenzar ">
                    <i class="bi bi-volume-up voz_comenzar me-2" style="font-size:2rem"></i>
                    <span class="modal-title fs-5" id="staticBackdropLabel">¡Vamos a Comenzar!</span>
                </div>
                <div class="modal-body">
                    <div class="d-flex  justify-content-evenly">
                        <div><i class="bi bi-stopwatch"></i>Agil: <span>00:00</span></div>
                        <div><i class="bi bi-star-fill"></i>Estrella(s): <span>0</span></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                    <a href="./etapa_1_seccion_1/leccion_1/inicio.php"><button type="button" class="btn btn-primary">Si</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade " id="no_acceso" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class=" modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header modal-header--not_acceso" style="    flex-direction: column;  ">
                    <span style="    display: block; width: 1%;     margin-right: 3rem;" class="animation__icon-delete">⚠️</span>
                </div>
                <div class="modal-body">
                    <div class="d-flex  justify-content-evenly fs-5">
                        <i class="bi bi-volume-up voz_no_acceso me-2" style="font-size:2rem"></i>No podrás ingresar a esta lección, hasta que hayas completado la anterior.
                    </div>
                </div>
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    <div class="scroll scroll_top_btn hidden"><i class="bi bi-arrow-up"></i></div>
    <script src="../../../js/player/read.js" type="module"></script>
    <script src="../../../js/scrollbar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="../../../js/ajax/include-html.js"></script>
</body>

</html>