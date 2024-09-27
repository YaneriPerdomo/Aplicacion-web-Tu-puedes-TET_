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

// Consultar los datos del usuario
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

// Obtener el nombre completo según el rol del usuario
$nombreCompleto = $_SESSION['nombre'];

// Obtener datos adicionales del usuario (fecha de nacimiento, país, sabe leer, género)
$query_nino = "SELECT * FROM ninos WHERE id_usuario = :idUsuario";
$llamado_nino = $db->prepare($query_nino);
$llamado_nino->bindParam(':idUsuario', $idUsuario);
$llamado_nino->execute();
$datosNino = $llamado_nino->fetch(PDO::FETCH_ASSOC);

// Variables para almacenar la información adicional
$fechaNacimiento = isset($datosNino['fecha_nacimiento']) ? $datosNino['fecha_nacimiento'] : '';
$sabeLeer = isset($datosNino['sabe_leer']) && $datosNino['sabe_leer'] == 1 ? 'checked' : '';
$idGenero = isset($datosNino['id_genero']) ? $datosNino['id_genero'] : null;

// Determinar el género: 1 = Niño, 2 = Niña
$esNino = $idGenero == 1 ? 'checked' : '';
$esNina = $idGenero == 2 ? 'checked' : '';

// Obtener la lista de países desde la base de datos
$query_pais = "SELECT id_pais, pais FROM paises";
$llamado_pais = $db->prepare($query_pais);
$llamado_pais->execute();
$paises = $llamado_pais->fetchAll(PDO::FETCH_ASSOC);

// Obtener país seleccionado
$paisUsuario = isset($datosNino['id_pais']) ? $datosNino['id_pais'] : '';

// Si la fecha de validez es NULL, establecerla como cadena vacía
$fechaValidez = isset($usuario['fecha_validez']) && !is_null($usuario['fecha_validez']) ? $usuario['fecha_validez'] : '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica | Tú puedes</title>
    <link rel="icon" type="image/x-icon" href="../../../../img/icono/icono.ico">
    <link rel="stylesheet" href="../../../../css/includeHTML/header_admin.css">
    <link rel="stylesheet" href="../../../../css/admin/admin.css">
    <link rel="stylesheet" href="../../../../css/efectos_siempre/scrollbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/presentacion.css">
    <style>
        .logo figure img {
            max-width: 100px;
        }

        header {
            height: 78.8px;
            background: #ff7d3f;
            width: 100%;
        }
        body {
            background-image: url(../../../../img/player/fondo.png);
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
    <div data-include="../../../includeHTMLsinPhp/admin/header_admin_alumni.php"></div>
    <br>
    <main>
        <div class="contianerAdmin" style=" max-width: 700px; min-width: 100px;">
            <h1 style="text-align: center;">Modificar usuario</h1>
            <hr>
            <form action="../../../../php/admin.php" method="POST" class="container-main__ada-alumno">
                <div class="wrapper">
                    <input type="hidden" name="call" value="2">
                    <input type="checkbox" name="nino" id="option-1" <?php echo $esNino; ?>>
                    <input type="checkbox" name="nina" id="option-2" <?php echo $esNina; ?>>
                    <label for="option-1" class="option option-1">
                        <div class="dot"></div>
                        <span>Niño</span>
                    </label>
                    <label for="option-2" class="option option-2">
                        <div class="dot"></div>
                        <span>Niña</span>
                    </label>
                </div>
                <input type="number" name="id" value="<?php echo $usuario['id_usuario']; ?>" placeholder="Id del Usuario" readonly><br>
                <input type="text" name="usuario" value="<?php echo $usuario['usuario']; ?>" placeholder="Usuario"><br>
                <select name="pais" id="">
                    <option id="">Elige su país</option>
                    <?php foreach($paises as $pais): ?>
                        <option value="<?php echo $pais['id_pais']; ?>" <?php echo ($pais['id_pais'] == $paisUsuario) ? 'selected' : ''; ?>><?php echo $pais['pais']; ?></option>
                    <?php endforeach; ?>
                </select>
                <label for="">Fecha de nacimiento</label>
                <input name="fechaNacimiento" type="date" value="<?php echo $fechaNacimiento; ?>" placeholder="Fecha de nacimiento">
                <label for="">Valido hasta</label>
                <input name="fechaValidez" type="datetime-local" value="<?php echo $fechaValidez; ?>">
                <label for="test" style="text-align: center; margin-right: 0.3rem; ">¿Sabe leer?</label>
                <input name="lectura" type="checkbox" class="test" style="width: auto;" <?php echo $sabeLeer; ?>><br>
                <label for="test" style="text-align: center; margin-right: 0.3rem; ">Permisos para que el jugador entre en el aprendizaje.</label>
                <input name="permisos" type="checkbox" class="test" style="width: auto;" <?php echo ($usuario['permisos'] == 1) ? 'checked' : ''; ?>>
                <input name="contrasena" type="password" value="<?php echo $usuario['clave']; ?>" placeholder="Contraseña">
                <input type="submit" value="Guardar Cambios" class="btn__crear-niños"><br>
                <a href="../dashboard.php"
                    style="text-align: center; display: block;  color: rgb(220, 55, 55);">Cancelar</a>
            </form>
        </div>
    </main>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div data-include="../../../includeHTMLsinPhp/admin/footer_admin.php"></div>
    <script src="../../../../js/ajax/include-html.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>

</body>
</html>
