<?php
session_start();
include_once("../../../../php/conexionBD.php"); // Ruta original conservada.
$db = abrirConexion();

if (!isset($_SESSION['idUsuario'])) {
    echo "No has iniciado sesión.";
    exit;
}

// Obtener el idUsuario de la sesión
$idUsuario = $_SESSION['idUsuario'];

// Consultar los datos básicos del usuario
$query = "SELECT * FROM usuarios WHERE id_usuario = :idUsuario";
$llamado = $db->prepare($query);
$llamado->bindParam(':idUsuario', $idUsuario);
$llamado->execute();
$usuario = $llamado->fetch(PDO::FETCH_ASSOC);

// Verificar si el usuario existe
if (!$usuario) {
    echo "Usuario no encontrado.";
    exit;
}

// Consultar datos adicionales del profesional (nombre, apellido, correo, centro profesional)
$query_datos = "SELECT nombre, apellido, correo_electronico, id_cargo, id_pais, centro_educativo_profesional FROM profesionales WHERE id_usuario = :idUsuario";
$llamado_datos = $db->prepare($query_datos);
$llamado_datos->bindParam(':idUsuario', $idUsuario);
$llamado_datos->execute();
$datos = $llamado_datos->fetch(PDO::FETCH_ASSOC);

// Variables para almacenar los datos del profesional
$nombre = isset($datos['nombre']) ? $datos['nombre'] : '';
$apellido = isset($datos['apellido']) ? $datos['apellido'] : '';
$correo = isset($datos['correo_electronico']) ? $datos['correo_electronico'] : '';
$cargo = isset($datos['id_cargo']) ? $datos['id_cargo'] : '';
$centro = isset($datos['centro_educativo_profesional']) ? $datos['centro_educativo_profesional'] : '';
$idPais = isset($datos['id_pais']) ? $datos['id_pais'] : '';

// Obtener lista de países para cargar en el select
$query_pais = "SELECT id_pais, pais FROM paises";
$llamado_pais = $db->prepare($query_pais);
$llamado_pais->execute();
$paises = $llamado_pais->fetchAll(PDO::FETCH_ASSOC);
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
    body {
      background-image: url(../../../../img/player/fondo.png);
    }

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
        datos mínimos, pero si puedes completar tu perfil con algo más de información me será de gran ayuda.</p>
      <form action="../../../../php/profileAdmin.php" method="POST" class="container__main--perfil">
        <input type="hidden" name="call" value="1" />
        <legend style="text-align: center;">Datos del usuario</legend>
        <div id="w" class="warningPerfil text-center" style="margin-bottom: 0.5rem">
          <small style="color: #d55252;" class="siVacio"></small>
          <small class="noVacio" style="color: #d55252;"></small>
          <small class="stringValidation" style="color: #d55252;"></small>
        </div>
        <label for="">Usuario</label>
        <input name="usuario" type="text" value="<?php echo $usuario['usuario']; ?>" placeholder="Ingrese tu usuario"><br>
        <label for="">Nombre</label>
        <input name="nombre" type="text" value="<?php echo $nombre; ?>" placeholder="Ingrese tu nombre" id="nombre"><br>
        <label for="">Apellido</label>
        <input name="apellido" type="text" value="<?php echo $apellido; ?>" placeholder="Ingrese tu apellido" id="apellido"><br>
        <label for="">Correo Electrónico</label>
        <input name="correo" type="text" value="<?php echo $correo; ?>" placeholder="Ingrese tu correo electrónico"><br>
        <div class="cargos">
          <label for="">Cargo Profesional</label><br>
          <select name="cargo" id=""><br>
            <option value="1" <?php echo ($cargo == 1) ? 'selected' : ''; ?>>Docente</option>
            <option value="2" <?php echo ($cargo == 2) ? 'selected' : ''; ?>>Terapeuta</option>
          </select><br>
        </div>
        <label for="">País</label>
        <select name="pais" id="pais">
          <option value="">Seleccione su país</option>
          <?php foreach ($paises as $pais): ?>
            <option value="<?php echo $pais['id_pais']; ?>" <?php echo ($pais['id_pais'] == $idPais) ? 'selected' : ''; ?>>
              <?php echo $pais['pais']; ?>
            </option>
          <?php endforeach; ?>
        </select>
        <div class="container__lugar_trabajo">
          <label for="nombre_centro_escolar" class="nombre_centro_escolar">Nombre del Centro escolar o
            profesional</label><br>
          <input type="text" class="nombre_centro_escolar" name="centro" id="centro"
            value="<?php echo $centro; ?>" placeholder="Nombre del Centro escolar o profesional"><br>
        </div>
        <label for="">Tipo de cuenta Tu Puedes</label>
        <input type="text" value="Profesional" name="cargo" readonly class="tipo--cuenta">
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
            style="border-radius: 0.5rem; text-align: center; display: block; color: rgb(220, 55, 55); color: #fc7c45; text-decoration: none; padding: 0.6rem; border: solid 2px #fc7c45;">VOLVER</a>
          <button type="button" class="btn__delete" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
            style="border-radius: 0.5rem; text-align: center; display: block; color: rgb(220, 55, 55); margin-left: 0.5rem; background: #b67bf9; color: white; text-decoration: none; padding: 0.6rem 0.6rem; cursor: pointer; border:0">ELIMINAR
          </button>
          <div class="form-btn-keep">
            <input type="submit" value="GUARDAR CAMBIOS" class="form__btn--detalles"
              style="border-radius: 0.5rem; width: 100%;"><br>
          </div>
        </div>
      </form>
    </div>
  </main>
  <br><br>
  <div data-include="../../../includeHTMLsinPhp/admin/footer_admin.php"></div>
  <script src="../../../../js/admin/profile.js"></script>
  <script src="../../../../js/ajax/include-html.js"></script>
  <script src="../../../../js/validations/validationPasswordPerfil.js"></script>
  <script src="../../../../js/validations/validationProfesionalAdmin.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
</body>

</html>
