<?php

require 'conection.php'; //requerimos el archivo de la conexion

//asignamos las variables que obtenemos del formulario y las ponemos en variables locales
$razon = $_POST['razon'];
$ruc = $_POST['ruc'];
$ciudad = $_POST['ciudad'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$contacto = $_POST['contacto'];
$correo = $_POST['correo'];
$estado = $_POST['estado'];

//creamos una variable y en ella metermos la instruccion para ingresar datos
$insertar = "INSERT INTO ep_clientes values ('$razon', '$ruc', '$ciudad', '$telefono', '$direccion', '$contacto', '$correo', '$estado')";

//ingresmaos datos
$query = mysqli_query($connection, $insertar);
header('Location: ../public/clientes.php'); //nos lleva de nuevo a la pantalla de insumos
