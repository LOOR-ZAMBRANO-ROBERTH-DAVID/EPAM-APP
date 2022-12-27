<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/icon-page.ico">
    <link rel="stylesheet" href="../css/normalize.css?v=<?php echo (rand()); ?>" />
    <link rel="stylesheet" href="../css/login.css?v=<?php echo (rand()); ?>" />
    <title>Inicio de sesion</title>
</head>

<body>
    <div class="contenedor-global-login">
        <div class="contenedor-login">
            <form class="login" action="" method="post">
                <img src="../images/logo2.png" alt="">
                <?php
                include '../controllers/controlador_login.php'
                ?>
                <input type="text" name="usuario" id="usuario" placeholder="Usuario">
                <input type="text" name="password" id="password" , placeholder="Contraseña">
                <input type="submit" name="btn_ingresar" value="Iniciar sesion">
            </form>
        </div>
    </div>
</body>

</html>