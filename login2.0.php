<?php
session_start();
if (isset($_SESSION['tipo_usuario'])) {
    // Redirige según el tipo de usuario
    switch ($_SESSION['tipo_usuario']) {
        case "1":
            header("Location: superadmin.php");
            exit();
        case "2":
            header("Location: inventario.php");
            exit();
        case "3":
            header("Location: index.php");
            exit();
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/register.css">
    <link rel="icon" type="image/png" sizes="32x32" href="Images/FAVICONS/favicon-32x32.png"><!-- Imagen al lado del Titulo -->
    <section>
        <a href="index.php">
            <img src="images/pngwing.com (4).png" alt="logo" width="30x30" rigth>
        </a>
    </section> 
    
</head>
<body>
    
    
        <section class="form-register">
            
            <img src="images/Fondo_Negro_5.webp" alt="" width="70px"> 
            <img class="imagenes" src="images/este.png" alt="" width="50px">
            <H1> Login</H1>
            <br>
            <section>

                <form action="php/iniciarsesion.php" method="post">
                <input class="controls" type="email" name="email" id="email" placeholder="Ingrese su email" required>
                <input class="controls" type="password" name="contraseña" id="contraseña" placeholder="Ingrese su contraseña" required> 
                <input class="botons" type="submit" value="Login">
                </form>
            </section>
            <p><a href="register.html">Registrate</a></p>
            <p><a href="register.html">¿Olvidaste tu contraseña?</a></p>

            
        </section>

    
</body>
</html>