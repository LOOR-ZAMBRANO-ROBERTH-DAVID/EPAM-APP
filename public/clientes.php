<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css?v=<?php echo (rand()); ?>" />
    <link rel="stylesheet" href="../css/style.css?v=<?php echo (rand()); ?>" />
    <link rel="stylesheet" href="../css/clientes.css?v=<?php echo (rand()); ?>" />

    <title>Clientes</title>
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
                    <h1>Ingresar un nuevo cliente</h1>
                </div>
                <form action="../database/insertar_clientes.php" method="POST" class="formulario">
                    <input type="text" name="razon" placeholder="Razon social">
                    <input type="text" name="ruc" placeholder="R.U.C.">
                    <input type="text" name="ciudad" placeholder="Ciudad">
                    <input type="text" name="telefono" placeholder="Telefono">
                    <input type="text" name="direccion" placeholder="Dirección">
                    <input type="text" name="contacto" placeholder="Contacto">
                    <input type="text" name="correo" placeholder="Correo del contacto">
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