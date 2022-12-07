<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="../js/jquery-3.6.1.min.js"></script>

  <?php /**La linea de abajo es para que el css se actualice constantemente el 
    * css */?>

  <link rel="stylesheet" href="../css/normalize.css?v=<?php echo (rand()); ?>" />
  <link rel="stylesheet" href="../css/style.css?v=<?php echo (rand()); ?>" />

  <title>Insumos</title>
</head>

<body>
  <?php
  //Aqui importamos el nabvar
  require '../elements/navbar.php'
    ?>
  <?php //Barra de busqueda 
  ?>
  <div class="contenedor-global">
    <div class="contenedor-buscador">

      <form action="" method="post" class="contenedor-contenido">
        <input type="text" name="campo" id="campo" class="input-insumos" placeholder="Buscar" />
      </form>

      <a href="">
        <div class="contenedor-boton-agregar">
          <img src="../images/agregar-icon.png" alt="">
          <p>Agregar</p>
        </div>
      </a>
    </div>
  </div>
  <div class="contenedor-global">

    <section class="ingreso-insumos">
      <div class="contenedor-formulario contenedor-tabla">
        <div class="boton-salir">
          <a href="">
            <img src="../images/salir-icon.png" alt="">
          </a>
        </div>
        <div class="titulo-formulario">
          <h1>Ingresar un nuevo Insumo</h1>
        </div>
        <form action="../database/insertar_insumos.php" method="POST" class="formulario">
          <input type="text" name="nombre" placeholder="Nombre del insumo" />
          <input type="text" name="tipo" id="" placeholder="Tipo del insumo" />
          <input type="number" name="cantidad" id="" placeholder="Cantidad" />
          <textarea name="descrip" id="" cols="20" rows="5" placeholder="Descripción"></textarea>
          <br>
          <input type="submit" value="Guardar" class="boton boton-guardar" />
        </form>
      </div>
    </section>

    <section class="contenedor-tabla">
      <h1 class="titulo-tabla">Listado de los insumos</h1>
      <table>
        <thead>
          <tr class="tabla-encabezado">
            <th class="primera-columna" style="width:200px;">Nombre</th>
            <th>Tipo</th>
            <th>Cantidad</th>
            <th style="width: 250px;">Descripcion</th>
            <th style="width: 50px;">Editar</th>
            <th class="ultima-columna" style="width: 100px;">Eliminar</th>
          <tr>
        </thead>
        <tbody id="content">
          <script src="../js/consultar_insumos.js"></script>
        </tbody>
      </table>
    </section>
  </div>
</body>

</html>