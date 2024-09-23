
import { _1_3, $countDownBody } from "../../auxiliares/windowModal3_1.js";

//Variables
let $wrongSound = document.querySelector(".wrongSound");
let $correctSound = document.querySelector(".correctSound");
let $tableContainer = document.querySelector(".tableContainer");
let $starNumber = document.querySelector(".start");
let $progressBar = document.querySelector(".progress-bar");
let $letterSound = document.querySelector(".letterSound");


//Contadores.
let correctCounter = 0;
let ErrorCounter = 0;

const CountdownNext = document.querySelector(".countDownNext");

let $intentoText = document.querySelector(".intentoText")
let $buttons = document.querySelectorAll(".colButton > button")

let $theLetterContainer = document.querySelector(".theLetter")


let $intentosNumber = document.querySelectorAll(".intentos > .number");
let $intento = document.querySelector(".intentos")
let $ceroIntentos = document.querySelector(".ceroIntentos")


//Audios
let $endLeccion = document.querySelector(".endLeccion");
let $sonidoSiguiente = document.querySelector(".sonidoSiguiente")

let $theWord = document.querySelector(".palabra");
let $space = document.querySelectorAll(".palabra > span")

//FUNCIONES



//Funcion que genera la voz de google
function messengerForUser(cuidado) {
    if (cuidado) {
        let texto = `¡Cuidado!. ¿Vas a abandonar tu lección y perderás todo el progreso?. ¿Estás seguro de que quieres abandonar? `;
        const hablar = (texto) =>
            speechSynthesis.speak(new SpeechSynthesisUtterance(texto));
        hablar(texto);
    } else {
        let texto = `Completa la palabra.`;
        const hablar = (texto) =>
            speechSynthesis.speak(new SpeechSynthesisUtterance(texto));
        hablar(texto);
    }
}
//Función para pasar al siguiente ejercicio mientras no se agoten los segundos
function defineNextLetter() {
    switch ($tableContainer.getAttribute("data-next")) {
        case "0":
            let ls0 = ["ma", "na", "sa", "mad", "ta"]
            completaWord([...ls0])
            palabraIncompleta(2, 1, "palo", "paloma")
            $tableContainer.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 10)}`
            );
            break;
        case "1":
            let ls1 = ["re", "se", "es", "!se", "ta"]
            completaWord([...ls1])
            palabraIncompleta(0, 1, "pejo", "espejo")
            $tableContainer.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 10)}`
            );
            break;
        case "2":
            let ls2 = ["in", "ni", "ñi", "do", "di"]
            completaWord([...ls2])
            palabraIncompleta(0, 1, "ño", "niño")
            $tableContainer.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 10)}`
            );
            break;
        case "3":
            let ls3 = ["pe", "de", "qie", "qe", "per"]
            completaWord([...ls3])
            palabraIncompleta(0, 1, "rro", "perro")
            $tableContainer.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 10)}`
            );
            break;
        case "4":
            let ls4 = ["ed", "bed", "be", "des", "ped"]
            completaWord([...ls4])
            palabraIncompleta(2, 1, "Tú pue", "Tú puedes")
            $tableContainer.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 10)}`
            );
            break;
        case "5":
            let ls5 = ["in", "ni", "ind", "ins", "tic"]
            completaWord([...ls5])
            palabraIncompleta(0, 1, "secto", "insecto")
            $tableContainer.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 10)}`
            );
            break;
        case "6":
            hiddenKeyLetter("g.", "e", "ga");
            $tableContainer.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 10)}`
            );
            break;
        case "7":
            hiddenKeyLetter("r", "s", "g");
            $tableContainer.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 10)}`
            );
            break;
        case "8":
            hiddenKeyLetter("u", "h", "n");
            $tableContainer.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 10)}`
            );
            break;
        case "9":
            hiddenKeyLetter(">", ">>", "<");
            $tableContainer.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 10)}`
            );
            break;
        case "10":
            hiddenKeyLetter("var", "let", "cost");
            $tableContainer.setAttribute(
                "data-next",
                `${Math.floor(Math.random() * 10)}`
            );
            break;
        default:
            break;
    }
}

/*Estas dos funciones son los temporizadores, me preguntarán por qué están divididas, mi lógica de programación es que mi solución
fue porque a la primera se le mostraría el minuto número uno y los segundos correspondientes y a la segunda función solo los segundos
que faltan. La segunda función es importante porque cuando llega al número 0, es decir, que se acabaron los segundos, se ejecuta la funcion
end_Game que esa funcion mostrara al usuario las cantidades de estrellas
y el porcentaje*/
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

