<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tu puedes | Lección 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://pie-meister.github.io/PieMeister-with-Progress.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" type="image/x-icon" href="../../../../img/icono/icono.ico">
    <link rel="stylesheet" href="../../../../css/player/they_do_read/lecciones.css">
    <style>
        main {
            background-image: url(../../../../img/player/fondo.png);
        }

        .tableContainer_2 {
            font-size: 2rem;
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            text-align: center;
            justify-content: center;
        }

        .tableContainer_2>button {
            cursor: pointer;
            border: 0rem;
            border-bottom: #d9713f solid 3px;
            background: #ff864c;
            color: white;
            font-weight: 500;
            width: 4rem;
            font-size: 2rem;
            /* padding: 0.5rem; */
            text-align: center;
            border-radius: 0.5rem;
        }

        .tableContainer_2>button:hover {
            transition: all linear 0.4s;
            background: #ffa94f;
            transform: translateY(-4px);
            transition: all 250ms cubic-bezier(0.3, 0.7, 0.4, 1.5);
            box-shadow: -0rem 0.3rem #7e4f1e;
            filter: brightness(110%);
        }

        .tableContainer_3> button {
    cursor: pointer;
    border: 0rem;
    border-bottom: #d9713f solid 3px;
    background: #ff864c;
    color: white;
    font-weight: 500;
    width: 4rem;
    font-size: 2rem;
    /* padding: 0.5rem; */
    text-align: center;
    border-radius: 0.5rem;
}
 
.tableContainer_3> button:hover {
    transition: all linear 0.4s;
    background: #ffa94f;
    transform: translateY(-4px);
    transition: all 250ms cubic-bezier(0.3, 0.7, 0.4, 1.5);
    box-shadow: -0rem 0.3rem #7e4f1e;
    filter: brightness(110%);
}

