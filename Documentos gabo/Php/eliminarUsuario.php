<?php

include "conexion.php";



$id = $_POST["idUsuario"];

echo $id;

$sql = "DELETE FROM usuarios WHERE IdUsuario='$id'";


if (mysqli_query($conn, $sql)) {
  echo "User deleted successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>







