

/*Validaciones para poder crear una cuenta*/
console.log("Yane perdomo")
const d = document;
/*Variables*/
const nombre = document.getElementById("nombre") as HTMLElement;
const apellido = document.getElementById("apellido") as any;
const form = document.querySelector("form") as HTMLElement;
const warning = document.querySelector("#warning > span") as HTMLElement;
const contrasena = document.getElementById("contrasena") as HTMLElement ;
const submit = document.getElementsByClassName("crear_cuenta") as unknown;
const usuario = document.getElementById("usuario") as HTMLElement;
const contrasena_2 = document.getElementById("contrasena_2") as HTMLElement;
let entrar= false as boolean;
let cuatro_campos_rojos: HTMLElement[] = [usuario,nombre,apellido,contrasena,contrasena_2];
form.addEventListener("submit" , (e) => {
  let warnings_write = ""
  let ExpreName:any = new RegExp("^[a-zA-Z]+$")
  let ExpreContra:any = new RegExp("^(?=.*[A-Z].*[A-Z])(?=.*[!@#$&*])(?=.*[0-9].*[0-9])(?=.*[a-z].*[a-z].*[a-z]).{8}$");
  let ExpreUsuario:any = new RegExp("[A-Za-z0-9]{0,10}$");
  let contador:number = 0;
  for(i = 0; i < cuatro_campos_rojos.length; i++){
      cuatro_campos_rojos[i].classList.remove("red_vali")
  }
  if(contrasena.value !=  contrasena_2.value){
      contrasena_2.classList.add("red_vali");
      warnings_write += "No coinciden las contraseñas <br>"; 
      entrar = true;
  }
  if(usuario.value == ""){
      usuario.classList.add("red_vali")
      warnings_write += "No puede dejar el campo de usuario vacío <br>";
      entrar = true;
      contador = contador + 1;
  }else if(!(ExpreUsuario.exec(usuario.value))){
      warnings_write += "El usuario que has introducido no es válido <br>";
      entrar = true;
      usuario.classList.add("red_vali");
  }
  if(nombre.value == ""){
          nombre.classList.add("red_vali")
          warnings_write += "No puede dejar el campo de nombre vacío. <br>";
          entrar = true;
          contador = contador + 1;
      }else if(!(ExpreName.exec(nombre.value)) || nombre.value.length < 5){
          warnings_write += "El nombre que has introducido no es válido <br>";
          entrar = true;
          nombre.classList.add("red_vali")
      }
      if((apellido.value == "")){
          apellido.classList.add("red_vali")
          warnings_write += "No puede dejar el campo de apellido vacío. <br>";
          entrar = true;
          contador = contador + 1;
      }else if(!(ExpreName.exec(apellido.value)) || apellido.value.length < 5){
          warnings_write += "El apellido que has introducido no es válido <br>";
          entrar = true;
          apellido.classList.add("red_vali")
      }
      if(contrasena.value == "" ){
          warnings_write += "La contraseña que has introducido no es válida. <br>";
          entrar = true;
          contrasena.classList.add("red_vali");
          contador = contador + 1;
      }else if(!(ExpreContra.exec(contrasena.value) || contrasena.value.length < 8)){
          warnings_write += "No puede dejar el campo de contraseña vacío <br>";
          contrasena.classList.add("red_vali")
      }
      if(contador == 4){
          warning.innerHTML = "Complete todos los campos";
          e.preventDefault()
      }else if(entrar){
          let background_warning = document.getElementById("warning")
          warning.innerHTML = warnings_write;
          background_warning.classList.add("warning_not_vali")
          e.preventDefault()
      }
})


//Evento que permitarà lo siguiente: La persona selecionarà su rol correspondiente.
d.addEventListener("click", (e) => {
//Variables
let representante: HTMLElement | any = document.querySelector("#Representante") 
  let type_radio: (Element | any)[]= [representante]
let container__lugar_trabajo: HTMLElement | any = document.querySelector(".container__lugar_trabajo");
let $cargos: HTMLElement | any = document.querySelector(".cargos");
let $afiliaciones: HTMLElement | any = document.querySelector(".afiliaciones");
let $Professional_border: HTMLElement | any = document.querySelector("#Professional");
//Loop
/*
for(i = 0; i < type_radio.length; i++){
    type_radio[i].classList.remove("border-b")
}*/
//Condicion-Dom
if((<HTMLElement> e.target).matches("#Representante")){
      container__lugar_trabajo.classList.add("none")
     representante.classList.add("border-b");
     $Professional_border.classList.remove("border-b");
     $afiliaciones.classList.remove("none");
     $cargos.classList.add("none");
}
//Condicion-Dom--(type assertion) == (<type>).
if((<HTMLElement> e.target).matches("#Professional")){
      $Professional_border.classList.add("border-b");
     representante.classList.remove("border-b");
     $afiliaciones.classList.add("none");
     $cargos.classList.remove("none");
     container__lugar_trabajo.classList.remove("none")
}
//Condicion-Dom

})
