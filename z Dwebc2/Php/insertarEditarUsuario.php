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

echo $id;




$sql = "UPDATE usuarios SET nombresUsuario='$nombres', apellidosUsuario='$apellidos', edadUsuario='$edad', generoUsuario='$genero', IdUsuario='$id', passUsuario='$pass', emailUsuario='$email', tipoUsuario='$tipo' WHERE IdUsuario='$id'";

if (mysqli_query($conn, $sql)) {
  echo "User udated successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>







