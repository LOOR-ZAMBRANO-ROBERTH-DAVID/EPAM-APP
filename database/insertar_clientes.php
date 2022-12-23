<?php

require 'conection.php'; //requerimos el archivo de la conexion

//asignamos las variables que obtenemos del formulario y las ponemos en variables locales
$razon = $_POST['razon'];
$ruc = $_POST['ruc'];
$ciudad = $_POST['ciudad'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$contacto = $_POST['contacto'];
$correo = $_POST['correo'];
$estado = $_POST['estado'];

//crear tablas

$crear_tablas = "CREATE TABLE IF NOT EXISTS  $database.ep_clientes(
    id_cliente INT PRIMARY KEY AUTO_INCREMENT,
    razon VARCHAR(200),
    ruc VARCHAR(200),
    ciudad VARCHAR(200),
    telefono VARCHAR(200),
    direccion VARCHAR(200),
    contacto VARCHAR(200),
    correo VARCHAR(200),
    estado VARCHAR(200)
);";

if ($connection->query($crear_tablas) === TRUE) {
} else {
    echo "Error creating database: " . $connection->error;
}

//creamos una variable y en ella metermos la instruccion para ingresar datos
$insertar = "INSERT INTO ep_clientes (razon, ruc,ciudad,telefono,direccion,contacto,correo,estado)  values ('$razon', '$ruc', '$ciudad', '$telefono', '$direccion', '$contacto', '$correo', '$estado')";

//ingresmaos datos
$query = mysqli_query($connection, $insertar);
header('Location: ../public/clientes.php'); //nos lleva de nuevo a la pantalla de insumos
