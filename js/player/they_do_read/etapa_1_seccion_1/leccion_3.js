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
let $spanLetter = document.querySelectorAll(".tableContainer > span");
let $countDownBody = document.querySelector(".countDownBody");
let $repeatDictation = document.querySelector(".repeatDictation");
let $letterSound = document.querySelector(".letterSound");

//FUNCIONES//

//Estas funciones se ejecutan para pasar a la siguiente búsqueda de la letra(ejercicio) correspondiente.
async function countDownFia() {
    await localStorage.setItem("letter", `fia`);
    const CountdownNext = document.querySelector(".countDownNext");
    let countForNext = 60;
    let countdown = setInterval(() => {
        countForNext--;
        CountdownNext.textContent = countForNext;
        if (countForNext === 0) {
            clearInterval(countdown);
            countDownDar()
        }
    }, 1000);
}
countDownFia();
async function countDownDar() {
    $progressBar.innerHTML = "30%";
    $progressBar.style.width = "30%";
    $progressBar.style.background = "#ff7d3f";
    await localStorage.setItem("letter", `dar`);
    _1_3();
    voiceExercise("dar");
    defineLetter("dal", "dap", "dar", Math.floor(Math.random() * 72))
    const CountdownNext = document.querySelector(".countDownNext");
    let countForNext = 50;
    let countdown = setInterval(() => {
        countForNext--;
        CountdownNext.textContent = countForNext;
        if (countForNext === 0) {
            clearInterval(countdown);
            CountDownQue()
        }
    }, 1000);
}
async function countDownFiz() {
    $progressBar.innerHTML = "70%";
    $progressBar.style.width = "70%";
    $progressBar.style.background = "#ff7d3f";
    await localStorage.setItem("letter", `fiz`);
    _1_3();
    voiceExercise("fiz");
    defineLetter("fis", "fi", "fiz", Math.floor(Math.random() * 72))
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
async function CountDownQue() {
    await localStorage.setItem("letter", `que`);
    $progressBar.innerHTML = "50%";
    $progressBar.style.width = "50%";
    $progressBar.style.background = "#ff7d3f";
    _1_3();
    voiceExercise("que");
    defineLetter("je", "ke", "que", Math.floor(Math.random() * 72))
    const CountdownNext = document.querySelector(".countDownNext");
    let countForNext = 50;
    let countdown = setInterval(() => {
        countForNext--;
        CountdownNext.textContent = countForNext;
        if (countForNext === 0) {
            clearInterval(countdown);
            countDownFiz()
        }
    }, 1000);
}

//Funcion principal para cambiar la posicion de la letra.
function Define_Next_Letter() {
    switch (localStorage.getItem("letter")) {
        case "fia":
            nextFia();
            break;
        case "dar":
            nextDar()
            break;
        case "que":
            nextQue()
            break;
        case "fiz":
            nextFiz();
            break;
        default:
            break;
    }
}

//Estas dos funciones sirven para automatizar la tarea completa de rellenar/establecer la letra de la etiqueta. Como su nombre lo define.
function defineLetter(similarLetterOne, similarLetterTwo, winningLetter, number) {
    let $span = document.querySelectorAll(".tableContainer > span");
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
        voiceExercise("fia");
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

//Estas funciones sirven para ejecutar automáticamente la tarea de la siguiente posición de la letra correspondiente.     
function nextDar() {
    switch ($tableLetter.getAttribute("data-next")) {
        case "0":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("dal", "dap", "dar", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "1":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("dal", "dap", "dar", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "2":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("dal", "dap", "dar", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "3":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("dal", "dap", "dar", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "4":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("dal", "dap", "dar", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "5":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("dal", "dap", "dar", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "6":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("dal", "dap", "dar", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "7":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("dal", "dap", "dar", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "8":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("dal", "dap", "dar", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "9":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("dal", "dap", "dar", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "10":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("dal", "dap", "dar", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "11":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("dal", "dap", "dar", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "12":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("dal", "dap", "dar", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "13":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("dal", "dap", "dar", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "14":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("dal", "dap", "dar", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "15":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("dal", "dap", "dar", randomNumber)
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
function nextFia() {
    switch ($tableLetter.getAttribute("data-next")) {
        case "0":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("flu", "fio", "fia", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "1":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("flu", "fio", "fia", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "2":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("flu", "fio", "fia", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "3":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("flu", "fio", "fia", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "4":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("flu", "fio", "fia", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "5":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("flu", "fio", "fia", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "6":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("flu", "fio", "fia", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "7":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("flu", "fio", "fia", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "8":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("flu", "fio", "fia", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "9":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("flu", "fio", "fia", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "10":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("flu", "fio", "fia", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "11":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("flu", "fio", "fia", randomNumber)
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
            defineLetter("flu", "fio", "fia", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "14":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("flu", "fio", "fia", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "15":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("flu", "fio", "fia", randomNumber)
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
function nextQue() {
    switch ($tableLetter.getAttribute("data-next")) {
        case "0":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("je", "ke", "que", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "1":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("je", "ke", "que", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "2":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("je", "ke", "que", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "3":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("je", "ke", "que", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "4":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("je", "ke", "que", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "5":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("je", "ke", "que", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "6":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("je", "ke", "que", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "7":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("je", "ke", "que", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "8":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("je", "ke", "que", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "9":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("je", "ke", "que", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "10":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("je", "ke", "que", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "11":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("je", "ke", "que", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "12":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("je", "ke", "que", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "13":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("je", "ke", "que", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "14":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("je", "ke", "que", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "15":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("je", "ke", "que", randomNumber)
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
function nextFiz() {
    switch ($tableLetter.getAttribute("data-next")) {
        case "0":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("fis", "fi", "fiz", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "1":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("fis", "fi", "fiz", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "2":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("fis", "fi", "fiz", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "3":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("fis", "fi", "fiz", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "4":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("fis", "fi", "fiz", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "5":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("fis", "fi", "fiz", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "6":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("fis", "fi", "fiz", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "7":
            randomNumber = Math.floor(Math.random() * 72);
            localStorage.setItem("spanNumber", randomNumber);
            defineLetter("fis", "fi", "fiz", randomNumber)
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "8":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("fis", "fi", "fiz", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "9":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("fis", "fi", "fiz", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "10":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("fis", "fi", "fiz", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "11":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("fis", "fi", "fiz", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "12":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("fis", "fi", "fiz", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "13":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("fis", "fi", "fiz", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "14":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("fis", "fi", "fiz", randomNumber)
            localStorage.setItem("spanNumber", randomNumber);
            $tableLetter.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 15)}`
            );
            break;
        case "15":
            randomNumber = Math.floor(Math.random() * 72);
            defineLetter("fis", "fi", "fiz", randomNumber)
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

//Eventos//

//Evento click para Repetir la letra nuevamente.
$repeatDictation.addEventListener("click", (e) => {
    switch (localStorage.getItem("letter")) {
        case "fia":
            voiceExercise("fia");
            break;
        case "dar":
            voiceExercise("dar");
            break;
        case "que":
            voiceExercise("que");
            break;
        case "fiz":
            voiceExercise("fiz");
            break;
        default:
            break;
    }
});

//Este es un evento del mouse y se activa el sonido cuando el mouse está sobre el botón.
document.addEventListener("mousemove", (e) => {
    if (e.target.matches(".tableContainer > span")) {
        try {
            $letterSound.play();
        } catch (error) {
            alert("error");
        }
    }
});

//Evento de localStorage
document.addEventListener("DOMContentLoaded", (e) => {
    if (localStorage.getItem("letter") === null) {
        localStorage.setItem("letter", null);
    }
    if (localStorage.getItem("spanNumber") === null) {
        localStorage.setItem("spanNumber", null);
    }
});

//Evento para ver si la letra seleccionada por el usuario esta correcta o no. 
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

        if (e.target.textContent == "fia") {
            correctCounterFia++;
            $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
            e.target.classList.add("hoverVerde");
            $wrongSound.pause();
            $correctSound.play();
            setTimeout(() => {
                e.target.classList.remove("hoverVerde");
                nextFia();
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

        if (e.target.textContent == "dar") {
            correctCounterDar++;
            $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
            e.target.classList.add("hoverVerde");
            $wrongSound.pause();
            $correctSound.play();
            setTimeout(() => {
                e.target.classList.remove("hoverVerde");
                nextDar();
                $correctSound.pause();
            }, 2000);
        }
        if (e.target.textContent == "que") {
            correctCounterQue++;
            $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
            e.target.classList.add("hoverVerde");
            $wrongSound.pause();
            $correctSound.play();
            setTimeout(() => {
                e.target.classList.remove("hoverVerde");
                nextQue();
                $correctSound.pause();
            }, 2000);
        }
    }
    if (e.target.textContent == "fiz") {
        correctCounterFiz++;
        $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
        e.target.classList.add("hoverVerde");
        $wrongSound.pause();
        $correctSound.play();
        setTimeout(() => {
            e.target.classList.remove("hoverVerde");
            nextFiz();
            $correctSound.pause();
        }, 2000);
    }

});

document.addEventListener("DOMContentLoaded", e => nextFia());
