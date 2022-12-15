<?php

require 'conection.php'; //requerimos el archivo de la conexion

//asignamos las variables que obtenemos del formulario y las ponemos en variables locales
$analisis = $_POST['analisis']; 
$encargado = $_POST['encargado'];
$fecha = $_POST['fecha'];
$tipo = $_POST['tipo'];
$costo = $_POST['costo'];
$cantidad = $_POST['cantidad'];
$total = $_POST['total'];
//crear tablas

$crear_tablas = "CREATE TABLE IF NOT EXISTS  $database.ep_ingresos(
    id_ingresos INT PRIMARY KEY AUTO_INCREMENT,
    analisis VARCHAR(200),
    encargado VARCHAR(200),
    fecha DATE,
    tipo VARCHAR(200),
    costo VARCHAR(200),
    cantidad VARCHAR(200),
    total VARCHAR(200)
);";

if ($connection->query($crear_tablas) === TRUE) {
} else {
    echo "Error creating database: " . $connection->error;
}
//creamos una variable y en ella metermos la instruccion para ingresar datos
$insertar = "INSERT INTO ep_ingresos (analisis,encargado,fecha,tipo,costo,cantidad,total) values ('$analisis', '$encargado', '$fecha', '$tipo', '$costo', '$cantidad', '$total')";

//ingresmaos datos
$query = mysqli_query($connection, $insertar);
header('Location: ../public/analisis_ingresos.php'); //nos lleva de nuevo a la pantalla de insumos
