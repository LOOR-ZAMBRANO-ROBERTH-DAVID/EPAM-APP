<?php
require '../database/conection.php';
// recuperar el código del registro a editar
$id_canalisis = $_GET['id_canalisis'];
// si no se recibió un código, mostrar un mensaje de error
if ($id_canalisis == null) {
    echo "Error: no se recibió un código de registro válido.";
    exit;
}


// crear la consulta para recuperar el registro con el código especificado
$sql = "SELECT * FROM ep_costos_analisis WHERE id_canalisis = '$id_canalisis'";

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
    $analisis = $_POST['analisis'];
    $codigo = $_POST['codigo'];
    $costo = $_POST['costo'];
    $descripcion = $_POST['descripcion'];

    // crear la consulta de actualización de datos
    $sql = "UPDATE ep_costos_analisis SET 
    analisis = '$analisis',
    codigo = '$codigo',
    costo = '$costo',
    descripcion = '$descripcion'
    WHERE id_canalisis = '$id_canalisis'";
    
    // ejecutar la consulta de actualización
    $resultado = $connection->query($sql);
    header('Location: ../public/costos_analisis.php');
    exit;
}

// mostrar los datos del registro en un formulario de edición
echo '<form method="POST">';
echo '<label for="analisis">Análisis:</label>';
echo '<input type="text" id="analisis" name="analisis" value="'.$row['analisis'].'" />';
echo '<label for="codigo">Código:</label>';
echo '<input type="text" id="codigo" name="codigo" value="'.$row['codigo'].'" />';
echo '<label for="costo">Costo:</label>';
echo '<input type="text" id="costo" name="costo" value="'.$row['costo'].'" />';
echo '<label for="descripcion">Descripción:</label>';
echo '<input type="text" id="descripcion" name="descripcion" value="'.$row['descripcion'].'" />';
echo '<button type="submit" name="submit" >Guardar cambios</button>';
echo '</form>';



