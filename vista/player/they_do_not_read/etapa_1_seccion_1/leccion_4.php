<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tu puedes | Lección 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://pie-meister.github.io/PieMeister-with-Progress.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" type="image/x-icon" href="../../../../img/icono/icono.ico">
    <link rel="stylesheet" href="../../../../css/player/they_do_read/leccion.css">
    <style>
        main {
            background-image: url(../../../../img/player/fondo.png);
        }
    </style>
</head>

<body>
    <main>
        <div class="actividyContainer">
            <div class="arrowContainer">
                <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#btnSalir">
                    <i class="bi bi-arrow-left-circle-fill fs-1" style="color:gray"></i>
                </button>
            </div>
            <div class="progressContainer">
                <div style="flex-grow: 2">
                    <div class="progress" style="background: rgb(47, 47, 47);" role="progressbar"
                        aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 10%; background: #ff7d3f">
                            10%
                        </div>
                    </div>
                </div>
            </div>
            <div class="startContainer">
                <div class="bi bi-star-fill fs-1 text-warning me-2"></div>
                <span class="start text-warning fs-3">0</span>
            </div>
            <div class="timeContainer">
                <span style="padding-right: 1.5rem;" class="seg-min">Seg</span>
                <span class="countDownNext fs-4"></span>
                <i class="bi bi-stopwatch-fill fs-1"></i>
            </div>
        </div>
        <div class="letterContainer">
            <div class="container-xxl">
                <div class="tableContainer" data-next="1" data-correct-letter="">
                    <button>j</button>
                    <button>j</button>
                    <button>j</button>
                    <button>j</button>
                    <button>j</button>
                    <button>j</button>
                    <button>j</button>
                    <button>j</button>
                    <button>j</button>
                    <button>j</button>
                    <button>j</button>
                    <button>j</button>
                    <button>j</button>

                </div>
                <br>
                <div class="containerIntentos">
                    <span class="intentos">
                        Intentos: <span class="number">3</span>
                    </span>
                </div>
            </div>
        </div>
        <div style="height: 75px;" class="stripes">
            <div class="stripeOne"></div>
            <div class="stripeTwo"></div>
            <div class="stripeThree"></div>
        </div>
        <div class="messengerUserContainer">
            <div class="messengerInformation animate__backInDown" style="display:none">
                <i class="bi bi-volume-up me-1 repeatDictation" style="display: none;"></i>
                <p> Encuentra el error oculto.</p>
            </div>
        </div>
        <audio src="../../../../audio/welcome_jugador/SoundEffects Button.mp3" autoplay class="letterSound"></audio>
        <audio src="../../../../audio/welcome_jugador/wrong.mp3" class="wrongSound" data-wrong="false"></audio>
        <audio src="../../../../audio/welcome_jugador/correct.mp3" class="correctSound"></audio>
        <div class="logoPresentation">
            <div>
                <div class="spinner-border" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <span>Cargado...</span>
            </div>
        </div>
        <div class="countDownBody " style="display:none">
            <div class="">
                <div class="hookOne"></div>
                <div class="hookTwo"></div>
                <div class="hookTres"></div>
                <h2 class="fs-1">3</h2>
                <b class="mb-2 text-center text_1_3">¡Muy bien, comencemos!</b>
            </div>
        </div>
        </div>
        </div>
        <div class="containerResults" style="display: none;">
            <div class="w-auto text-center"
                style="max-width: 500px; min-width: 100px; background: white !important; border-radius: 1rem;">
                <h2 class=""> ¡Completaste la lección! </h2>
                <div class="first">
                    <b>A lo largo de la lección.</b><br>
                    <span class="correctFailed"></span>
                    <hr>
                    <button class="siguiente">Siguiente <i class="bi bi-caret-right"></i></button>
                </div>
                <div class="last" style="display: none;">
                    <span class="fs-4 motivationalMessage"></span>
                    <h3 class="fs-1 percentage">20%</h3>
                    <span>¡Has ganado <span class="totalStar"></span> Estrellas!</span><br>
                    <hr>
                    <a href="../read.php" class="text-decoration-none btnContinua mt-3"><strong>CONTINUAR <i
                                class="bi bi-caret-right"></i></strong></a>
                </div>
            </div>
        </div>
        <div class="modal fade " id="btnSalir" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class=" modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header modal-header--comenzar ">
                        <span class="modal-title fs-5" id="staticBackdropLabel">¡Cuidado!</span>
                    </div>
                    <div class="modal-body">
                        <p style="margin-bottom: 0.5rem;">¿Vas a abandonar tu lección y perderás todo el progreso?</p>
                        <span>¿Estás seguro de que quieres abandonar?</span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn " data-bs-dismiss="modal">No</button>
                        <a href="../read.php">
                            <button type="button" class="btn ">Si</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        //Variables

        let $countDownBody = document.querySelector(".countDownBody");
        let $span = document.querySelectorAll(".tableContainer > button");
        let $tableContainer = document.querySelector("[data-correct-letter]");
        let $letterSound = document.querySelector(".letterSound");
        let $wrongSound = document.querySelector(".wrongSound");
        let $correctSound = document.querySelector(".correctSound");
        let $intentosNumber = document.querySelector(".intentos > .number");
        let $starNumber = document.querySelector(".start");
        let $repeatDictation = document.querySelector(".repeatDictation");
        let intentos = 3;
        let randomNumber = 0;
        let incorrectCounter = 0;
        let count = 0;
        let countTotal = 0;
        let correctCounter = 0;



        function letterError(IncorrectCorrect, correctLetter) {
            $span.forEach(clear => {
                clear.innerHTML = "";
                clear.removeAttribute("style")
            })


            let arraySplit = IncorrectCorrect.split("");
            console.log(arraySplit)
            for (let i = 0; i < $span.length; i++) {
                if ($span[i].textContent == "") {
                    $span[i].innerHTML = arraySplit[i]
                }
                if ($span[i].textContent == "undefined") {
                    $span[i].style.display = "none"
                }
            }

            return $tableContainer.setAttribute("data-correct-letter", correctLetter)
        }

        letterError("arresglo", "arreglo")
        console.info($tableContainer.getAttribute("data-correct-letter"))

        //Eventos
        document.addEventListener("mousemove", (e) => {
            if (e.target.matches(".tableContainer > span")) {
                try {
                    $letterSound.play();
                } catch (error) {
                    alert("error");
                }
            }
        });

        document.addEventListener("click", async (e) => {

            if (e.target.matches(".siguiente")) {
                let $last = document.querySelector(".last");
                let $first = document.querySelector(".first");
                $first.style.display = "none";
                $last.classList.add("animationBounceOut");
                $last.removeAttribute("style");
            }

            if (e.target.matches(".tableContainer > button")) {
                if (e.target.textContent == "s" && $tableContainer.getAttribute("data-correct-letter") == "arreglo") {
                    $wrongSound.pause();
                    $correctSound.play();
                    correctCounter++;
                    e.target.style.display = "none"
                    $intentosNumber.textContent = 3;
                    $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                    $span.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.add("hoverVerde")
                            e.disabled = true
                        }
                    })
                    setTimeout(() => {
                        _1_3()
                    }, 1000);

                    setTimeout(() => {
                        $span.forEach(e => {
                            if (e.textContent.length > 0) {
                                e.classList.remove("hoverVerde");
                                e.removeAttribute("disabled")
                            }
                        })
                        defineNextLetter();
                    }, 3000);
                } else {
                    $intentosNumber.textContent = parseInt($intentosNumber.textContent) - 1;
                    incorrectCounter++;
                    $wrongSound.play();
                    $span.forEach(el => {
                        if (el.textContent !== "undefined") {
                            el.classList.add("hoverRed");
                            el.disabled = true
                        }

                    })
                    setTimeout(() => {
                        $span.forEach(e => {
                            if (e.textContent.length !== "undefined") {
                                e.classList.remove("hoverRed");
                                e.removeAttribute("disabled")
                            }
                        })

                    }, 3000);
                    if ($intentosNumber.textContent == 0) {
                        setTimeout(() => {
                            _1_3_again()
                            setTimeout(() => {
                                defineNextLetter()
                            }, 2000);
                        }, 1000);


                    }
                }
                if (e.target.textContent == "m" && $tableContainer.getAttribute("data-correct-letter") == "insegura") {
                    $wrongSound.pause();
                    $correctSound.play();
                    correctCounter++;
                    $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                    e.target.innerHTML = "n"
                    $span.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.add("hoverVerde")
                            e.disabled = true
                        }
                    })
                    setTimeout(() => {
                        _1_3()
                    }, 1000);
                    setTimeout(async () => {
                        $span.forEach(e => {
                            if (e.textContent.length > 0) {
                                e.classList.remove("hoverVerde");
                                e.removeAttribute("disabled")
                            }
                        })
                        await defineNextLetter();
                    }, 3000);
                }
                if (e.target.textContent == "b" && $tableContainer.getAttribute("data-correct-letter") == "vaca") {
                    $wrongSound.pause();
                    $correctSound.play();
                    $intentosNumber.textContent = 3;
                    correctCounter++;

                    $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                    e.target.style.display = "none"
                    $span.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.add("hoverVerde")
                            e.disabled = true
                        }
                    })
                    setTimeout(() => {
                        _1_3()
                    }, 1000);
                    setTimeout(() => {
                        $span.forEach(e => {
                            if (e.textContent.length > 0) {
                                e.classList.remove("hoverVerde")
                                e.removeAttribute("disabled")
                            }
                        })
                        defineNextLetter()


                    }, 3000);
                }
                if (e.target.textContent == "p" && $tableContainer.getAttribute("data-correct-letter") == "hola") {
                    $wrongSound.pause();
                    $correctSound.play();
                    correctCounter++;
                    $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                    $intentosNumber.textContent = 3;
                    e.target.style.display = "none"
                    $span.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.add("hoverVerde");
                            e.disabled = true
                        }
                    })
                    setTimeout(() => {
                        _1_3()
                    }, 1000);
                    setTimeout(() => {
                        $span.forEach(e => {
                            if (e.textContent.length > 0) {
                                e.classList.remove("hoverVerde");
                                e.removeAttribute("disabled")
                            }
                        })
                        defineNextLetter();

                    }, 3000);
                }
                if (e.target.textContent == "1" && $tableContainer.getAttribute("data-correct-letter") == "cinco") {
                    $wrongSound.pause();
                    $correctSound.play();
                    correctCounter++;
                    $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                    $intentosNumber.textContent = 3;
                    e.target.style.display = "none"
                    $span.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.add("hoverVerde");
                            e.disabled = true;
                        }
                    })
                    setTimeout(() => {
                        _1_3()
                    }, 1000);
                    setTimeout(() => {
                        $span.forEach(e => {
                            if (e.textContent.length > 0) {
                                e.classList.remove("hoverVerde");
                                e.removeAttribute("disabled")
                            }
                        })
                        defineNextLetter();

                    }, 3000);
                }
                if (e.target.textContent == "s" && $tableContainer.getAttribute("data-correct-letter") == "ferrocarril") {
                    $wrongSound.pause();
                    $intentosNumber.textContent = 3;
                    e.target.style.display = "none"
                    $correctSound.play();
                    correctCounter++;
                    $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                    e.target.style.display = "none"
                    $span.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.add("hoverVerde");
                            e.disabled = true
                        }
                    })
                    setTimeout(() => {
                        _1_3()
                    }, 1000);

                    setTimeout(() => {
                        $span.forEach(e => {
                            if (e.textContent.length > 0) {
                                e.classList.remove("hoverVerde");
                                e.removeAttribute("disabled")

                            }
                        })
                        defineNextLetter();

                    }, 3000);
                }
                if (e.target.textContent == "l" && $tableContainer.getAttribute("data-correct-letter") == "reloj") {
                    $wrongSound.pause();
                    $correctSound.play();
                    correctCounter++;
                    $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                    $intentosNumber.textContent = 3;
                    e.target.style.display = "none"
                    $span.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.add("hoverVerde");
                            e.disabled = true;
                        }
                    })
                    setTimeout(() => {
                        _1_3()
                    }, 1000);
                    setTimeout(() => {
                        $span.forEach(e => {
                            if (e.textContent.length > 0) {
                                e.classList.remove("hoverVerde");
                                e.removeAttribute("disabled")
                            }
                        })
                        defineNextLetter();

                    }, 3000);

                }
            }

            if (e.target.textContent == "q" && $tableContainer.getAttribute("data-correct-letter") == "zapatillas") {
                $wrongSound.pause();
                $correctSound.play();
                correctCounter++;
                $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                $intentosNumber.textContent = 3;
                e.target.innerHTML = "p"
                $span.forEach(e => {
                    if (e.textContent.length > 0) {
                        e.classList.add("hoverVerde");
                        e.disabled = true;
                    }
                })
                setTimeout(() => {
                    _1_3()
                }, 1000);
                setTimeout(() => {
                    $span.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.remove("hoverVerde");
                            e.removeAttribute("disabled")
                        }
                    })
                    defineNextLetter();

                }, 3000);

            }
            if (e.target.textContent == "u" && $tableContainer.getAttribute("data-correct-letter") == "llave") {
                $wrongSound.pause();
                $correctSound.play();
                correctCounter++;
                $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                $intentosNumber.textContent = 3;
                e.target.innerHTML = "v"
                $span.forEach(e => {
                    if (e.textContent.length > 0) {
                        e.classList.add("hoverVerde");
                        e.disabled = true;
                    }
                })
                setTimeout(() => {
                    _1_3()
                }, 1000);
                setTimeout(() => {
                    $span.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.remove("hoverVerde");
                            e.removeAttribute("disabled")
                        }
                    })
                    defineNextLetter();

                }, 3000);

            }
            if (e.target.textContent == "d" && $tableContainer.getAttribute("data-correct-letter") == "sombrero") {
                $wrongSound.pause();
                correctCounter++;
                $correctSound.play();
                $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                $intentosNumber.textContent = 3;
                e.target.innerHTML = "b"
                $span.forEach(e => {
                    if (e.textContent.length > 0) {
                        e.classList.add("hoverVerde");
                        e.disabled = true;
                    }
                })
                setTimeout(() => {
                    _1_3()
                }, 1000);
                setTimeout(() => {
                    $span.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.remove("hoverVerde");
                            e.removeAttribute("disabled")
                        }
                    })
                    defineNextLetter();

                }, 3000);

            }
            if (e.target.textContent == "ɐ" && $tableContainer.getAttribute("data-correct-letter") == "escritura") {
                $wrongSound.pause();
                $correctSound.play();
                correctCounter++;
                $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                $intentosNumber.textContent = 3;
                e.target.innerHTML = "a"
                $span.forEach(e => {
                    if (e.textContent.length > 0) {
                        e.classList.add("hoverVerde");
                        e.disabled = true;
                    }
                })
                setTimeout(() => {
                    _1_3()
                }, 1000);
                setTimeout(() => {
                    $span.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.remove("hoverVerde");
                            e.removeAttribute("disabled")
                        }
                    })
                    defineNextLetter();

                }, 3000);

            }
            if (e.target.textContent == "d" && $tableContainer.getAttribute("data-correct-letter") == "sabores") {
                $wrongSound.pause();
                $correctSound.play();
                correctCounter++;
                $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                $intentosNumber.textContent = 3;
                e.target.innerHTML = "b"
                $span.forEach(e => {
                    if (e.textContent.length > 0) {
                        e.classList.add("hoverVerde");
                        e.disabled = true;
                    }
                })
                setTimeout(() => {
                    _1_3()
                }, 1000);
                setTimeout(() => {
                    $span.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.remove("hoverVerde");
                            e.removeAttribute("disabled")
                        }
                    })
                    defineNextLetter();

                }, 3000);

            }
            if (e.target.textContent == "m" && $tableContainer.getAttribute("data-correct-letter") == "balón") {
                $wrongSound.pause();
                $correctSound.play();
                correctCounter++;
                $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                $intentosNumber.textContent = 3;
                e.target.innerHTML = "n"
                $span.forEach(e => {
                    if (e.textContent.length > 0) {
                        e.classList.add("hoverVerde");
                        e.disabled = true;
                    }
                })
                setTimeout(() => {
                    _1_3()
                }, 1000);
                setTimeout(() => {
                    $span.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.remove("hoverVerde");
                            e.removeAttribute("disabled")
                        }
                    })
                    defineNextLetter();

                }, 3000);

            }
            if (e.target.textContent == "d" && $tableContainer.getAttribute("data-correct-letter") == "existente") {
                $wrongSound.pause();
                $correctSound.play();
                correctCounter++;
                $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                $intentosNumber.textContent = 3;
                e.target.innerHTML = "n"
                $span.forEach(e => {
                    if (e.textContent.length > 0) {
                        e.classList.add("hoverVerde");
                        e.disabled = true;
                    }
                })
                setTimeout(() => {
                    _1_3()
                }, 1000);
                setTimeout(() => {
                    $span.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.remove("hoverVerde");
                            e.removeAttribute("disabled")
                        }
                    })
                    defineNextLetter();

                }, 3000);

            }
            if (e.target.textContent == "v" && $tableContainer.getAttribute("data-correct-letter") == "tortuga") {
                $wrongSound.pause();
                $correctSound.play();
                correctCounter++;

                $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                $intentosNumber.textContent = 3;
                e.target.innerHTML = "u"
                $span.forEach(e => {
                    if (e.textContent.length > 0) {
                        e.classList.add("hoverVerde");
                        e.disabled = true;
                    }
                })
                setTimeout(() => {
                    _1_3()
                }, 1000);
                setTimeout(() => {
                    $span.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.remove("hoverVerde");
                            e.removeAttribute("disabled")
                        }
                    })
                    defineNextLetter();

                }, 3000);

            }
            if (e.target.textContent == "a" && $tableContainer.getAttribute("data-correct-letter") == "sofá") {
                $wrongSound.pause();
                $correctSound.play();
                correctCounter++;

                $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                $intentosNumber.textContent = 3;
                e.target.innerHTML = "á"
                $span.forEach(e => {
                    if (e.textContent.length > 0) {
                        e.classList.add("hoverVerde");
                        e.disabled = true;
                    }
                })
                setTimeout(() => {
                    _1_3()
                }, 1000);
                setTimeout(() => {
                    $span.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.remove("hoverVerde");
                            e.removeAttribute("disabled")
                        }
                    })
                    defineNextLetter();

                }, 3000);

            }
            if (e.target.textContent == "o" && $tableContainer.getAttribute("data-correct-letter") == "canción") {
                $wrongSound.pause();
                $correctSound.play();
                correctCounter++;

                $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                $intentosNumber.textContent = 3;
                e.target.innerHTML = "ó"
                $span.forEach(e => {
                    if (e.textContent.length > 0) {
                        e.classList.add("hoverVerde");
                        e.disabled = true;
                    }
                })
                setTimeout(() => {
                    _1_3()
                }, 1000);
                setTimeout(() => {
                    $span.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.remove("hoverVerde");
                            e.removeAttribute("disabled")
                        }
                    })
                    defineNextLetter();

                }, 3000);

            }
            if (e.target.textContent == "u" && $tableContainer.getAttribute("data-correct-letter") == "tú") {
                $wrongSound.pause();
                $correctSound.play();
                correctCounter++;
                $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                $intentosNumber.textContent = 3;
                e.target.innerHTML = "ú"
                $span.forEach(e => {
                    if (e.textContent.length > 0) {
                        e.classList.add("hoverVerde");
                        e.disabled = true;
                    }
                })
                setTimeout(() => {
                    _1_3()
                }, 1000);
                setTimeout(() => {
                    $span.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.remove("hoverVerde");
                            e.removeAttribute("disabled")
                        }
                    })
                    defineNextLetter();

                }, 3000);

            }
            if (e.target.textContent == "u" && $tableContainer.getAttribute("data-correct-letter") == "menú") {
                $wrongSound.pause();
                $correctSound.play();
                correctCounter++;

                $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                $intentosNumber.textContent = 3;
                e.target.innerHTML = "ú"
                $span.forEach(e => {
                    if (e.textContent.length > 0) {
                        e.classList.add("hoverVerde");
                        e.disabled = true;
                    }
                })
                setTimeout(() => {
                    _1_3()
                }, 1000);
                setTimeout(() => {
                    $span.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.remove("hoverVerde");
                            e.removeAttribute("disabled")
                        }
                    })
                    defineNextLetter();

                }, 3000);

            }
            if (e.target.textContent == "s" && $tableContainer.getAttribute("data-correct-letter") == "Venezuela") {
                $wrongSound.pause();
                $correctSound.play();
                correctCounter++;

                $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                $intentosNumber.textContent = 3;
                e.target.innerHTML = "z"
                $span.forEach(e => {
                    if (e.textContent.length > 0) {
                        e.classList.add("hoverVerde");
                        e.disabled = true;
                    }
                })
                setTimeout(() => {
                    _1_3()
                }, 1000);
                setTimeout(() => {
                    $span.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.remove("hoverVerde");
                            e.removeAttribute("disabled")
                        }
                    })
                    defineNextLetter();

                }, 3000);
            }
        })

        let _1_3_text = document.querySelector(".text_1_3");
        const countdownElement = document.querySelector(".countDownBody > div > h2");

        function _1_3_again() {
            let count = 3;
            _1_3_text.innerHTML = "¡Lo intentamos de nuevo!"

            countdownElement.innerHTML = "3";
            $countDownBody.removeAttribute("style");
            let countdown = setInterval(() => {
                count--;
                countdownElement.textContent = count;
                if (count === 0) {
                    clearInterval(countdown);
                    $countDownBody.style.display = "none";
                }
            }, 1000);
        }

        function End_Game() {
            let $progressBar = document.querySelector(".progress-bar");
            $progressBar.innerHTML = "100%";
            $progressBar.style.width = "100%";
            let $containerResults = document.querySelector(".containerResults");
            let $totalStar = document.querySelector(".totalStar");
            let $motivationalMessage = document.querySelector(".motivationalMessage");
            let $percentage = document.querySelector(".percentage");
            let $correctFailed = document.querySelector(".correctFailed");
            $totalStar.innerHTML = $starNumber.textContent;
            if (incorrectCounter == 0) {
                $percentage.innerHTML = "100%";
                $motivationalMessage.innerHTML = "¡Lo hiciste increíble!";
            }
            if (incorrectCounter > 0 && incorrectCounter < 5) {
                $percentage.innerHTML = "75%";
                $motivationalMessage.innerHTML = "¡Oh, Bastante bien!";
            }

            if (incorrectCounter > 5 && incorrectCounter < 15) {
                $percentage.innerHTML = "50%";
                $motivationalMessage.innerHTML = "¡Lo hiciste bien!";
            }
            if (incorrectCounter > 15 && incorrectCounter < 20) {
                $percentage.innerHTML = "30%";
                $motivationalMessage.innerHTML = "No está mal, hay que mejorar.";
            }
            if (incorrectCounter > 20) {
                $percentage.innerHTML = "20%";
                $motivationalMessage.style.display = "none";
            }
            console.info(incorrectCounter);
            $containerResults.removeAttribute("style");
            document.querySelector(".containerResults  > div").classList.add("animationBounce");
            //failed
            if (incorrectCounter == 0) {
                $correctFailed.innerHTML = `Has acertado ${correctCounter} veces y no has cometido ningún error.`;
            } else if (incorrectCounter == 1) {
                $correctFailed.innerHTML = `Has acertado ${correctCounter} veces y has fallado solo una vez.`;
            } else {
                $correctFailed.innerHTML = `Has acertado ${correctCounter} veces y has fallado ${incorrectCounter} veces.`;
            }
        }


        function _1_3() {
            let count = 3;
            _1_3_text.innerHTML = "¡Muy bien, comencemos!"

            countdownElement.innerHTML = "3";
            $countDownBody.removeAttribute("style");
            let countdown = setInterval(() => {
                count--;
                countdownElement.textContent = count;
                if (count === 0) {
                    clearInterval(countdown);
                    $countDownBody.style.display = "none";
                }
            }, 1000);
        }

        function defineNextLetter() {
            $intentosNumber.textContent = 3;
            switch ($tableContainer.getAttribute("data-next")) {
                case "0":
                    randomNumber = Math.floor(Math.random() * 18);
                    letterError("imsegura", "insegura");
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;
                case "1":
                    randomNumber = Math.floor(Math.random() * 18);
                    letterError("bvaca", "vaca");
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;
                case "2":
                    randomNumber = Math.floor(Math.random() * 18);
                    letterError("hopla", "hola");
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;
                case "3":
                    randomNumber = Math.floor(Math.random() * 18);
                    letterError("cinco1", "cinco");
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;
                case "4":
                    randomNumber = Math.floor(Math.random() * 18);
                    letterError("fesrrocarril", "ferrocarril");
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;
                case "5":
                    randomNumber = Math.floor(Math.random() * 18);
                    letterError("relloj", "reloj");
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;
                case "6":
                    randomNumber = Math.floor(Math.random() * 18);
                    letterError("existedte", "existente");
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;

                case "7":
                    randomNumber = Math.floor(Math.random() * 18);
                    letterError("zaqatillas", "zapatillas");
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;
                case "8":
                    randomNumber = Math.floor(Math.random() * 18);
                    letterError("llaue", "llave");
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;
                case "9":
                    randomNumber = Math.floor(Math.random() * 18);
                    letterError("somdrero", "sombrero");
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;
                case "10":
                    randomNumber = Math.floor(Math.random() * 18);
                    letterError("escriturɐ", "escritura");
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;
                case "11":
                    randomNumber = Math.floor(Math.random() * 18);
                    letterError("sadores", "sabores");
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;
                case "12":
                    randomNumber = Math.floor(Math.random() * 18);
                    letterError("zaqatillas", "zapatillas");
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;
                case "13":
                    randomNumber = Math.floor(Math.random() * 18);
                    letterError("balóm", "balón");
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;
                case "14":
                    randomNumber = Math.floor(Math.random() * 18);
                    letterError("sofa", "sofá");
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;
                case "15":
                    randomNumber = Math.floor(Math.random() * 18);
                    letterError("cancion", "canción");
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;
                case "16":
                    randomNumber = Math.floor(Math.random() * 18);
                    letterError("tu", "tú");
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;
                case "17":
                    randomNumber = Math.floor(Math.random() * 18);
                    letterError("menu", "menú");
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;
                case "18":
                    randomNumber = Math.floor(Math.random() * 18);
                    letterError("Venesuela", "Venezuela");
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;
                case "19":
                    randomNumber = Math.floor(Math.random() * 18);
                    letterError("tortvga", "tortuga");
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;



                default:

                    break;
            }

        }

        async function temporizador() {
            const CountdownNext = document.querySelector(".countDownNext");
            let $segMin = document.querySelector(".seg-min")
            let countForNext = 60;
            let countdown = setInterval(() => {
                countForNext--;
                if (countForNext < 10) {
                    CountdownNext.textContent = `1:0${countForNext}`;
                }
                if (countForNext > 10) {
                    CountdownNext.textContent = `1:${countForNext}`;
                }
                if (countForNext === 0) {
                    clearInterval(countdown);
                    temporizadorSegundaParte()
                }
            }, 1000);
        }

        function temporizadorSegundaParte() {
            const CountdownNext = document.querySelector(".countDownNext");
            let $segMin = document.querySelector(".seg-min")
            let countForNext = 60;
            let countdown = setInterval(() => {
                countForNext--;
                CountdownNext.textContent = `${countForNext}`;
                if (countForNext === 0) {
                    clearInterval(countdown);
                    End_Game()
                }
            }, 1000);
        }



        function voiceExercise() {
            let texto = `Encuentra el error oculto.`;
            const hablar = (texto) =>
                speechSynthesis.speak(new SpeechSynthesisUtterance(texto));
            return hablar(texto);
        }
        setTimeout(() => {
            let $main = document.querySelector("main");
            $main.removeChild($main.children[7]);
            setTimeout(async () => {
                $countDownBody.removeAttribute("style");
                _1_3();
                voiceExercise();
                setTimeout(() => {
                    temporizador()
                }, 2000);
                setTimeout(() => {
                    let $messengerInformation = document.querySelector(
                        ".messengerInformation"
                    );
                    $messengerInformation.removeAttribute("style");
                    $messengerInformation.classList.add("AnimationMessengerInformation");


                }, 4000);
            }, 0);
        }, 1500);
    </script>
</body>

</html>