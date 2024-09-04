<?php
include_once("conexionBD.php");

if (isset($_POST['call'])) {
    switch ($_POST['call']) {
        case 1:
            agregar();
            break;
        case 2:
            modificar();
            break;
        case 3:
            eliminar();
            break;
    }
}

function listar()
{
    $db = abrirConexion();
    $idProfesional = $_SESSION['id'];
    $query = "SELECT usuarios.*, generos.genero, ninos.id_profesional, ninos.fecha_nacimiento FROM usuarios 
	            INNER JOIN generos
	            INNER JOIN ninos
	            WHERE ninos.id_usuario = usuarios.id_usuario
	            AND generos.id_genero = ninos.id_genero
                AND ninos.id_profesional = :idProfesional";
    $llamado = $db->prepare($query);
    $llamado->bindParam(':idProfesional', $idProfesional);
    $llamado->execute();

    $data = $llamado->fetchAll(PDO::FETCH_ASSOC);

    if ($data != NULL) {
        foreach ($data as $key => $value) {
            if ($value['permisos'] == 0) {
                $estado = "Inactivo";
            } else {
                $estado = "Activo";
            }
            $fechaNacimiento = new DateTime($value['fecha_nacimiento']);
            $fechaActual = new DateTime("today");
            $edad = $fechaNacimiento->diff($fechaActual)->y;
            $fechaCaducidad = date('Y-m-d', strtotime('+1 year', strtotime($value['fecha_creacion'])));

            $tabla = "
            <tr>
                <th scope='row" . $value['id_usuario'] . "'>" . $value['id_usuario'] . "</th>
                <td>" . $value['usuario'] . "</td>
                <td>" . $value['genero'] . "</td>
                <td>" . $edad . "</td>
                <td>" . $value['fecha_creacion'] . "</td>
                <td>" . $fechaCaducidad . "</td>
                <td>" . $estado . "</td>
                <td>
                  <a href='alumni/modify.php' class='btn btn-warning me-2' data-bs-target='#exampleModal-2' data-bs-whatever='@mdo'><i class='bi bi-pencil-square text-darke'></i></a>
                  <a href='alumni/progress.php' > <i class='bi bi-bar-chart-steps'></i></a>
                  <button type='button' class='btn btn-outline-danger' data-bs-toggle='modal' data-bs-target='#confirmar'><i class='bi bi-trash'></i></button>
                  <div class='modal fade' id='confirmar' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                      <div class='modal-dialog'>
                        <div class='modal-content'>
                          <div class='modal-header'>
                            <div class='text-center w-100'>
                            <h1 class='modal-title fs-5 fw-bold ' id='exampleModalLabel'>¿Estás seguro?</h1>
                            </div>
                          </div>
                          <div class='modal-body'>
                            <p>Usando esta opción puedes eliminar completamente la cuenta del usuario. <span class='text-danger'>Al eliminar su cuenta, ya no tendrá acceso al aprendizaje de Tu puedes.</span></p>
                          </div>
                          <div class='modal-footer'>
                            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cerrar</button>
                            <form action='../../../php/admin.php' method='POST'>
                                <input type='hidden' name='call' value='3' />
                                <input type='hidden' name='id' value='" . $value['id_usuario'] . "' />
                                <button type='submit' class='btn btn-danger'>Seguro</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                </td>
            </tr>
            ";

            echo ($tabla);
        }
    } else {
        $tabla = "<tr>No se encuentra ningun usuario</tr>";

        echo ($tabla);
    }
}
function agregar()
{
    session_start();
    $idProfesional = $_SESSION['id'];
    $db = abrirConexion();

    if (isset($_POST['nino'])) {
        $genero = 1;
    } elseif (isset($_POST['nina'])) {
        $genero = 2;
    }

    $usuario = $_POST['usuario'];
    $pais = $_POST['pais'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $fechaCreacion = date("Y-m-d");
    $fechaValidez = $_POST['fechaValidez'];
    $contrasena = $_POST['contrasena'];
    $rol = 3;

    if (isset($_POST['permisos'])) {
        $query = "INSERT INTO usuarios(id_rol, usuario, clave, estado, permisos, fecha_creacion, fecha_validez) VALUES (:idRol, :usuario, :contrasena, b'1', b'1', :fechaCreacion, :fechaValidez);";
    } else {
        $query = "INSERT INTO usuarios(id_rol, usuario, clave, estado, permisos, fecha_creacion, fecha_validez) VALUES (:idRol, :usuario, :contrasena, b'1', b'0', :fechaCreacion, :fechaValidez);";
    }

    $llamado = $db->prepare($query);
    $llamado->bindParam(':idRol', $rol);
    $llamado->bindParam(':usuario', $usuario);
    $llamado->bindParam(':contrasena', $contrasena);
    $llamado->bindParam(':fechaCreacion', $fechaCreacion);
    $llamado->bindParam(':fechaValidez', $fechaValidez);
    $llamado->execute();

    $query = "SELECT MAX(id_usuario) AS IDs FROM usuarios";
    $llamado = $db->prepare($query);
    $llamado->execute();
    $data = $llamado->fetch(PDO::FETCH_ASSOC);

    $idUSuario = $data['IDs'];

    if (isset($_POST['lectura'])) {
        $query = "INSERT INTO ninos(id_genero, id_usuario, id_pais, id_profesional, fecha_nacimiento, sabe_leer) VALUES (:idGenero, :idUsuario, :idPais, :idProfesional, :fechaNacimiento, b'1');";
    } else {
        $query = "INSERT INTO ninos(id_genero, id_usuario, id_pais, id_profesional, fecha_nacimiento, sabe_leer) VALUES (:idGenero, :idUsuario, :idPais, :idProfesional, :fechaNacimiento, b'0');";
    }

    $llamado = $db->prepare($query);
    $llamado->bindParam(':idGenero', $genero);
    $llamado->bindParam(':idUsuario', $idUSuario);
    $llamado->bindParam(':idPais', $pais);
    $llamado->bindParam(':idProfesional', $idProfesional);
    $llamado->bindParam(':fechaNacimiento', $fechaNacimiento);
    $llamado->execute();

    header("location:../vista/admin/professional_role/dashboard.php");
}
function modificar()
{
    session_start();
    $idProfesional = $_SESSION['id'];
    $db = abrirConexion();

    if (isset($_POST['nino'])) {
        $genero = 1;
    } elseif (isset($_POST['nina'])) {
        $genero = 2;
    }

    $idUsuario = $_POST['id'];
    $usuario = $_POST['usuario'];
    $pais = $_POST['pais'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $fechaValidez = $_POST['fechaValidez'];
    $contrasena = $_POST['contrasena'];

    if (isset($_POST['permisos'])) {
        $query = "UPDATE usuarios SET usuario = :usuario, clave = :contrasena, permisos = b'1', fecha_validez = :fechaValidez WHERE id_usuario = :idUsuario";
    } else {
        $query = "UPDATE usuarios SET usuario = :usuario, clave = :contrasena, permisos = b'0', fecha_validez = :fechaValidez WHERE id_usuario = :idUsuario";
    }

    $llamado = $db->prepare($query);
    $llamado->bindParam(':usuario', $usuario);
    $llamado->bindParam(':contrasena', $contrasena);
    $llamado->bindParam(':fechaValidez', $fechaValidez);
    $llamado->bindParam(':idUsuario', $idUsuario);
    $llamado->execute();

    if (isset($_POST['lectura'])) {
        $query = "UPDATE ninos SET id_genero = :idGenero, id_pais = :idPais, fecha_nacimiento = :fechaNacimiento, sabe_leer = b'1' WHERE id_profesional = :idProfesional;";
    } else {
        $query = "UPDATE ninos SET id_genero = :idGenero, id_pais = :idPais, fecha_nacimiento = :fechaNacimiento, sabe_leer = b'0' WHERE id_profesional = :idProfesional;";
    }

    $llamado = $db->prepare($query);
    $llamado->bindParam(':idGenero', $genero);
    $llamado->bindParam(':idPais', $pais);
    $llamado->bindParam(':fechaNacimiento', $fechaNacimiento);
    $llamado->bindParam(':idProfesional', $idProfesional);
    $llamado->execute();

    header("location:../vista/admin/professional_role/dashboard.php");
}
function eliminar()
{
    $db = abrirConexion();

    $id = $_POST['id'];

    $query = "DELETE FROM ninos WHERE id_usuario = :id";
    $llamado = $db->prepare($query);
    $llamado->bindParam(':id', $id);
    $llamado->execute();

    $query = "DELETE FROM usuarios WHERE id_usuario = :id";
    $llamado = $db->prepare($query);
    $llamado->bindParam(':id', $id);
    $llamado->execute();

    header("location:../vista/admin/professional_role/dashboard.php");
}
