const countdownElement = document.querySelector(".countDownBody > div > h2");
export let $countDownBody = document.querySelector(".countDownBody");

//Funciones de ventana modal para contar de 3 a 1
export function _1_3() {
    let count = 3;
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


