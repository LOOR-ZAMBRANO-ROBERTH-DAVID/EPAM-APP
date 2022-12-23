<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/normalize.css?v=<?php echo (rand()); ?>" />
  <link rel="stylesheet" href="../css/style.css?v=<?php echo (rand()); ?>" />


  <title>Bienes de la empresa</title>
</head>

<body>
  <?php
  require '../elements/navbar.php';
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
          <h1>Ingresar un nuevo bien</h1>
        </div>
        <form action="../database/insertar_bienes.php" method="POST" class="formulario">
          <input type="text" name="codigo" id="codigo" placeholder="Codigo" 
          pattern="[0-9]{1,12}" maxlength="12" required/>

          <input type="text" name="nombre" id="nombre" placeholder="Nombre del objeto" 
          pattern=[a-zA-ZÀ-ÿ\s]{1,20}$ maxlength= "20"  required/>

          <input type="text" name="categoria" id="categoria" placeholder="Categoria" 
          pattern=[a-zA-ZÀ-ÿ\s0-9]{1,20}$ maxlength= "20"  required/>

          <input type="text" name="cantidad" id="cantidad" placeholder="Cantidad" 
          pattern="[0-9]{1,12}" maxlength="12" required/>
          <br>
          <input type="submit" value="Guardar" class="boton boton-guardar" />
        </form>
      </div>
    </section>
    <section class="contenedor-tabla">
      <h1 class="titulo-tabla">Listado de los bienes</h1>
      <table>
        <thead>
          <tr class="tabla-encabezado">
            <th class="primera-columna">Codigo</th>
            <th>Nombre del objeto</th>
            <th>Categoria</th>
            <th>Cantidad</th>
            <th>Editar</th>
            <th class="ultima-columna">Eliminar</th>
          </tr>
        </thead>
        <tbody id="content">
          <script src="../js/consultar_bienes.js"></script>
        </tbody>
      </table>
    </section>
  </div>
</body>

</html>