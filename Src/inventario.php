<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['nombre']) || !isset($_SESSION['apellido']) || !isset($_SESSION['tipo_usuario'])) {
    header("Location: login2.0.php"); // Redirigir al login si no está autenticado
    exit();
}

// Obtener los datos del usuario de la sesión
$nombre = $_SESSION['nombre'];
$apellido = $_SESSION['apellido'];
$tipo_usuario = $_SESSION['tipo_usuario'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <link rel="stylesheet" href="css/inventarioview.css">
    <section>
        <a href="index.php">
            <img src="images/pngwing.com (4).png" alt="logo" width="30x30" rigth>
        </a>

        <a href="login2.0.php" style="display: inline;">
            <img src="images/pngwing.com (6).png" alt="inventarios" width="30px">
        </a>

        <a href="php/logout.php">
            <img src="images/Logout_37127.png" alt="cerrar" width="30px">      
        </a>
    </section> 
    <link rel="icon" type="image/png" sizes="32x32" href="Images/FAVICONS/favicon-32x32.png"><!-- Imagen al lado del Titulo -->
</head>
<body>

    <header>
        <h1>Administrador de Inventario</h1>
     </header>
 <br>
 <h1>Crear Nuevo Productos</h1>
     <main class="container">
         <section class="actions">
             <form action="php/nuevoproducto.php" method="post">
                 <input class="controls" type="text" name="marca" id="marca" placeholder="Ingrese la marca del producto" required>
                 <input class="controls" type="text" name="tipo" id="tipo" placeholder="Ingrese el tipo de producto" required>
                 <input class="controls" type="text" name="serial" id="serial" placeholder="Ingrese el serial del producto" required>      
                 <input class="controls" type="text" name="color" id="color" placeholder="Ingrese el color del producto" required>
                 <input class="controls" type="number" name="cantidad" id="cantidad" placeholder="Ingrese la cantidad de producto" required>
                 <input class="btn-primary" type="submit" value="Añadir">
             </form>
         </section>
     </main>
 <br>
 <h1>Eliminar Producto</h1>
     <main class="container">
         <section class="actions">
             <form action="php/eliminarproduct.php" method="post">
                 <input class="deletes" type="text" name="serial" id="serial" placeholder="Ingrese el serial del producto" required>
                 <input class="btn-secondary" type="submit" value="Eliminar">
             </form>
         </section>
     </main>
<br>

<h1>Listar Productos</h1>
     <main class="container"> 
         <section class="user-list">
             <?php
             include 'php/validar.php';  
             
             $sql = "SELECT * FROM productos";
             $result = mysqli_query($conn, $sql);
             
             if (mysqli_num_rows($result) > 0) { ?>
                 <table border='1'>
                     <tr>
                         <th>Marca</th>
                         <th>Tipo</th>
                         <th>Serial</th>
                         <th>Color</th>
                         <th>Cantidad</th>
                         <th>Editar</th>
                     
                     </tr>
                     <?php
                     // output de cada fila
                     while ($row = mysqli_fetch_assoc($result)) {
                     ?>
                         <tr>
                            
                             <td><input type='text' name='marca' id='marca'  value="<?php echo $row['marca']; ?>" readonly></td>
                             <td><input type='text' name='tipo' id='tipo' value="<?php echo $row['tipo']; ?> " readonly></td>
                             <td><input type='text' name='serial' id='serial' value="<?php echo $row['serial']; ?>"readonly></td>
                             <td><input type='text' name='color' id='color' value="<?php echo $row['color']; ?>" readonly></td>
                             <td><input type='number' name='cantidad' id='cantidad' value="<?php echo $row['cantidad']; ?>" readonly></td>
                             <form action="php/editprod.php" method="post">
                            <section class="user-list">
                            <td >
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <input type="submit" value="Editar" >
                            </form>
                            </td>
                            </section>     
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
</body>
</html>