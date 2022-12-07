<?php

require 'conection.php'; //requerimos el archivo de la conexion

//asignamos las variables que obtenemos del formulario y las ponemos en variables locales
$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];
$cantidad = $_POST['cantidad'];
$descrip = $_POST['descrip'];

//creamos una variable y en ella metermos la instruccion para ingresar datos
$insertar = "INSERT INTO ep_insumos values ('$nombre', '$tipo', '$cantidad', '$descrip')";

//ingresmaos datos
$query = mysqli_query($connection, $insertar);
header('Location: ../public/insumos.php'); //nos lleva de nuevo a la pantalla de insumos