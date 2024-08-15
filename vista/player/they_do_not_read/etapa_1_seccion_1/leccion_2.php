<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tu puedes | Lección 2</title>
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
                <span style="    padding-right: 1.5rem;">Seg</span>
                <span class="countDownNext fs-4"></span>
                <i class="bi bi-stopwatch-fill fs-1"></i>
            </div>
        </div>
        <div class="letterContainer">
            <div class="container-xxl">
                <div class="tableContainer" data-next="1">
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>t</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
                    <span>j</span>
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
                <p> Encuentra el elemento que has escuchado.</p>
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
                <b class="mb-2">¡Comencemos!</b>
            </div>
        </div>
        </div>
        </div>
        <div class="containerResults" style="display: none;">
            <div class="w-auto text-center"
                style="max-width: 500px; min-width: 100px; background: white !important; border-radius: 1rem;">
                <h2 class=""> ¡Completaste la lección! </h2>
                <div class="first">
                    <b>En el primer ejercicio de encontrar la letra b.</b><br>
                    <span class="correctFailedT"></span><br>
                    <hr>
                    <b>En el segundo ejercicio de encontrar la letra l.</b><br>
                    <span class="correctFailedW"></span><br>
                    <hr>
                    <b>En el tercero ejercicio de encontrar la letra q.</b><br>
                    <span class="correctFailedF"></span><br>
                    <hr>
                    <b>En el cuarto ejercicio de encontrar la letra n.</b><br>
                    <span class="correctFailedN"></span><br>
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
let $dataWrong = document.querySelector("[data-wrong]");
let $wrongSound = document.querySelector(".wrongSound");
let $correctSound = document.querySelector(".correctSound");
let $tableLetter = document.querySelector(".tableContainer");
$tableLetter.setAttribute("data-next", "4");
let $starNumber = document.querySelector(".start");
let $progressBar = document.querySelector(".progress-bar");
let incorrectCounter = 0;
let $paragrahMessenger = document.querySelector(".messengerInformation > p");
//Contadores para determinar cuantas veces el niño ha acertado incorrectamente.
let countt = 0;
let countw = 0;
let countf = 0;
let countm = 0;

//Contadores para determinar cuantas veces el niño ha acertado correctamente.
let correctCountert = 0;
let correctCounterw = 0;
let correctCounterf = 0;
let correctCountern = 0;
let randomNumber = 0;
let $spanLetter = document.querySelectorAll(".tableContainer > span");
let $countDownBody = document.querySelector(".countDownBody");
let $repeatDictation = document.querySelector(".repeatDictation");

//Eventos.

//Evento de localStorage
document.addEventListener("DOMContentLoaded", (e) => {
    if (localStorage.getItem("letter") === null) {
        localStorage.setItem("letter", null);
    }
    if (localStorage.getItem("spanNumber") === null) {
        localStorage.setItem("spanNumber", null);
    }
});

