<?php
session_start();
if (empty($_SESSION["id_usuario"])) {
  header('location: public/login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../EPAM-APP/css/normalize.css" />
  <link rel="stylesheet" href="../EPAM-APP/css/home.css?v=<?php echo (rand()); ?>" />
  <title>Home</title>
</head>

<body>
  <div class="contenedor-global-index">
    <div class="contenedor-titulo">
      <div class="cerrar-sesion">
        <a href="controllers/controlador_cerrar_sesion.php">Cerrar sesion</a>
      </div>
      <img src="../EPAM-APP/images/logo-blanco.png" alt="" />
    </div>
    <div class="contenedor-entradas">

      <?php


      if (in_array($_SESSION['rol'], array('Ingeniero', 'Doctor'))) {

        echo '<div class="contenedor-pantalla">';
        echo '<a href="../EPAM-APP/public/insumos.php">';
        echo '<div class="elementos-pantalla">';
        echo '<img src="../EPAM-APP/images/insumoss-icon.png" alt="icono-insumos" />';
        echo '<h2>Insumos</h2>';
        echo '</div>';
        echo '</a>';
        echo '</div>';
      }

      if (in_array($_SESSION['rol'], array('Ingeniero', 'Doctor'))) {

        echo '<div class="contenedor-pantalla">';
        echo '<a href="../EPAM-APP/public/clientes.php">';
        echo '<div class="elementos-pantalla">';
        echo '<img src="../EPAM-APP/images/clientes-icon.png" alt="icono-insumos" />';
        echo '<h2>Clientes</h2>';
        echo '</div>';
        echo '</a>';
        echo '</div>';
      }

      if (in_array($_SESSION['rol'], array('Ingeniero', 'Doctor'))) {

        echo '<div class="contenedor-pantalla">';
        echo '<a href="../EPAM-APP/public/bienes.php">';
        echo '<div class="elementos-pantalla">';
        echo '<img src="../EPAM-APP/images/bienes-icon.png" alt="icono-insumos" />';
        echo '   <h2>Bienes</h2>';
        echo '</div>';
        echo '</a>';
        echo '</div>';
      }
      if (in_array($_SESSION['rol'], array('Ingeniero', 'Doctor'))) {

        echo '<div class="contenedor-pantalla">';
        echo '<a href="../EPAM-APP/public/analisis_ingresos.php">';
        echo '<div class="elementos-pantalla">';
        echo '<img src="../EPAM-APP/images/ingresoss-icon.png" alt="icono-insumos" />';
        echo ' <h2>Ingresos</h2>';
        echo '</div>';
        echo '</a>';
        echo '</div>';
      }
      if (in_array($_SESSION['rol'], array('Ingeniero', 'Doctor'))) {

        echo '<div class="contenedor-pantalla">';
        echo '<a href="../EPAM-APP/public/costos_analisis.php">';
        echo '<div class="elementos-pantalla">';
        echo '<img src="../EPAM-APP/images/costoss-icon.png" alt="icono-insumos" />';
        echo '<h2>Costo de análisis</h2>';
        echo '</div>';
        echo '</a>';
        echo '</div>';
      }
      if (in_array($_SESSION['rol'], array('Ingeniero', 'Doctor'))) {

        echo '<div class="contenedor-pantalla">';
        echo '<a href="../EPAM-APP/public/reactivos.php">';
        echo '<div class="elementos-pantalla">';
        echo '<img src="../EPAM-APP/images/reactivo-icon.png" alt="icono-insumos" />';
        echo '<h2>Reactivos</h2>';
        echo '</div>';
        echo '</a>';
        echo '</div>';
      }
      if (in_array($_SESSION['rol'], array('Ingeniero', 'Doctor'))) {

        echo '<div class="contenedor-pantalla">';
        echo '<a href="../EPAM-APP/public/necesidades.php">';
        echo '<div class="elementos-pantalla">';
        echo '<img src="../EPAM-APP/images/necesidades.icon.png" alt="icono-insumos" />';
        echo '<h2>Necesidades</h2>';
        echo '</div>';
        echo '</a>';
        echo '</div>';

      }


      ?>

    </div>
  </div>
</body>

</html>