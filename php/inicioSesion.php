<?php

include_once("conexionBD.php");
$db = abrirConexion();

$usuario = $_POST['usuario_inicio'];
$contrasena = $_POST['contrasena_inicio'];
$contrasenaVal = $_POST['contrasena_inicio_confirmar'];

if ($contrasena == $contrasenaVal) {
    $query = "SELECT * FROM usuarios WHERE usuario = :usuario AND clave = :contrasena";
    $llamado = $db->prepare($query);
    $llamado->bindParam(':usuario', $usuario);
    $llamado->bindParam(':contrasena', $contrasena);
    $llamado->execute();

    $data = $llamado->fetch(PDO::FETCH_ASSOC);

    if ($usuario == $data['usuario'] && $contrasena == $data['clave']) {
        switch ($data['id_rol']) {
            case 1:
                $query = "SELECT * FROM profesionales WHERE id_usuario = " . $data['id_usuario'];
                $llamado = $db->prepare($query);
                $llamado->execute();

                $dataUsuario = $llamado->fetch(PDO::FETCH_ASSOC);

                session_start();
                $_SESSION['idUsuario'] = $data['id_usuario'];
                $_SESSION['usuario'] = $data['usuario'];
                $_SESSION['id'] = $dataUsuario['id_profesional'];
                $_SESSION['nombre'] = $dataUsuario['nombre'] . " " . $dataUsuario['apellido'];
                header("location:../vista/admin/professional_role/dashboard.php");
                break;
            case 2:
                $query = "SELECT * FROM representantes WHERE id_usuario = " . $data['id_usuario'];
                $llamado = $db->prepare($query);
                $llamado->execute();

                $dataUsuario = $llamado->fetch(PDO::FETCH_ASSOC);

                session_start();
                $_SESSION['idUsuario'] = $data['id_usuario'];
                $_SESSION['usuario'] = $data['usuario'];
                $_SESSION['id'] = $dataUsuario['id_representante'];
                $_SESSION['nombre'] = $dataUsuario['nombre'] . " " . $dataUsuario['apellido'];

                header("location: ../vista/admin/representative_role/dashboard.php");
                break;
            case 3:
                $query = "SELECT *, usuarios.permisos AS permisos FROM ninos INNER JOIN usuarios WHERE usuarios.id_usuario = " . $data['id_usuario'];
                $llamado = $db->prepare($query);
                $llamado->execute();

                $dataUsuario = $llamado->fetch(PDO::FETCH_ASSOC);

                if ($dataUsuario['permisos'] == 1) {
                    if ($dataUsuario['sabe_leer'] == 0) {
                        session_start();
                        $_SESSION['usuario'] = $data['usuario'];
                        $_SESSION['nombre'] = $dataUsuario['nombre'] . " " . $dataUsuario['apellido'];

                        header("location: ../vista/player/they_do_not_read/welcome.php");
                        break;
                    } else {
                        session_start();
                        $_SESSION['usuario'] = $data['usuario'];
                        $_SESSION['nombre'] = $dataUsuario['nombre'] . " " . $dataUsuario['apellido'];

                        header("location: ../vista/player/they_do_read/welcome.php");
                        break;
                    }
                } else {
                    // $json = "[data: 'No tienes permisos']";
                    // json_encode($json) // Script "no tiene permisos" USAR AJAX
                    header("location: ../vista/signin/log_in.php");
                    break;
                }
        }
    } else {
        print_r($_POST);
        echo ("\n");
        print_r($data);
        echo ("Usuario o contrasena incorrectos"); //
    }
} else {
    echo ("Contrasena no coincide"); //
}
