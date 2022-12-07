<?php

require 'conection.php'; //requerimos el archivo de la conexion

//asignamos las variables que obtenemos del formulario y las ponemos en variables locales
$analisis = $_POST['analisis'];
$codigo = $_POST['codigo'];
$costo = $_POST['costo'];
$descripcion = $_POST['descripcion'];

//creamos una variable y en ella metermos la instruccion para ingresar datos
$insertar = "INSERT INTO ep_costos_analisis values ('$analisis', '$codigo', '$costo', '$descripcion')";

//ingresmaos datos
$query = mysqli_query($connection, $insertar);
header('Location: ../public/costos_analisis.php'); //nos lleva de nuevo a la pantalla de insumos