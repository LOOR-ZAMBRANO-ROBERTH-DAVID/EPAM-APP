<?php
/**Creamos la conexion a la base de datos */
$hostname = "localhost";
$username = "root";
$password = "";
$connection2 = mysqli_connect($hostname, $username, $password);
$database = "epam3";

if (!$connection) {
    die("Conexion fallida: " . mysqli_connect_error());
}
/** echo "Connected Exitosa a la base de datos";
 */

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS $database";
if ($connection->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$connection = mysqli_connect($hostname, $username, $password, $database);
