<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/icon-page.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="../js/jquery-3.6.1.min.js"></script>
    <link rel="stylesheet" href="../css/normalize.css?v=<?php echo (rand()); ?>" />
    <link rel="stylesheet" href="../css/style.css?v=<?php echo (rand()); ?>" />

    <script src="../js/jquery-3.6.1.min.js"></script>


    <title>Reactivos</title>
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
                    <h1>Ingresar un nuevo reactivo</h1>
                </div>
                <form action="../database/insertar_reactivos.php" method="POST" class="formulario">
                    <input type="text" name="codigo" id="codigo" placeholder="Código" pattern="[0-9]{1,12}" maxlength="12" required />
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" pattern=[a-zA-ZÀ-ÿ\s]{1,20}$ maxlength="20" required />
                    <input type="text" name="fabricante" id="fabricante" placeholder="Fabricante" pattern=[a-zA-ZÀ-ÿ\s]{1,20}$ maxlength="20" required />
                    <input type="text" name="descripcion" id="descripcion" placeholder="Descripcion" pattern=[a-zA-ZÀ-ÿ\s]{1,50}$ maxlength="50" required />
                    <input type="text" name="incertidumbre" id="incertidumbre" placeholder="Incertidumbre" pattern=[a-zA-ZÀ-ÿ\s]{1,50}$ maxlength="50" required />
                    <input type="text" name="ncat" id="ncat" placeholder="N° CAT" pattern="[0-9]{1,12}" maxlength="12" required />
                    <input type="text" name="ncas" id="ncas" placeholder="N° CAS" pattern="[0-9]{1,12}" maxlength="12" required />
                    <input type="text" name="lote" id="lote" placeholder="Lote" pattern="[0-9]{1,12}" maxlength="12" required />
                    <input type="text" name="presentacion_detalle" id="presentacion_detalle" placeholder="Presentacion" pattern=[a-zA-ZÀ-ÿ\s]{1,50}$ maxlength="50" required />
                    <select name="presentacion" id="">
                        <option value="paquete">Paquete</option>
                        <option value="volumen">Volumen</option>
                        <option value="peso">Peso</option>
                    </select>

                    <input type="date" name="fingreso" id="fingreso" placeholder="Fecha de Ingreso" pattern=([0-9]{2,})([/])([0-9]{2,})([/])([0-9]{4,}) required />
                    <input type="date" name="felaboracion" id="felaboracion" placeholder="Fecha de Elaboracion" pattern=([0-9]{2,})([/])([0-9]{2,})([/])([0-9]{4,}) required />
                    <input type="date" name="fcaducidad" id="fcaducidad" placeholder="Fecha de Caducidad" pattern=([0-9]{2,})([/])([0-9]{2,})([/])([0-9]{4,}) required />
                    <input type="text" name="marca" id="marca" placeholder="Marca" pattern=[a-zA-ZÀ-ÿ\s]{1,50}$ maxlength="50" required />
                    <input type="text" name="proveedor" id="proveedor" placeholder="Proveedor" pattern=[a-zA-ZÀ-ÿ\s]{1,50}$ maxlength="50" required />
                    <input type="text" name="certificado" id="certificado" placeholder="Certificado" pattern=[a-zA-ZÀ-ÿ\s]{1,50}$ maxlength="50" required />
                    <input type="number" name="cantidad" id="cantidad" placeholder="Cantidad" pattern="[0-9]{1,12}" maxlength="12" required />
                    <input type="text" name="observaciones" id="observaciones" placeholder="Observaciones" pattern=[a-zA-ZÀ-ÿ\s]{1,50}$ maxlength="50" required />
                    <input type="text" name="responsable" id="responsable" placeholder="Responsable" pattern=[a-zA-ZÀ-ÿ\s]{1,50}$ maxlength="50" required />
                    <br>
                    <input type="submit" value="Guardar" class="boton boton-guardar" />
                </form>
            </div>
        </section>
        <section class="contenedor-tabla">
            <h1 class="titulo-tabla">Listado de reactivos</h1>
            <div class="barra-horizontal-tabla">
                <table>
                    <thead>
                        <tr class="tabla-encabezado">
                            <th class="primera-columna">Código</th>
                            <th>Nombre</th>
                            <th>Fabricante</th>
                            <th>Descripcion</th>
                            <th>Incertidumbre</th>
                            <th>N° CAT</th>
                            <th>N° CAS</th>
                            <th>Lote</th>
                            <th>Presentacion 1</th>
                            <th>Presentacion 2</th>
                            <th>Fecha de Ingreso</th>
                            <th>Fecha de Elaboracion</th>
                            <th>Fecha de Caducidad</th>
                            <th>Marca</th>
                            <th>Proveedor</th>
                            <th>Certificado</th>
                            <th>Cantidad</th>
                            <th>Observaciones</th>
                            <th>Responsable</th>
                            <th>Editar</th>
                            <th class="ultima-columna">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody id="content">
                        <script src="../js/consultar_reactivos.js"></script>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</body>

</html>