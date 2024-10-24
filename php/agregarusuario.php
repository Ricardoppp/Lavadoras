<?php

include 'validar.php';

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$celular=$_POST['celular'];
$email=$_POST['email'];
$contraseña=$_POST['contraseña'];
$tipo_usuario=$_POST['tpuser'];



$sql = "INSERT INTO usuarios (nombre, apellido, telefono, email, contraseña,tipo_usuario)
VALUES ('$nombre', '$apellido', '$celular', '$email', '$contraseña','$tipo_usuario')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);


?>
