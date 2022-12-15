<?php

require 'conection.php'; //requerimos el archivo de la conexion

//asignamos las variables que obtenemos del formulario y las ponemos en variables locales
$analisis = $_POST['analisis'];
$codigo = $_POST['codigo'];
$costo = $_POST['costo'];
$descripcion = $_POST['descripcion'];

//hola
//crear tablas
$crear_tablas = "CREATE TABLE IF NOT EXISTS  $database.ep_costos_analisis(
    id_canalisis INT PRIMARY KEY AUTO_INCREMENT,
    analisis VARCHAR(200),
    codigo VARCHAR(200),
    costo VARCHAR(200),
    descripcion VARCHAR(200)
);";

if ($connection->query($crear_tablas) === TRUE) {
} else {
    echo "Error creating database: " . $connection->error;
}

//creamos una variable y en ella metermos la instruccion para ingresar datos
$insertar = "INSERT INTO ep_costos_analisis (analisis,codigo,costo,descripcion) values ('$analisis', '$codigo', '$costo', '$descripcion')";

//ingresmaos datos
$query = mysqli_query($connection, $insertar);
header('Location: ../public/costos_analisis.php'); //nos lleva de nuevo a la pantalla de insumos