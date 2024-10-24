
<?php

include 'validar.php';  // Asegúrate de que este archivo conecta correctamente a la base de datos

$sql = "SELECT * FROM usuarios";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Crear la tabla de encabezado
    echo "<table border='1'>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Tipo de Usuario</th>
            </tr>";
    
    // output de cada fila
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td><input type='text' name='nombreUsuario' id='nombreUsuario' value='" . $row["nombre"] . "'></td>
                <td><input type='text' name='apellidoUsuario' id='apellidoUsuario' value='" . $row["apellido"] . "'></td>
                <td><input type='text' name='emailUsuario' id='emailUsuario' value='" . $row["email"] . "'></td>
                <td><input type='text' name='tipoUsuario' id='tipoUsuario' value='" . $row["tipo_usuario"] . "'></td>
              </tr>";
    }

    // Cerrar la tabla
    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}

// Cerrar la conexión
mysqli_close($conn);
?>