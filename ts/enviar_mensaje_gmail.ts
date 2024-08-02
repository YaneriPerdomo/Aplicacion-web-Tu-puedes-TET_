document.addEventListener("submit" , e => {
    e.preventDefault()

    const $loader = document.querySelector(".contact-form-loader") as HTMLElement
    const $responde = document.querySelector(".contact-form-response ") as HTMLElement
    const $form = document.querySelector("form") as HTMLElement | any
    fetch("https://formsubmit.co/ajax/perdomopaolabarrio@gmail.com" , {
        method: "POST",
        body: new FormData(<HTMLFormElement | undefined>e.target),
        
    }).
    then(res => res.ok ? res.json() : Promise.reject(res))
    .then(json => {
         $responde.classList.remove("none") 
         setInterval(() => {
            $loader.classList.add("none");
            $responde.classList.add("none")
            $form.reset()
         }, 5000);
    })
    .catch( (err) => {
        let message = err.statusText  || "Ocurrio un error al enviar. Intentarlo de nuevo. "
        $responde.innerHTML = `<p>Error ${err.status}: ${message} </p>`
    }).finally()
})
