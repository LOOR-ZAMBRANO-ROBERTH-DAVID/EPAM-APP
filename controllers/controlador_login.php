<?php
session_start();

require '../database/conection.php';

/*Este codigo es solo para crear la base de datos y crear un usuariod el tipo administrador*/
$crear_tablas = "CREATE TABLE IF NOT EXISTS $database.ep_usuarios (
    id varchar(36) DEFAULT UUID(),
    rol varchar(20),
    nombre varchar(100),
    apellido varchar(100),
    usuario varchar(100),
    clave varchar(100)
 );";

if ($connection->query($crear_tablas) === TRUE) {
} else {
    echo "Error creating database: " . $connection->error;
}

/*
$insertar_datos = "INSERT INTO ep_usuarios (rol, nombre, apellido, usuario, clave) VALUES ('Administrador', 'Roberth', 'Loor', 'admin', 'admin')";
if ($connection->query($insertar_datos) === TRUE) {
} else {
    echo "Error creating database: " . $connection->error;
}
*/


if (!empty($_POST['btn_ingresar'])) {
    if (!empty($_POST['usuario']) and !empty($_POST['password'])) {
        $usuario = $_POST['usuario'];
        $clave = $_POST['password'];
        $sql = $connection->query("SELECT *FROM $database.ep_usuarios WHERE usuario ='$usuario' and clave = '$clave'");
        if ($datos = $sql->fetch_object()) {
            $_SESSION['usuario'] = $datos->usuario;
            $_SESSION["id"] = $datos->id;
            $_SESSION["rol"] = $datos->rol;
            $_SESSION["apellido"] = $datos->apellido;
            header('Location: ../index.php');
        } else {
            echo '<div class="alerta">Aceeso denegado</div>';
        }
    } else {
        echo ' <div class = "alerta">Campos vacios </div>';
    }
}
