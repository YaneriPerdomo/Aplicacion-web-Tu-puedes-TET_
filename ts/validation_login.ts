const form_inicio = document.getElementById("form-inicio") as HTMLElement;
const warning_span = document.querySelector("#warning_inicio > span") as HTMLElement;
const warning_inicio = document.getElementById("warning_inicio") as HTMLElement
const usuario_inicio = document.getElementById("usuario_inicio") as HTMLElement;
const contrasena_inicio_confimar = document.getElementById("contrasena_inicio_confirmar") as HTMLElement;
const contrasena_inicio = document.getElementById("contrasena_inicio") as HTMLElement;
let tres_campos_rojos: any[] = [usuario_inicio,contrasena_inicio,contrasena_inicio_confimar] ;

warning_inicio.style.display = "none";
form_inicio.addEventListener("submit",(e)=> {
    for(let i = 0; i < tres_campos_rojos.length;i++){
        tres_campos_rojos[i].classList.remove("red_vali")
    }
    let entrar = false;
    let warning_white = "";
    let contador = 0;

    if(contrasena_inicio.value !=  contrasena_inicio_confimar.value){
        warning_white += "Las contraseñas no coinciden <br>"; 
        entrar = true;
        contrasena_inicio.classList.add("red_vali");
        contrasena_inicio_confimar.classList.add("red_vali")
    }
    

    if(contrasena_inicio.value == "" ){
        warning_white += "No puede dejar el campo contraseña vacìo <br>";
        entrar = true;
        contador++;
        contrasena_inicio.classList.add("red_vali")
    }
/*
    if(contrasena_inicio.value.length > 0 && contrasena_inicio.value.length < 5 ){
        warning_white += "La contraseña debe tener más caracteres  <br>";
        entrar = true;
    
        usuario_inicio.classList.add("red_vali")
    }*/
    if(contrasena_inicio_confimar.value == "" ){
        warning_white += "No puedes dejar el campo de contraseña de confirmación vacío <br>";
        entrar = true;
        contador++;
        contrasena_inicio_confimar.classList.add("red_vali")
    }

    if(usuario_inicio.value == ""){
        warning_white += "No puede dejar el campo de usuario vacío <br>";
        entrar = true;
        contador++;
        usuario_inicio.classList.add("red_vali")
    }

    
    if(contador == 3){
        warning_span.innerHTML = "Complete todos los campos";
        warning_inicio.classList.add("warning_not_vali");
        warning_inicio.style.display = "block";
        e.preventDefault();
    } else if(entrar == true){
        warning_span.innerHTML = warning_white;
        warning_inicio.classList.add("warning_not_vali");
        warning_inicio.style.display = "block";
        e.preventDefault();
    }
});
 