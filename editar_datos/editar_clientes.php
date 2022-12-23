<?php
require '../database/conection.php';
// recuperar el código del registro a editar
$id_cliente = $_GET['id_cliente'];
// si no se recibió un código, mostrar un mensaje de error
if ($id_cliente == null) {
    echo "Error: no se recibió un código de registro válido.";
    exit;
}


// crear la consulta para recuperar el registro con el código especificado
$sql = "SELECT * FROM ep_clientes WHERE id_cliente = '$id_cliente'";

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
    $razon = $_POST['razon'];
    $ruc = $_POST['ruc'];
    $ciudad = $_POST['ciudad'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $contacto = $_POST['contacto'];
    $correo = $_POST['correo'];
    $estado = $_POST['estado'];

    // crear la consulta de actualización de datos
    $sql = "UPDATE ep_clientes SET razon = '$razon', ruc = '$ruc', ciudad = '$ciudad',
     telefono = '$telefono', direccion = '$direccion', contacto = '$contacto', 
     correo = '$correo', estado = '$estado' WHERE id_cliente = '$id_cliente'";
    // ejecutar la consulta de actualización
    $resultado = $connection->query($sql);
    header('Location: ../public/clientes.php');
    exit;
}

// mostrar los datos del registro en un formulario de edición
echo '<form method="POST">';
echo '<label for="razon">Razón social:</label>';
echo '<input type="text" id="razon" name="razon" value="'.$row['razon'].'" />';
echo '<label for="ruc">RUC:</label>';
echo '<input type="text" id="ruc" name="ruc" value="'.$row['ruc'].'" />';
echo '<label for="ciudad">Ciudad:</label>';
echo '<input type="text" id="ciudad" name="ciudad" value="'.$row['ciudad'].'" />';
echo '<label for="telefono">Teléfono:</label>';
echo '<input type="text" id="telefono" name="telefono" value="'.$row['telefono'].'" />';
echo '<label for="direccion">Dirección:</label>';
echo '<input type="text" id="direccion" name="direccion" value="'.$row['direccion'].'" />';
echo '<label for="contacto">Contacto:</label>';
echo '<input type="text" id="contacto" name="contacto" value="'.$row['contacto'].'" />';
echo '<label for="correo">Correo electrónico:</label>';
echo '<input type="email" id="correo" name="correo" value="'.$row['correo'].'" />';
echo '<label for="estado">Estado:</label>';
echo '<input type="text" id="estado" name="estado" value="'.$row['estado'].'" />';
echo '<button type="submit" name="submit" >Guardar cambios</button>';
echo '</form>';






