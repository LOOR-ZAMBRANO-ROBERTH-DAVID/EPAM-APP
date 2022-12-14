<?php
session_start();
if (empty($_SESSION["id"])) {
  header('location: ../public/login.php');
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
    <ul class="opciones-menu">
      <li>
        <img src="../images/insumoss-icon.png" alt="" />
        <a href="../public/insumos.php">Insumos</a>
      </li>
      <li>
        <img src="../images/clientes-icon.png" alt="" />
        <a href="../public/clientes.php">Clientes</a>
      </li>
      <li>
        <img src="../images/bienes-icon.png" alt="" />
        <a href="../public/bienes.php">Bienes</a>
      </li>
      <li>
        <img src="../images/ingresoss-icon.png" alt="" />
        <a href="../public/analisis_ingresos.php">Ingresos</a>
      </li>
      <li>
        <img src="../images/costoss-icon.png" alt="" />
        <a href="../public/costos_analisis.php">Costo de Análisis</a>
      </li>
      <li>
        <img src="../images/reactivo-icon.png" alt="" />
        <a href="../public/reactivos.php">Reactivos</a>
      </li>
      <li>
        <img src="../images/necesidades.icon.png" alt="" />
        <a href="../public/necesidades.php">Necesidades</a>
      </li>
    </ul>
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