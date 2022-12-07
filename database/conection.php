<?php
/**Creamos la conexion a la base de datos */
$hostname = "localhost";
$username = "root";
$password = "";

$database = "EPAMAPP";


$connection = mysqli_connect($hostname, $username, $password);

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
    echo "Error creating database: " . $connection->error;
}


$connection = mysqli_connect($hostname, $username, $password, $database);

$create_tables = " tbl_name";


$sql = "CREATE TABLE EPAMAPP.jsadfasd (visit_id INT)";
if ($connection->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $connection->error;
}