// Evento para eliminar el mensaje de actualización.

    let $mensaje_actualizacion__button  = document.querySelector(".mensaje_actualizacion--button") as HTMLElement | any;
    let $eliminar_hijo =  document.querySelector(".container-fluid") 

    $mensaje_actualizacion__button.addEventListener("click", (e:HTMLElement) => {
         $eliminar_hijo?.removeChild($eliminar_hijo.children[0])
    }) 