<?php
require '../database/conection.php';
$sql = "CREATE TABLE IF NOT EXISTS $database.ep_usuarios (
        id_usuario INT AUTO_INCREMENT PRIMARY KEY,
        rol VARCHAR(50) NOT NULL,
        nombre VARCHAR(50) NOT NULL,
        apellido VARCHAR(50) NOT NULL,
        usuario VARCHAR(50) NOT NULL,
        clave VARCHAR(100) NOT NULL
    )";

if ($connection->query($sql) === TRUE) {
    echo "La tabla se ha creado correctamente.";
} else {
    echo "Error al crear la tabla: " . $connection->error;
}

//AQUI USTEDES VAN A LLENAR ESTOS DATOS, LOS MISMOS QUE SERAN IMPORTANTES PARA INICIAR SESION

$rol = 'Ingeniero';
$nombre = 'David';
$apellido = 'Zambrano';
$usuario = 'david';
$clave = 'david';


$clave_encriptada = password_hash($clave, PASSWORD_DEFAULT);

$sql2 = "INSERT INTO ep_usuarios (rol, nombre, apellido, usuario, clave)
         SELECT '$rol', '$nombre', '$apellido', '$usuario', '$clave_encriptada'
         WHERE NOT EXISTS (SELECT * FROM ep_usuarios WHERE usuario = '$usuario')";

// Ejecutar la consulta y verificar si fue exitosa
if (mysqli_query($connection, $sql2)) {
    echo "Los datos se han insertado exitosamente en la tabla";
} else {
    echo "Error al insertar datos en la tabla: " . mysqli_error($connection);
}