.tableContainer_3 {
    font-size: 2rem;
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
    text-align: center;
    justify-content: center;
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
                    <button>q</button>
                    <button>p</button>
                    <button>q</button>
                    <button>q</button>
                    <button>q</button>
                    <button>q</button>
                    <button>q</button>
                    <button>q</button>
                    <button>q</button>
                    <button>q</button>
                    <button>q</button>
                    <button>q</button>
                    <button>q</button>
                    <button>q</button>
                    <button>q</button>
                    <button>q</button>
                    <button>q</button>
                    <button>q</button>
                    <button>q</button>
                    <button>q</button>
                    <button>fin</button>
                    <button>gro</button>
                    <button>gap</button>
                    <button>q</button>
                    <button>vil</button>
                    <button>fio</button>
                    <button>gap</button>
                    <button>q</button>
                    <button>fro</button>
                    <button>no</button>
                    <button>hi</button>
                    <button>fil</button>
                    <button>fu</button>
                    <button>fla</button>
                    <button>flu</button>
                    <button>pal</button>
                    <button>q</button>
                    <button>fin</button>
                    <button>dil</button>
                    <button>col</button>
                    <button>wor</button>
                    <button>q</button>
                    <button>flu</button>
                    <button>flu</button>
                    <button>fla</button>
                    <button>q</button>
                    <button>dap</button>
                    <button>gla</button>
                    <button>flu</button>
                    <button>q</button>
                    <button>flu</button>
                    <button>fli</button>
                    <button>flu</button>
                    <button>gal</button>
                    <button>flu</button>
                    <button>flu</button>
                    <button>q</button>
                    <button>fal</button>
                    <button>flu</button>
                    <button>flu</button>
                    <button>flu</button>
                    <button>flu</button>
                    <button>fla</button>
                    <button>fla</button>
                    <button>q</button>
                    <button>gal</button>
                    <button>q</button>
                    <button>q</button>
                    <button>gal</button>
                    <button>flu</button>
                    <button>flu</button>
                    <button>flu</button>
                </div>
                <div class="twoEjercicio" style="display:none">
                    <div class="tableContainer_2" data-next_2="1" data-correct-letter="arreglo">
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
                <div class="tresEjercicio" style="display:none">
                    <div class="tableContainer_3" data-next_3="1" data-correct-letter="">
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
        <div class="logoPresentation" style="display:none">
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
                    <span class="correctFailedFia"></span><br>
                    <hr>
                    <b>En el segundo ejercicio de encontrar la letra l.</b><br>
                    <span class="correctFailedDar"></span><br>
                    <hr>
                    <b>En el tercero ejercicio de encontrar la letra q.</b><br>
                    <span class="correctFailedQue"></span><br>
                    <hr>
                    <b>En el cuarto ejercicio de encontrar la letra n.</b><br>
                    <span class="correctFailedFiz"></span><br>
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
        let $tableContainer = document.querySelector(".tableContainer");
        let $starNumber = document.querySelector(".start");
        let $progressBar = document.querySelector(".progress-bar");
        let incorrectCounter = 0;
        let $tableContainer_2 = document.querySelector(".tableContainer_2");
        let $tableContainer_3 = document.querySelector(".tableContainer_3")
        let $tresEjercicio = document.querySelector(".tresEjercicio")
        let $letterSound = document.querySelector(".letterSound");
        let $intentosNumber = document.querySelector(".intentos > .number");
        let $twoEjercicio = document.querySelector(".twoEjercicio");
        let $paragrahMessenger = document.querySelector(".messengerInformation > p");
        //Contadores para determinar cuantas veces el niño ha acertado incorrectamente.
        let countfia = 0;
        let countdar = 0;
        let countque = 0;
        let countfiz = 0;
        let $span = document.querySelectorAll(".tableContainer_2 > button");
        let $span_2 = document.querySelectorAll(".tableContainer_3 > button");
        //Contadores para determinar cuantas veces el niño ha acertado correctamente.
        let correctCounterFia = 0;
        let correctCounterDar = 0;
        let correctCounterQue = 0;
        let correctCounterFiz = 0;
        let randomNumber = 0;
        let intentos = 3;
        let count = 0;
        let countTotal = 0;
        let correctCounter = 0;
        let _1_3_text = document.querySelector(".text_1_3");

        let $spanLetter = document.querySelectorAll(".tableContainer > button");
        let $countDownBody = document.querySelector(".countDownBody");
        let $repeatDictation = document.querySelector(".repeatDictation");

        document.addEventListener("DOMContentLoaded", async (e) => {
            await defineLetter("q", "b", "p", 2)
            if (localStorage.getItem("letter") === null) {
                localStorage.setItem("letter", null);
            }
            if (localStorage.getItem("spanNumber") === null) {
                localStorage.setItem("spanNumber", null);
            }
        });

        document.addEventListener("mousemove", (e) => {
            if (e.target.matches(".tableContainer > button")) {
                try {
                    $letterSound.play();
                } catch (error) {
                    alert("error");
                }
            }
        });

        function defineLetter(similarLetterOne, similarLetterTwo, winningLetter, number) {
            let $span = document.querySelectorAll(".tableContainer > button");
            let contador = 0;
            let numeroR = [];
            for (let i = 0; i < $span.length; i++) {
                numeroR.push(Math.trunc(Math.random() * 72))
            }
            console.log(numeroR)
            for (let i = 0; i < $span.length; i++) {
                contador = contador + 1;
                if (number === contador) {
                    $span[i].innerHTML = `${winningLetter}`;
                    continue;
                } else if (numeroR[i] % 2 == 0) {
                    $span[i].innerHTML = `${similarLetterOne}`;
                } else {
                    $span[i].innerHTML = `${similarLetterTwo}`;
                }

            }
        }

        function voiceExercise(winningLetter) {
            let texto = `Encuentra la letra, ${winningLetter}.`;
            const hablar = (texto) =>
                speechSynthesis.speak(new SpeechSynthesisUtterance(texto));
            return hablar(texto);
        }


        async function countDownP() {
            await localStorage.setItem("letter", `p`);
            const CountdownNext = document.querySelector(".countDownNext");
            let countForNext = 60;
            let countdown = setInterval(() => {
                countForNext--;
                CountdownNext.textContent = countForNext;
                if (countForNext === 0) {
                    clearInterval(countdown);
                    findError()
                }
            }, 1000);
        }
        countDownP();
        async function findError() {
            await localStorage.setItem("letter", `p`);
            $tableContainer.style.display = "none"
            $twoEjercicio.removeAttribute("style");
            wordLabels("arresglo", "arreglo");
            const CountdownNext = document.querySelector(".countDownNext");
            let countForNext = 60;
            let countdown = setInterval(() => {
                countForNext--;
                CountdownNext.textContent = countForNext;
                if (countForNext === 0) {
                    clearInterval(countdown);
                    findError_2()
                }
            }, 1000);
        }
        async function wordsLabels_2(IncorrectCorrect, correctLetter) {
            $span_2.forEach(clear => {
                clear.innerHTML = "";
                clear.removeAttribute("style")
            })
            const arraySplit = IncorrectCorrect.split('').reduce((acc, char, index) => {
                acc[index] = char;
                return acc;
            }, {});
            for (let i = 0; i < $span_2.length; i++) {
                if ($span_2[i].textContent == "") {
                    $span_2[i].innerHTML = arraySplit[i]
                }
                if ($span_2[i].textContent == "undefined") {
                    $span_2[i].style.display = "none"
                }
                if ($span_2[i].textContent == " ") {
                    $span_2[i].style.visibility = "hidden"
                }
            }
            return $tableContainer_3.setAttribute("data-correct-letter", correctLetter)
        }
        async function findError_2() {
            await localStorage.setItem("letter", `p`);
            $twoEjercicio.style.display = "none"
            $tresEjercicio.removeAttribute("style");
            wordsLabels_2("Zaqatillas rojas", "Zapatillas rojas")
            const CountdownNext = document.querySelector(".countDownNext");
            let countForNext = 60;
            let countdown = setInterval(() => {
                countForNext--;
                CountdownNext.textContent = countForNext;
                if (countForNext === 0) {
                    clearInterval(countdown);
                    countDownV()
                }
            }, 1000);
        }

        document.addEventListener("mousemove", (e) => {
            if (e.target.matches(".tableContainer > button")) {
                try {
                    $letterSound.play();
                } catch (error) {
                    alert("error");
                }
            }
        });

        function wordLabels(IncorrectCorrect, correctLetter) {
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
            return $tableContainer_3.setAttribute("data-correct-letter", correctLetter)
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

        function defineNextLetter() {
            $intentosNumber.textContent = 3;
            switch ($tableContainer_2.getAttribute("data-next_2")) {
                case "0":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordLabels("imsegura", "insegura");
                    $tableContainer_2.setAttribute(
                        "data-next_2",
                        `${randomNumber}`
                    );
                    break;
                case "1":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordLabels("bvaca", "vaca");
                    $tableContainer_2.setAttribute(
                        "data-next_2",
                        `${randomNumber}`
                    );
                    break;
                case "2":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordLabels("hopla", "hola");
                    $tableContainer_2.setAttribute(
                        "data-next_2",
                        `${randomNumber}`
                    );
                    break;
                case "3":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordLabels("cinco1", "cinco");
                    $tableContainer_2.setAttribute(
                        "data-next_2",
                        `${randomNumber}`
                    );
                    break;
                case "4":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordLabels("fesrrocarril", "ferrocarril");
                    $tableContainer_2.setAttribute(
                        "data-next_2",
                        `${randomNumber}`
                    );
                    break;
                case "5":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordLabels("relloj", "reloj");
                    $tableContainer_2.setAttribute(
                        "data-next_2",
                        `${randomNumber}`
                    );
                    break;
                case "6":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordLabels("existedte", "existente");
                    $tableContainer_2.setAttribute(
                        "data-next_2",
                        `${randomNumber}`
                    );
                    break;

                case "7":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordLabels("zaqatillas", "zapatillas");
                    $tableContainer_2.setAttribute(
                        "data-next_2",
                        `${randomNumber}`
                    );
                    break;
                case "8":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordLabels("llaue", "llave");
                    $tableContainer_2.setAttribute(
                        "data-next_2",
                        `${randomNumber}`
                    );
                    break;
                case "9":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordLabels("somdrero", "sombrero");
                    $tableContainer_2.setAttribute(
                        "data-next_2",
                        `${randomNumber}`
                    );
                    break;
                case "10":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordLabels("escriturɐ", "escritura");
                    $tableContainer_2.setAttribute(
                        "data-next_2",
                        `${randomNumber}`
                    );
                    break;
                case "11":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordLabels("sadores", "sabores");
                    $tableContainer_2.setAttribute(
                        "data-next_2",
                        `${randomNumber}`
                    );
                    break;
                case "12":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordLabels("zaqatillas", "zapatillas");
                    $tableContainer_2.setAttribute(
                        "data-next_2",
                        `${randomNumber}`
                    );
                    break;
                case "13":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordLabels("balóm", "balón");
                    $tableContainer_2.setAttribute(
                        "data-next_2",
                        `${randomNumber}`
                    );
                    break;
                case "14":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordLabels("sofa", "sofá");
                    $tableContainer_2.setAttribute(
                        "data-next_2",
                        `${randomNumber}`
                    );
                    break;
                case "15":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordLabels("cancion", "canción");
                    $tableContainer_2.setAttribute(
                        "data-next_2",
                        `${randomNumber}`
                    );
                    break;
                case "16":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordLabels("tu", "tú");
                    $tableContainer_2.setAttribute(
                        "data-next_2",
                        `${randomNumber}`
                    );
                    break;
                case "17":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordLabels("menu", "menú");
                    $tableContainer_2.setAttribute(
                        "data-next_2",
                        `${randomNumber}`
                    );
                    break;
                case "18":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordLabels("Venesuela", "Venezuela");
                    $tableContainer_2.setAttribute(
                        "data-next_2",
                        `${randomNumber}`
                    );
                    break;
                case "19":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordLabels("tortvga", "tortuga");
                    $tableContainer_2.setAttribute(
                        "data-next_2",
                        `${randomNumber}`
                    );
                    break;
                default:
                    break;
            }
        }

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
            if (e.target.matches(".tableContainer > button")) {
                if (e.target.textContent == "p") {
                    correctCounterFia++;
                    $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                    e.target.classList.add("hoverVerde");
                    $spanLetter.forEach(letter => {
                        letter.disabled = true;
                        setTimeout(() => {
                            letter.removeAttribute("disabled")
                        }, 2000);
                    })
                    $wrongSound.pause();
                    $correctSound.play();
                    setTimeout(() => {
                        e.target.classList.remove("hoverVerde");
                        nextP();
                        $correctSound.pause();
                    }, 2000);
                } else {
                    $spanLetter.forEach((letter) => {
                        letter.disabled = true;
                        if (letter.textContent === localStorage.getItem("letter")) {
                            letter.classList.add("hoverVerde");
                            letter.disabled = true;
                            setTimeout(() => {
                                letter.classList.remove("hoverVerde");
                                letter.removeAttribute("disabled")
                            }, 2000);
                        }
                        setTimeout(() => {
                            letter.removeAttribute("disabled")
                        }, 2000);
                    });
                    e.target.classList.add("hoverRed");
                    $dataWrong.setAttribute("data-wrong", "true");
                    if ($dataWrong.getAttribute("data-wrong")) {
                        $wrongSound.play();
                    }
                    setTimeout(() => {
                        e.target.classList.remove("hoverRed");
                        nextP()
                    }, 2000);
                    setTimeout(() => {
                        $dataWrong.setAttribute("data-wrong", "false");
                    }, 2000);
                    incorrectCounter = incorrectCounter + 1;
                }
            }

            if (e.target.matches(".tableContainer_2 > button")) {
                if (e.target.textContent == "s" && $tableContainer_2.getAttribute("data-correct-letter") == "arreglo") {
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
                if (e.target.textContent == "m" && $tableContainer_2.getAttribute("data-correct-letter") == "insegura") {
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
                if (e.target.textContent == "b" && $tableContainer_2.getAttribute("data-correct-letter") == "vaca") {
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
                if (e.target.textContent == "p" && $tableContainer_2.getAttribute("data-correct-letter") == "hola") {
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
                if (e.target.textContent == "1" && $tableContainer_2.getAttribute("data-correct-letter") == "cinco") {
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
                if (e.target.textContent == "s" && $tableContainer_2.getAttribute("data-correct-letter") == "ferrocarril") {
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
                if (e.target.textContent == "l" && $tableContainer_2.getAttribute("data-correct-letter") == "reloj") {
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



                if (e.target.textContent == "q" && $tableContainer_2.getAttribute("data-correct-letter") == "zapatillas") {
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
                if (e.target.textContent == "u" && $tableContainer_2.getAttribute("data-correct-letter") == "llave") {
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
                if (e.target.textContent == "d" && $tableContainer_2.getAttribute("data-correct-letter") == "sombrero") {
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
                if (e.target.textContent == "ɐ" && $tableContainer_2.getAttribute("data-correct-letter") == "escritura") {
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
                if (e.target.textContent == "d" && $tableContainer_2.getAttribute("data-correct-letter") == "sabores") {
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
                if (e.target.textContent == "m" && $tableContainer_2.getAttribute("data-correct-letter") == "balón") {
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
                if (e.target.textContent == "d" && $tableContainer_2.getAttribute("data-correct-letter") == "existente") {
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
                if (e.target.textContent == "v" && $tableContainer_2.getAttribute("data-correct-letter") == "tortuga") {
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
                if (e.target.textContent == "a" && $tableContainer_2.getAttribute("data-correct-letter") == "sofá") {
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
                if (e.target.textContent == "o" && $tableContainer_2.getAttribute("data-correct-letter") == "canción") {
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
                if (e.target.textContent == "u" && $tableContainer_2.getAttribute("data-correct-letter") == "tú") {
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
                if (e.target.textContent == "u" && $tableContainer_2.getAttribute("data-correct-letter") == "menú") {
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
                if (e.target.textContent == "s" && $tableContainer_2.getAttribute("data-correct-letter") == "Venezuela") {
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
            }

            if (e.target.matches(".tableContainer_3 > button")) {
                if (e.target.textContent == "q" && $tableContainer_3.getAttribute("data-correct-letter") == "Zapatillas rojas") {
                    $wrongSound.pause();
                    $correctSound.play();
                    correctCounter++;
                    if (parseInt($progressBar.textContent) < 101) {
                        $progressBar.innerHTML = `${parseInt($progressBar.textContent) + 5}%`;
                        $progressBar.style.width = `${parseInt($progressBar.textContent) + 5}%`;
                    }
                    e.target.innerHTML = "p"
                    $intentosNumber.textContent = 3;
                    $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                    $span_2.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.add("hoverVerde")
                            e.disabled = true
                        }
                    })
                  

                    setTimeout(() => {
                        $span_2.forEach(e => {
                            if (e.textContent.length > 0) {
                                e.classList.remove("hoverVerde");
                                e.removeAttribute("disabled")
                            }
                        })
                        defineNextLetter_3();
                    }, 3000);
                } else {
                    $intentosNumber.textContent = parseInt($intentosNumber.textContent) - 1;
                    incorrectCounter++;
                    $wrongSound.play();
                    $span_2.forEach(el => {
                        if (el.textContent !== "undefined") {
                            el.classList.add("hoverRed");
                            el.disabled = true
                        }

                    })
                    setTimeout(() => {
                        $span_2.forEach(e => {
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
                                defineNextLetter_3()
                            }, 2000);
                        }, 1000);


                    }
                }
                if (e.target.textContent == "b" && $tableContainer_3.getAttribute("data-correct-letter") == "Mi vaca es linda") {
                    $wrongSound.pause();
                    $correctSound.play();
                    correctCounter++;
                    if (parseInt($progressBar.textContent) < 101) {
                        $progressBar.innerHTML = `${parseInt($progressBar.textContent) + 5}%`;
                        $progressBar.style.width = `${parseInt($progressBar.textContent) + 5}%`;
                    }
                    $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                    e.target.innerHTML = "v"
                    $span_2.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.add("hoverVerde")
                            e.disabled = true
                        }
                    })
                   
                    setTimeout(async () => {
                        $span_2.forEach(e => {
                            if (e.textContent.length > 0) {
                                e.classList.remove("hoverVerde");
                                e.removeAttribute("disabled")
                            }
                        })
                        await defineNextLetter_3();
                    }, 3000);
                }
                if (e.target.textContent == "b" && $tableContainer_3.getAttribute("data-correct-letter") == "Pepitos de colores") {
                    $wrongSound.pause();
                    $correctSound.play();
                    if (parseInt($progressBar.textContent) < 101) {
                        $progressBar.innerHTML = `${parseInt($progressBar.textContent) + 5}%`;
                        $progressBar.style.width = `${parseInt($progressBar.textContent) + 5}%`;
                    }
                    $intentosNumber.textContent = 3;
                    correctCounter++;

                    $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                    e.target.innerHTML = "d"
                    $span_2.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.add("hoverVerde")
                            e.disabled = true
                        }
                    })
             
                    setTimeout(() => {
                        $span_2.forEach(e => {
                            if (e.textContent.length > 0) {
                                e.classList.remove("hoverVerde")
                                e.removeAttribute("disabled")
                            }
                        })
                        defineNextLetter_3()


                    }, 3000);
                }
                if (e.target.textContent == "n" && $tableContainer_3.getAttribute("data-correct-letter") == "Sombrero amarrillo") {
                    $wrongSound.pause();
                    $correctSound.play();
                    correctCounter++;
                    if (parseInt($progressBar.textContent) < 101) {
                        $progressBar.innerHTML = `${parseInt($progressBar.textContent) + 5}%`;
                        $progressBar.style.width = `${parseInt($progressBar.textContent) + 5}%`;
                    }
                    $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                    $intentosNumber.textContent = 3;
                    e.target.innerHTML = "m"
                    $span_2.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.add("hoverVerde");
                            e.disabled = true
                        }
                    })
               
                    setTimeout(() => {
                        $span_2.forEach(e => {
                            if (e.textContent.length > 0) {
                                e.classList.remove("hoverVerde");
                                e.removeAttribute("disabled")
                            }
                        })
                        defineNextLetter_3();

                    }, 3000);
                }
                if (e.target.textContent == "i" && $tableContainer_3.getAttribute("data-correct-letter") == "Hay un reloj viejo") {
                    $wrongSound.pause();
                    $correctSound.play();
                    correctCounter++;
                    if (parseInt($progressBar.textContent) < 101) {
                        $progressBar.innerHTML = `${parseInt($progressBar.textContent) + 5}%`;
                        $progressBar.style.width = `${parseInt($progressBar.textContent) + 5}%`;
                    }
                    $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                    $intentosNumber.textContent = 3;
                    e.target.innerHTML = "y"
                    $span_2.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.add("hoverVerde");
                            e.disabled = true;
                        }
                    })
                  
                    setTimeout(() => {
                        $span_2.forEach(e => {
                            if (e.textContent.length > 0) {
                                e.classList.remove("hoverVerde");
                                e.removeAttribute("disabled")
                            }
                        })
                        defineNextLetter_3();

                    }, 3000);
                }
                if (e.target.textContent == "ɘ" && $tableContainer_3.getAttribute("data-correct-letter") == "Un buen vídeo") {
                    $wrongSound.pause();
                    $intentosNumber.textContent = 3;
                    e.target.innerHTML = "e"
                    $correctSound.play();
                    if (parseInt($progressBar.textContent) < 101) {
                        $progressBar.innerHTML = `${parseInt($progressBar.textContent) + 5}%`;
                        $progressBar.style.width = `${parseInt($progressBar.textContent) + 5}%`;
                    }
                    correctCounter++;
                    $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                    $span_2.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.add("hoverVerde");
                            e.disabled = true
                        }
                    })
                
                    setTimeout(() => {
                        $span_2.forEach(e => {
                            if (e.textContent.length > 0) {
                                e.classList.remove("hoverVerde");
                                e.removeAttribute("disabled")

                            }
                        })
                        defineNextLetter_3();

                    }, 3000);
                }
                if (e.target.textContent == "u" && $tableContainer_3.getAttribute("data-correct-letter") == "La llave cayó en mi casa") {
                    $wrongSound.pause();
                    $correctSound.play();
                    if (parseInt($progressBar.textContent) < 101) {
                        $progressBar.innerHTML = `${parseInt($progressBar.textContent) + 5}%`;
                        $progressBar.style.width = `${parseInt($progressBar.textContent) + 5}%`;
                    }
                    correctCounter++;
                    $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                    $intentosNumber.textContent = 3;
                    e.target.innerHTML = "v"
                    $span_2.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.add("hoverVerde");
                            e.disabled = true;
                        }
                    })
                
                    setTimeout(() => {
                        $span_2.forEach(e => {
                            if (e.textContent.length > 0) {
                                e.classList.remove("hoverVerde");
                                e.removeAttribute("disabled")
                            }
                        })
                        defineNextLetter_3();

                    }, 3000);

                }

                if (e.target.textContent == "k" && $tableContainer_3.getAttribute("data-correct-letter") == "Corredor encantador") {
                    $wrongSound.pause();
                    $correctSound.play();
                    correctCounter++;
                    if (parseInt($progressBar.textContent) < 101) {
                        $progressBar.innerHTML = `${parseInt($progressBar.textContent) + 5}%`;
                        $progressBar.style.width = `${parseInt($progressBar.textContent) + 5}%`;
                    }
                    $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                    $intentosNumber.textContent = 3;
                    e.target.innerHTML = "c"
                    $span_2.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.add("hoverVerde");
                            e.disabled = true;
                        }
                    })
                 
                    setTimeout(() => {
                        $span_2.forEach(e => {
                            if (e.textContent.length > 0) {
                                e.classList.remove("hoverVerde");
                                e.removeAttribute("disabled")
                            }
                        })
                        defineNextLetter_3();

                    }, 3000);

                }
                if (e.target.textContent == "d" && $tableContainer_3.getAttribute("data-correct-letter") == "Pantalla táctil") {
                    $wrongSound.pause();
                    $correctSound.play();
                    correctCounter++;
                    if (parseInt($progressBar.textContent) < 101) {
                        $progressBar.innerHTML = `${parseInt($progressBar.textContent) + 5}%`;
                        $progressBar.style.width = `${parseInt($progressBar.textContent) + 5}%`;
                    }
                    $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                    $intentosNumber.textContent = 3;
                    e.target.innerHTML = "c"
                    $span_2.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.add("hoverVerde");
                            e.disabled = true;
                        }
                    })
                  
                    setTimeout(() => {
                        $span_2.forEach(e => {
                            if (e.textContent.length > 0) {
                                e.classList.remove("hoverVerde");
                                e.removeAttribute("disabled")
                            }
                        })
                        defineNextLetter_3();

                    }, 3000);

                }
                if (e.target.textContent == "ɐ" && $tableContainer_3.getAttribute("data-correct-letter") == "Escritura buena") {
                    $wrongSound.pause();
                    correctCounter++;
                    $correctSound.play();
                    if (parseInt($progressBar.textContent) < 101) {
                        $progressBar.innerHTML = `${parseInt($progressBar.textContent) + 5}%`;
                        $progressBar.style.width = `${parseInt($progressBar.textContent) + 5}%`;
                    }
                    $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                    $intentosNumber.textContent = 3;
                    e.target.innerHTML = "a"
                    $span_2.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.add("hoverVerde");
                            e.disabled = true;
                        }
                    })
                 
                    setTimeout(() => {
                        $span_2.forEach(e => {
                            if (e.textContent.length > 0) {
                                e.classList.remove("hoverVerde");
                                e.removeAttribute("disabled")
                            }
                        })
                        defineNextLetter_3();

                    }, 3000);

                }
                if (e.target.textContent == "d" && $tableContainer_3.getAttribute("data-correct-letter") == "Sabores fríos") {
                    $wrongSound.pause();
                    $correctSound.play();
                    correctCounter++;
                    if (parseInt($progressBar.textContent) < 101) {
                        $progressBar.innerHTML = `${parseInt($progressBar.textContent) + 5}%`;
                        $progressBar.style.width = `${parseInt($progressBar.textContent) + 5}%`;
                    }
                    $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                    $intentosNumber.textContent = 3;
                    e.target.innerHTML = "b"
                    $span_2.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.add("hoverVerde");
                            e.disabled = true;
                        }
                    })
                 
                    setTimeout(() => {
                        $span_2.forEach(e => {
                            if (e.textContent.length > 0) {
                                e.classList.remove("hoverVerde");
                                e.removeAttribute("disabled")
                            }
                        })
                        defineNextLetter_3();

                    }, 3000);

                }
                if (e.target.textContent == "d" && $tableContainer_3.getAttribute("data-correct-letter") == "Existe mi casa") {
                    $wrongSound.pause();
                    $correctSound.play();
                    correctCounter++;
                    if (parseInt($progressBar.textContent) < 101) {
                        $progressBar.innerHTML = `${parseInt($progressBar.textContent) + 5}%`;
                        $progressBar.style.width = `${parseInt($progressBar.textContent) + 5}%`;
                    }
                    $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                    $intentosNumber.textContent = 3;
                    e.target.style.display = "none"
                    $span_2.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.add("hoverVerde");
                            e.disabled = true;
                        }
                    })
                  
                    setTimeout(() => {
                        $span_2.forEach(e => {
                            if (e.textContent.length > 0) {
                                e.classList.remove("hoverVerde");
                                e.removeAttribute("disabled")
                            }
                        })
                        defineNextLetter_3();

                    }, 3000);

                }
                if (e.target.textContent == "m" && $tableContainer_3.getAttribute("data-correct-letter") == "Mi balón es azul") {
                    $wrongSound.pause();
                    $correctSound.play();
                    correctCounter++;
                    if (parseInt($progressBar.textContent) < 101) {
                        $progressBar.innerHTML = `${parseInt($progressBar.textContent) + 5}%`;
                        $progressBar.style.width = `${parseInt($progressBar.textContent) + 5}%`;
                    }
                    $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                    $intentosNumber.textContent = 3;
                    e.target.innerHTML = "n"
                    $span_2.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.add("hoverVerde");
                            e.disabled = true;
                        }
                    })
                  
                    setTimeout(() => {
                        $span_2.forEach(e => {
                            if (e.textContent.length > 0) {
                                e.classList.remove("hoverVerde");
                                e.removeAttribute("disabled")
                            }
                        })
                        defineNextLetter_3();

                    }, 3000);

                }
                if (e.target.textContent == "a" && $tableContainer_3.getAttribute("data-correct-letter") == "Compró ese sofá") {
                    $wrongSound.pause();
                    $correctSound.play();
                    correctCounter++;
                    if (parseInt($progressBar.textContent) < 101) {
                        $progressBar.innerHTML = `${parseInt($progressBar.textContent) + 5}%`;
                        $progressBar.style.width = `${parseInt($progressBar.textContent) + 5}%`;
                    }
                    $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                    $intentosNumber.textContent = 3;
                    e.target.innerHTML = "á"
                    $span_2.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.add("hoverVerde");
                            e.disabled = true;
                        }
                    })
                 
                    setTimeout(() => {
                        $span_2.forEach(e => {
                            if (e.textContent.length > 0) {
                                e.classList.remove("hoverVerde");
                                e.removeAttribute("disabled")
                            }
                        })
                        defineNextLetter_3();

                    }, 3000);

                }
                if (e.target.textContent == "o" && $tableContainer_3.getAttribute("data-correct-letter") == "Qué buena canción") {
                    $wrongSound.pause();
                    $correctSound.play();
                    correctCounter++;
                    if (parseInt($progressBar.textContent) < 101) {
                        $progressBar.innerHTML = `${parseInt($progressBar.textContent) + 5}%`;
                        $progressBar.style.width = `${parseInt($progressBar.textContent) + 5}%`;
                    }
                    $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                    $intentosNumber.textContent = 3;
                    e.target.innerHTML = "ó"
                    $span_2.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.add("hoverVerde");
                            e.disabled = true;
                        }
                    })
            
                    setTimeout(() => {
                        $span_2.forEach(e => {
                            if (e.textContent.length > 0) {
                                e.classList.remove("hoverVerde");
                                e.removeAttribute("disabled")
                            }
                        })
                        defineNextLetter_3();

                    }, 3000);

                }
                if (e.target.textContent == "e" && $tableContainer_3.getAttribute("data-correct-letter") == "Los murciélagos") {
                    $wrongSound.pause();
                    $correctSound.play();
                    correctCounter++;
                    if (parseInt($progressBar.textContent) < 101) {
                        $progressBar.innerHTML = `${parseInt($progressBar.textContent) + 5}%`;
                        $progressBar.style.width = `${parseInt($progressBar.textContent) + 5}%`;
                    }
                    $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                    $intentosNumber.textContent = 3;
                    e.target.innerHTML = "é"
                    $span_2.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.add("hoverVerde");
                            e.disabled = true;
                        }
                    })
                
                    setTimeout(() => {
                        $span_2.forEach(e => {
                            if (e.textContent.length > 0) {
                                e.classList.remove("hoverVerde");
                                e.removeAttribute("disabled")
                            }
                        })
                        defineNextLetter_3();

                    }, 3000);

                }
                if (e.target.textContent == "k" && $tableContainer_3.getAttribute("data-correct-letter") == "Este menú es caro") {
                    $wrongSound.pause();
                    $correctSound.play();
                    correctCounter++;

                    if (parseInt($progressBar.textContent) < 101) {
                        $progressBar.innerHTML = `${parseInt($progressBar.textContent) + 5}%`;
                        $progressBar.style.width = `${parseInt($progressBar.textContent) + 5}%`;
                    }
                    $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                    $intentosNumber.textContent = 3;
                    e.target.innerHTML = "c"
                    $span_2.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.add("hoverVerde");
                            e.disabled = true;
                        }
                    })
                 
                    setTimeout(() => {
                        $span_2.forEach(e => {
                            if (e.textContent.length > 0) {
                                e.classList.remove("hoverVerde");
                                e.removeAttribute("disabled")
                            }
                        })
                        defineNextLetter_3();

                    }, 3000);

                }
                if (e.target.textContent == "s" && $tableContainer_3.getAttribute("data-correct-letter") == "Mi Venezuela es próspera") {
                    $wrongSound.pause();
                    $correctSound.play();
                    correctCounter++;
                    if (parseInt($progressBar.textContent) < 101) {
                        $progressBar.innerHTML = `${parseInt($progressBar.textContent) + 5}%`;
                        $progressBar.style.width = `${parseInt($progressBar.textContent) + 5}%`;
                    }
                    $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                    $intentosNumber.textContent = 3;
                    e.target.innerHTML = "z"
                    $span_2.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.add("hoverVerde");
                            e.disabled = true;
                        }
                    })
              
                    setTimeout(() => {
                        $span_2.forEach(e => {
                            if (e.textContent.length > 0) {
                                e.classList.remove("hoverVerde");
                                e.removeAttribute("disabled")
                            }
                        })
                        defineNextLetter_3();

                    }, 3000);

                }
                if (e.target.textContent == "v" && $tableContainer_3.getAttribute("data-correct-letter") == "Una tortuga") {
                    $wrongSound.pause();
                    $correctSound.play();
                    correctCounter++;
                    if (parseInt($progressBar.textContent) < 101) {
                        $progressBar.innerHTML = `${parseInt($progressBar.textContent) + 5}%`;
                        $progressBar.style.width = `${parseInt($progressBar.textContent) + 5}%`;
                    }
                    $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                    $intentosNumber.textContent = 3;
                    e.target.innerHTML = "u"
                    $span_2.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.add("hoverVerde");
                            e.disabled = true;
                        }
                    })
                     
                    setTimeout(() => {
                        $span_2.forEach(e => {
                            if (e.textContent.length > 0) {
                                e.classList.remove("hoverVerde");
                                e.removeAttribute("disabled")
                            }
                        })
                        defineNextLetter_3();

                    }, 3000);

                }
                if (e.target.textContent == "m" && $tableContainer_3.getAttribute("data-correct-letter") == "Los conejos") {
                    $wrongSound.pause();
                    $correctSound.play();
                    correctCounter++;
                    if (parseInt($progressBar.textContent) < 101) {
                        $progressBar.innerHTML = `${parseInt($progressBar.textContent) + 5}%`;
                        $progressBar.style.width = `${parseInt($progressBar.textContent) + 5}%`;
                    }

                    $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                    $intentosNumber.textContent = 3;
                    e.target.innerHTML = "n"
                    $span_2.forEach(e => {
                        if (e.textContent.length > 0) {
                            e.classList.add("hoverVerde");
                            e.disabled = true;
                        }
                    })
                 
                    setTimeout(() => {
                        $span_2.forEach(e => {
                            if (e.textContent.length > 0) {
                                e.classList.remove("hoverVerde");
                                e.removeAttribute("disabled")
                            }
                        })
                        defineNextLetter_3();

                    }, 3000);
                }


            }









        });

        //ejercicio tres
        function defineNextLetter_3() {
            $intentosNumber.textContent = 3;
            switch ($tableContainer_3.getAttribute("data-next_3")) {
                case "0":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordsLabels_2("Zaqatillas rojas", "Zapatillas rojas")
                    $tableContainer_3.setAttribute(
                        "data-next_3",
                        `${randomNumber}`
                    );
                    break;
                case "1":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordsLabels_2("Mi baca es linda", "Mi vaca es linda");
                    $tableContainer_3.setAttribute(
                        "data-next_3",
                        `${randomNumber}`
                    );
                    break;
                case "2":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordsLabels_2("Los comejos", "Los conejos");
                    $tableContainer_3.setAttribute(
                        "data-next_3",
                        `${randomNumber}`
                    );
                    break;
                case "3":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordsLabels_2("Pepitos be colores", "Pepitos de colores");
                    $tableContainer_3.setAttribute(
                        "data-next_3",
                        `${randomNumber}`
                    );
                    break;
                case "4":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordsLabels_2("Sonbrero amarillo", "Sombrero amarrillo");
                    $tableContainer_3.setAttribute(
                        "data-next_3",
                        `${randomNumber}`
                    );
                    break;
                case "5":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordsLabels_2("Hai un reloj viejo", "Hay un reloj viejo");
                    $tableContainer_3.setAttribute(
                        "data-next_3",
                        `${randomNumber}`
                    );
                    break;
                case "6":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordsLabels_2("Un buen vídɘo", "Un buen vídeo");
                    $tableContainer_3.setAttribute(
                        "data-next_3",
                        `${randomNumber}`
                    );
                    break;

                case "7":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordsLabels_2("Corredor enkantador", "Corredor encantador");
                    $tableContainer_3.setAttribute(
                        "data-next_3",
                        `${randomNumber}`
                    );
                    break;
                case "8":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordsLabels_2("La llaue cayó en mi casa", "La llave cayó en mi casa");
                    $tableContainer_3.setAttribute(
                        "data-next_3",
                        `${randomNumber}`
                    );
                    break;
                case "9":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordsLabels_2("Pantalla tádtil", "Pantalla táctil");
                    $tableContainer_3.setAttribute(
                        "data-next_3",
                        `${randomNumber}`
                    );
                    break;
                case "10":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordsLabels_2("Escriturɐ buena", "Escritura buena");
                    $tableContainer_3.setAttribute(
                        "data-next_3",
                        `${randomNumber}`
                    );
                    break;
                case "11":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordsLabels_2("Sadores fríos", "Sabores fríos");
                    $tableContainer_3.setAttribute(
                        "data-next_3",
                        `${randomNumber}`
                    );
                    break;
                case "12":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordsLabels_2("Edxiste mi casa", "Existe mi casa");
                    $tableContainer_3.setAttribute(
                        "data-next_3",
                        `${randomNumber}`
                    );
                    break;
                case "13":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordsLabels_2("Mi balóm es azul", "Mi balón es azul");
                    $tableContainer_3.setAttribute(
                        "data-next_3",
                        `${randomNumber}`
                    );
                    break;
                case "14":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordsLabels_2("Compró ese sofa", "Compró ese sofá");
                    $tableContainer_3.setAttribute(
                        "data-next_3",
                        `${randomNumber}`
                    );
                    break;
                case "15":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordsLabels_2("cancion", "canción");
                    $tableContainer_3.setAttribute(
                        "data-next_3",
                        `${randomNumber}`
                    );
                    break;
                case "16":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordsLabels_2("Los murcielagos", "Los murciélagos");
                    $tableContainer_3.setAttribute(
                        "data-next_3",
                        `${randomNumber}`
                    );
                    break;
                case "17":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordsLabels_2("Este menú es karo", "Este menú es caro");
                    $tableContainer_3.setAttribute(
                        "data-next_3",
                        `${randomNumber}`
                    );
                    break;
                case "18":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordsLabels_2("Mi Venesuela es próspera", "Mi Venezuela es próspera");
                    $tableContainer_3.setAttribute(
                        "data-next_3",
                        `${randomNumber}`
                    );
                    break;
                case "19":
                    randomNumber = Math.floor(Math.random() * 18);
                    wordsLabels_2("Una tortvga", "Una tortuga");
                    $tableContainer_3.setAttribute(
                        "data-next_3",
                        `${randomNumber}`
                    );
                    break;



                default:

                    break;
            }

        }

        //Funciones de ventana modal para contar de 3 a 1
        //ejercicio numero uno
        function nextP() {
            switch ($tableContainer.getAttribute("data-next")) {
                case "0":
                    randomNumber = Math.floor(Math.random() * 72);
                    localStorage.setItem("spanNumber", randomNumber);
                    defineLetter("q", "b", "p", randomNumber)
                    $tableContainer.setAttribute(
                        "data-next",
                        `${Math.floor(Math.random() * 15)}`
                    );
                    break;
                case "1":
                    randomNumber = Math.floor(Math.random() * 72);
                    localStorage.setItem("spanNumber", randomNumber);
                    defineLetter("q", "b", "p", randomNumber)
                    $tableContainer.setAttribute(
                        "data-next",
                        `${Math.floor(Math.random() * 15)}`
                    );
                    break;
                case "2":
                    randomNumber = Math.floor(Math.random() * 72);
                    localStorage.setItem("spanNumber", randomNumber);
                    defineLetter("q", "b", "p", randomNumber)
                    $tableContainer.setAttribute(
                        "data-next",
                        `${Math.floor(Math.random() * 15)}`
                    );
                    break;
                case "3":
                    randomNumber = Math.floor(Math.random() * 72);
                    localStorage.setItem("spanNumber", randomNumber);
                    defineLetter("q", "b", "p", randomNumber)
                    $tableContainer.setAttribute(
                        "data-next",
                        `${Math.floor(Math.random() * 15)}`
                    );
                    break;
                case "4":
                    randomNumber = Math.floor(Math.random() * 72);
                    localStorage.setItem("spanNumber", randomNumber);
                    defineLetter("q", "b", "p", randomNumber)
                    $tableContainer.setAttribute(
                        "data-next",
                        `${Math.floor(Math.random() * 15)}`
                    );
                    break;
                case "5":
                    randomNumber = Math.floor(Math.random() * 72);
                    localStorage.setItem("spanNumber", randomNumber);
                    defineLetter("q", "b", "p", randomNumber)
                    $tableContainer.setAttribute(
                        "data-next",
                        `${Math.floor(Math.random() * 15)}`
                    );
                    break;
                case "6":
                    randomNumber = Math.floor(Math.random() * 72);
                    localStorage.setItem("spanNumber", randomNumber);
                    defineLetter("q", "b", "p", randomNumber)
                    $tableContainer.setAttribute(
                        "data-next",
                        `${Math.floor(Math.random() * 15)}`
                    );
                    break;
                case "7":
                    randomNumber = Math.floor(Math.random() * 72);
                    localStorage.setItem("spanNumber", randomNumber);
                    defineLetter("q", "b", "p", randomNumber)
                    $tableContainer.setAttribute(
                        "data-next",
                        `${Math.floor(Math.random() * 15)}`
                    );
                    break;
                case "8":
                    randomNumber = Math.floor(Math.random() * 72);
                    defineLetter("q", "b", "p", randomNumber)
                    localStorage.setItem("spanNumber", randomNumber);
                    $tableContainer.setAttribute(
                        "data-next",
                        `${Math.floor(Math.random() * 15)}`
                    );
                    break;
                case "9":
                    randomNumber = Math.floor(Math.random() * 72);
                    defineLetter("q", "b", "p", randomNumber)
                    localStorage.setItem("spanNumber", randomNumber);
                    $tableContainer.setAttribute(
                        "data-next",
                        `${Math.floor(Math.random() * 15)}`
                    );
                    break;
                case "10":
                    randomNumber = Math.floor(Math.random() * 72);
                    defineLetter("q", "b", "p", randomNumber)
                    localStorage.setItem("spanNumber", randomNumber);
                    $tableContainer.setAttribute(
                        "data-next",
                        `${Math.floor(Math.random() * 15)}`
                    );
                    break;
                case "11":
                    randomNumber = Math.floor(Math.random() * 72);
                    defineLetter("q", "b", "p", randomNumber)
                    localStorage.setItem("spanNumber", randomNumber);
                    $tableContainer.setAttribute(
                        "data-next",
                        `${Math.floor(Math.random() * 15)}`
                    );
                    break;
                case "12":
                    randomNumber = Math.floor(Math.random() * 72);
                    defineLetter("q", "b", "p", randomNumber)
                    localStorage.setItem("spanNumber", randomNumber);
                    $tableContainer.setAttribute(
                        "data-next",
                        `${Math.floor(Math.random() * 15)}`
                    );
                    break;
                case "13":
                    randomNumber = Math.floor(Math.random() * 72);
                    defineLetter("q", "b", "p", randomNumber)
                    localStorage.setItem("spanNumber", randomNumber);
                    $tableContainer.setAttribute(
                        "data-next",
                        `${Math.floor(Math.random() * 15)}`
                    );
                    break;
                case "14":
                    randomNumber = Math.floor(Math.random() * 72);
                    defineLetter("q", "b", "p", randomNumber)
                    localStorage.setItem("spanNumber", randomNumber);
                    $tableContainer.setAttribute(
                        "data-next",
                        `${Math.floor(Math.random() * 15)}`
                    );
                    break;
                case "15":
                    randomNumber = Math.floor(Math.random() * 72);
                    defineLetter("q", "b", "p", randomNumber)
                    localStorage.setItem("spanNumber", randomNumber);
                    $tableContainer.setAttribute(
                        "data-next",
                        `${Math.floor(Math.random() * 15)}`
                    );
                    break;
                default:
                    alert("you are crazy");
                    break;
            }
        }
    </script>
</body>

</html>