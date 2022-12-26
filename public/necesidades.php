<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/normalize.css?v=<?php echo (rand()); ?>" />
  <link rel="stylesheet" href="../css/style.css?v=<?php echo (rand()); ?>" />


  <title>Necesidades</title>
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
    <section class="ingreso datos">
      <div class="contenedor-formulario contenedor-tabla">
        <div class="boton-salir">
          <a href="">
            <img src="../images/salir-icon.png" alt="">
          </a>
        </div>
        <div class="titulo-formulario">
          <h1>Formulario de Necesidad</h1>
          </div>
        <form action="../database/insertar_necesidades.php" method="POST" class="formulario">
          <input type="text" name="quien_solicita" id="quien_solicita" placeholder="¿Quien solicita?"
          pattern=[a-zA-ZÀ-ÿ\s]{1,20}$ maxlength= "20"  required/>
        
          <input type="text" name="que_solicita" id="que_solicita" placeholder="¿Que solicita?" 
          pattern="[a-zA-Z]{1,12}" maxlength="12" required/> 

          <input type="date" name="fecha_solicitud" id="fecha_solicitud" placeholder="Fecha de Solicitud" 
          pattern= ([0-9]{2,})([/])([0-9]{2,})([/])([0-9]{4,}) required/>

          <input type="text" name="area_trabajo" id="area_trabajo" placeholder="Area de Trabajo" 
          pattern="[a-zA-Z]{1,12}" maxlength="12" required />

          <br>
          <input type="submit" value="Guardar" class="boton boton-guardar" />
        </form>
      </div>
    </section>
    <section class="contenedor-tabla">
      <h1 class="titulo-tabla">Lista de Necesidades</h1>
      <table>
        <thead>
          <tr class="tabla-encabezado">
            <th class="primera-columna">¿Quien solicita?</th>
            <th>¿Que solicita?</th>
            <th>Fecha de Solicitud</th>
            <th>Area de Trabajo</Area></th>
            <th>Editar</th>
            <th class="ultima-columna">Eliminar</th>
          </tr>
        </thead>
        <tbody id="content">
          <script src="../js/consultar_necesidades.js"></script>
        </tbody>
      </table>
    </section>
  </div>

</body>

</html>