<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tu puedes | Lección 12</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://pie-meister.github.io/PieMeister-with-Progress.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" type="image/x-icon" href="../../../../img/icono/icono.ico">
    <link rel="stylesheet" href="../../../../css/player/they_do_read/lecciones.css">
    <style>
        main {
            background-image: url(../../../../img/player/fondo.png);
        }

        .tableContainer {
            display: block;
            flex-wrap: none !important;
            gap: 0rem !important;

        }

        .colButton {
            display: flex;
            gap: 0.5rem;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .colButton>button {
            cursor: pointer;
            border: 0rem;
            border-bottom: #d9713f solid 3px;
            background: #ff864c;
            color: white;
            font-weight: 500;
            font-size: 2rem;
            /* padding: 0.5rem; */
            text-align: center;
            border-radius: 0.5rem;
            margin-bottom: 0.6rem;
            width: auto;
            width: clamp(50px, 40%, 70px);
        }

        .colButton>button:hover {
            transition: all linear 0.4s;
            background: #ffa94f;
            transform: translateY(-4px);
            transition: all 250ms cubic-bezier(0.3, 0.7, 0.4, 1.5);
            box-shadow: -0rem 0.3rem #7e4f1e;
            filter: brightness(110%);
        }

        .row {
            display: flex;
        }

        @keyframes swing {


            0% {
                transform: scale(1);
            }

            10%,
            20% {
                transform: scale(0.9) rotate(-3deg);
            }

            30%,
            50%,
            70%,
            90% {
                transform: scale(1.1) rotate(3deg);
            }

            40%,
            60%,
            80% {
                transform: scale(1.1) rotate(-3deg);
            }

            100% {
                transform: scale(1) rotate(0);
            }
        }

        /* Apply the swing animation to an element */
        .swing {
            transform-origin: top center;
            animation: swing 2s;
        }




        /*leccion 10 */
        .theWordInput {
            margin: 1rem 0;
            /* color: inherit; */
            border: 0;
            border-bottom: 1px rgb(173 173 173) solid;
            border-top: 1px rgb(173 173 173) solid;
            /* background: 0rem; */
            padding: 0.2rem 0.5rem;
            background: none;

        }

        /*leccion 13 */
        .buttonCheck {
            cursor: pointer;
        }

        .isFine {
            transition: all 0.5s linear;
            color: rgb(26 139 87);
            border-bottom: 1px solid rgb(26 139 87);
            border-top: 1px solid rgb(26 139 87);

            ;
        }

        .isFineIcon {

            transition: all 0.5s linear;
            background: rgb(26 139 87) !important;
        }

        .isNotFine {
            text-decoration: line-through;
            transition: all 0.5s linear;
            color: #d55252;
            border-bottom: 1px solid #d55252;
            border-top: 1px solid #d55252;
        }

        .isNotFineIcon {
            transition: all 0.5s linear;
            background: #d55252 !important;
        }

        .iconCheck {
            position: absolute;
            top: -1rem;
            left: -1rem;
            background: #ff864c;
            border-radius: 1rem;
            color: white;
            padding: 0.4rem;
            font-size: 1.2rem;
        }

        .buttonCheck {
            background: none;
            color: white;
            border: 0rem;
        }

        textarea::placeholder {
            color: red !important;
            border: solid 2px black;
        }

        textarea::selection {
            background: white;
            color: black
        }

        textarea::target-text {
            background-color: pink;
        }

        .theWordInput:focus-visible {
            border: 0rem !important;
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
                <i class="bi bi-stopwatch-fill fs-1 "></i>
            </div>
        </div>
        <div class="letterContainer">
            <div class="container-xxl">
                <div class="tableContainer align-items-center justify-content-center" data-next="5">
                    <figure>
                        <img src="" alt="" class="img-fluid" style="width: 9rem;">
                    </figure>
                    <div class="messageDictador">
                        <strong></strong>
                        <span></span>
                    </div>
                    <div class=" colButton">
                        <span>
                            <textarea name="" id="" class="theWordInput"></textarea>
                            <!---<i class="bi bi-hourglass-split iconCheck"></i>-->
                        </span>
                    </div>
                </div>
                <div class="containerIntentos">
                    <span class="intentos">
                        <button data-word="" class="buttonCheck">Verificar</button>
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
                <i class="bi bi-volume-up me-1 repeatDictation"></i>
                <p>Escucha y escribe la letra.</p>
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
        <audio src="../../../../audio/welcome_jugador/finalJuego.mp3" autoplay class="endLeccion"></audio>
        <audio src="../../../../audio/welcome_jugador/siguiente.mp3" autoplay class="sonidoSiguiente"></audio>
        <audio src="../../../../audio/welcome_jugador/ceroIntentos.mp3" autoplay class="ceroIntentos"></audio>
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

    <script type="module">

        import { _1_3, $countDownBody } from "../../../../js/player/auxiliares/windowModal3_1.js"


        //Variables
        let $dataWord = document.querySelector("[data-word]");
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
        let $intentosNumber = document.querySelectorAll(".intentos > .number");
        let $intento = document.querySelector(".intentos")
        let $twoEjercicio = document.querySelector(".twoEjercicio");
        let $paragrahMessenger = document.querySelector(".messengerInformation > p");

        let $span = document.querySelectorAll(".tableContainer_2 > button");
        let $span_2 = document.querySelectorAll(".tableContainer_3 > button");
        //Contadores.
        //Ejercicio numero uno 
        let correctCounter = 0;
        let ErrorCounter = 0;

        const CountdownNext = document.querySelector(".countDownNext");


        let randomNumber = 0;
        let intentos = 3;
        let count = 0;
        let countTotal = 0;
        let _1_3_text = document.querySelector(".text_1_3");
        let $spanLetter = document.querySelectorAll(".tableContainer > button");
        let $repeatDictation = document.querySelector(".repeatDictation");
        let $intentoText = document.querySelector(".intentoText")
        //nuevo
        let $colButton = document.querySelectorAll(".colButton > button")

        let $ceroIntentos = document.querySelector(".ceroIntentos")
        let $endLeccion = document.querySelector(".endLeccion");
        let $sonidoSiguiente = document.querySelector(".sonidoSiguiente")

        let $texTarea = document.querySelector(".theWordInput");
        let $iconCheck = document.querySelector(".iconCheck");

        let userIncorrectWords = {
            userWold: [],
            youCanWord: []
        }

        //split(" ").join("") estos dos metodos sirven para una leccion mas avanzada
        function check(text) {
            let checkWord = text.trim().toLowerCase().split(" ").join("");
            return checkWord;
        }

        function CodeWordToCheck(image, correctWord) {
            let $img = document.querySelector("figure > img");
            $img.src = `../../../../img/player/leccionEscuchaEscribe/${image}.jpg`;
            let title = image
            $img.title = title;
            localStorage.setItem("voiceWord", correctWord)
            $dataWord.setAttribute("data-word-lowercase", correctWord.trim().toLowerCase().split(" ").join(""))
            $dataWord.setAttribute("data-word", correctWord);
            $texTarea.value = ""
            setTimeout(() => {
                voiceExercise();
            }, 1000);
        }


        let $buttonCheck = document.querySelector(".buttonCheck");


        function defineNextVers() {
            $texTarea.value = ""
            switch ($tableContainer.getAttribute("data-next")) {
                case "0":
                    randomNumber = Math.floor(Math.random() * 10);
                    CodeWordToCheck("Dos personas jugando con una pelota.", "Pepe le pasa la pelota a Pablo.");
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;
                case "1":
                    randomNumber = Math.floor(Math.random() * 10);
                    CodeWordToCheck("Las estrellas.", "Las estrellas en la noche son hermosas.")
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;
                case "2":
                    randomNumber = Math.floor(Math.random() * 10);
                    CodeWordToCheck("Una niña.", "La nena pasea sola.")
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;
                case "3":
                    randomNumber = Math.floor(Math.random() * 10);
                    CodeWordToCheck("Un dedo.", "Mi primo le duele el dedo.")
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;
                case "4":
                    randomNumber = Math.floor(Math.random() * 10);
                    CodeWordToCheck("Lluvia repentina.", "Hay una lluvia repentina en mi casa.")
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;
                case "5":
                    randomNumber = Math.floor(Math.random() * 10);
                    CodeWordToCheck("Una niña saludando.", "Adela me saluda.")
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;
                case "6":
                    randomNumber = Math.floor(Math.random() * 10);
                    CodeWordToCheck("Niños comiendo en una mesa.", "Lolita come poco en la cena.")
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;

                case "7":
                    randomNumber = Math.floor(Math.random() * 10);
                    CodeWordToCheck("Hay un niño y un mosquito cerca de el.", "Juan tiene que tener mucho cuidado, porque los mosquitos pican.")
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;
                case "8":
                    randomNumber = Math.floor(Math.random() * 10);
                    CodeWordToCheck("Hay una vaca.", "Esta vaca es de mis primos.")
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;
                case "9":
                    randomNumber = Math.floor(Math.random() * 10);
                    CodeWordToCheck("Hay una niña barriendo.", "Lola puede barrer la casa de mi madre.")
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;
                case "10":
                    randomNumber = Math.floor(Math.random() * 10);
                    CodeWordToCheck("Hay una niña que tiene una rosa naranja.", "Nora tiene una rosa de color naranja.")
                    $tableContainer.setAttribute(
                        "data-next",
                        `${randomNumber}`
                    );
                    break;
                default:
                    break;
            }
        }
        function voiceExerciseSlow() {
            let texto = `Escucha y escribe la letra: .`;
            const hablar = (texto) =>
                speechSynthesis.speak(new SpeechSynthesisUtterance(texto));
            hablar(texto);
            let mensaje = new SpeechSynthesisUtterance(localStorage.getItem("voiceWord"));
            mensaje.rate = 0.5;
            let voces = window.speechSynthesis.getVoices();
            mensaje.voice = voces.find(voz => voz.lang === 'es-ES');
            return window.speechSynthesis.speak(mensaje);
        }


        function voiceExercise() {
            let texto = `Escucha y escribe la letra: .`;
            const hablar = (texto) =>
                speechSynthesis.speak(new SpeechSynthesisUtterance(texto));
            hablar(texto);
            let mensaje = new SpeechSynthesisUtterance(localStorage.getItem("voiceWord"));
            mensaje.rate = 0.7;
            let voces = window.speechSynthesis.getVoices();
            mensaje.voice = voces.find(voz => voz.lang === 'es-ES');
            return window.speechSynthesis.speak(mensaje);
        }

        //Evento de localStorage
        document.addEventListener("DOMContentLoaded", (e) => {


            if (localStorage.getItem("voiceWord") === null) {
                localStorage.setItem("voiceWord", null);
            }
            if (localStorage.getItem("pauseTime") === null) {
                localStorage.setItem("pauseTime", null);
            }
        });

        document.addEventListener("click", e => {


            if (e.target.matches(".siguiente")) {
                let $last = document.querySelector(".last");
                let $first = document.querySelector(".first");
                $first.style.display = "none";
                $last.classList.add("animationBounceOut");
                $last.removeAttribute("style");
                $sonidoSiguiente.play()
            }
            if (e.target.matches(".repeatDictation")) {
                voiceExercise()
            }

            if (e.target.matches(".repeatSlow")) {
                voiceExerciseSlow()
            }
        })
        let $messageDictadorStrong = document.querySelector(".messageDictador > strong")
        let $messageDictadorSpan = document.querySelector(".messageDictador > span")

        function CheckForErrors(userText, youCanText) {
            let userTextF = userText.split("");
            let youCanTextF = youCanText.split("");
            let c = 0; //Contador
            for (let i = 0; i < youCanTextF.length; i++) {
                if (userTextF[i] !== youCanTextF[i]) {
                    c++
                }
            }
            if (c == 0) {
                $messageDictadorStrong.innerHTML = "No has cometido ningún error ortográfico.";
            } else if (c == 1) {
                $messageDictadorStrong.innerHTML = "Tu solo has cometido un error ortográfico.";
            } else if (c > 1) {
                $messageDictadorStrong.innerHTML = "Has cometido algunos errores ortográficos.";
                $messageDictadorSpan.innerHTML = `Verso correcto: ${$buttonCheck.getAttribute("data-word")}`
                console.warn(`Usted ha tuvido ${c} errores.`)
            }
        }

        fetch('https://api.languagetool.org/v2/check', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: new URLSearchParams({
                'text': 'Esto es un texto de prueba',
                'language': 'es',
            }),
        })
            .then(response => response.json())
            .then(data => {
                console.log(data);
            })
            .catch(error => {
                console.error('Error:', error);
            });


        function verificationWord(statu) {
            if (statu == true) {
                $wrongSound.pause();
                CheckForErrors(check($texTarea.value), $buttonCheck.getAttribute("data-word-lowercase"));
                correctCounter++;
                $correctSound.play();
                $buttonCheck.disabled = "true"
                $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                $texTarea.classList.add("isFine");
                setTimeout(() => {
                    $texTarea.style.transition = "all 0.5s linear"
                    $texTarea.classList.remove("isFine");
                    $buttonCheck.removeAttribute("disabled");

                    defineNextVers()
                }, 2000);
            } else {
                CheckForErrors(check($texTarea.value), $buttonCheck.getAttribute("data-word-lowercase"));
                $wrongSound.play();
                correctCounter++;
                $buttonCheck.disabled = "true"
                $texTarea.disabled = true;
                userIncorrectWords.youCanWord.push($dataWord.getAttribute("data-word"));
                userIncorrectWords.userWold.push($texTarea.value);
                $correctSound.pause();
                $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                $texTarea.classList.add("isNotFine");
                setTimeout(() => {
                    setTimeout(() => {
                        $texTarea.style.transition = "all 0.5s linear"
                        $texTarea.classList.remove("isNotFine");
                        $buttonCheck.removeAttribute("disabled");
                        $texTarea.removeAttribute("disabled");
                        defineNextVers()
                    }, 2000);
                }, 1500);
            }
        }



        $buttonCheck.addEventListener("click", e => {
            /*  $iconCheck.classList.remove("animationBounceOut"); */
            console.log($dataWord.getAttribute("data-word-lowercase"))
            if (check($texTarea.value) == $dataWord.getAttribute("data-word-lowercase") || check($texTarea.value) == $dataWord.getAttribute("data-word-lowercase") + ".") {
                verificationWord(true)
            } else {
                verificationWord(false)
            }
        })





        //El inicio de todo 
        setTimeout(() => {
            let $main = document.querySelector("main");
            $main.removeChild($main.children[10]);
            setTimeout(async () => {
                $countDownBody.removeAttribute("style");
                _1_3();
                CodeWordToCheck("gatoParque", "Ese gato camina por el parque y siempre se asoma");
                setTimeout(() => {
                    temporizador()
                }, 2500);
                setTimeout(() => {
                    let $messengerInformation = document.querySelector(
                        ".messengerInformation"
                    );
                    $messengerInformation.removeAttribute("style");
                    $messengerInformation.classList.add("AnimationMessengerInformation");
                }, 4000);
            }, 0);
        }, 1500);


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
            const CountdownNext = document.querySelector(".countDownNext");
            let $segMin = document.querySelector(".seg-min")
            let countForNext = 60;
            let countdown = setInterval(() => {
                countForNext--;
                CountdownNext.textContent = `${countForNext}`;
                if (countForNext === 0) {
                    clearInterval(countdown);
                    End_Game();
                    $endLeccion.play()
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
            if (ErrorCounter == 0) {
                $percentage.innerHTML = "100%";
                $motivationalMessage.innerHTML = "¡Lo hiciste increíble!";
            }
            if (ErrorCounter > 0 && ErrorCounter < 5) {
                $percentage.innerHTML = "75%";
                $motivationalMessage.innerHTML = "¡Oh, Bastante bien!";
            }

            if (ErrorCounter > 5 && ErrorCounter < 15) {
                $percentage.innerHTML = "50%";
                $motivationalMessage.innerHTML = "¡Lo hiciste bien!";
            }
            if (ErrorCounter > 15 && ErrorCounter < 20) {
                $percentage.innerHTML = "30%";
                $motivationalMessage.innerHTML = "No está mal, hay que mejorar.";
            }
            if (ErrorCounter > 20) {
                $percentage.innerHTML = "20%";
                $motivationalMessage.style.display = "none";
            }
            console.info(incorrectCounter);
            $containerResults.removeAttribute("style");
            document.querySelector(".containerResults  > div").classList.add("animationBounce");
            //failed
            if (ErrorCounter == 0) {
                $correctFailed.innerHTML = `Has acertado ${correctCounter} veces y no has cometido ningún error.`;
            } else if (ErrorCounter == 1) {
                $correctFailed.innerHTML = `Has acertado ${correctCounter} veces y has fallado solo una vez.`;
            } else {
                $correctFailed.innerHTML = `Has acertado ${correctCounter} veces y has fallado ${ErrorCounter} veces.`;
            }
        }
    </script>
</body>

</html>