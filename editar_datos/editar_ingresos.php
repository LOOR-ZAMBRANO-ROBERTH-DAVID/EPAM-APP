<?php
require '../database/conection.php';
// recuperar el código del registro a editar
$id_ingresos = $_GET['id_ingresos'];
// si no se recibió un código, mostrar un mensaje de error
if ($id_ingresos == null) {
    echo "Error: no se recibió un código de registro válido.";
    exit;
}


// crear la consulta para recuperar el registro con el código especificado
$sql = "SELECT * FROM ep_ingresos WHERE id_ingresos = '$id_ingresos'";

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
    $encargado = $_POST['encargado'];
    $fecha = $_POST['fecha'];
    $tipo = $_POST['tipo'];
    $costo = $_POST['costo'];
    $cantidad = $_POST['cantidad'];
    $total = $_POST['total'];

    // crear la consulta de actualización de datos
    $sql = "UPDATE ep_ingresos SET 
    analisis = '$analisis',
    encargado = '$encargado',
    fecha = '$fecha',
    tipo = '$tipo',
    costo = '$costo',
    cantidad = '$cantidad',
    total = '$total'
    WHERE id_ingresos = '$id_ingresos'";
    
    // ejecutar la consulta de actualización
    $resultado = $connection->query($sql);
    header('Location: ../public/analisis_ingresos.php');
    exit;
}

// mostrar los datos del registro en un formulario de edición
echo '<form method="POST">';
echo '<label for="analisis">Análisis:</label>';
echo '<input type="text" id="analisis" name="analisis" value="'.$row['analisis'].'" />';
echo '<label for="encargado">Encargado:</label>';
echo '<input type="text" id="encargado" name="encargado" value="'.$row['encargado'].'" />';
echo '<label for="fecha">Fecha:</label>';
echo '<input type="text" id="fecha" name="fecha" value="'.$row['fecha'].'" />';
echo '<label for="tipo">Tipo:</label>';
echo '<input type="text" id="tipo" name="tipo" value="'.$row['tipo'].'" />';
echo '<label for="costo">Costo:</label>';
echo '<input type="text" id="costo" name="costo" value="'.$row['costo'].'" />';
echo '<label for="cantidad">Cantidad:</label>';
echo '<input type="text" id="cantidad" name="cantidad" value="'.$row['cantidad'].'" />';
echo '<label for="total">Total:</label>';
echo '<input type="text" id="total" name="total" value="'.$row['total'].'" />';
echo '<button type="submit" name="submit" >Guardar cambios</button>';
echo '</form>';




