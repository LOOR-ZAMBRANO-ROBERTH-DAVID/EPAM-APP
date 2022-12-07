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

//creamos una variable y en ella metermos la instruccion para ingresar datos
$insertar = "INSERT INTO ep_ingresos values ('$analisis', '$encargado', '$fecha', '$tipo', '$costo', '$cantidad', '$total')";

//ingresmaos datos
$query = mysqli_query($connection, $insertar);
header('Location: ../public/analisis_ingresos.php'); //nos lleva de nuevo a la pantalla de insumos
