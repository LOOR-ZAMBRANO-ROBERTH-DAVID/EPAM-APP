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
  <link rel="stylesheet" href="../css/vertical-menu.css?v=<?php echo (rand()); ?>" />
  <link rel="stylesheet" href="../css/normalize.css?v=<?php echo (rand()); ?>" />
  <link rel="stylesheet" href="../css/style.css?v=<?php echo (rand()); ?>" />

  <title></title>
</head>

<body>
  <div class="vertical-menu">
    <div class="logo-vertical-menu">

      <div class="usuario-sesion">
        <img src="../images/usuario-icon.png" alt="" class="logo-blanco" />
        <div class="texto-usuario-sesion">
          <p class="apellido-usuario"><?php echo $_SESSION['apellido'] ?></p>
          <p class="rol-usuario"><?php echo $_SESSION['rol'] ?></p>
        </div>
      </div>
    </div>
    

    <?php
    echo '<ul class="opciones-menu">';
    if (in_array($_SESSION['rol'], array('Ingeniero', 'Doctor'))) {
      echo '<li>';
      echo '<a href="../public/insumos.php" class="item-nabvar">';
      echo '<img src="../images/insumoss-icon.png" alt="" />';
      echo '<p>Insumos</p>';
      echo '</a>';
      echo '</li>';
    }
    if (in_array($_SESSION['rol'], array('Ingeniero', 'Doctor'))) {
      echo '<li>';
      echo '<a href="../public/clientes.php" class="item-nabvar">';
      echo '<img src="../images/clientes-icon.png" alt="" />';
      echo '<p>Clientes</p>';
      echo '</a>';
      echo '</li>';
    }
    if (in_array($_SESSION['rol'], array('Ingeniero', 'Doctor'))) {
      echo '<li>';
      echo '<a href="../public/bienes.php" class="item-nabvar">';
      echo '<img src="../images/bienes-icon.png" alt="" />';
      echo '<p>Bienes</p>';
      echo '</a>';
      echo '</li>';
    }
    if (in_array($_SESSION['rol'], array('Ingeniero', 'Doctor'))) {
      echo '<li>';
      echo '<a href="../public/analisis_ingresos.php" class="item-nabvar">';
      echo '<img src="../images/ingresoss-icon.png" alt="" />';
      echo '<p>Ingresos</p>';
      echo '</a>';
      echo '</li>';
    }
    if (in_array($_SESSION['rol'], array('Ingeniero', 'Doctor'))) {
      echo '<li>';
      echo '<a href="../public/costos_analisis.php" class="item-nabvar">';
      echo '<img src="../images/costoss-icon.png" alt="" />';
      echo '<p>Costo de Analisis</p>';
      echo '</a>';
      echo '</li>';
    }
    if (in_array($_SESSION['rol'], array('Ingeniero', 'Doctor'))) {
      echo '<li>';
      echo '<a href="../public/reactivos.php" class="item-nabvar">';
      echo '<img src="../images/reactivo-icon.png" alt="" />';
      echo '<p>Reactivos</p>';
      echo '</a>';
      echo '</li>';
    }
    if (in_array($_SESSION['rol'], array('Ingeniero', 'Doctor'))) {
      echo '<li>';
      echo '<a href="../public/necesidades.php" class="item-nabvar">';
      echo '<img src="../images/necesidades.icon.png" alt="" />';
      echo '<p>Necesidades</p>';
      echo '</a>';
      echo '</li>';
    }
    echo '</ul>'
      ?>
    <a href="../controllers/controlador_cerrar_sesion.php">

      <div class="cerrar-sesion">
        <img src="../images/cerrar-sesion.png" alt="">
        <p>Cerrar sesión</p>
      </div>
    </a>
  </div>
  
  </div>
</body>

</html>