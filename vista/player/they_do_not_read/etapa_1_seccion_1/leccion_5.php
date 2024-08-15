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
        <div class="logoPresentation" >
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
let $tableLetter = document.querySelector(".tableContainer");
$tableLetter.setAttribute("data-next", "4");
let $starNumber = document.querySelector(".start");
let $progressBar = document.querySelector(".progress-bar");
let incorrectCounter = 0;
let $paragrahMessenger = document.querySelector(".messengerInformation > p");
//Contadores para determinar cuantas veces el niño ha acertado incorrectamente.
let countfia = 0;
let countdar = 0;
let countque = 0;
let countfiz = 0;

//Contadores para determinar cuantas veces el niño ha acertado correctamente.
let correctCounterFia = 0;
let correctCounterDar = 0;
let correctCounterQue = 0;
let correctCounterFiz = 0;
let randomNumber = 0;
let $spanLetter = document.querySelectorAll(".tableContainer > button");
let $countDownBody = document.querySelector(".countDownBody");
let $repeatDictation = document.querySelector(".repeatDictation");

//Evento de localStorage
document.addEventListener("DOMContentLoaded",async(e) => {
    await defineLetter("q", "b", "p", 2)
    if (localStorage.getItem("letter") === null) {
        localStorage.setItem("letter", null);
    }
    if (localStorage.getItem("spanNumber") === null) {
        localStorage.setItem("spanNumber", null);
    }
});

async function countDownP() {
    await localStorage.setItem("letter", `p`);
    const CountdownNext = document.querySelector(".countDownNext");
    let countForNext = 40;
    let countdown = setInterval(() => {
        countForNext--;
        CountdownNext.textContent = countForNext;
        if (countForNext === 0) {
            clearInterval(countdown);
            countDownV()
        }
    }, 1000);
}
countDownP();

async function countDownV() {
    $progressBar.innerHTML = "30%";
    $progressBar.style.width = "30%";
    $progressBar.style.background = "#ff7d3f";
    await localStorage.setItem("letter", `v`);
    _1_3();
    voiceExercise("v");
    defineLetter("ʌ", "u", "v",  Math.floor(Math.random() * 72));
    const CountdownNext = document.querySelector(".countDownNext");
    let countForNext = 50;
    let countdown = setInterval(() => {
        countForNext--;
        CountdownNext.textContent = countForNext;
        if (countForNext === 0) {
            clearInterval(countdown);
            CountDownW()
        }
    }, 1000);
}

async function countDownJ() {
    $progressBar.innerHTML = "70%";
    $progressBar.style.width = "70%";
    $progressBar.style.background = "#ff7d3f";
    await localStorage.setItem("letter", `j`);
    _1_3();
    voiceExercise("j");
    defineLetter("t", "ɾ̣", "j",  Math.floor(Math.random() * 72))
    const CountdownNext = document.querySelector(".countDownNext");
    let countForNext = 60;
    let countdown = setInterval(() => {
        countForNext--;
        CountdownNext.textContent = countForNext;
        if (countForNext === 0) {
            clearInterval(countdown);
            End_Game()
        }
    }, 1000);
}

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


