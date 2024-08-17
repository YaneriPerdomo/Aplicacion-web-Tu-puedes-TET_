<?php

include_once("conexionBD.php");
$db = abrirConexion();

$idRol = $_POST['rol'];

if ($idRol == 1) {
    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $pais = $_POST['paises'];
    $cargo = $_POST['cargo'];
    $fechaCreacion = date("Y-m-d");
    $centro = $_POST['centro'];
    $contrasena = $_POST['contrasena'];

    $query = "INSERT INTO usuarios(id_rol, usuario, clave, estado, fecha_creacion) VALUES (:idRol, :usuario, :contrasena, b'1', :fechaCreacion);";
    $llamado = $db->prepare($query);
    $llamado->bindParam(':idRol', $idRol);
    $llamado->bindParam(':usuario', $usuario);
    $llamado->bindParam(':contrasena', $contrasena);
    $llamado->bindParam(':fechaCreacion', $fechaCreacion);
    $llamado->execute();

    $query = "SELECT MAX(id_usuario) AS IDs FROM usuarios";
    $llamado = $db->prepare($query);
    $llamado->execute();
    $data = $llamado->fetch(PDO::FETCH_ASSOC);

    $idUSuario = $data['IDs'];

    $query = "INSERT INTO profesionales(id_usuario, id_cargo, id_pais, nombre, apellido, correo_electronico, centro_educativo_profesional) VALUES (:idUsuario, :idCargo, :idPais, :nombre, :apellido, :correo, :centro);";
    $llamado = $db->prepare($query);
    $llamado->bindParam(':idUsuario', $idUSuario);
    $llamado->bindParam(':idCargo', $cargo);
    $llamado->bindParam(':idPais', $pais);
    $llamado->bindParam(':nombre', $nombre);
    $llamado->bindParam(':apellido', $apellido);
    $llamado->bindParam(':correo', $correo);
    $llamado->bindParam(':centro', $centro);
    $llamado->execute();

    header("location:../vista/signin/log_in.php");
} elseif ($idRol == 2) {
    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $pais = $_POST['paises'];
    $afilicacion = $_POST['afiliacion'];
    $idRol = $_POST['rol'];
    $fechaCreacion = date("Y-m-d");
    $contrasena = $_POST['contrasena'];

    $query = "INSERT INTO usuarios(id_rol, usuario, clave, estado, fecha_creacion) VALUES (:idRol, :usuario, :contrasena, b'1', :fechaCreacion);";
    $llamado = $db->prepare($query);
    $llamado->bindParam(':idRol', $idRol);
    $llamado->bindParam(':usuario', $usuario);
    $llamado->bindParam(':contrasena', $contrasena);
    $llamado->bindParam(':fechaCreacion', $fechaCreacion);
    $llamado->execute();

    $query = "SELECT MAX(id_usuario) AS IDs FROM usuarios";
    $llamado = $db->prepare($query);
    $llamado->execute();
    $data = $llamado->fetch(PDO::FETCH_ASSOC);

    $idUSuario = $data['IDs'];

    $query = "INSERT INTO representantes(id_usuario, id_afiliacion, id_pais, nombre, apellido, correo_electronico) VALUES (:idUsuario, :idAfiliacion, :idPais, :nombre, :apellido, :correo);";
    $llamado = $db->prepare($query);
    $llamado->bindParam(':idUsuario', $idUSuario);
    $llamado->bindParam(':idAfiliacion', $afilicacion);
    $llamado->bindParam(':idPais', $pais);
    $llamado->bindParam(':nombre', $nombre);
    $llamado->bindParam(':apellido', $apellido);
    $llamado->bindParam(':correo', $correo);
    $llamado->execute();

    header("location: ../vista/signin/log_in.php");
}
