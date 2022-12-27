<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="../images/icon-page.ico">
  <script src="../js/jquery-3.6.1.min.js"></script>

  <title>Costos por análisis</title>
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
          <h1>Ingresar un nuevo análisis de costo</h1>
        </div>
        <form action="../database/insertar_costos_analisis.php" method="POST" class="formulario">
          <input type="text" name="analisis" id="analisis" placeholder="Analisis" pattern=[a-zA-ZÀ-ÿ\s]{1,20}$ maxlength="20" required />

          <input type="text" name="codigo" id="codigo" placeholder="Codigo" pattern="[0-9]{1,12}" maxlength="12" required />

          <input type="number" name="costo" id="costo" placeholder="Costo" pattern="[0-9]{1,12}" maxlength="12" required />

          <input type="text" name="descripcion" id="descripcion" placeholder="Descripción" pattern=[a-zA-ZÀ-ÿ\s]{1,20}$ maxlength="20" required />
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
            <th>Codigo</th>
            <th>Costo</th>
            <th>Descripción</th>
            <th>Editar</th>
            <th class="ultima-columna">Eliminar</th>
          </tr>
        </thead>
        <tbody id="content">
          <script src="../js/consultar_costos_analisis.js"></script>
        </tbody>
      </table>
    </section>
  </div>

</body>

</html>