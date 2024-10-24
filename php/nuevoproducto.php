<?php
include 'validar.php';


$marca=$_POST['marca'];
$tipo=$_POST['tipo'];
$serial=$_POST['serial'];
$color=$_POST['color'];
$cantidad=$_POST['cantidad'];






$sql = "INSERT INTO productos (marca, tipo, serial, color, cantidad) 
VALUES ('$marca', '$tipo', '$serial', '$color', '$cantidad')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);


?>