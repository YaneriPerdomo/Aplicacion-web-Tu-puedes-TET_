<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrega | Tú puedes</title>
    <link rel="icon" type="image/x-icon" href="../../../../img/icono/icono.ico">
    <link rel="stylesheet" href="../../../../css/includeHTML/header_admin.css">
    <link rel="stylesheet" href="../../../../css/admin/admin.css">
    <link rel="stylesheet" href="../../../../css/efectos_siempre/scrollbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .logo figure img {
            max-width: 100px;
        }

        header {
            height: 78.8px;
            background: #ff7d3f;
            width: 100%;

        }

        .d-flex_rapido {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 1rem;
        }


        .noValidation {
            transition: border 0.2s linear;
            border: solid 0.1px #d55252 !important;
        }
    </style>
</head>

<body>
    <div data-include="../../../includeHTMLsinPhp/admin/header_admin_alumni.php"></div>
    <br>
    <main>
        <div class="contianerAdmin" style=" max-width: 700px; min-width: 100px;">
            <h1>Agregar usuario</h1>
            <hr>
            <p>Introduce los siguientes datos para crear un nuevo usuario. favor, asegúrate de la veracidad de los datos
                introducidos. </p>
            <form action="../../../../php/representantes.php" method="POST" class="container-main__ada-alumno">
                <div>
                    <small class="warningSmall"></small>
                    <small class="warningWriteNoVacio"></small>
                </div>
                <div class="wrapper">
                    <input type="hidden" name="call" value="1">
                    <input type="checkbox" name="nino" id="option-1" checked>
                    <input type="checkbox" name="nina" id="option-2">
                    <label for="option-1" class="option option-1">
                        <div class="dot"></div>
                        <span>Niño</span>
                    </label>
                    <label for="option-2" class="option option-2">
                        <div class="dot"></div>
                        <span>Niña</span>
                    </label>
                </div>
                <label for="usuario">Usuario del jugador</label>
                <input type="text" name="usuario" placeholder="Introduce el usuario del jugador(a)"><br>
                <select name="pais" id="">
                    <option id="">Elige su pais</option>
                    <option value="1" id="">Argentina</option>
                    <option value="2" id="">Bolivia</option>
                    <option value="3" id="">Brasil</option>
                    <option value="4" id="">Chile</option>
                    <option value="5" id="">Colombia</option>
                    <option value="6" id="">Costa Rica</option>
                    <option value="7" id="">Cuba</option>
                    <option value="8" id="">Ecuador</option>
                    <option value="9" id="">El Salvador</option>
                    <option value="10" id="">Guatemala</option>
                    <option value="11" id="">Haití</option>
                    <option value="12" id="">Honduras</option>
                    <option value="13" id="">México</option>
                    <option value="14" id="">Nicaragua</option>
                    <option value="15" id="">Panamá</option>
                    <option value="16" id="">Paraguay</option>
                    <option value="17" id="">Venezuela</option>
                </select>
                <label for="">Fecha de nacimiento</label>
                <input name="fechaNacimiento" type="date" placeholder="Fecha de nacimiento">
                <label for="">Valido hasta</label>
                <input name="fechaValidez" type="datetime-local">
                <label for="test" style="text-align: center; margin-right: 0.3rem; ">¿Sabe leer?</label>
                <input name="lectura" type="checkbox" class="test" style="width: auto;"><br>
                <label for="test" style="text-align: center; margin-right: 0.3rem; ">Permisos para que el jugador entre
                    en el aprendizaje.</label>
                <input name="permisos" type="checkbox" class="test" style="width: auto;"><br>
                <label for="contrasena">Contraseña</label>
                <input name="contrasena" type="password" placeholder="Introduca la contraseña">
                <label for="contrasenaval">Confirmar contraseña</label>
                <input name="contrasenaval" type="password" class="" placeholder="Confirmar contraseña">
                <input type="submit" value="Agregar" class="btn__crear-niños"><br>
                <a href="../dashboard.php"
                    style="text-align: center; display: block;  color: rgb(220, 55, 55);">Cancelar</a>
            </form>
        </div>
    </main>
    <script>


        let $formAdd = document.querySelector("form");
        let $usuario = document.querySelector(`[name="usuario"]`);
        let $contrasena = document.querySelector('[name="contrasena"]');
        let $confirmarContrasena = document.querySelector('[name="contrasenaval"]');
        let ExpreUsuario = new RegExp("[A-Za-z0-9]{6,30}$");

        let $arrayInputsAdd = [$usuario, $contrasena, $confirmarContrasena,]
        let $warningSmall = document.querySelector(".warningSmall");
        let $warningWriteNoVacio = document.querySelector(".warningWriteNoVacio")
        $formAdd.addEventListener("submit", e => {
            e.preventDefault()
            let enter = false,
                count = 0,
                warningWrite = [];
            $arrayInputsAdd.forEach((el) => {
                el.classList.remove("noValidation")
            });

            let messengerUser = ""
            $warningSmall.innerHTML = ""
            $warningWriteNoVacio.innerHTML = ""
            if ($usuario.value == "") {
                warningWrite.push("No puede dejar el campo de usuario vacío <br>");
                enter = true;
                messengerUser = "No puede dejar el campo de usuario vacío <br>"
                count++;
                $usuario.classList.add("noValidation")
            } else if (!(ExpreUsuario.exec($usuario.value))) {
                $usuario.classList.add("noValidation")
                if ($usuario.value.length < 6) {
                    warningWrite.push("Tu usuario debe tener entre 6 y 30 caracteres. <br>")
                    messengerUser = "Tu usuario debe tener entre 6 y 30 caracteres. <br>"
                    enter = true;
                } else {
                    warningWrite.push("No debe contener caracteres especiales. <br> ")
                    messengerUser = "No debe contener caracteres especiales. <br>"
                    enter = true;
                }
            }

            if ($contrasena.value == "") {
                warningWrite.push("No puede dejar el campo de contraseña vacío <br>")
                enter = true;
                count++;
                $usuario.classList.add("noValidation")
            }
            if ($confirmarContrasena.value == "") {
                warningWrite.push("No puede dejar el campo de confirmar contraseña vacío <br>")
                enter = true;
                count++;
                $usuario.classList.add("noValidation")
            }

            let repetir = false
            if ($contrasena.value != $confirmarContrasena.value) {
                enter = true
                repetir = true
            }

            if (count == 3) {
                $arrayInputsAdd.forEach(e => {
                    e.classList.add("noValidation")
                })
                $warningSmall.innerHTML = "Complete todos los campos";
                e.preventDefault()
            } else if (enter) {
                if (count == 1) {
                    if (repetir) {
                        $warningSmall.innerHTML += "No coinciden las contraseñas <br>"
                        e.preventDefault();
                        for (let i = 0; i < warningWrite.length; i++) {
                            if (warningWrite[i].includes("No puede dejar el campo de confirmar contraseña vacío <br>")) {
                                continue
                            }
                            $warningSmall.innerHTML += warningWrite[i];
                        }
                        return true;
                    }
                    $warningSmall.innerHTML += messengerUser;
                    $warningSmall.innerHTML += "Complete el campo que falta"
                } else if(count == 2){
                    if (repetir) {
                        $warningSmall.innerHTML += "No coinciden las contraseñas <br>"
                        e.preventDefault();
                        console.info(warningWrite)
                        for (let i = 0; i < warningWrite.length; i++) {
                            if (warningWrite[i].includes("No puede dejar el campo de confirmar contraseña vacío <br>")) {
                                continue
                            }
                            $warningSmall.innerHTML += warningWrite[i];
                        }
                        return true;
                    }
                    console.info(warningWrite)
                    $warningSmall.innerHTML += messengerUser
                    $warningSmall.innerHTML += "Complete los campos que faltan"
                }else{
                    if (repetir) {
                        $warningSmall.innerHTML += "No coinciden las contraseñas <br>"
                        e.preventDefault();
                        console.info(warningWrite)
                        for (let i = 0; i < warningWrite.length; i++) {
                            if (warningWrite[i].includes("No puede dejar el campo de confirmar contraseña vacío <br>")) {
                                continue
                            }
                            $warningSmall.innerHTML += warningWrite[i];
                        }
                        return true;
                    }
                }
            }
        })

    </script>
    <br><br><br><br><br><br><br>
    <div data-include="../../../includeHTMLsinPhp/admin/footer_admin.php"></div>
    <script src="../../../../js/ajax/include-html.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>

</html>