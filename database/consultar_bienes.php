<?php
require 'conection.php';

//columnas de la tabla de la base de datos
$columns = [
    'id_bienes',
    'codigo',
    'nombre',
    'categoria',
    'cantidad'
];
$table = 'ep_bienes';
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
        $html .= '<td>' . $row['codigo'] . '</td>';
        $html .= '<td>' . $row['nombre'] . '</td>';
        $html .= '<td>' . $row['categoria'] . '</td>';
        $html .= '<td>' . $row['cantidad'] . '</td>';
        $html .= '<td>  <a class="centrar-boton" href="../editar_datos/editar_bienes.php?id_bienes=' . $row['id_bienes'] . '"><div class="boton-tabla boton boton-editar"> <img src="../images/editar-icon.png" alt="" class="icono-boton-tabla "> <p>Editar</p></div></a> </td>';
        $html .= '<td>  <a class="centrar-boton" href=""><div class="boton-tabla boton boton-eliminar"> <img src="../images/eliminar-icon.png" alt="" class="icono-boton-tabla"> <p>Eliminar</p></div></a> </td>';
         $html .= '</tr>';
    }
} else {
    $html .= '<tr>';
    $html .= '<td colspan="7" class="sin-resultados">Sin resultados</td>';
    $html .= '<tr>';
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);