<?php
require 'conection.php';

//columnas de la tabla de la base de datos
$columns = [
    'codigo',
    'nombre',
    'fabricante',
    'descripcion',
    'incertidumbre',
    'ncat',
    'ncas',
    'lote',
    'presentacion_detalle',
    'presentacion',
    'fingreso',
    'felaboracion',
    'fcaducidad',
    'marca',
    'proveedor',
    'certificado',
    'cantidad',
    'observaciones',
    'responsable'
];
$table = 'ep_reactivos';
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
        $html .= '<td>' . $row['fabricante'] . '</td>';
        $html .= '<td>' . $row['descripcion'] . '</td>';
        $html .= '<td>' . $row['incertidumbre'] . '</td>';
        $html .= '<td>' . $row['ncat'] . '</td>';
        $html .= '<td>' . $row['ncas'] . '</td>';
        $html .= '<td>' . $row['lote'] . '</td>';
        $html .= '<td>' . $row['presentacion_detalle'] . '</td>';
        $html .= '<td>' . $row['presentacion'] . '</td>';
        $html .= '<td>' . $row['fingreso'] . '</td>';
        $html .= '<td>' . $row['felaboracion'] . '</td>';
        $html .= '<td>' . $row['fcaducidad'] . '</td>';
        $html .= '<td>' . $row['marca'] . '</td>';
        $html .= '<td>' . $row['proveedor'] . '</td>';
        $html .= '<td>' . $row['certificado'] . '</td>';
        $html .= '<td>' . $row['cantidad'] . '</td>';
        $html .= '<td>' . $row['observaciones'] . '</td>';
        $html .= '<td>' . $row['responsable'] . '</td>';
        $html .= '<td>  <a class="centrar-boton" href=""><div class="boton-tabla boton"><p>Editar</p></div></a> </td>';
        $html .= '<td>  <a class="centrar-boton" href=""><div class="boton-tabla boton"><p>Eliminar</p></div></a> </td>';

        $html .= '</tr>';
    }
} else {
    $html .= '<tr>';
    $html .= '<td colspan="7">Sin resultados</td>';
    $html .= '<tr>';
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);