//Esta funcion sirve para determinar el backend mas que todo puesto de que se guardaran las cantidades de estrellas y el porcentaje
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
    $containerResults.removeAttribute("style");
    document.querySelector(".containerResults  > div").classList.add("animationBounce");
    //failed
    if (correctCounter == 0) {
        $correctFailed.innerHTML = `Has acertado ${correctCounter} veces y no has cometido ningún error.`;
    } else if (correctCounter == 1) {
        $correctFailed.innerHTML = `Has acertado ${correctCounter} veces y has fallado solo una vez.`;
    } else {
        $correctFailed.innerHTML = `Has acertado ${correctCounter} veces y has fallado ${ErrorCounter} veces.`;
    }
}

//Función principal que te permite automatizar el proceso de la lección, de hecho, como su nombre lo dice.


/*
function hiddenKeyLetter(one, two, three) {
    let $botton = document.querySelectorAll(".colButton > button");
    let numeroR = [];
    $colButton.forEach(e => {
        e.innerHTML = "?"
    })
    let arrayLetter = Math.floor(Math.random() * 2);
    let letterGanadora = [one, two, three]
    $tableContainer.setAttribute("data-letter", letterGanadora[arrayLetter]);
    console.log("animation")
    $theLetter.classList.remove("animationLetter")
    $theLetter.classList.add("animationLetter")
    $theLetter.innerHTML = letterGanadora[arrayLetter];
    setTimeout(() => {
        for (let i = 0; i < $botton.length; i++) {
            numeroR.push(Math.trunc(Math.random() * 10))
        }
        for (let i = 0; i < $botton.length; i++) {
            if (numeroR[i] % 2 == 0) {
                $botton[i].innerHTML = `${one}`;
            } else {
                $botton[i].innerHTML = `${two}`;
            }
        }
        for (let i = 0; i < $botton.length; i++) {
            if ($botton[i].getAttribute("data-primo") == "true") {
                $botton[i].innerHTML = three
            }
        }
        $theLetter.innerHTML = "?"
    }, 3000);
}*/
//EVENTOS
//Principales
document.addEventListener("click", e => {
    //Reproducir el audio:
    if (e.target.matches(".cuidado")) {
        messengerForUser(true)
    }

    //Ver las cantidades de estrellas y el porcentaje; pasar a la informacion final
    if (e.target.matches(".siguiente")) {
        let $last = document.querySelector(".last");
        let $first = document.querySelector(".first");
        $first.style.display = "none";
        $last.classList.add("animationBounceOut");
        $last.removeAttribute("style");
        $sonidoSiguiente.play()
    }

    //Repetir lo que el usuario tiene que hacer
    if (e.target.matches(".repeatVerso")) {
        messengerForUser(false)
    }

    //Esto es para verificar la respuesta del usuario al ejercicio.
    if (e.target.matches(".colButton > button")) {
        console.log(e.target.textContent);
        let userWord = "",
            string = ""
        $space.forEach(e => {
            if (e.textContent.length > 1 && e.textContent !== "__") {
                string = e.textContent;
            }
        })
        switch ($tableContainer.getAttribute("data-stringMetodo")) {
            case "0":
                console.log("metodo numero cero")
                userWord = `${e.target.textContent}${string}`;
                break;
            case "1":
                userWord = `${e.target.textContent}${string}`;
                break;
            case "2":
                userWord = `${string}${e.target.textContent}`;
                break;
            default:
                break;
        }
        console.log(userWord)
        if (userWord == $tableContainer.getAttribute("data-TheWord")) {
            $wrongSound.pause();
            correctCounter++;
            $correctSound.play();
            $starNumber.innerHTML = `${1 + Number.parseInt($starNumber.textContent)}`;
            e.target.classList.add("hoverVerde")
            $space.forEach(el => {
                if (el.textContent == "__") {
                    console.info(el.textContent)
                    el.setAttribute("data-re", "true")
                    el.innerHTML = e.target.textContent;
                }
            })
            $buttons.forEach(e => {
                if (e.textContent.length > 0) {
                    e.disabled = true
                }
            })
            $theWord.classList.add("hoverVerde")
            if (parseInt($progressBar.textContent) < 101) {
                $progressBar.innerHTML = `${parseInt($progressBar.textContent) + 2}%`;
                $progressBar.style.width = `${parseInt($progressBar.textContent) + 2}%`;
            }
            setTimeout(() => {
                $space.forEach(el => {
                    if (el.getAttribute("data-re") == "true") {
                        el.innerHTML = "__";
                        el.removeAttribute("data-re")
                    }
                })
                $theWord.classList.remove("hoverVerde")
                e.target.classList.remove("hoverVerde");
                $buttons.forEach(e => {
                    if (e.textContent.length > 0) {
                        e.removeAttribute("disabled");
                    }
                })
                defineNextLetter()
            }, 2000);
        } else {
            $intentosNumber[0].textContent = parseInt($intentosNumber[0].textContent) - 1;
            ErrorCounter++;
            $wrongSound.play();
            $buttons.forEach(el => {
                el.disabled = true
            })
            $theWord.classList.add("hoverRed");
            $space.forEach(el => {
                if (el.textContent == "__") {
                    console.info(el.textContent)
                    el.setAttribute("data-re", "true")
                    el.innerHTML = e.target.textContent;
                }
            })
            setTimeout(() => {
                $space.forEach(el => {
                    if (el.getAttribute("data-re") == "true") {
                        el.innerHTML = "__";
                        el.removeAttribute("data-re")
                    }
                })
                e.target.classList.remove("hoverRed");
                $theWord.classList.remove("hoverRed")
                $buttons.forEach(e => {
                    e.removeAttribute("disabled")
                })
            }, 2000);
            e.target.classList.add("hoverRed");
            if ($intentosNumber[0].textContent == 1) {
                $intentoText.innerHTML = "Intento:"
            }
            if ($intentosNumber[0].textContent == 0) {
                $buttons.forEach(e => {
                    e.disabled = true;
                    e.classList.add("hoverRed");
                })
                $intento.classList.add("swing");
                $ceroIntentos.play()
                setTimeout(() => {
                    $buttons.forEach(e => {
                        e.classList.remove("hoverRed");
                        e.removeAttribute("disabled");
                        $intentosNumber[0].innerHTML = 3
                    })
                    $intento.classList.remove("swing")
                }, 2000);
            }
        }
    }
})

