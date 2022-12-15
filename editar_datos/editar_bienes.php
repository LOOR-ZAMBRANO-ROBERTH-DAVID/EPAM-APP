<?php
require '../database/conection.php';
// recuperar el código del registro a editar
$id_bienes = $_GET['id_bienes'];
// si no se recibió un código, mostrar un mensaje de error
if ($id_bienes == null) {
    echo "Error: no se recibió un código de registro válido.";
    exit;
}


// crear la consulta para recuperar el registro con el código especificado
$sql = "SELECT * FROM ep_bienes WHERE id_bienes = '$id_bienes'";

// ejecutar la consulta y almacenar el resultado
$resultado = $connection->query($sql);

// si no se encontró ningún registro con el código especificado, mostrar un mensaje de error
if ($resultado->num_rows == 0) {
    echo "Error: no se encontró ningún registro con el código especificado.";
    exit;
}

// si se encontró el registro, recuperar los datos del registro
$row = $resultado->fetch_assoc();

// si se recibió una petición de actualización de datos
if (isset($_POST['submit'])) {
    // obtener los valores enviados por el formulario
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $cantidad = $_POST['cantidad'];

    // crear la consulta de actualización de datos
    $sql = "UPDATE ep_bienes SET nombre = '$nombre', categoria = '$categoria', cantidad = '$cantidad' WHERE id_bienes = '$id_bienes'";

    // ejecutar la consulta de actualización
    $resultado = $connection->query($sql);
    header('Location: ../public/bienes.php');
    exit;
}

// mostrar los datos del registro en un formulario de edición
echo '<form method="POST">';
echo '<label for="nombre">Nombre:</label>';
echo '<input type="text" id="nombre" name="nombre" value="'.$row['nombre'].'" />';
echo '<label for="categoria">Categoría:</label>';
echo '<input type="text" id="categoria" name="categoria" value="'.$row['categoria'].'" />';
echo '<label for="cantidad">Cantidad:</label>';
echo '<input type="number" id="cantidad" name="cantidad" value="'.$row['cantidad'].'" />';
echo '<button type="submit" name="submit" >Guardar cambios</button>';
echo '</form>';