//Evento para pasar a la siguiente o salir de la lección.
document.addEventListener("click", (e) => {
    if (e.target.matches(".btnSalir")) {
        e.preventDefault();
    }
    if (e.target.matches(".siguiente")) {
        let $continue = document.querySelector(".siguiente");
        let $last = document.querySelector(".last");
        let $first = document.querySelector(".first");
        $first.style.display = "none";
        $last.classList.add("animationBounceOut");
        $last.removeAttribute("style");
    }

    if (e.target.matches(".tableContainer > span")) {
        if (e.target.textContent == "t") {
            correctCountert++;
            $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
            e.target.classList.add("hoverVerde");
            $wrongSound.pause();
            $correctSound.play();
            setTimeout(() => {
                e.target.classList.remove("hoverVerde");
                Next_tj();
                $correctSound.pause();
            }, 2000);
        } else {
            $spanLetter.forEach((letter) => {
                if (letter.textContent === localStorage.getItem("letter")) {
                    letter.classList.add("hoverVerde");
                    setTimeout(() => {
                        letter.classList.remove("hoverVerde");
                    }, 2000);
                }
            });
            e.target.classList.add("hoverRed");
            $dataWrong.setAttribute("data-wrong", "true");
            if ($dataWrong.getAttribute("data-wrong")) {
                $wrongSound.play();
            }
            setTimeout(() => {
                e.target.classList.remove("hoverRed");
            }, 2000);
            setTimeout(() => {
                $dataWrong.setAttribute("data-wrong", "false");
                Define_Next_Letter();
            }, 2000);
            incorrectCounter = incorrectCounter + 1;
            switch (localStorage.getItem("letter")) {
                case "t":
                    countt++;
                    break;
                case "w":
                    countw++;
                    break;
                case "k":
                    countf++;
                    break;
                case "n":
                    countm++;
                    break;
                default:
                    break;
            }
        }

        if (e.target.textContent == "w") {
            correctCounterw++;
            $wrongSound.pause();
            $correctSound.play();
            $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
            e.target.classList.add("hoverVerde");
            setTimeout(() => {
                e.target.classList.remove("hoverVerde");
                Next_wu();
            }, 2000);
        }

        if (e.target.textContent == "f") {
            correctCounterf++;
            $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
            e.target.classList.add("hoverVerde");
            $wrongSound.pause();
            $correctSound.play();
            setTimeout(() => {
                e.target.classList.remove("hoverVerde");
                Next_fk();
            }, 2000);
        }
        if (e.target.textContent == "n") {
            correctCountern++;
            e.target.classList.add("hoverVerde");
            $wrongSound.pause();
            $correctSound.play();
            $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
            setTimeout(() => {
                e.target.classList.remove("hoverVerde");
                Next_mn();
            }, 2000);
        }
    }
});

// No se que hace este evento. No me acuerdo xd
let $letterSound = document.querySelector(".letterSound");
document.addEventListener("mousemove", (e) => {
    if (e.target.matches(".tableContainer > span")) {
        try {
            $letterSound.play();
        } catch (error) {
            alert("error");
        }
    }
});
//Evento de Repetir el dictado o más bien repetir la letra de la lección
$repeatDictation.addEventListener("click", (e) => {
    switch (localStorage.getItem("letter")) {
        case "t":
            voiceExercise("t");
            break;
        case "w":
            voiceExercise("w");
            break;
        case "f":
            voiceExercise("f");
            break;
        case "n":
            voiceExercise("n");
            break;
        default:
            break;
    }
});

//Funciones.

