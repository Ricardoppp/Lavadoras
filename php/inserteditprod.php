<?php

include "validar.php";
$id = $_POST["id"];
$marca=$_POST['marca'];
$tipo=$_POST['tipo'];
$serial=$_POST['serial'];
$color=$_POST['color'];
$cantidad=$_POST['cantidad'];



$sql = "UPDATE productos SET marca='$marca', tipo='$tipo', serial='$serial', color='$color', cantidad='$cantidad' WHERE id='$id'";

// Ejecutar la consulta
if (mysqli_query($conn, $sql)) {
  echo "Usuario actualizado correctamente.";
  header ("Location: ../inventario.php");
} else {
  echo "Error: " . mysqli_error($conn);
}

// Cerrar la conexión
mysqli_close($conn);
?>