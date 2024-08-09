<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://pie-meister.github.io/PieMeister-with-Progress.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <style>
        main {
            width: 100vw;
            height: 100vh;
            background: #ffbb9a;
            display: flex;
            flex-direction: column;
            background-image: url(../../../../../img/player/fondo.png);
        }

        .letterContainer {
            flex-grow: 2;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .actividyContainer {
            display: flex;
            align-items: center;
            margin: 1rem;
            gap: 2rem;
        }

        .startContainer {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            /* display: flex; */
            /* flex-direction: row-reverse; */
            /* gap: 0.5rem; */
            align-items: center;
            background: rgb(47, 47, 47);
            border-radius: 2.5rem;
            /* padding: 0.5rem; */
            color: white;
        }

        .progressContainer {
            flex-grow: 2;

        }

        .timeContainer {
            display: flex;
            flex-direction: row-reverse;
            gap: 0.5rem;
            align-items: center;
            background: rgb(47, 47, 47);
            border-radius: 2.5rem;
            /* padding: 0.5rem; */
            color: white;
            /* border: .2rem #ff7d3f solid; */
        }

        .tiempo {
            padding: 0.5rem;
        }

        .bi-stopwatch-fill {
            background: rgb(23 154 215);
            padding: 0.5rem;
            border-radius: 3rem;
            color: white;
        }

        .arrowContainer>a {
            color: grey;
        }

        .table {
            font-size: 3rem;
            border-collapse: collapse;
            border-collapse: separate;
            /* default */
            empty-cells: show;
            /* default */
        }

        table,
        td,
        th {
            border-spacing: 0.5rem;
            text-align: center;
            border-radius: 0.5rem;
        }

        th,
        td,
        .tableContainer>span {
            cursor: pointer;
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

        .tableContainer {
            font-size: 2rem;
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .tableContainer>span:hover {
            transition: all linear 0.4s;
            background: #ffa94f;
            transform: translateY(-4px);
            transition: all 250ms cubic-bezier(0.3, 0.7, 0.4, 1.5);
            box-shadow: -0rem 0.3rem #7e4f1e;
            filter: brightness(110%);
        }

        .hoverRed {
            transition: all linear 0.4s;
            background: #d55252 !important;
            transform: translateY(-4px);
            transition: all 250ms cubic-bezier(0.3, 0.7, 0.4, 1.5);
            box-shadow: -0rem 0.3rem #bd3d3d !important;
            filter: brightness(110%);
            border-bottom: #d55252 solid 3px !important;
        }

        .hoverVerde {
            transition: all linear 0.4s;
    background: rgb(26 139 87) !important;
    transform: translateY(-4px);
    transition: all 250ms cubic-bezier(0.3, 0.7, 0.4, 1.5);
    box-shadow: -0rem 0.3rem #173917 !important;
    filter: brightness(110%);
    border-bottom: rgb(26 139 87) solid 3px !important;
        }

        .text-warning {
            padding-right: 2rem;
            color: white !important;
        }

        .bi-star-fill {
            background: rgb(255, 194, 1);
            padding: 0.5rem;
            border-radius: 12rem;
            color: white !important;
        }

        .stripeOne {
            position: absolute;
            height: 2rem;
            width: 100vw;
            bottom: 0rem;
            left: 0rem;
            z-index: 999;
            background-color: rgb(47, 47, 47);

        }

        .stripeTwo {
            position: absolute;
            height: 0.6rem;
            width: 100vw;
            bottom: 2.6rem;
            left: 0rem;
            z-index: 999;
            background-color: rgb(47, 47, 47);
        }

        .stripeThree {
            position: absolute;
            height: 0.6rem;
            z-index: 999;
            width: 100vw;
            bottom: 4rem;
            left: 0rem;
            background-color: rgb(47, 47, 47);

        }

        .messengerUserContainer {
            position: absolute;
            width: 100vw;
            justify-content: center;
            align-items: center;
            display: flex;
            margin-left: rem;
        }

        .messengerInformation {
            max-width: 600px;
            min-width: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgb(47, 47, 47);
            color: white;
            border-radius: 3rem;
            gap: 1rem;
            max-width: 600px;
            min-width: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgb(47, 47, 47);
            color: white;
            border-radius: 0rem 0rem 0.5rem 0.5rem;
            gap: 1rem;
            /* background: white; */
            padding: 0.5rem;
            /* border-radius: 0.5rem; */
            /* filter: drop-shadow(0px 2px grey); */
            color: orange;
            /* border: solid 2px grey; */
            background: #0a3b24;
            color: white;
            background: #d55252;
            color: white;
            font-weight: 600;
        }

        .AnimationMessengerInformation {
            animation: AnimationMessenger 2s;
        }


        @keyframes AnimationMessenger {
            0% {
                transform: translateY(-2rem);
            }

            100% {
                transform: translateY(0rem);
            }
        }

        .messengerInformation>p {
            margin: 0;
        }

        .messengerInformation>figure {
            background: orange;
            margin: 0;
            border-radius: 2.5rem;
        }

        .logoPresentation {
            width: 100vw;
            height: 100vh;
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgb(47, 47, 47);
        }

        .logoPresentation>div {
            background: #232323;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem;
        }



        @keyframes zoomInDown {
            0% {
                opacity: 0;
                transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
                animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            }

            60% {
                opacity: 1;
                transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            }
        }



        .animated {
            animation-name: zoomInDown;
            animation-duration: 2s;
            animation-fill-mode: both;
            animation-iteration-count: 1;
            z-index: 999;
            animation-timing-function: ease-in-out;
        }

        .opacity {
            animation-name: opacity;
            animation-duration: 2s;
            animation-fill-mode: both;
            animation-iteration-count: 1;
            z-index: 999;
            animation-delay: 3s;
            animation-timing-function: ease-in-out;
        }

        @keyframes opacity {
            0% {}

            100% {
                opacity: 0;
            }
        }

        .countDownBody {
            width: 100vw;
            height: 100vh;
            position: absolute;
            background: rgb(47, 47, 47, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .countDownBody>div {
            background: #d5d5d5;
            color: rgb(47, 47, 47);
            padding: 1rem;
            border-radius: 1rem;
            filter: drop-shadow(0px 4px black);
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 150px;
            height: 130px;
            min-width: 100px;
            min-height: 70px;
            border-radius: 0.5rem;
            position: relative;
            filter: drop-shadow(2px 4px 0px #c36437);
            filter: drop-shadow(2px 4px 0px #d5d5d5);
            justify-content: center;
            background: white;

        }

        .styleBook {
            background-image: linear-gradient(45deg, #1CB0F6 30%, #16a0e1 30% 50%, #1CB0F6 50% 60%, #16a0e1 60% 65%, #1CB0F6 56% 100%);
            filter: drop-shadow(2px 4px 0px rgb(97 155 15));
            width: 8rem;
            height: 6rem;
            background-image: linear-gradient(45deg, #ff864c 30%, #ff7736 30% 50%, #ff864c 50% 60%, #ff7736 60% 65%, #ff864c 55% 100%);
            border-radius: 0.5rem;
            position: relative;
            filter: drop-shadow(2px 4px 0px #c36437);
        }

        .hookOne {
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgb(47, 47, 47);
            width: 20px;
            height: 15px;
            top: 0.5rem;
            left: -0.5rem;
            border-radius: 0.5rem;
        }

        .hookTwo {
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgb(47, 47, 47);
            width: 20px;
            height: 15px;
            top: 80%;
            left: -0.5rem;
            border-radius: 0.5rem;
        }

        .hookTres {
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgb(47, 47, 47);
            width: 20px;
            height: 15px;
            top: 45%;
            left: -0.5rem;
            border-radius: 0.5rem;
        }

        .count {
            color: rgb(47, 47, 47);
        }

        .hookTres+h2 {
            font-size: calc(1.8rem + 2vw) !important;
        }
    </style>
</head>

<body>
    <main>

        <div class="actividyContainer">
            <div class="arrowContainer">
                <a href="./../../read.php">
                    <i class="bi bi-arrow-left-circle-fill fs-1"></i></a>
            </div>
            <div class="progressContainer">
                <div style="flex-grow: 2">
                    <div class="progress" style="background: rgb(47, 47, 47);" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
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
                <span class="countDownNext fs-4" ></span>
                <i class="bi bi-stopwatch-fill fs-1"></i>
            </div>
        </div>
        <div class="letterContainer">
            <div class="container-xxl">
                <div class="tableContainer" data-next="1">
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>b</span>
                    <span>d</span>



                    <!-- <table class="table caption-top">
                        <thead>
                        <tr>
                            <th scope="col">d</th>
                            <th scope="col">d</th>
                            <th scope="col">d</th>
                            <th scope="col">d</th>
                            <th scope="col">d</th>
                            <th scope="col">d</th>
                            <th scope="col">d</th>
                            <th scope="col">d</th>
                            <th scope="col">d</th>
                            <th scope="col">d</th>
                            <th scope="col">d</th>
                            <th scope="col">d</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>d</td>
                            <td>d</td>
                            <td>d</td>
                            <td>d</td>
                            <td>d</td>
                            <td>d</td>
                            <td>d</td>
                            <td>d</td>
                            <td>d</td>
                            <td>d</td>
                            <td>d</td>
                            <td>d</td>
                        </tr>
                        <tr>
                            <td>d</td>
                            <td>d</td>
                            <td>d</td>
                            <td>d</td>
                            <td>d</td>
                            <td>d</td>
                            <td>d</td>
                            <td>d</td>
                            <td>d</td>
                            <td>d</td>
                            <td>b</td>
                            <td>d</td>
                        </tr>   <tr>
                            <td>d</td>
                            <td>d</td>
                            <td>d</td>
                            <td>d</td>
                            <td>d</td>
                            <td>d</td>
                            <td>d</td>
                            <td>d</td>
                            <td>d</td>
                            <td>d</td>
                            <td>d</td>
                            <td>d</td>
                        </tr>
                      
                        </tbody>
                        
                    </table>---->
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
                <p> Encuentras el elemento que has escuchado.</p>
            </div>
        </div>
        <audio src="../../../../../audio/welcome_jugador/SoundEffects Button.mp3" autoplay class="letterSound"></audio>

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


        <div class="marco timeContainer" style="display:none">
            <div class="tiempo" style="" id="tiempo">00:00:00.000</div>
            <i class="bi bi-stopwatch-fill fs-1"></i>
            <div class="botones-contenedor" style="display: none">
                <div class="btn" onclick="iniciar()">
                    <i class="fas fa-play"></i>
                </div>
            </div>
        </div>
    </main>
</body>

</html>

<script>
    let $tableLetter = document.querySelector(".tableContainer")
    $tableLetter.setAttribute("data-next", "4")
    let $progressBar = document.querySelector(".progress-bar")
    document.addEventListener("DOMContentLoaded", e => {
        if (localStorage.getItem("letter") === null) {
            localStorage.setItem("letter", null)
        }
        if (localStorage.getItem("spanNumber") === null) {
            localStorage.setItem("spanNumber", null)
        }
    })

    function countDownB() {
        localStorage.setItem("letter", `d`);
        const CountdownNext = document.querySelector('.countDownNext');
        let countForNext = 40;
        let countdown = setInterval(() => {
            countForNext--;
            CountdownNext.textContent = countForNext;
            if (countForNext === 0) {
                clearInterval(countdown);
                countDownL()
            }
        }, 1000);
    }
    countDownB()

    function countDownL() {
        $progressBar.innerHTML = "30%";
        $progressBar.style.width = "30%";
        $progressBar.style.background = "#ff7d3f"
        localStorage.setItem("letter", `l`);
        _1_3()
        voiceExercise("l")
        defineLetter("i", "l", Math.floor(Math.random() * 72));
        const CountdownNext = document.querySelector('.countDownNext');
        let countForNext = 50;
        let countdown = setInterval(() => {
            countForNext--;
            CountdownNext.textContent = countForNext;
            if (countForNext === 0) {
                clearInterval(countdown);
                Count_Down_Q()
            }
        }, 1000);
    }

    function Count_Down_Q() {
        localStorage.setItem("letter", `q`);
        $progressBar.innerHTML = "50%";
        $progressBar.style.width = "50%";
        $progressBar.style.background = "#ff7d3f"
        _1_3()
        voiceExercise("n")
        defineLetter("m", "n", Math.floor(Math.random() * 72));
        const CountdownNext = document.querySelector('.countDownNext');
        let countForNext = 50;
        let countdown = setInterval(() => {
            countForNext--;
            CountdownNext.textContent = countForNext;
            if (countForNext === 0) {
                clearInterval(countdown);
                Count_Down_N()
            }
        }, 1000);
    }
    function Count_Down_N() {
        localStorage.setItem("letter", `n`);
        $progressBar.innerHTML = "70%";
        $progressBar.style.width = "70%";
        $progressBar.style.background = "#ff7d3f"
        _1_3()
        voiceExercise("q")
        defineLetter("p", "q", Math.floor(Math.random() * 72));
        const CountdownNext = document.querySelector('.countDownNext');
        let countForNext = 60;
        let countdown = setInterval(() => {
            countForNext--;
            CountdownNext.textContent = countForNext;
            if (countForNext === 0) {
                clearInterval(countdown);
            }
        }, 1000);
    }

    function defineLetter(similarLetter, winningLetter, number) {
        let $span = document.querySelectorAll(".tableContainer > span");
        let contador = 0;
        for (let i = 0; i < $span.length; i++) {
            contador = contador + 1
            if (number == contador) {
                $span[i].innerHTML = `${winningLetter}`
                continue;
            }
            $span[i].innerHTML = `${similarLetter}`
        }

    }

    function voiceExercise(winningLetter) {
        let texto = `Encuentra la letra, ${winningLetter}.`;
        const hablar = (texto) => speechSynthesis.speak(new SpeechSynthesisUtterance(texto));
        return hablar(texto);
    }

    let randomNumber = 0;

    function Next_db() {
        switch ($tableLetter.getAttribute("data-next")) {
            case "0":
                randomNumber = Math.floor(Math.random() * 72);
                localStorage.setItem("spanNumber", randomNumber)
                defineLetter("b", "d", randomNumber);
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "1":
                randomNumber = Math.floor(Math.random() * 72);
                localStorage.setItem("spanNumber", randomNumber)
                defineLetter("b", "d", randomNumber);
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "2":
                randomNumber = Math.floor(Math.random() * 72);
                localStorage.setItem("spanNumber", randomNumber)
                defineLetter("b", "d", randomNumber);
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "3":
                randomNumber = Math.floor(Math.random() * 72);
                localStorage.setItem("spanNumber", randomNumber)
                defineLetter("b", "d", randomNumber);
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "4":
                randomNumber = Math.floor(Math.random() * 72);
                localStorage.setItem("spanNumber", randomNumber)
                defineLetter("b", "d", randomNumber);
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "5":
                randomNumber = Math.floor(Math.random() * 72);
                localStorage.setItem("spanNumber", randomNumber)
                defineLetter("b", "d", randomNumber);
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "6":
                randomNumber = Math.floor(Math.random() * 72);
                localStorage.setItem("spanNumber", randomNumber)
                defineLetter("b", "d", randomNumber);
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "7":
                randomNumber = Math.floor(Math.random() * 72);
                localStorage.setItem("spanNumber", randomNumber)
                defineLetter("b", "d", randomNumber);
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "8":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("b", "d", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "9":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("b", "d", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "10":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("b", "d", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "11":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("b", "d", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "12":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("b", "d", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "13":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("b", "d", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "14":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("b", "d", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "15":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("b", "d", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            default:
            alert("you are crazy")
            break;
        }
    }

    function Next_il() {
        switch ($tableLetter.getAttribute("data-next")) {
            case "0":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("i", "l", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "1":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("i", "l", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "2":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("i", "l", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "3":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("i", "l", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "4":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("i", "l", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "5":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("i", "l", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "6":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("i", "l", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "7":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("i", "l", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "8":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("i", "l", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "9":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("i", "l", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "10":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("i", "l", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "11":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("i", "l", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "12":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("i", "l", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "13":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("i", "l", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "14":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("i", "l", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "15":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("i", "l", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            default:
                break;
        }
    }

    function Next_qp() {
        switch ($tableLetter.getAttribute("data-next")) {
            case "0":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("p", "q", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "1":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("p", "q", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "2":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("p", "q", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "3":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("p", "q", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "4":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("p", "q", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "5":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("p", "q", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "6":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("p", "q", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "7":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("p", "q", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "8":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("p", "q", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "9":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("p", "q", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "10":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("p", "q", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "11":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("p", "q", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "12":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("p", "q", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "13":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("p", "q", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "14":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("p", "q", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "15":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("p", "q", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            default:
                break;
        }

    }
  
    function Next_mn(){
        switch ($tableLetter.getAttribute("data-next")) {
            case "0":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("m", "n", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "1":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("m", "n", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "2":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("m", "n", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "3":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("m", "n", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "4":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("m", "n", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "5":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("m", "n", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "6":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("m", "n", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "7":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("m", "n", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "8":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("m", "n", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "9":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("m", "n", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "10":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("m", "n", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "11":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("m", "n", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "12":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("m", "n", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "13":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("m", "n", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "14":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("m", "n", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            case "15":
                randomNumber = Math.floor(Math.random() * 72);
                defineLetter("m", "n", randomNumber);
                localStorage.setItem("spanNumber", randomNumber)
                $tableLetter.setAttribute("data-next", `${Math.floor(Math.random() * 15)}`)
                break;
            default:
                break;
        }
    }
    let $starNumber = document.querySelector(".start")

    function Define_Next_Letter() {
        switch (localStorage.getItem("letter")) {
            case "d":
                Next_db()
                break;
            case "l":
                Next_il()
                break;
            case "q":
                Next_qp()
                break;
            case "n":
                Next_mn()
            break;
            default:
            break;
        }
    }
    let $spanLetter = document.querySelectorAll(".tableContainer > span");

    document.addEventListener("click", e => {
        if (e.target.matches(".tableContainer > span")) {
            if (e.target.textContent == "d") {
                $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                e.target.classList.add("hoverVerde")
                setTimeout(() => {
                    e.target.classList.remove("hoverVerde");
                    Next_db();
                }, 2000);
            } else { 
                $spanLetter.forEach(letter => {
                    
                    if (letter.textContent === localStorage.getItem("letter")) {
                        letter.classList.add("hoverVerde");
                        setTimeout(() => {
                            letter.classList.remove("hoverVerde")
                        }, 2000);
                    }
                })
                e.target.classList.add("hoverRed")
                setTimeout(() => {
                    e.target.classList.remove("hoverRed")
                }, 2000);
                setTimeout(() => {
                    Define_Next_Letter()
                }, 2000);
               
            }

            if (e.target.textContent == "l") {
                $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                  e.target.classList.add("hoverVerde")
                setTimeout(() => {
                    e.target.classList.remove("hoverVerde");
                    Next_il();
                }, 2000);
            }

            if (e.target.textContent == "q") {
                $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                setTimeout(() => {
                    e.target.classList.remove("hoverVerde");
                    Next_qp();
                }, 2000);
             
            }
            if (e.target.textContent == "n") {
                $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
                setTimeout(() => {
                    e.target.classList.remove("hoverVerde");
                    Next_qp();
                }, 2000);
             
            }
        }

      
    })


    //Variables

    //Cuenta regresiva
    let $countDownBody = document.querySelector(".countDownBody")


    let $letterSound = document.querySelector(".letterSound");
    document.addEventListener("mousemove", (e) => {
        if (e.target.matches(".tableContainer > span")) {
            try {
                $letterSound.play();
            } catch (error) {
                alert("error")
            }
        }
    })

    function _1_3() {
        let count = 3;
        const countdownElement = document.querySelector('.countDownBody > div > h2');
        countdownElement.innerHTML = "3"
        $countDownBody.removeAttribute("style")
        let countdown = setInterval(() => {
            count--;
            countdownElement.textContent = count;
            if (count === 0) {
                clearInterval(countdown);
                $countDownBody.style.display = "none"
            }
        }, 1000);
    }


    setTimeout(() => {
        let $main = document.querySelector("main")
        $main.removeChild($main.children[5])
        setTimeout(async () => {
            $countDownBody.removeAttribute("style")
            voiceExercise("d")
            _1_3()
            setTimeout(() => {
                let $messengerInformation = document.querySelector(".messengerInformation");
                $messengerInformation.removeAttribute("style");
                $messengerInformation.classList.add("AnimationMessengerInformation")
            }, 4000);
        }, 0);
    }, 3000);
</script>
<script>
    let tiempoRef = Date.now();
    let cronometrar = true;
    let acumulado = 0;

    function iniciar() {
        cronometrar = true;
    }

    function pausar() {
        cronometrar = false;
    }

    function reiniciar() {
        acumulado = 0;
    }

    setInterval(() => {
        let tiempo = document.getElementById("tiempo");
        if (cronometrar) {
            acumulado += Date.now() - tiempoRef;
        }
        tiempoRef = Date.now();
        tiempo.innerHTML = formatearMS(acumulado);
    }, 1000 / 60);

    function formatearMS(tiempo_ms) {
        let MS = tiempo_ms % 1000;
        //Agregué la variable St para solucionar el problema de contar los minutos y horas.
        let St = Math.floor((tiempo_ms - MS) / 1000);
        let S = St % 60;
        let M = Math.floor((St / 60) % 60);
        let H = Math.floor(St / 60 / 60);
        Number.prototype.ceros = function(n) {
            return (this + "").padStart(n, 0);
        };
        return H.ceros(2) + ":" + M.ceros(2) + ":" + S.ceros(2);
    }
</script>