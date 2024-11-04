<?php

include "validar.php";
$id_usuario = $_POST["id_usuario"];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$celular=$_POST['celular'];
$email=$_POST['email'];
$contraseña=$_POST['contraseña'];
$tipo_usuario=$_POST['tpuser'];
$contraseñaHasheada = password_hash($contraseña, PASSWORD_DEFAULT);




// Construir la consulta SQL
if ($contraseñaHasheada) {
  $sql = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', telefono='$celular', email='$email', contraseña='$contraseñaHasheada', tipo_usuario='$tipo_usuario' WHERE id_usuario='$id_usuario'";
} else {
  $sql = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', telefono='$celular', email='$email', tipo_usuario='$tipo_usuario' WHERE id_usuario='$id_usuario'";
}

// Ejecutar la consulta
if (mysqli_query($conn, $sql)) {
  echo "Usuario actualizado correctamente.";
  header ("Location: ../superadmin.php");
} else {
  echo "Error: " . mysqli_error($conn);
}

// Cerrar la conexión
mysqli_close($conn);
?>