<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de Usuarios</title>
    <link rel="stylesheet" href="css/superadminview.css">
    <link rel="icon" type="image/png" sizes="32x32" href="images/FAVICONS/favicon-32x32.png">
    <section>
        <a href="index.html" style="display: inline;">
            <img src="images/pngwing.com (4).png" alt="logo" width="30px">
        </a>
        <a href="inventario.php" style="display: inline;">
            <img src="images/pngwing.com (5).png" alt="inventarios" width="30px">
        </a>
       
    </section>
</head>
<body>
    <header>
        <h1>Administrador de Usuarios</h1>
    </header>
    <br>

    <h1>Crear Usuarios</h1>
    <main class="container">
        <section class="actions">
            <form action="php/agregarusuario.php" method="post">
                <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre" required>
                <input class="controls" type="text" name="apellido" id="apellido" placeholder="Ingrese su apellido" required>
                <input class="controls" type="text" name="celular" id="celular" placeholder="Ingrese su número de teléfono" required>      
                <input class="controls" type="email" name="email" id="email" placeholder="Ingrese su email" required>
                <input class="controls" type="password" name="contraseña" id="contraseña" placeholder="Ingrese su contraseña" required> 
                <input class="controls" type="number" name="tpuser" id="tpuser" placeholder="Ingrese el tipo de usuario" required>
                <input class="btn-primary" type="submit" value="Añadir">
            </form>
        </section>
    </main>
    <br>

    <h1>Eliminar Usuarios</h1>
    <main class="container">
        <section class="actions">
            <form action="php/eliminaruser.php" method="post">
                <input class="deletes" type="email" name="email" id="email" placeholder="Ingrese el email a eliminar" required>
                <input class="btn-secondary" type="submit" value="Eliminar">
            </form>
        </section>
    </main>
    <br>

    <h1>Actualizar Usuarios</h1>
    <main class="container">
        <section class="actions">
            <form action=""></form>
        </section>
    </main>
    <br>

    <h1>Listar Usuarios</h1>
    <main class="container"> 
        <section class="user-list">
            <?php
            include 'php/validar.php';  
            
            $sql = "SELECT * FROM usuarios";
            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) > 0) { ?>
                <table border='1'>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Tipo de Usuario</th>
                    </tr>
                    <?php
                    // output de cada fila
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td><input type='text' name='nombreUsuario' id='nombreUsuario'  value="<?php echo $row['nombre']; ?>" readonly></td>
                            <td><input type='text' name='apellidoUsuario' id='apellidoUsuario' value="<?php echo $row['apellido']; ?> " readonly></td>
                            <td><input type='text' name='emailUsuario' id='emailUsuario' value="<?php echo $row['email']; ?>"readonly></td>
                            <td><input type='text' name='tipoUsuario' id='tipoUsuario' value="<?php echo $row['tipo_usuario']; ?>" readonly></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
                <?php
            } else {
                echo "No se encontraron resultados.";
            }
            
            // Cerrar la conexión
            mysqli_close($conn);
            ?>
        </section>
    </main>

</body>
</html>
