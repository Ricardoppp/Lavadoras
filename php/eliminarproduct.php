<?php

include 'validar.php';

$serial = $_POST['serial'];

// Comprobar que $serial no esté vacío antes de proceder
if (!empty($serial)) {

    // Escapar el valor del serial para evitar inyección SQL
    $serial = mysqli_real_escape_string($conn, $serial);

    // Crear la consulta SQL
    $sql = "DELETE FROM productos WHERE serial='$serial'";

    // Ejecutar la consulta
    if (mysqli_query($conn, $sql)) {
        echo "Producto eliminado exitosamente";
        header ("Location: ../inventario.php"); 
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    
} else {
    echo "El número de serie no puede estar vacío";
}

// Cerrar la conexión
mysqli_close($conn);
?>