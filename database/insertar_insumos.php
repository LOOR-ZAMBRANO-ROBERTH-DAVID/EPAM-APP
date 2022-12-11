<?php

require 'conection.php'; //requerimos el archivo de la conexion

//asignamos las variables que obtenemos del formulario y las ponemos en variables locales
$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];
$cantidad = $_POST['cantidad'];
$descrip = $_POST['descrip'];

//crear tablas

$crear_tablas = "CREATE TABLE IF NOT EXISTS  $database.ep_insumos(
    nombre VARCHAR(200),
    tipo VARCHAR(200),
    cantidad VARCHAR(200),
    descrip VARCHAR(200)
);";

if ($connection->query($crear_tablas) === TRUE) {
} else {
    echo "Error creating database: " . $connection->error;
}

$insertar = "INSERT INTO ep_insumos values ('$nombre', '$tipo', '$cantidad', '$descrip')";
$query = mysqli_query($connection, $insertar);

header('Location: ../public/insumos.php'); //nos lleva de nuevo a la pantalla de insumos
