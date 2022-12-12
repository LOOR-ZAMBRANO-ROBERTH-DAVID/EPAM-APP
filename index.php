<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../EPAM-APP/css/normalize.css"/>
    <link rel="stylesheet" href="../EPAM-APP/css/home.css?v=<?php echo (rand()); ?>"/>
    <title>Home</title>
  </head>
  <body>
    <div class="contenedor-global-index">
      <div class="contenedor-titulo">
        <img src="../EPAM-APP/images/logo-blanco.png" alt="" />
      </div>
      <div class="contenedor-entradas">
        <div class="contenedor-pantalla">
          <a href="../EPAM-APP/public/insumos.php">
            <div class="elementos-pantalla">
              <img src="../EPAM-APP/images/insumoss-icon.png" alt="icono-insumos" />
              <h2>Insumos</h2>
            </div>
          </a>
        </div>
        <div class="contenedor-pantalla">
          <a href="../EPAM-APP/public/clientes.php">
            <div class="elementos-pantalla">
              <img src="../EPAM-APP/images/clientes-icon.png" alt="icono-insumos" />
              <h2>Clientes</h2>
            </div>
          </a>
        </div>
        <div class="contenedor-pantalla">
          <a href="../EPAM-APP/public/bienes.php">
            <div class="elementos-pantalla">
              <img src="../EPAM-APP/images/bienes-icon.png" alt="icono-insumos" />
              <h2>Bienes</h2>
            </div>
          </a>
        </div>
        <div class="contenedor-pantalla">
          <a href="../EPAM-APP/public/analisis_ingresos.php">
            <div class="elementos-pantalla">
              <img src="../EPAM-APP/images/ingresoss-icon.png" alt="icono-insumos" />
              <h2>Ingresos</h2>
            </div>
          </a>
        </div>
        <div class="contenedor-pantalla">
          <a href="../EPAM-APP/public/costos_analisis.php">
            <div class="elementos-pantalla">
              <img src="../EPAM-APP/images/costoss-icon.png" alt="icono-insumos" />
              <h2>Costos de análisis</h2>
            </div>
          </a>
        </div>
        <div class="contenedor-pantalla">
          <a href="../EPAM-APP/public/reactivos.php">
            <div class="elementos-pantalla">
              <img src="../EPAM-APP/images/reactivo-icon.png" alt="icono-insumos" />
              <h2>Reactivos</h2>
            </div>
          </a>
        </div>
        <a href="#">
          <p>Cerrar sesion</p>
        </a>
      </div>
    </div>
  </body>
</html>