//Funcion para terminar la leccion.
function End_Game() {
    $progressBar.innerHTML = "100%";
    $progressBar.style.width = "100%";
    let $containerResults = document.querySelector(".containerResults");
    let $totalStar = document.querySelector(".totalStar");
    let $motivationalMessage = document.querySelector(".motivationalMessage");
    let $percentage = document.querySelector(".percentage");
    let $correctFailedFia = document.querySelector(".correctFailedFia");
    let $correctFailedDar = document.querySelector(".correctFailedDar");
    let $correctFailedQue = document.querySelector(".correctFailedQue");
    let $correctFailedFiz = document.querySelector(".correctFailedFiz");
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
    if (countfia == 0) {
        $correctFailedFia.innerHTML = `¡Enhorabuena! Has acertado ${correctCounterFia} veces y no has cometido ningún error.`;
    } else if (countfia == 1) {
        $correctFailedFia.innerHTML = `¡Buen Trabajo! Has acertado ${correctCounterFia} veces y has fallado solo una vez.`;
    } else {
        $correctFailedFia.innerHTML = `Has acertado ${correctCounterFia} veces y has fallado ${countfia} veces.`;
    }
    if (countdar == 0) {
        $correctFailedDar.innerHTML = `¡Enhorabuena! Has acertado ${correctCounterDar} veces y no has cometido ningún error.`;
    } else if (countdar == 1) {
        $correctFailedDar.innerHTML = `¡Buen Trabajo! Has acertado ${correctCounterDar} veces y has fallado solo una vez.`;
    } else {
        $correctFailedDar.innerHTML = `Has acertado ${correctCounterDar} veces y has fallado ${countdar} veces.`;
    }
    if (countque == 0) {
        $correctFailedQue.innerHTML = `¡Enhorabuena! Has acertado ${correctCounterQue} veces y no has cometido ningún error.`;
    } else if (countque == 1) {
        $correctFailedQue.innerHTML = `¡Buen Trabajo! Has acertado ${correctCounterQue} veces y has fallado solo una vez.`;
    } else {
        $correctFailedQue.innerHTML = `Has acertado ${correctCounterQue} veces y has fallado ${countque} veces.`;
    }
    if (countfiz == 0) {
        $correctFailedFiz.innerHTML = `¡Enhorabuena! Has acertado ${correctCounterFiz} veces y no has cometido ningún error.`;
    } else if (countfiz == 1) {
        $correctFailedFiz.innerHTML = `¡Buen Trabajo! Has acertado ${correctCounterFiz} veces y has fallado solo una vez.`;
    } else {
        $correctFailedFiz.innerHTML = `Has acertado ${correctCounterFiz} veces y has fallado ${countfiz} veces.`;
    }
}
async function CountDownW() {
    await localStorage.setItem("letter", `w`);
    $progressBar.innerHTML = "50%";
    $progressBar.style.width = "50%";
    $progressBar.style.background = "#ff7d3f";
    _1_3();
    voiceExercise("w");
    defineLetter("ʍ", "m", "w", Math.floor(Math.random() * 72))
    const CountdownNext = document.querySelector(".countDownNext");
    let countForNext = 50;
    let countdown = setInterval(() => {
        countForNext--;
        CountdownNext.textContent = countForNext;
        if (countForNext === 0) {
            clearInterval(countdown);
            countDownJ()
         }
    }, 1000);
}
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
            }, 2000);
            setTimeout(() => {
                $dataWrong.setAttribute("data-wrong", "false");
                Define_Next_Letter();
            }, 2000);
            incorrectCounter = incorrectCounter + 1;
            switch (localStorage.getItem("letter")) {
                case "fia":
                    countfia++;
                    break;
                case "dar":
                    countdar++;
                    break;
                case "que":
                    countque++;
                    break;
                case "fiz":
                    countfiz++;
                    break;
                default:
                    break;
            }
        }

        if(e.target.textContent == "v"){
            correctCounterDar++;
            $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
            e.target.classList.add("hoverVerde");
            
            $wrongSound.pause();

            $correctSound.play();
            $spanLetter.forEach(letter => {
                letter.disabled = true;                
                setTimeout(() => {
                    letter.removeAttribute("disabled")
                }, 2000);
            })
             setTimeout(() => {
                e.target.classList.remove("hoverVerde");
                 nextV();

                $correctSound.pause();
            }, 2000);
        }
        if(e.target.textContent == "w"){
            correctCounterQue++;
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
                 nextW();
                $correctSound.pause();
            }, 2000);
        }
    }
    if(e.target.textContent == "j"){
            correctCounterFiz++;
            $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
            e.target.classList.add("hoverVerde");
            $wrongSound.pause();
            $correctSound.play();
            setTimeout(() => {
                e.target.classList.remove("hoverVerde");
                nextJ();
                $correctSound.pause();
            }, 2000);
        }
    
});


//Funcion principal para cambiarla.
function Define_Next_Letter() {
    switch (localStorage.getItem("letter")) {
        case "p":
            nextP();
            break;
        case "v":
            nextV()
             break;
        case "w":
            nextW()
             break;
        case "j":
            nextJ();
             break;
        default:
            break;
    }
}