//Estas funciones se utilizan para cambiar la posición de la letra mencionada por localStorage.
function Next_tj() {
    switch ($tableLetter.getAttribute("data-next")) {
        case "0":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("j", "t", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "1":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("j", "t", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "2":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("j", "t", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "3":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("j", "t", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "4":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("j", "t", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "5":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("j", "t", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "6":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("j", "t", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "7":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("j", "t", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "8":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("j", "t", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "9":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("j", "t", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "10":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("j", "t", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "11":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("j", "t", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "12":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("j", "t", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "13":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("j", "t", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "14":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("j", "t", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "15":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("j", "t", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        default:
            alert("you are crazy");
            break;
    }
}

function Next_wu() {
    switch ($tableLetter.getAttribute("data-next")) {
        case "0":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("u", "w", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "1":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("u", "w", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "2":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("u", "w", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "3":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("u", "w", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "4":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("u", "w", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "5":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("u", "w", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "6":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("u", "w", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "7":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("u", "w", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "8":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("u", "w", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "9":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("u", "w", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "10":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("u", "w", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "11":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("u", "w", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "12":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("u", "w", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "13":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("u", "w", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "14":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("u", "w", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "15":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("u", "w", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        default:
            break;
    }
}

function Next_fk() {
    switch ($tableLetter.getAttribute("data-next")) {
        case "0":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("k", "f", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "1":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("k", "f", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "2":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("k", "f", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "3":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("k", "f", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "4":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("k", "f", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "5":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("k", "f", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "6":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("k", "f", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "7":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("k", "f", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "8":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("k", "f", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "9":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("k", "f", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "10":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("k", "f", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "11":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("k", "f", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "12":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("k", "f", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "13":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("k", "f", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "14":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("k", "f", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "15":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("k", "f", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        default:
            break;
    }
}

function Next_mn() {
    switch ($tableLetter.getAttribute("data-next")) {
        case "0":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("m", "n", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "1":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("m", "n", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "2":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("m", "n", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "3":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("m", "n", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "4":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("m", "n", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "5":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("m", "n", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "6":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("m", "n", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "7":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("m", "n", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "8":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("m", "n", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "9":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("m", "n", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "10":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("m", "n", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "11":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("m", "n", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "12":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("m", "n", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "13":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("m", "n", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "14":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("m", "n", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "15":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("m", "n", randomNumber);
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        default:
            break;
    }
}

//Funcion principal para cambiarla.
function Define_Next_Letter() {
    switch (localStorage.getItem("letter")) {
        case "t":
            Next_tj();
            break;
        case "w":
            Next_wu();
            break;
        case "f":
            Next_fk();
            break;
        case "m":
            Next_mn();
            break;
        default:
            break;
    }
}
//Estas dos funciones sirven para automatizar la tarea completa de rellenar/establecer/escuchar la letra de la etiqueta. Como su nombre lo define.
function defineLetter(similarLetter, winningLetter, number) {
    let $span = document.querySelectorAll(".tableContainer > span");
    let contador = 0;
    for (let i = 0; i < $span.length; i++) {
        contador = contador + 1;
        if (number == contador) {
            $span[i].innerHTML = `${winningLetter}`;
            continue;
        }
        $span[i].innerHTML = `${similarLetter}`;
    }
}

function voiceExercise(winningLetter) {
    let texto = `Encuentra la letra, ${winningLetter}.`;
    const hablar = (texto) =>
        speechSynthesis.speak(new SpeechSynthesisUtterance(texto));
    return hablar(texto);
}

//Estas funciones determinan el tiempo de espera para pasar a la siguiente búsqueda de dicha letra.
async function countDownT() {
    await localStorage.setItem("letter", `t`);
    const CountdownNext = document.querySelector(".countDownNext");
    let countForNext = 40;
    let countdown = setInterval(() => {
        countForNext--;
        CountdownNext.textContent = countForNext;
        if (countForNext === 0) {
            clearInterval(countdown);
            countDownW();
        }
    }, 1000);
}
countDownT();
async function countDownW() {
    $progressBar.innerHTML = "30%";
    $progressBar.style.width = "30%";
    $progressBar.style.background = "#ff7d3f";
    await localStorage.setItem("letter", `w`);
    _1_3();
    voiceExercise("w");
    defineLetter("u", "w", Math.floor(Math.random() * 72));
    const CountdownNext = document.querySelector(".countDownNext");
    let countForNext = 50;
    let countdown = setInterval(() => {
        countForNext--;
        CountdownNext.textContent = countForNext;
        if (countForNext === 0) {
            clearInterval(countdown);
            Count_Down_F();
        }
    }, 1000);
}
async function Count_Down_F() {
    await localStorage.setItem("letter", `f`);
    $progressBar.innerHTML = "50%";
    $progressBar.style.width = "50%";
    $progressBar.style.background = "#ff7d3f";
    _1_3();
    voiceExercise("f");
    defineLetter("k", "f", Math.floor(Math.random() * 72));
    const CountdownNext = document.querySelector(".countDownNext");
    let countForNext = 50;
    let countdown = setInterval(() => {
        countForNext--;
        CountdownNext.textContent = countForNext;
        if (countForNext === 0) {
            clearInterval(countdown);
            Count_Down_N();
        }
    }, 1000);
}
async function Count_Down_N() {
    await localStorage.setItem("letter", `n`);
    $progressBar.innerHTML = "70%";
    $progressBar.style.width = "70%";
    $progressBar.style.background = "#ff7d3f";
    _1_3();
    voiceExercise("n");
    defineLetter("m", "n", Math.floor(Math.random() * 72));
    const CountdownNext = document.querySelector(".countDownNext");
    let countForNext = 60;
    let countdown = setInterval(() => {
        countForNext--;
        CountdownNext.textContent = countForNext;
        if (countForNext === 0) {
            clearInterval(countdown);
            End_Game();
        }
    }, 1000);
}

//Funcion para terminar la leccion.
function End_Game() {
    $progressBar.innerHTML = "100%";
    $progressBar.style.width = "100%";
    let $containerResults = document.querySelector(".containerResults");
    let $totalStar = document.querySelector(".totalStar");
    let $motivationalMessage = document.querySelector(".motivationalMessage");
    let $percentage = document.querySelector(".percentage");
    let $correctFailedT = document.querySelector(".correctFailedT");
    let $correctFailedW = document.querySelector(".correctFailedW");
    let $correctFailedF = document.querySelector(".correctFailedF");
    let $correctFailedN = document.querySelector(".correctFailedN");
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
    document
        .querySelector(".containerResults  > div")
        .classList.add("animationBounce");
    //failed
    if (countt == 0) {
        $correctFailedT.innerHTML = `¡Enhorabuena! Has acertado ${correctCountert} veces y no has cometido ningún error.`;
    } else if (countt == 1) {
        $correctFailedT.innerHTML = `¡Buen Trabajo! Has acertado ${correctCountert} veces y has fallado solo una vez.`;
    } else {
        $correctFailedT.innerHTML = `Has acertado ${correctCountert} veces y has fallado ${countt} veces.`;
    }
    if (countw == 0) {
        $correctFailedW.innerHTML = `¡Enhorabuena! Has acertado ${correctCounterw} veces y no has cometido ningún error.`;
    } else if (countw == 1) {
        $correctFailedW.innerHTML = `¡Buen Trabajo! Has acertado ${correctCounterw} veces y has fallado solo una vez.`;
    } else {
        $correctFailedW.innerHTML = `Has acertado ${correctCounterw} veces y has fallado ${countw} veces.`;
    }
    if (countf == 0) {
        $correctFailedF.innerHTML = `¡Enhorabuena! Has acertado ${correctCounterf} veces y no has cometido ningún error.`;
    } else if (countf == 1) {
        $correctFailedF.innerHTML = `¡Buen Trabajo! Has acertado ${correctCounterf} veces y has fallado solo una vez.`;
    } else {
        $correctFailedF.innerHTML = `Has acertado ${correctCounterf} veces y has fallado ${countf} veces.`;
    }
    if (countm == 0) {
        $correctFailedN.innerHTML = `¡Enhorabuena! Has acertado ${correctCountern} veces y no has cometido ningún error.`;
    } else if (countm == 1) {
        $correctFailedN.innerHTML = `¡Buen Trabajo! Has acertado ${correctCountern} veces y has fallado solo una vez.`;
    } else {
        $correctFailedN.innerHTML = `Has acertado ${correctCountern} veces y has fallado ${countm} veces.`;
    }
}

//Función que se ejecuta al inicio de la lección de forma automática.
setTimeout(() => {
    let $main = document.querySelector("main");
    $main.removeChild($main.children[7]);
    setTimeout(async () => {
        $countDownBody.removeAttribute("style");
        voiceExercise("t");
        _1_3();
        setTimeout(() => {
            let $messengerInformation = document.querySelector(
                ".messengerInformation"
            );
            $messengerInformation.removeAttribute("style");
            $messengerInformation.classList.add("AnimationMessengerInformation");

            setTimeout(async () => {
                await $messengerInformation.classList.remove(
                    "AnimationMessengerInformation"
                );
                await setTimeout(() => {
                    $repeatDictation.removeAttribute("style");
                    $repeatDictation.classList.add("animationLetter");
                    $paragrahMessenger.innerHTML = `Repetir la letra nuevamente.`;
                    $paragrahMessenger.classList.add("animationLetter");
                }, 3000);
            }, 8000);
        }, 4000);
    }, 0);
}, 1500);

//Función de ventana modal para contar de 3 a 1
function _1_3() {
    let count = 3;
    const countdownElement = document.querySelector(".countDownBody > div > h2");
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

    </script>
</body>

</html>