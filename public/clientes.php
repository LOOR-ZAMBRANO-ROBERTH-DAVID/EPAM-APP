<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/icon-page.ico">
    <link rel="stylesheet" href="../css/normalize.css?v=<?php echo (rand()); ?>" />
    <link rel="stylesheet" href="../css/style.css?v=<?php echo (rand()); ?>" />
    <script src="../js/jquery-3.6.1.min.js"></script>
    <title>Clientes</title>
</head>

<body>
    <?php
    //Aqui importamos el nabvar
    require '../elements/navbar.php';
    require '../elements/barra-buscador-agregar.php'; //agregamos div de busqueda y agregar datos
    ?>

    <div class="contenedor-global">
        <section class="ingreso-datos" id="id-ingreso-datos">
            <div class="contenedor-formulario contenedor-tabla">
                <div class="boton-salir" id="id_contenedor-boton-agregar">
                    <img src="../images/salir-icon.png" alt="">
                </div>
                <div class="titulo-formulario">
                    <h1>Ingresar un nuevo cliente</h1>
                </div>
                <form action="../database/insertar_clientes.php" method="POST" class="formulario">
                    <input type="text" name="razon" placeholder="Razon social" pattern=[a-zA-ZÀ-ÿ\s]{1,20}$ maxlength="100" required>
                    <input type="text" name="ruc" placeholder="R.U.C." pattern="[0-9]{1,13}" maxlength="13" required>
                    <input type="text" name="ciudad" placeholder="Ciudad" pattern="[a-zA-Z]{1,12}" maxlength="12" required>
                    <input type="text" name="telefono" placeholder="Telefono" pattern="[0-9]{1,10}" maxlength="10" required>
                    <input type="text" name="direccion" placeholder="Dirección" pattern="[a-zA-Z]{1,12}" maxlength="12" required>
                    <input type="text" name="contacto" placeholder="Contacto" pattern=[a-zA-ZÀ-ÿ\s0-9]{1,20}$ maxlength="20" required>
                    <input type="text" name="correo" placeholder="Correo del contacto" pattern=[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,5} maxlength="20" required>
                    <select name="estado" id="">
                        <option value="Activo">Activo</option>
                        <option value="Inactivo">Inactivo</option>
                    </select>
                    <br>
                    <input type="submit" value="Guardar" class="boton boton-guardar" />
                </form>
            </div>
        </section>

        <section class="contenedor-tabla">
            <h1 class="titulo-tabla">Listado de clientes</h1>
            <div class="barra-horizontal-tabla">

                <table>
                    <thead>
                        <tr class="tabla-encabezado">
                            <th class="primera-columna">Razon social</th>
                            <th>R.U.C</th>
                            <th>Ciudad</th>
                            <th>Telefono</th>
                            <th>Direccion</th>
                            <th>Contacto</th>
                            <th>Correo Del Contacto</th>
                            <th>Estado del cliente</th>
                            <th>Editar</th>
                            <th class="ultima-columna">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody id="content">
                        <script src="../js/consultar_clientes.js"></script>
                    </tbody>
                </table>
            </div>
        </section>

    </div>

</body>

</html>