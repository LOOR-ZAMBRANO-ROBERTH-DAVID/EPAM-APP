<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Analisis de ingresos</title>
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
          <h1>Ingresar análisis de ingresos</h1>
        </div>
        <form action="../database/insertar_ingresos.php" method="POST" class="formulario">
          <input type="text" name="analisis" id="analisis" placeholder="Analisis" />
          <input type="text" name="encargado" id="encargado" placeholder="Encargado" />
          <input type="date" name="fecha" id="fecha" placeholder="Fecha" />
          <input type="text" name="tipo" id="tipo" placeholder="Tipo" />
          <input type="text" name="costo" id="costo" placeholder="Costo" />
          <input type="text" name="cantidad" id="cantidad" placeholder="Cantidad" />
          <input type="text" name="total" id="total" placeholder="Total" />
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
            <th class="primera-columna">Analisis</th>
            <th>Encargado</th>
            <th>Fecha</th>
            <th>Tipo</th>
            <th>Costo</th>
            <th>Cantidad</th>
            <th>Total</th>
            <th>Editar</th>
            <th class="ultima-columna">Eliminar</th>
          </tr>
        </thead>
        <tbody id="content">
          <script src="../js/consultar_ingresos.js"></script>
        </tbody>
      </table>
    </section>
  </div>
</body>

</html>