<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil | Tú puedes</title>
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
  <div data-include="../../../includeHTMLsinPhp/admin/header_admin_user.php"></div>
  <br>
  <main>
    <div class="contianerAdmin">
      <h1>Mi perfil</h1>
      <hr>
      <p>Aquí <span style="color: #fc7c45; font-size: 18px;">puedes editar tu perfil de usuario.</span> Sólo te pido los
        datos mínimos, pero si puedes completar tu perfil con
        algo más de información me será de gran ayuda.</p>
      <form action="../../../../php/profileRepresentante.php" method="POST" class="container__main--perfil  formR">
        <input type="hidden" name="call" value="1" />
        <legend style="text-align: center;">Datos del usuario</legend>
        <div id="" class="text-center warningR" style="margin-bottom: 0.5rem" ;>
          <small class="siVacioR" id=""></small>
          <small class="noVacioR" id=""></small>
          <small class="stringValidationR" id=""></small>
        </div>
        <label for="">Usuario</label>
        <input name="usuario" type="text" placeholder="Ingrese tu usuario" class="" id=""><br>
        <label for="">Nombre</label>
        <input name="nombre" type="text" placeholder="Ingrese tu nombre" class="" id=""><br>
        <label for="">Apellido</label>
        <input name="apellido" type="text" placeholder="Ingrese tu apellido" id=""><br>
        <label for="">Correo Electronico</label>
        <input name="correo" type="text" placeholder="Ingrese tu correo electronico" id=""><br>
        <label for="">Afiliaciòn</label><br>
        <select name="afiliacion" id="">
          <option value="1" selected> Madre</option>
          <option value="2">Padre</option>
          <option value="3">Abuelo</option>
          <option value="4">Abuela</option>
          <option value="5">Bisabuelo</option>
          <option value="6">Bisabuela</option>
          <option value="7">Tío</option>
          <option value="8">Tía</option>
          <option value="9">Sobrino</option>
          <option value="10">Sobrina</option>
          <option value="11">Primo</option>
          <option value="12">Prima</option>
          <option value="13">Vecino</option>
          <option value="14">Vecina</option>
          <option value="15">Suegro</option>
          <option value="16">Suegra</option>
          <option value="17">Cuñado</option>
          <option value="18">Cuñada</option>
          <option value="19">Yerno</option>
          <option value="20">Nuera</option>
          <option value="21">Pareja</option>
          <option value="22">Otro</option>
        </select>
        <label for="">Pais</label>
        <select name="paises" id="pais">
          <option value="1">México</option>
          <option value="2">Belice</option>
          <option value="3">Costa Rica</option>
          <option value="4">El Salvador</option>
          <option value="5">Guatemala</option>
          <option value="6">Honduras</option>
          <option value="7">Nicaragua</option>
          <option value="8">Panamá</option>
          <option value="9">Antigua y Barbuda</option>
          <option value="10">Bahamas</option>
          <option value="11">Barbados</option>
          <option value="12">Cuba</option>
          <option value="13">Dominica</option>
          <option value="14">Granada</option>
          <option value="15">Haití</option>
          <option value="16">Jamaica</option>
          <option value="17">Puerto Rico</option>
          <option value="18">República Dominicana</option>
          <option value="19">San Cristóbal y Nevis</option>
          <option value="20">Santa Lucía</option>
          <option value="21">San Vicente y las Granadinas</option>
          <option value="22">Trinidad y Tobago</option>
          <option value="23">Argentina</option>
          <option value="24">Bolivia</option>
          <option value="25">Brasil</option>
          <option value="26">Chile</option>
          <option value="27">Colombia</option>
          <option value="28">Ecuador</option>
          <option value="29">Guyana</option>
          <option value="30">Paraguay</option>
          <option value="31">Perú</option>
          <option value="32">Surinam</option>
          <option value="33">Uruguay</option>
          <option value="34" selected>Venezuela</option>
        </select>
        <label for="">Tipo de cuenta Tu Puedes</label>
        <input type="text" value="Representante" readonly class="tipo--cuenta">
        <div class="change__clave" style="text-align: center; text-decoration:none">
          <button type="button" style="color: #309cb7 ; background: none; border: 0; font-weight: 500;"
            data-bs-toggle="modal" data-bs-target="#exampleModal"> Cambia tu contraseña </button>
          <br>
          <small>Cambia tu contraseña en cualquier momento.</small>
        </div>
        <hr>
        <div class="perfil--vistazo"
          style="display: flex; align-items: center; justify-content: center; flex-wrap:wrap; gap:1rem">
          <a href="../dashboard.php" class="btn__volver"
            style="     border-radius: 0.5rem;   text-align: center; display: block; color: rgb(220, 55, 55);   color: #fc7c45; text-decoration: none; padding: 0.6rem; border: solid 2px #fc7c45;">VOLVER</a>
          <button type="button" class="btn__delete" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
            style=" border-radius: 0.5rem; text-align: center; display: block; color: rgb(220, 55, 55);  margin-left: 0.5rem; background: #b67bf9; color: white; text-decoration: none; padding: 0.6rem 0.6rem; cursor: pointer; border:0">ELIMINAR
          </button>
          <div class="form-btn-keep">
            <input type="submit" value="GUARDAR CAMBIOS" class="form__btn--detalles"
              style="    border-radius: 0.5rem; width: 100%;"><br>
          </div>
        </div>
      </form>
    </div>
  </main>

  <script>
  </script>
  <!-- Modal Change -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Cambia tu contraseña </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="../../../../php/profileAdmin.php" method="POST" class="cambiarContraseña">
            <input type="hidden" name="call" value="3" />
            <small id="warning" class="d-block text-center"></small>
            <small class="SmallErrorTwo" style="color: #d55252;" class="d-block text-center"></small>
            <input name="oldcontrasena" type="password" autofocus class="modal__password"
              placeholder="Contraseña actual">
            <input name="contrasena" type="password" class="modal__password" placeholder="Nueva contraseña">
            <input name="contrasenaval" type="password" class="modal__password" placeholder="Confirmar contraseña">

        </div>
        <div class="modal-footer">
          <button type="button" class=" form__btn--detalles" sytle="font-weight: 500"
            data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary btnGuardarCambios">Guardar cambios</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!--Modal delete-->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="    flex-direction: column;    background: #ff4040; ">
          <span style="    display: block; width: 1%;     margin-right: 3rem;" class="animation__icon-delete">❌</span>
          <h1 class="modal-title fs-5 w-100 " id="staticBackdropLabel" style="color: white;text-align: center; ">¿Estás
            seguro?</h1>
        </div>
        <div class="modal-body">
          <p style="text-align: center;">Mediante esta opción puedes eliminar completamente tu cuenta de
            <span>Representante</span> en Tu puedes. <br>

            Al eliminar tu cuenta, dejarás de tener acceso a Tu puedes tanto a través de la web como de las aplicaciones
            móviles. Todos los
            usuarios que hayas dado de alta también serán eliminados por lo que tampoco podrán acceder a la plataforma.
            <br><br>
            Para confirmar la eliminación de la cuenta, escribe en el siguiente recuadro ELIMINAR
          </p>
          <input type="text" class="write-delete">
        </div>
        <div class="modal-footer d-flex  justify-content-center ">
          <form action="../../../../php/profileRepresentante.php" method="POST">
            <input type="hidden" name="call" value="2" />
            <button type="submit" class="btn btn-primary btn__confirmar filter-sepia"
              style="border: solid 0.2rem #ff1717; background: white; color: #ff1717; border-radius: 0;"
              disabled>CONFIRMAR</button>
          </form>
          <button type="button" class="btn btn-secondary "
            style="    background: #ff4040; border: 0; border-radius: 0; padding: 0.7em;"
            data-bs-dismiss="modal">CANCELAR</button>
        </div>
      </div>
    </div>
  </div>
  <br><br>
  <div data-include="../../../includeHTMLsinPhp/admin/footer_admin.php"></div>
  <script src="../../../../js/admin/profile.js"></script>
  <script src="../../../../js/ajax/include-html.js"></script>
  <script src="../../../../js/validations/validationPasswordPerfil.js"></script>
  <script src="../../../../js/validations/validationRepresentanteAdmin.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>