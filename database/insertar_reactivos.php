<?php

require 'conection.php';

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$fabricante = $_POST['fabricante'];
$descripcion = $_POST['descripcion'];
$incertidumbre = $_POST['incertidumbre'];
$ncat = $_POST['ncat'];
$ncas = $_POST['ncas'];
$lote = $_POST['lote'];
$presentacion_detalle = $_POST['presentacion_detalle'];
$presentacion = $_POST['presentacion'];
$fingreso = $_POST['fingreso'];
$felaboracion = $_POST['felaboracion'];
$fcaducidad = $_POST['fcaducidad'];
$marca = $_POST['marca'];
$proveedor = $_POST['proveedor'];
$certificado = $_POST['certificado'];
$cantidad = $_POST['cantidad'];
$observaciones = $_POST['observaciones'];
$responsable = $_POST['responsable'];

//crear tablas

$crear_tablas = "CREATE TABLE IF NOT EXISTS  $database.ep_reactivos(
    codigo VARCHAR(200),
    nombre VARCHAR(200),
    fabricante VARCHAR(200),
    descripcion VARCHAR(200),
    incertidumbre VARCHAR(200),
    ncat VARCHAR(200),
    ncas VARCHAR(200),
    lote VARCHAR(200),
    presentacion_detalle VARCHAR(200),
    presentacion VARCHAR(200),
    fingreso date,
    felaboracion date,
    fcaducidad date,
    marca VARCHAR(200),
    proveedor VARCHAR(200),
    certificado VARCHAR(200),
    cantidad VARCHAR(200),
    observaciones VARCHAR(200),
    responsable VARCHAR(200)
);";

if ($connection->query($crear_tablas) === TRUE) {
} else {
    echo "Error creating database: " . $connection->error;
}


$insertar = "INSERT INTO ep_reactivos values ('$codigo', '$nombre', '$fabricante', '$descripcion', '$incertidumbre', '$ncat', 
'$ncas', '$lote', '$presentacion_detalle', '$presentacion', '$fingreso', '$felaboracion', '$fcaducidad', '$marca', 
'$proveedor', '$certificado', '$cantidad', '$observaciones', '$responsable')";

//ingresmaos datos
$query = mysqli_query($connection, $insertar);
header('Location: ../public/reactivos.php'); 