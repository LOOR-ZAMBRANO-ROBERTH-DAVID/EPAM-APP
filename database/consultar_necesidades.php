<?php
require 'conection.php';

//columnas de la tabla de la base de datos
$columns = [
    'quien_solicita',
    'que_solicita',
    'fecha_solicitud',
    'area_trabajo'
];
$table = 'ep_necesidades';
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
        $html .= '<td>' . $row['quien_solicita'] . '</td>';
        $html .= '<td>' . $row['que_solicita'] . '</td>';
        $html .= '<td>' . $row['fecha_solicitud'] . '</td>';
        $html .= '<td>' . $row['area_trabajo'] . '</td>';
        $html .= '<td>  <a class="centrar-boton" href=""><div class="boton-tabla boton boton-editar"> <img src="../images/editar-icon.png" alt="" class="icono-boton-tabla "> <p>Editar</p></div></a> </td>';
        $html .= '<td>  <a class="centrar-boton" href=""><div class="boton-tabla boton boton-eliminar"> <img src="../images/eliminar-icon.png" alt="" class="icono-boton-tabla"> <p>Eliminar</p></div></a> </td>';
         $html .= '</tr>';
    }
} else {
    $html .= '<tr>';
    $html .= '<td colspan="7" class="sin-resultados">Sin resultados</td>';
    $html .= '<tr>';
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);