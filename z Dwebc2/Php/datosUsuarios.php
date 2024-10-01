<?php

include "conexion.php";



$nombres = $_POST["nombresUsuario"];
$apellidos = $_POST["apellidosUsuario"];
$edad = $_POST["edadUsuario"];
$genero = $_POST["generoUsuario"];
$id = $_POST["idUsuario"];
$pass = $_POST["passUsuario"];
$email = $_POST["emailUsuario"];
$tipo = $_POST["tipoUsuario"];




$sql = "INSERT INTO usuarios (nombresUsuario, apellidosUsuario, edadUsuario, generoUsuario, IdUsuario, passUsuario, emailUsuario, tipoUsuario)
VALUES ('$nombres', '$apellidos', '$edad', '$genero', '$id', '$pass','$email', '$tipo')";

if (mysqli_query($conn, $sql)) {
  echo "New user created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>




