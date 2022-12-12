<?php

require 'conection.php'; //requerimos el archivo de la conexion

//crear tablas
$crear_tablas = "CREATE TABLE IF NOT EXISTS  $database.ep_necesidades(
    quien_solicita VARCHAR(200),
    que_solicita VARCHAR(200),
    fecha_solicitud VARCHAR(200),
    area_trabajo VARCHAR(200)
);";

if ($connection->query($crear_tablas) === TRUE) {
} else {
    echo "Error creating table: " . $connection->error;
}

//asignamos las variables que obtenemos del formulario y las ponemos en variables locales
$quien_solicita = $_POST['quien_solicita'];
$que_solicita = $_POST['que_solicita'];
$fecha_solicitud = $_POST['fecha_solicitud'];
$area_trabajo = $_POST['area_trabajo'];
//creamos una variable y en ella metermos la instruccion para ingresar datos
$insertar = "INSERT INTO ep_necesidades values ('$quien_solicita', '$que_solicita', '$fecha_solicitud', '$area_trabajo')";
//ingresmaos datos
$query = mysqli_query($connection, $insertar);
header('Location: ../public/necesidades.php'); //nos lleva de nuevo a la pantalla de necesidades