//Este es un evento del mouse y se activa el sonido cuando el mouse está sobre el botón.
document.addEventListener("mousemove", (e) => {
    if (e.target.matches(".colButton > button")) {
        $letterSound.play();
    }
});

//No es una función, más bien es lo primero que se ejecutará al iniciar la lección.
setTimeout(() => {
    let $main = document.querySelector("main");
    $main.removeChild($main.children[10]);
    setTimeout(async () => {
        $countDownBody.removeAttribute("style");
        _1_3();
        messengerForUser()
        setTimeout(() => {
            temporizador()
        }, 2500);
        setTimeout(() => {
            let $messengerInformation = document.querySelector(".messengerInformation");
            $messengerInformation.removeAttribute("style");
            $messengerInformation.classList.add("AnimationMessengerInformation");
        }, 4000);
    }, 0);
}, 1500);

function clear() {
    $buttons.forEach(e => {
        e.removeAttribute("data-booleano");
    });
    $space.forEach(e => {
        e.style.display = "none";
        e.innerHTML = ""
    })
}

function palabraIncompleta(numberLabelSpace, numeroEtiqueta, mediaPalabraNumber, correctWord) {
    for (let i = 0; i < $space.length; i++) {
        if (i == numberLabelSpace) {
            $space[i].removeAttribute("style")
            $space[i].innerHTML = "__"
            break;
        }
    }
    for (let i = 0; i < $space.length; i++) {
        if (i == numeroEtiqueta) {
            $space[i].removeAttribute("style")
            $space[i].innerHTML = mediaPalabraNumber;
        }
    }
    $tableContainer.setAttribute("data-stringMetodo", numberLabelSpace)
    return $tableContainer.setAttribute("data-TheWord", correctWord)
}
function completaWord(options, methodW) {
    clear()
    for (let i = 0; i < options.length; i++) {
        $buttons[i].innerHTML = options[i]
    }
    return $tableContainer.setAttribute("data-stringMetodo", methodW)
}
let ls = ["ed", "bed", "be", "des", "ped"]
completaWord([...ls])
palabraIncompleta(2, 1, "Tú pue", "Tú puedes")
/*
palabraIncompleta(2, 1, "pejo", "espejo")
 */