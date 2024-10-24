<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <link rel="stylesheet" href="css/inventarioview.css">
    <section>
        <a href="index.html">
            <img src="images/pngwing.com (4).png" alt="logo" width="30x30" rigth>
        </a>
        <a href="login2.0.html" style="display: inline;">
            <img src="images/pngwing.com (6).png" alt="inventarios" width="30px">
        </a>
       
    </section> 
    <link rel="icon" type="image/png" sizes="32x32" href="images/FAVICONS/favicon-32x32.png">
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