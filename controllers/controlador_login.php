<?php
session_start();

require '../database/conection.php';
/*Este codigo es solo para crear la base de datos y crear un usuariod el tipo administrador*/

if (!empty($_POST['btn_ingresar'])) {
    if (!empty($_POST['usuario']) and !empty($_POST['password'])) {
        $usuario = $_POST['usuario'];
        $clave = $_POST['password'];
        $sql = $connection->query("SELECT *FROM $database.ep_usuarios WHERE usuario ='$usuario'");
        if ($datos = $sql->fetch_object()) {
            if (password_verify($clave, $datos->clave)) {
                // La contraseña es correcta, asignar valores a las variables de sesión y redirigir a la página principal
                $_SESSION['usuario'] = $datos->usuario;
                $_SESSION["id"] = $datos->id;
                $_SESSION["rol"] = $datos->rol;
                $_SESSION["apellido"] = $datos->apellido;
                header('Location: ../index.php');
            } else
                echo "aqui esta el error";

        } else {
            echo '<div class="alerta">Aceeso denegado</div>';
        }
    } else
        echo ' <div class = "alerta">Campos vacios </div>';
}