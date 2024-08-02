<?php
include_once("conexionBD.php");

if(isset($_POST['call'])){
    switch($_POST['call']){
        case 1:
            agregar();
            break;
        case 2:
            modificar();
            break;
        case 3:
            cambiarContrasena();
            break;
    }
}
function modificar() {
    session_start();
    $idRepresentante = $_SESSION['id'];
    $idUsuario = $_SESSION['idUsuario'];
    $db = abrirConexion();

    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $pais = $_POST['paises'];
    $afilicacion = $_POST['afiliacion'];

    $query = "UPDATE usuarios SET usuario = :usuario WHERE id_usuario = :idUsuario";

    $llamado = $db->prepare($query);
    $llamado->bindParam(':usuario', $usuario);
    $llamado->bindParam(':contrasena', $contrasena);
    $llamado->bindParam(':fechaValidez', $fechaValidez);
    $llamado->bindParam(':idUsuario', $idUsuario);
    $llamado->execute();

    $query = "UPDATE representantes SET id_afiliacion = :idAfiliacion, id_pais = :idPais, nombre = :nombre, apellido = :apellido, correo_electronico = :correo WHERE id_representante = :idRepresentante;";
    
    $llamado = $db->prepare($query);
    $llamado->bindParam(':idAfiliacion', $afilicacion);
    $llamado->bindParam(':idPais', $pais);
    $llamado->bindParam(':nombre', $nombre);
    $llamado->bindParam(':apellido', $apellido);
    $llamado->bindParam(':correo', $correo);
    $llamado->bindParam(':idRepresentante', $idRepresentante);
    $llamado->execute();

    header("location:../vista/admin/representative_role/dashboard.php");
}
function eliminar() {
    session_start();
    $idRepresentante = $_SESSION['id'];
    $idUsuario = $_SESSION['idUsuario'];
    $db = abrirConexion();

    $query = "DELETE FROM ninos WHERE id_representante = :id";
    $llamado = $db->prepare($query);
    $llamado->bindParam(':id', $idRepresentante);
    $llamado->execute();

    $query = "DELETE FROM representantes WHERE id_usuario = :id";
    $llamado = $db->prepare($query);
    $llamado->bindParam(':id', $idUsuario);
    $llamado->execute();

    $query = "DELETE FROM usuarios WHERE id_usuario = :id";
    $llamado = $db->prepare($query);
    $llamado->bindParam(':id', $idUsuario);
    $llamado->execute();

    header("location:../vista/admin/representative_role/dashboard.php");
}

function cambiarContrasena() {
    session_start();
    $idRepresentante = $_SESSION['id'];
    $idUsuario = $_SESSION['idUsuario'];
    $db = abrirConexion();

    if(isset($_POST['contrasena'])){
        $contrasena = $_POST['contrasena'];
        
        $query = "UPDATE usuarios SET clave = :contrasena WHERE id_usuario = :idUsuario";
        $llamado = $db->prepare($query);
        $llamado->bindParam(':contrasena', $contrasena);
        $llamado->bindParam(':idUsuario', $idUsuario);
        $llamado->execute();
        header("location:../vista/admin/representative_role/dashboard.php");
    }
}