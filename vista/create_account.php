
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tu Puedes | Crea una cuenta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/x-icon" href="../img/icono/icono.ico">
    <link href="https://fonts.googleapis.com/css2?family=Croissant+One&family=Inclusive+Sans&family=Montserrat:ital,wght@0,100;0,500;1,100&family=Nova+Square&family=Nunito:wght@1000&family=Open+Sans:wght@300;400&family=Oswald:wght@300;400;500;600;700&family=Poppins:ital,wght@0,700;1,400&family=Quicksand:wght@300&family=Roboto:ital,wght@0,100;0,300;0,400;1,100;1,300&family=Rubik:ital,wght@0,500;0,600;1,500&family=Tilt+Neon&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"  href="../css/includeHTML/cabezera.css">
    <link rel="stylesheet" type="text/css" href="../css/iniciar_crear_cuenta/create_account.css"> 
  </head>
<body>
    <!--Logo--->
    <div class="container-logo position-absolute  " style="margin-left: 0.5rem;">
        <a class="navbar-brand fw-medium fs-3" href="../index.php" style="color: rgb(48, 48, 48);" >
            <img src="../img/logos/logo-orange.png" style="width: 6rem;" alt="">
        </a>          
    </div>
    <!--Cuerpo--->
    <main> 
        <div class="container__img">
            <div>        
                <img src="../img/iniciar_crear_cuenta/terapeuta_nina.png" alt="">
            </div>
            <div>
                <span style=" text-align: center;">Tú <b>Puedes</b></span>
                <img src="../img/iniciar_crear_cuenta/representante_nino.png"  alt="" style="object-position: center;">
            </div>
            <div> 
                <img src="../img/iniciar_crear_cuenta/docente_ninos.png"  alt="" style="object-position:left">
            </div>
        </div>
        <div class="container- container__user">
            <div class="container__user-form">
                <h1 class="text-uppercase fw-semibold text-center ">CREA UNA CUENTA</h1>
                <form action="../php/registro.php"  method="POST" autocomplete="off" >
                    <div id="warning" class="text-center">
                        <span></span>
                    </div>
                    <div class="form__flex ms-3">
                        <div class="group--btn" style="text-align: center;">
                            <label for="representante" style="cursor:pointer;  margin: 0.0rem 0.5rem;" id="Representante">
                                Representante
                            </label>
                            <label for="professional " style="cursor:pointer; margin: 0.0rem 0.5rem;" id="Professional" class="border-b">
                                <input type="hidden" name="rol" id="rol" value="1" id="professional">Puesto Profesional 
                            </label>
                        </div>
                        <div class="all-input-label">
                            <label for="usuario">Usuario</label><br>
                            <input type="text" name="usuario" placeholder="Introduce tu usuario"><br>
                            <label for="nombre"> Nombre <i class="bi bi-person-arms-up"></i></label><br>
                            <input type="text" id="nombre" name="nombre" title="  " placeholder="Introduce tu nombre"  ><span></span><br> 
                            <label for="apellido">Apellido <i class="bi bi-person-raised-hand"></i></label><br>
                            <input type="text" id="apellido" name="apellido" title="Apellido no valido" placeholder="Introduce tu apellido"  ><br> 
                            <label for="usuario"> Correo Electronico <i class="bi bi-person-arms-up"></i></label><br>
                            <input type="text" class="" id="Correo-Electronico" name="correo" title="Ingrese tu Correo Electronico" placeholder="Introduce tu correo electrónico"  ><br>
                            <div class="afiliaciones none ">
                                <label for="">Afiliación </label><br>
                                <select name="afiliacion" id="">
                                    <option value="1" selected> Padre</option>
                                    <option value="2">Madre</option>
                                </select>
                            </div>
                            <label for="usuario">Elija su Pais<i class="bi bi-person-arms-up"></i></label><br>
                            <select name="paises" id="pais">
                                <option value="1">Argentina</option>
                                <option value="2">Bolivia</option>
                                <option value="3">Brasil</option>
                                <option value="4">Chile</option>
                                <option value="5">Colombia</option>
                                <option value="6">Costa Rica</option>
                                <option value="7">Cuba</option>
                                <option value="8">Ecuador</option>
                                <option value="9">El Salvador</option>
                                <option value="10">Guatemala</option>
                                <option value="11">Haití</option>
                                <option value="12">Honduras</option>
                                <option value="13">México</option>
                                <option value="14">Nicaragua</option>
                                <option value="15">Panamá</option>
                                <option value="16">Paraguay</option>
                                <option value="17">Venezuela</option>
                            </select>
                            <br>
                            <div class="cargos  ">
                              <label for="">Perfil de puesto</label><br>
                              <select name="cargo" id=""><br>
                                  <option value="1">Docente</option>
                                  <option value="2">Terapeuta</option>
                              </select><br>
                            </div>
                            <div class="container__lugar_trabajo  ">
                                <label for="nombre_centro_escolar" class="nombre_centro_escolar">Nombre del Centro escolar o profesional</label><br data-delete>
                                <input type="text" class="nombre_centro_escolar" name="centro" placeholder="Introduce el nombre del Centro escolar o profesional" ><br data-br-delete>
                            </div>
                            <label for="contrasena">Contraseña</label><br>
                            <input type="password" id="contrasena" name="contrasena" placeholder="Introduce tu contraseña"  >
                        </div>       
                    </div>
                    <div class="form__btn" style="margin-top: 0.6rem;">
                        <button type="submit" name="Enviar" class="form__btn--detalle" sytle ="margin-bottom: 0.5rem;">Registrarse <i class="bi bi-caret-right"></i></button>       
                    </div>
                    <span style ="display:block; text-align:center; margin-top: 0.6rem; ">¿Ya tienes una cuenta? <a href="./signin/log_in.php" style="cursor:pointer; text-decoration: none; color:#fc7c45; margin-top:  0.4rem; margin-bottom: 0.5rem; text-align:center;" class="titleOrange"> Iniciar sesión</a></span>
                    <div id="mensajeAlerta"></div>
                </form>  
            </div>
        </div>
    </main>
    <div class="container-modal"  >
        <div class="w-auto" style="padding-bottom:1rem ;max-width: 500px; min-width: 100px; background: white !important; border-radius: 1rem;">
            <h2 class="" style="    background: rgb(47,47,47); padding: 1rem; color: white; text-align: center;"> Control de edad</h2> 
            <div class="conjunto">
                <div class="container__text" style="padding:0rem 1rem"><p>Debes ser mayor de edad para acceder a crear una cuenta como administrador. Por favor. Necesito saber tu fecha de nacimiento:</p>
                </div>
                <div style="display: flex;flex-direction: column; align-items: center;">
                  <input type="date" >
                  <button class="bottom_date" style=" cursor: pointer;  background: none; border: 0; font-weight: bold; color: rgb(47,47,47);">OK</button>  
                </div>
            </div>
        </div>
    </div>
    <script src="./../js/validations/create_account.js" ></script>
    <script src="./../js/validations/validation_date.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous">
    </script>
</body>
</html>