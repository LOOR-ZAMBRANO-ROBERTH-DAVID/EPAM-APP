<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <link rel="icon" href="../images/icon-page.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="../js/jquery-3.6.1.min.js"></script>
  <title>Analisis de ingresos</title>
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
          <h1>Ingresar análisis de ingresos</h1>
        </div>
        <form action="../database/insertar_ingresos.php" method="POST" class="formulario">
          <input type="text" name="analisis" id="analisis" placeholder="Analisis" 
          pattern=[a-zA-ZÀ-ÿ\s]{1,20}$ maxlength= "20"  required/>
          <input type="text" name="encargado" id="encargado" placeholder="Encargado" 
          pattern=[a-zA-ZÀ-ÿ\s]{1,20}$ maxlength= "20"  required/>
          <input type="date" name="fecha" id="fecha" placeholder="Fecha"
          pattern= ([0-9]{2,})([/])([0-9]{2,})([/])([0-9]{4,}) required />
          <input type="text" name="tipo" id="tipo" placeholder="Tipo" 
          pattern=[a-zA-ZÀ-ÿ\s]{1,20}$ maxlength= "20"  required/>
          <input type="text" name="costo" id="costo" placeholder="Costo" 
          pattern="[0-9]{1,12}" maxlength="12" required/>
          <input type="text" name="cantidad" id="cantidad" placeholder="Cantidad"
          pattern="[0-9]{1,12}" maxlength="12" required />
          <input type="text" name="total" id="total" placeholder="Total" 
          pattern="[0-9]{1,12}" maxlength="12" required/>
          <br>
          <input type="submit" value="Guardar" class="boton boton-guardar" />
        </form>
      </div>
    </section>

    <section class="contenedor-tabla">
      <h1 class="titulo-tabla">Listado de los Ingresos</h1>
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