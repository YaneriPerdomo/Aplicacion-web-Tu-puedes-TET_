<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tu puedes | Lección 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://pie-meister.github.io/PieMeister-with-Progress.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" type="image/x-icon" href="../../../../img/icono/icono.ico">
    <link rel="stylesheet" href="../../../../css/player/they_do_read/lecciones.css">
    <link rel="stylesheet" href="../../../../css/player/they_do_read/alteraciones_leccion_7.css">
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
                <button type="span" class="btn " data-bs-toggle="modal" data-bs-target="#btnSalir">
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
                <div class="tableContainer" data-next="3" data-correct-word="">
                    <button draggable="false"></button>
                    <button draggable="false"></button>
                    <button draggable="false"></button>
                    <button draggable="false"></button>
                    <button draggable="false"></button>
                    <button draggable="false"></button>
                </div>
                <br>
                <div class="lettersDrag">
                    <button draggable="true" style="color:green"></button>
                    <button draggable="true">1</button>
                    <button draggable="true">2</button>
                    <button draggable="true">3</button>
                    <button draggable="true">4</button>
                    <button draggable="true">5</button>
                    <button draggable="true">6</button>
                </div>
                <hr>
                <div class="verificar">
                    <input type="hidden">
                </div>
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
                <i class="bi bi-volume-up me-1 repeatNormal" style="cursor:pointer"></i>
                <p> Escucha y construye la palabra correcta.</p>
                <svg xmlns="http://www.w3.org/2000/svg" style="cursor:pointer" version="1.1" width="24px" height="24px"
                    style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g>
                        <path style="opacity:0.952" class="repeatSlow" fill="#f5f5f5"
                            d="M 17.5,4.5 C 24.3198,7.23069 24.1531,9.89735 17,12.5C 16.5045,14.4727 16.3379,16.4727 16.5,18.5C 12.4908,17.3859 8.49076,17.3859 4.5,18.5C 2.6274,18.5177 2.29407,18.0177 3.5,17C 2.83333,16.3333 2.16667,15.6667 1.5,15C 0.967038,6.86626 4.6337,3.86626 12.5,6C 13.3333,6.83333 14.1667,7.66667 15,8.5C 15.4796,6.86698 16.3129,5.53365 17.5,4.5 Z" />
                    </g>
                </svg>

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
        <div class="countDownBody " style="display: none;">
            <div class="">
                <div class="hookOne"></div>
                <div class="hookTwo"></div>
                <div class="hookTres"></div>
                <h2 class="fs-1">3</h2>
                <b class="mb-2 text-center text_1_3">¡Comencemos!</b>
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
                    <span class="siguiente">Siguiente <i class="bi bi-caret-right"></i></span>
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
                    <div class="modal-body ">
                        <p style="margin-bottom: 0.5rem;">¿Vas a abandonar tu lección y perderás todo el progreso?</p>
                        <span>¿Estás seguro de que quieres abandonar?</span>
                    </div>
                    <div class="modal-footer">
                        <span type="span" class="btn " data-bs-dismiss="modal">No</span>
                        <a href="../read.php">
                            <span type="span" class="btn ">Si</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <script src="../../../../js/player/onBeforeUnload.js" type="module"></script>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        let $buttonsDrag = document.querySelectorAll(".lettersDrag > button");
        let $buttonTable = document.querySelectorAll(".tableContainer > button");
        let $tableContainer = document.querySelector(".tableContainer");

        let $progressBar = document.querySelector(".progress-bar");
        let $countDownBody = document.querySelector(".countDownBody");
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
        document.addEventListener("DOMContentLoaded", async e => {

            if (localStorage.getItem("dragContent") === null) {
                await localStorage.setItem("dragContent", null)
            }
            if (localStorage.getItem("dragNumber") === null) {
                await localStorage.setItem("dragNumber", null)
            }

            letterToDrag("igotebj", "bigote");

        })

        async function letterToDrag(letters, correctWord) {
            await $buttonsDrag.forEach(clear => {
                clear.innerHTML = "";
                clear.removeAttribute("style")
                clear.removeAttribute("class")
                clear.setAttribute("draggable", "true")
            });
            await $buttonTable.forEach(clear => {
                clear.innerHTML = "";
                clear.setAttribute("draggable", "false");
            })


            let arraySplit = letters.split("");
            console.log(arraySplit)

            //Cada letra corresponde a su respectiva etiqueta.
            for (let i = 0; i < $buttonsDrag.length; i++) {
                if ($buttonsDrag[i].textContent == "") {
                    $buttonsDrag[i].innerHTML = arraySplit[i]
                }
            }

            return $tableContainer.setAttribute("data-correct-word", correctWord)
        }





        //Arrastra y soltar

        //funciones

        function dragNumberFalse() {
            return $buttonsDrag[localStorage.getItem("dragNumber")].
            setAttribute("draggable", "false");
            $buttonTable[localStorage.getItem("dragNumber")].classList.remove("buttonVisibility")
            console.log("am ")

        }

        document.addEventListener("mousemove", (e) => {
            if (e.target.matches(".tableContainer > button") || e.target.matches(".lettersDrag > button")) {
                try {
                    $letterSound.play();
                } catch (error) {
                    alert("error");
                }
            }
        });

        async function checkLabels() {
            let contador = 0;
            $buttonTable.forEach(e => {
                if (e.textContent.length !== 0) {
                    contador++;
                }
            })
            if (contador == 6) {
                let stringLabels = "";
                await $buttonTable.forEach(e => {
                    stringLabels += e.textContent
                })

                //Correct
                if ($tableContainer.getAttribute("data-correct-word") == stringLabels) {
                    $wrongSound.pause();
                    $correctSound.play();
                    correctCounter++;
                    if (parseInt($progressBar.textContent) < 101) {
                        $progressBar.innerHTML = `${parseInt($progressBar.textContent) + 5}%`;
                        $progressBar.style.width = `${parseInt($progressBar.textContent) + 5}%`;
                    }
                    $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                    $intentosNumber.textContent = 3;
                    $buttonTable.forEach(el => {
                        el.classList.add("hoverVerde");
                        el.draggable = false;
                    })
                    setTimeout(() => {
                        $buttonTable.forEach(e => {
                            e.classList.remove("hoverVerde");
                            e.draggable = true;

                        })
                        setTimeout(async () => {
                            await defineNextWord()
                            await _1_3();
                        }, 0);
                    }, 3000);
                } else {
                    $wrongSound.play();
                    $intentosNumber.textContent = parseInt($intentosNumber.textContent) - 1;
                    incorrectCounter++;
                    if ($intentosNumber.textContent == 0) {
                        setTimeout(async () => {
                            await defineNextWord()
                            await _1_3_again();
                        }, 3000);
                    }
                    $buttonTable.forEach(el => {
                        el.classList.add("hoverRed");
                        el.draggable = false;
                    })
                    setTimeout(() => {
                        $buttonTable.forEach(e => {
                            e.classList.remove("hoverRed");
                            e.draggable = true;
                        })
                    }, 3000);
                }
            }
        }

        async function defineNextWord() {
            $intentosNumber.textContent = 3;
            switch ($tableContainer.getAttribute("data-next")) {
                case "0":
                    randomNumber = Math.floor(Math.random() * 7);
                    await letterToDrag("casotrf", "castor")
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;
                case "1":
                    randomNumber = Math.floor(Math.random() * 7);
                    await letterToDrag("igotebd", "bigote");
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;
                case "2":
                    randomNumber = Math.floor(Math.random() * 7);
                    await letterToDrag("bancolm", "blanco");
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;
                case "3":
                    randomNumber = Math.floor(Math.random() * 7);
                    await letterToDrag("plnarti", "pintar");
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;
                case "4":
                    randomNumber = Math.floor(Math.random() * 7);
                    await letterToDrag("sonbram", "sombra");
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;
                case "5":
                    randomNumber = Math.floor(Math.random() * 7);
                    await letterToDrag("ínldfme", "delfín");
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;
                case "6":
                    randomNumber = Math.floor(Math.random() * 7);
                    await letterToDrag("brenomd", "nombre");
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;

                case "7":
                    randomNumber = Math.floor(Math.random() * 7);
                    await letterToDrag("numdob", "mundo");
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;
                default:
                    break;
            }

        }

        function lettersDragValidarTable() {
            $buttonTable.forEach(element => {
                if (element.textContent == localStorage.getItem("dragContent")) {
                    element.classList.remove("buttonVisibility");
                    element.innerHTML = "";
                }
            })

        }

        function lettersDragValidar() {
            $buttonsDrag.forEach(element => {
                if (element.textContent == localStorage.getItem("dragContent")) {
                    element.classList.add("buttonVisibility");
                    element.innerHTML = "";
                }
            })
        }


        $buttonsDrag[0].addEventListener("drag", async e => {
            await localStorage.setItem("dragContent", `${$buttonsDrag[0].textContent}`);
            await localStorage.setItem("dragNumber", 0);
        });


        $buttonsDrag[1].addEventListener("drag", async e => {
            await localStorage.setItem("dragContent", `${$buttonsDrag[1].textContent}`);
            await localStorage.setItem("dragNumber", 1);

        });


        //0
        $buttonsDrag[0].addEventListener("dragover", async e => {
            e.preventDefault();
        });

        $buttonTable[0].addEventListener("drag", async e => {
            await localStorage.setItem("dragContent", `${$buttonTable[0].textContent}`);
            await localStorage.setItem("dragNumber", 0);

        });
        $buttonTable[0].addEventListener("dragover", async e => {
            e.preventDefault();
        });


        $buttonsDrag[0].addEventListener("drop", async e => {
            if (e.target.textContent.length == 0) {
                e.target.textContent = localStorage.getItem("dragContent");
                e.target.setAttribute("draggable", "true");
                e.target.classList.remove("buttonVisibility")
                $buttonTable[localStorage.getItem("dragNumber")].classList.remove("buttonVisibility")
                $buttonTable[localStorage.getItem("dragNumber")].innerHTML = ""
                $buttonTable[localStorage.getItem("dragNumber")].setAttribute("draggable", "false")

            }


        })



        //1
        $buttonsDrag[1].addEventListener("dragover", async e => {
            e.preventDefault();
        });

        $buttonTable[1].addEventListener("drag", async e => {
            await localStorage.setItem("dragContent", `${$buttonTable[1].textContent}`);
            await localStorage.setItem("dragNumber", 1);

        });
        $buttonTable[1].addEventListener("dragover", async e => {
            e.preventDefault();
        });


        $buttonsDrag[1].addEventListener("drop", async e => {
            if (e.target.textContent.length == 0) {
                e.target.textContent = localStorage.getItem("dragContent");
                e.target.setAttribute("draggable", "true");
                e.target.classList.remove("buttonVisibility")
                $buttonTable[localStorage.getItem("dragNumber")].classList.remove("buttonVisibility")
                $buttonTable[localStorage.getItem("dragNumber")].innerHTML = ""
                $buttonTable[localStorage.getItem("dragNumber")].setAttribute("draggable", "false")
            }


        })



        //2 


        $buttonsDrag[2].addEventListener("dragover", async e => {
            e.preventDefault();
        });

        $buttonTable[2].addEventListener("drag", async e => {
            await localStorage.setItem("dragContent", `${$buttonTable[2].textContent}`);
            await localStorage.setItem("dragNumber", 2);

        });
        $buttonTable[2].addEventListener("dragover", async e => {
            e.preventDefault();
        });


        $buttonsDrag[2].addEventListener("drop", async e => {
            if (e.target.textContent.length == 0) {
                e.target.textContent = localStorage.getItem("dragContent");
                e.target.setAttribute("draggable", "true");
                e.target.classList.remove("buttonVisibility")
                $buttonTable[localStorage.getItem("dragNumber")].classList.remove("buttonVisibility")
                $buttonTable[localStorage.getItem("dragNumber")].innerHTML = ""
                $buttonTable[localStorage.getItem("dragNumber")].setAttribute("draggable", "false")

            }
        });

        //

        //3

        $buttonsDrag[3].addEventListener("dragover", async e => {
            e.preventDefault();
        });

        $buttonTable[3].addEventListener("drag", async e => {
            await localStorage.setItem("dragContent", `${$buttonTable[3].textContent}`);
            await localStorage.setItem("dragNumber", 3);

        });
        $buttonTable[3].addEventListener("dragover", async e => {
            e.preventDefault();
        });


        $buttonsDrag[3].addEventListener("drop", async e => {
            if (e.target.textContent.length == 0) {
                e.target.textContent = localStorage.getItem("dragContent");
                e.target.setAttribute("draggable", "true");
                e.target.classList.remove("buttonVisibility")
                $buttonTable[localStorage.getItem("dragNumber")].classList.remove("buttonVisibility")
                $buttonTable[localStorage.getItem("dragNumber")].innerHTML = ""
                $buttonTable[localStorage.getItem("dragNumber")].setAttribute("draggable", "false")

            }
        });

        //

        //4

        $buttonsDrag[4].addEventListener("dragover", async e => {
            e.preventDefault();
        });

        $buttonTable[4].addEventListener("drag", async e => {
            await localStorage.setItem("dragContent", `${$buttonTable[4].textContent}`);
            await localStorage.setItem("dragNumber", 4);

        });
        $buttonTable[4].addEventListener("dragover", async e => {
            e.preventDefault();
        });


        $buttonsDrag[4].addEventListener("drop", async e => {
            if (e.target.textContent.length == 0) {
                e.target.textContent = localStorage.getItem("dragContent");
                e.target.setAttribute("draggable", "true");
                e.target.classList.remove("buttonVisibility")
                $buttonTable[localStorage.getItem("dragNumber")].classList.remove("buttonVisibility")
                $buttonTable[localStorage.getItem("dragNumber")].innerHTML = ""
                $buttonTable[localStorage.getItem("dragNumber")].setAttribute("draggable", "false")

            }
        });

        //

        //5

        $buttonsDrag[5].addEventListener("dragover", async e => {
            e.preventDefault();
        });

        $buttonTable[5].addEventListener("drag", async e => {
            await localStorage.setItem("dragContent", `${$buttonTable[5].textContent}`);
            await localStorage.setItem("dragNumber", 5);

        });
        $buttonTable[5].addEventListener("dragover", async e => {
            e.preventDefault();
        });


        $buttonsDrag[5].addEventListener("drop", async e => {
            if (e.target.textContent.length == 0) {
                e.target.textContent = localStorage.getItem("dragContent");
                e.target.setAttribute("draggable", "true");
                e.target.classList.remove("buttonVisibility")
                $buttonTable[localStorage.getItem("dragNumber")].classList.remove("buttonVisibility")
                $buttonTable[localStorage.getItem("dragNumber")].innerHTML = ""
                $buttonTable[localStorage.getItem("dragNumber")].setAttribute("draggable", "false")

            }
        });

        //
        //
        //6
        $buttonsDrag[6].addEventListener("dragover", async e => {
            e.preventDefault();
        });

        $buttonsDrag[6].addEventListener("drop", async e => {
            if (e.target.textContent.length == 0) {
                e.target.textContent = localStorage.getItem("dragContent");
                e.target.setAttribute("draggable", "true");
                e.target.classList.remove("buttonVisibility")
                $buttonTable[localStorage.getItem("dragNumber")].classList.remove("buttonVisibility")
                $buttonTable[localStorage.getItem("dragNumber")].innerHTML = ""
                $buttonTable[localStorage.getItem("dragNumber")].setAttribute("draggable", "false")

            }
        });

        //

        $buttonsDrag[2].addEventListener("drag", async e => {
            await localStorage.setItem("dragContent", `${$buttonsDrag[2].textContent}`);
            localStorage.setItem("dragNumber", 2);
        });
        $buttonsDrag[3].addEventListener("drag", async e => {
            await localStorage.setItem("dragContent", `${$buttonsDrag[3].textContent}`);
            await localStorage.setItem("dragNumber", 3)
        });
        $buttonsDrag[4].addEventListener("drag", async e => {
            await localStorage.setItem("dragContent", `${$buttonsDrag[4].textContent}`);
            await localStorage.setItem("dragNumber", 4)
        });
        $buttonsDrag[5].addEventListener("drag", async e => {
            await localStorage.setItem("dragContent", `${$buttonsDrag[5].textContent}`);
            await localStorage.setItem("dragNumber", 5);
        });
        $buttonsDrag[6].addEventListener("drag", async e => {
            await localStorage.setItem("dragContent", `${$buttonsDrag[6].textContent}`);
            await localStorage.setItem("dragNumber", 6);
        });


        $buttonTable[0].addEventListener("dragover", async e => {
            e.preventDefault();
            console.log("dragover")

        })

        $buttonTable[0].addEventListener("dragover", async e => {
            e.preventDefault();
            console.log("dragover")

        })
        $buttonTable[1].addEventListener("dragover", async e => {
            e.preventDefault();
            console.log("dragover")
        })
        $buttonTable[2].addEventListener("dragover", async e => {
            e.preventDefault();
            console.log("dragover")
        })
        $buttonTable[3].addEventListener("dragover", async e => {
            e.preventDefault();
            console.log("dragover")
        })
        $buttonTable[4].addEventListener("dragover", async e => {
            e.preventDefault();
            console.log("dragover")
        })
        $buttonTable[5].addEventListener("dragover", async e => {
            e.preventDefault();
            console.log("dragover")
        })



        $buttonTable[0].addEventListener("drop", async e => {
            if (e.target.textContent.length == 0) {
                e.target.textContent = localStorage.getItem("dragContent");
                e.target.setAttribute("draggable", "true")
                e.target.classList.remove("buttonVisibility")
                lettersDragValidar();
                dragNumberFalse()
                checkLabels()
            }
        })

        $buttonTable[1].addEventListener("drop", async e => {
            if (e.target.textContent.length == 0) {
                e.target.textContent = localStorage.getItem("dragContent");
                e.target.classList.remove("buttonVisibility")
                lettersDragValidar();
                e.target.setAttribute("draggable", "true")
                dragNumberFalse();
                checkLabels()
            }

        })


        $buttonTable[2].addEventListener("drop", async e => {
            if (e.target.textContent.length == 0) {
                e.target.textContent = localStorage.getItem("dragContent");
                e.target.classList.remove("buttonVisibility")
                lettersDragValidar();
                $buttonTable[localStorage.getItem("dragNumber")].classList.remove("buttonVisibility")
                e.target.setAttribute("draggable", "true")
                dragNumberFalse()
                checkLabels()
            }

        })
        $buttonTable[3].addEventListener("drop", async e => {
            if (e.target.textContent.length == 0) {
                e.target.textContent = localStorage.getItem("dragContent");
                e.target.classList.remove("buttonVisibility")
                lettersDragValidar();
                e.target.setAttribute("draggable", "true")
                dragNumberFalse()
                checkLabels()

            }
        })
        $buttonTable[4].addEventListener("drop", async e => {
            if (e.target.textContent.length == 0) {
                e.target.textContent = localStorage.getItem("dragContent");
                e.target.classList.remove("buttonVisibility")
                lettersDragValidar();
                e.target.setAttribute("draggable", "true")
                dragNumberFalse()
                checkLabels()
            }
        })
        $buttonTable[5].addEventListener("drop", async e => {
            if (e.target.textContent.length == 0) {
                e.target.textContent = localStorage.getItem("dragContent");
                e.target.classList.remove("buttonVisibility")
                lettersDragValidar();
                e.target.setAttribute("draggable", "true")
                dragNumberFalse();
                checkLabels()
            }
        })


        let text_1_3 = document.querySelector(".text_1_3");
        const countdownElement = document.querySelector(".countDownBody > div > h2");
        const CountdownNext = document.querySelector(".countDownNext");

        async function _1_3() {
            let count = 3;
            speechSynthesis.cancel()
            voiceExercise();
            text_1_3.innerHTML = "¡Muy bien, comencemos!";
            CountdownNext.style.display = "none"
            countdownElement.innerHTML = "3";
            $countDownBody.removeAttribute("style");
            let countdown = setInterval(() => {
                count--;
                countdownElement.textContent = count;
                if (count === 0) {
                    clearInterval(countdown);
                    $countDownBody.style.display = "none";
                    CountdownNext.textContent = parseInt(CountdownNext) - 7;
                    setTimeout(() => {
                        CountdownNext.removeAttribute("style")
                    }, 900);
                }
            }, 1000);
        }

        async function _1_3_again() {
            let count = 3;
            speechSynthesis.cancel()
            voiceExercise();
            text_1_3.innerHTML = "¡Lo intentamos de nuevo!";
            CountdownNext.style.display = "none"
            countdownElement.innerHTML = "3";
            $countDownBody.removeAttribute("style");
            let countdown = setInterval(() => {
                count--;
                countdownElement.textContent = count;
                if (count === 0) {
                    clearInterval(countdown);
                    $countDownBody.style.display = "none";
                    CountdownNext.textContent = parseInt(CountdownNext) - 7;
                    setTimeout(() => {
                        CountdownNext.removeAttribute("style")
                    }, 900);
                }
            }, 1000);
        }

        async function temporizador() {
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

        function End_Game() {
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

        function voiceExerciseSlow() {
            let mensaje = new SpeechSynthesisUtterance(`Escucha y construye la palabra correcta. .${$tableContainer.getAttribute("data-correct-word")}`);
            mensaje.rate = 0.7;
            let voces = window.speechSynthesis.getVoices();
            mensaje.voice = voces.find(voz => voz.lang === 'es-ES');
            window.speechSynthesis.speak(mensaje);
        }

        function voiceExercise() {
            let texto = `Escucha y construye la palabra correcta. .${$tableContainer.getAttribute("data-correct-word")}`;
            const hablar = (texto) =>
                speechSynthesis.resume()
            speechSynthesis.speak(new SpeechSynthesisUtterance(texto));
            return hablar(texto);
        }


        document.addEventListener("click", e => {
            if (e.target.matches(".siguiente")) {
                let $last = document.querySelector(".last");
                let $first = document.querySelector(".first");
                $first.style.display = "none";
                $last.classList.add("animationBounceOut");
                $last.removeAttribute("style");
            }
            if (e.target.matches(".repeatSlow")) {
                voiceExerciseSlow()
                setTimeout(() => {
                    speechSynthesis.cancel()
                }, 5000);
            }
            if (e.target.matches(".repeatNormal")) {
                voiceExercise()
            }
        })
        setTimeout(() => {
            let $main = document.querySelector("main");
            $main.removeChild($main.children[7]);
            setTimeout(async () => {
                $countDownBody.removeAttribute("style");
                _1_3();
                setTimeout(() => {
                    temporizador()
                }, 2000);
                setTimeout(() => {
                    let $messengerInformation = document.querySelector(".messengerInformation");
                    $messengerInformation.removeAttribute("style");
                    $messengerInformation.classList.add("AnimationMessengerInformation");
                }, 4000);
            }, 0);
        }, 1500);
    </script>
</body>

</html>