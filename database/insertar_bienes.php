<?php

require 'conection.php'; //requerimos el archivo de la conexion

//asignamos las variables que obtenemos del formulario y las ponemos en variables locales
$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$categoria = $_POST['categoria'];
$cantidad = $_POST['cantidad'];

$crear_tablas = "CREATE TABLE IF NOT EXISTS  $database.ep_bienes(
    codigo VARCHAR(200),
    nombre VARCHAR(200),
    categoria VARCHAR(200),
    cantidad Int
);";

if ($connection->query($crear_tablas) === TRUE) {
} else {
    echo "Error creating database: " . $connection->error;
}


//creamos una variable y en ella metermos la instruccion para ingresar datos
$insertar = "INSERT INTO ep_bienes values ('$codigo', '$nombre', '$categoria', '$cantidad')";

//ingresmaos datos
$query = mysqli_query($connection, $insertar);
header('Location: ../public/bienes.php'); //nos lleva de nuevo a la pantalla de insumos




