<?php

include 'validar.php';



$email=$_POST['email'];

echo $id;

$sql = "DELETE FROM usuarios WHERE email='$email'";


if (mysqli_query($conn, $sql)) {
  echo "User deleted successfully";
  header ("Location: ../superadmin.php"); 
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