function nextP() {
    switch ($tableLetter.getAttribute("data-next")) {
        case "0":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("q", "b", "p", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "1":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("q", "b", "p", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "2":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("q", "b", "p", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "3":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("q", "b", "p", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "4":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("q", "b", "p", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "5":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("q", "b", "p", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "6":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("q", "b", "p", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "7":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("q", "b", "p", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "8":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("q", "b", "p", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "9":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("q", "b", "p", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "10":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("q", "b", "p", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "11":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("q", "b", "p", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "12":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("q", "b", "p", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "13":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("q", "b", "p", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "14":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("q", "b", "p", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "15":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("q", "b", "p", randomNumber)
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

function nextV() {
    switch ($tableLetter.getAttribute("data-next")) {
        case "0":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("ʌ", "u", "v", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "1":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("ʌ", "u", "v", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "2":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("ʌ", "u", "v", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "3":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("ʌ", "u", "v", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "4":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("ʌ", "u", "v", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "5":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("ʌ", "u", "v", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "6":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("ʌ", "u", "v", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "7":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("ʌ", "u", "v", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "8":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("ʌ", "u", "v", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "9":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("ʌ", "u", "v", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "10":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("ʌ", "u", "v", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "11":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("ʌ", "u", "v", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "12":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("flu", "fio", "fia", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "13":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("ʌ", "u", "v", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "14":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("ʌ", "u", "v", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "15":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("ʌ", "u", "v", randomNumber)
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


function nextW() {
    switch ($tableLetter.getAttribute("data-next")) {
        case "0":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("ʍ", "m", "w",  randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "1":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("ʍ", "m", "w",  randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "2":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("ʍ", "m", "w",  randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "3":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("ʍ", "m", "w",  randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "4":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("ʍ", "m", "w",  randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "5":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("ʍ", "m", "w",  randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "6":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("ʍ", "m", "w",  randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "7":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("ʍ", "m", "w",  randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "8":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("ʍ", "m", "w",  randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "9":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("ʍ", "m", "w",  randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "10":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("ʍ", "m", "w",  randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "11":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("ʍ", "m", "w",  randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "12":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("ʍ", "m", "w",  randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "13":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("ʍ", "m", "w",  randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "14":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("ʍ", "m", "w",  randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "15":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("ʍ", "m", "w",  randomNumber)
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


function nextJ() {
    switch ($tableLetter.getAttribute("data-next")) {
        case "0":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("t", "ɾ̣", "j",randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "1":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("t", "ɾ̣", "j",randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "2":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("t", "ɾ̣", "j",randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "3":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("t", "ɾ̣", "j",randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "4":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("t", "ɾ̣", "j",randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "5":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("t", "ɾ̣", "j",randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "6":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("t", "ɾ̣", "j",randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "7":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("t", "ɾ̣", "j",randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "8":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("t", "ɾ̣", "j",randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "9":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("t", "ɾ̣", "j",randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "10":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("t", "ɾ̣", "j",randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "11":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("t", "ɾ̣", "j",randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "12":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("t", "ɾ̣", "j",randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "13":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("t", "ɾ̣", "j",randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "14":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("t", "ɾ̣", "j",randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "15":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("t", "ɾ̣", "j",randomNumber)
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

$repeatDictation.addEventListener("click", (e) => {
    switch (localStorage.getItem("letter")) {
        case "p":
            voiceExercise("p");
            break;
        case "v":
            voiceExercise("v");
            break;
        case "w":
            voiceExercise("w");
            break;
        case "j":
            voiceExercise("j");
            break;
        default:
            break;
    }
});
//Estas dos funciones sirven para automatizar la tarea completa de rellenar/establecer/escuchar la letra de la etiqueta. Como su nombre lo define.
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
        }
        else if (numeroR[i] % 2 == 0) {
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



//Función que se ejecuta al inicio de la lección de forma automática.
setTimeout(() => {
    let $main = document.querySelector("main");
    $main.removeChild($main.children[7]);
    setTimeout(async () => {
        $countDownBody.removeAttribute("style");
        voiceExercise("p");
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