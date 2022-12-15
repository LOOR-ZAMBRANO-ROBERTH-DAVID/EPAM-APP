<?php
require 'conection.php';

//columnas de la tabla de la base de datos
$columns = [
    'id_cliente',
    'razon',
    'ruc',
    'ciudad',
    'telefono',
    'direccion',
    'contacto',
    'correo',
    'estado'
];
$table = 'ep_clientes';
$campo = isset($_POST['campo']) ? $connection->real_escape_string($_POST['campo']) : null;

$where = '';
if ($campo != null) {
    $where = "WHERE (";
    $cont = count($columns);
    for ($i = 0; $i < $cont; $i++) {
        $where .= $columns[$i] . " LIKE '%" . $campo . "%' OR ";
    }
    $where = substr_replace($where, "", -3);
    $where .= ")";
}


//generamos una consulta simple
$sql = "SELECT " . implode(", ", $columns) . "
FROM $table $where";

$resultado = $connection->query($sql);
$num_rows = $resultado->num_rows;

$html = '';

if ($num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $html .= '<tr>';
        $html .= '<td>' . $row['razon'] . '</td>';
        $html .= '<td>' . $row['ruc'] . '</td>';
        $html .= '<td>' . $row['ciudad'] . '</td>';
        $html .= '<td>' . $row['telefono'] . '</td>';
        $html .= '<td>' . $row['direccion'] . '</td>';
        $html .= '<td>' . $row['contacto'] . '</td>';
        $html .= '<td>' . $row['correo'] . '</td>';
        $html .= '<td>' . $row['estado'] . '</td>';
        $html .= '<td>  <a class="centrar-boton" href="../editar_datos/editar_clientes.php?id_cliente=' . $row['id_cliente'] . '"><div class="boton-tabla boton boton-editar"> <img src="../images/editar-icon.png" alt="" class="icono-boton-tabla "> <p>Editar</p></div></a> </td>';
        $html .= '<td>  <a class="centrar-boton" href=""><div class="boton-tabla boton boton-eliminar"> <img src="../images/eliminar-icon.png" alt="" class="icono-boton-tabla"> <p>Eliminar</p></div></a> </td>';
        $html .= '</tr>';
    }
} else {
    $html .= '<tr>';
    $html .= '<td colspan="10" class="sin-resultados">Sin resultados</td>';
    $html .= '<tr>';
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);
