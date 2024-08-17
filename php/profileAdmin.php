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
    $idProfesional = $_SESSION['id'];
    $idUsuario = $_SESSION['idUsuario'];
    $db = abrirConexion();

    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $pais = $_POST['pais'];
    $centro = $_POST['centro'];

    $query = "UPDATE usuarios SET usuario = :usuario WHERE id_usuario = :idUsuario";

    $llamado = $db->prepare($query);
    $llamado->bindParam(':usuario', $usuario);
    $llamado->bindParam(':contrasena', $contrasena);
    $llamado->bindParam(':fechaValidez', $fechaValidez);
    $llamado->bindParam(':idUsuario', $idUsuario);
    $llamado->execute();

    $query = "UPDATE profesionales SET id_pais = :idPais, nombre = :nombre, apellido = :apellido, correo_electronico = :correo, centro_educativo_profesional = :centro WHERE id_profesional = :idProfesional;";

    $llamado = $db->prepare($query);
    $llamado->bindParam(':idPais', $pais);
    $llamado->bindParam(':nombre', $nombre);
    $llamado->bindParam(':apellido', $apellido);
    $llamado->bindParam(':correo', $correo);
    $llamado->bindParam(':centro', $centro);
    $llamado->bindParam(':idProfesional', $idProfesional);
    $llamado->execute();

    header("location:../vista/admin/professional_role/dashboard.php");
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
