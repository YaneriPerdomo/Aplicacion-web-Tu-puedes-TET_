<?php
include_once("conexionBD.php");

if (isset($_POST['call'])) {
    switch ($_POST['call']) {
        case 1:
            modificar();
            break;
        case 2:
            eliminar();
            break;
        case 3:
            cambiarContrasena();
            break;
    }
}
function modificar()
{
    session_start();
    // Obtener las variables de sesión del usuario y del profesional
    $idProfesional = $_SESSION['id']; // Identificador del profesional
    $idUsuario = $_SESSION['idUsuario']; // Identificador del usuario

    include_once("../../../../php/conexionBD.php"); // Asegurar la conexión a la base de datos
    $db = abrirConexion();

    // Recibir los datos del formulario
    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $pais = $_POST['pais'];
    $centro = $_POST['centro'];

    try {
        // Actualizar la tabla de `usuarios` con el nombre de usuario
        $query = "UPDATE usuarios SET usuario = :usuario WHERE id_usuario = :idUsuario";
        $llamado = $db->prepare($query);
        $llamado->bindParam(':usuario', $usuario);
        $llamado->bindParam(':idUsuario', $idUsuario);
        $llamado->execute();

        // Actualizar la tabla de `profesionales` con la información adicional
        $query = "UPDATE profesionales 
                  SET id_pais = :idPais, nombre = :nombre, apellido = :apellido, correo_electronico = :correo, centro_educativo_profesional = :centro 
                  WHERE id_profesional = :idProfesional";
        $llamado = $db->prepare($query);
        $llamado->bindParam(':idPais', $pais);
        $llamado->bindParam(':nombre', $nombre);
        $llamado->bindParam(':apellido', $apellido);
        $llamado->bindParam(':correo', $correo);
        $llamado->bindParam(':centro', $centro);
        $llamado->bindParam(':idProfesional', $idProfesional);
        $llamado->execute();

        // Redirigir al usuario a su dashboard
        header("Location: ../vista/admin/professional_role/dashboard.php");
    } catch (PDOException $e) {
        // Manejo de errores en caso de fallo en la actualización
        echo "Error: " . $e->getMessage();
    }
}
function eliminar()
{
    session_start();
    $idProfesional = $_SESSION['id'];
    $idUsuario = $_SESSION['idUsuario'];
    $db = abrirConexion();

    $query = "DELETE FROM ninos WHERE id_profesional = :id";
    $llamado = $db->prepare($query);
    $llamado->bindParam(':id', $idProfesional);
    $llamado->execute();

    $query = "DELETE FROM profesionales WHERE id_usuario = :id";
    $llamado = $db->prepare($query);
    $llamado->bindParam(':id', $idUsuario);
    $llamado->execute();

    $query = "DELETE FROM usuarios WHERE id_usuario = :id";
    $llamado = $db->prepare($query);
    $llamado->bindParam(':id', $idUsuario);
    $llamado->execute();

    header("location:../vista/signin/log_in.php");
}

function cambiarContrasena()
{
    session_start();
    $idProfesional = $_SESSION['id'];
    $idUsuario = $_SESSION['idUsuario'];
    $db = abrirConexion();

    echo ($idProfesional . "hi");
    echo ($idUsuario);

    if (isset($_POST['contrasena'])) {
        $contrasena = $_POST['contrasena'];

        $query = "UPDATE usuarios SET clave = :contrasena WHERE id_usuario = :idUsuario";
        $llamado = $db->prepare($query);
        $llamado->bindParam(':contrasena', $contrasena);
        $llamado->bindParam(':idUsuario', $idUsuario);
        $llamado->execute();
        header("location:../vista/admin/professional_role/dashboard.php");
    }
}
