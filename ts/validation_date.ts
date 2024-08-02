
    let $date_difference:any = document.querySelector('[type="date"]') 
    let $bottom_date = document.querySelector(".bottom_date") as HTMLElement;
    let $container_modal = document.querySelector(".container-modal") as HTMLElement
    let $container_modal_2 = document.querySelector(".conjunto") as HTMLElement
    let $bottom_cerrar = document.querySelector(".bottom_cerrar") as HTMLElement;
    let $body = document.querySelector("body") as HTMLElement;
  
    document.addEventListener("click", (e) => {
        if (e.target.matches(".bottom_date")) {
            if($date_difference.value.substring(0,4).length == 0){
                alert('ingrese tu fecha');
                return false;
           }
            let date = new Date()
            let result = Number(date.getFullYear()) - Number($date_difference.value.substring(0,4)) as number;
             if(result >= 17){
                $container_modal.style.display = "none"
                $body.removeChild($body.children[2]);
            }else{    
                $container_modal_2.innerHTML = `<div class="container__text" style="padding:0rem 1rem"><p>Lo siento, no puedes acceder como administrador puesto de que eres un menor de edad. Ponte en contacto con tus padres,  docentes o terapeutas.</p></div><div style="display: flex;flex-direction: column; align-items: center;"> <button class="bottom_cerrar" style=" cursor: pointer;  background: none; border: 0; font-weight: bold; color: #0d6efd;">OK</button>  </div>`
               
            }
        }

        if(e.target.matches(".bottom_cerrar")){
            window.history.back(); 

        }
    })
 