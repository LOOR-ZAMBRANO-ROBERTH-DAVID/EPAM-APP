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

$insertar = "INSERT INTO ep_reactivos values ('$codigo', '$nombre', '$fabricante', '$descripcion', '$incertidumbre', '$ncat', 
'$ncas', '$lote', '$presentacion_detalle', '$presentacion', '$fingreso', '$felaboracion', '$fcaducidad', '$marca', 
'$proveedor', '$certificado', '$cantidad', '$observaciones', '$responsable')";

//ingresmaos datos
$query = mysqli_query($connection, $insertar);
header('Location: ../public/reactivos.php'); 