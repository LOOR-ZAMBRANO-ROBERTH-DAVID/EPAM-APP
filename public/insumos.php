<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="../images/icon-page.ico">
  <script src="../js/jquery-3.6.1.min.js"></script>


  <?php /**La linea de abajo es para que el css se actualice constantemente el 
   * css */ ?>

  <link rel="stylesheet" href="../css/normalize.css?v=<?php echo (rand()); ?>" />
  <link rel="stylesheet" href="../css/style.css?v=<?php echo (rand()); ?>" />

  <title>Insumos</title>
</head>

<body>
  <?php
  require '../elements/navbar.php'; //agregamos navbar
  require '../elements/barra-buscador-agregar.php'; //agregamos div de busqueda y agregar datos
  ?>

  <div class="contenedor-global">
    <section class="ingreso-datos" id="id-ingreso-datos">
      <div class="contenedor-formulario contenedor-tabla">
      <div class="boton-salir" id="id_contenedor-boton-agregar">
          <img src="../images/salir-icon.png" alt="">
        </div>
        <div class="titulo-formulario">
          <h1>Ingresar un nuevo Insumo</h1>
        </div>
        <form action="../database/insertar_insumos.php" method="POST" class="formulario">
          <input type="text" name="nombre" placeholder="Nombre del insumo" pattern=[a-zA-ZÀ-ÿ\s]{1,30}$ maxlength="30" required />
          <input type="text" name="tipo" id="" placeholder="Tipo del insumo" pattern=[a-zA-ZÀ-ÿ\s0-9]{1,20}$ maxlength="20" required />
          <input type="number" name="cantidad" id="" placeholder="Cantidad" pattern="[0-9]{1,12}" maxlength="12" required />
          <textarea name="descrip" id="" cols="20" rows="5" placeholder="Descripción" pattern=[a-zA-ZÀ0-9]{1,50}$ maxlength="50" required></textarea>
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