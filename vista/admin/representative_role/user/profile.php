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
      <form action="../../../../php/profileRepresentante.php" method="POST" class="container__main--perfil">
        <input type="hidden" name="call" value="1" />
        <legend style="text-align: center;">Datos del usuario</legend>
        <label for="">Usuario</label>
        <input name="usuario" type="text" placeholder="Ingrese tu usuario"><br>
        <label for="">Nombre</label>
        <input name="nombre" type="text" placeholder="Ingrese tu nombre"><br>
        <label for="">Apellido</label>
        <input name="apellido" type="text" placeholder="Ingrese tu apellido"><br>
        <label for="">Correo Electronico</label>
        <input name="correo" type="text" placeholder="Ingrese tu correo electronico"><br>
        <label for="">Afiliaciòn</label><br>
        <select name="afiliacion" id="">
          <option value="1" selected>Padre</option>
          <option value="2">Madre</option>
        </select>
        <label for="">Pais</label>
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
  <!-- Modal Change -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Cambia tu contraseña </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="../../../../php/profileRepresentante.php" method="POST">
            <input type="hidden" name="call" value="3" />
            <input name="oldcontrasena" type="password" autofocus class="modal__password"
              placeholder="Contraseña actual">
            <input name="contrasena" type="password" class="modal__password" placeholder="Nueva contraseña">
            <input name="contrasenaval" type="password" class="modal__password" placeholder="Confirmar contraseña">

        </div>
        <div class="modal-footer">
          <button type="button" class=" form__btn--detalles" sytle="font-weight: 500"
            data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary ">Guardar cambios</button>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>