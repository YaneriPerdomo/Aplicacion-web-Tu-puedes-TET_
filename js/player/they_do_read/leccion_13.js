
import { _1_3, $countDownBody } from "../../auxiliares/windowModal3_1.js";

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

alert("Hola")

function  check(text){
    let $input = document.querySelector("input");
    let checkWord = text.toLowerCase();
    if(checkWord == "yaneri"){
        alert("muy bien")
    }else{
        alert("mal")
    }
}
check("YANERI")




//El inicio de todo 
setTimeout(() => {
    let $main = document.querySelector("main");
    $main.removeChild($main.children[10]);
    setTimeout(async () => {
        $countDownBody.removeAttribute("style");
        _1_3();
        let texto = `Indica el número de sílabas que tiene el verso.`;
        const hablar = (texto) =>
            speechSynthesis.speak(new SpeechSynthesisUtterance(texto));
        hablar(texto);
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


function voiceExerciseSlow() {
    let mensaje = new SpeechSynthesisUtterance(localStorage.getItem("letter"));
    mensaje.rate = 0.7;
    let voces = window.speechSynthesis.getVoices();
    mensaje.voice = voces.find(voz => voz.lang === 'es-ES');
    return window.speechSynthesis.speak(mensaje);
}

function voiceExercise() {
    let texto = `Encuentra el error oculto. ${voiceExerciseSlow}`;
    const hablar = (texto) =>
        speechSynthesis.speak(new SpeechSynthesisUtterance(texto));
    return hablar(texto);
}

//Evento de localStorage
document.addEventListener("DOMContentLoaded", (e) => {
    if (localStorage.getItem("letter") === null) {
        localStorage.setItem("letter", null);
    }
});