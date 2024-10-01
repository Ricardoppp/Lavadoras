<?php

include "conexion.php";



$nombres = $_POST["nombre"];
$apellidos = $_POST["apellido"];
$edad = $_POST["edad"];
$genero = $_POST["genero"];
$id = $_POST["id"];
$email = $_POST["email"];


$nombreP = $_POST["nombreP"];
$descriptionP = $_POST["descriptionP"];
$valorP = $_POST["valorP"];
$imagenP = $_POST["imagenP"];

$impuestoIVA = $valorP * 0.19;
$totalP = $valorP + $impuestoIVA;

if ($totalP>80000)
  {
    echo "Es mayor de 80000";
  }
else
  {
    echo "Es menor de 80000"
  }


echo $nombreP;
echo $descriptionP;
echo $valorP;
echo $impuestoIVA;
echo $totalP;

$sql = "INSERT INTO producto (nombreProducto, descripcionProducto, imagenProducto, valorProducto, ivaProducto, totalProducto)
VALUES ('$nombreP', '$descriptionP', '$imagenP', '$valorP', '$impuestoIVA', '$totalP')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>




