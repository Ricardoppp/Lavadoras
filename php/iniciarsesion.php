<?php
include 'validar.php';

$login = $_POST['email'];
$password = $_POST['contraseña'];



$sql = "SELECT * FROM usuarios WHERE email='$login' AND contraseña='$password' " ;
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo "nombre Usuario: " . $row["nombre"]. " - Apellidos Usuario: " . $row["apellido"]. "Tipo Usuario " . $row["tipo_usuario"]. "<br>";
      
        // Limpiar y verificar el valor de tpuser
        $tipo_usuario = trim($row["tipo_usuario"]);
        echo "Valor de tipo_usuario: " . $tipo_usuario . "<br>";
          
          switch ($tipo_usuario)
          {
            case "1":
                 header ("Location: ../superadmin.php");
            break;
  
            case "2": 
                header ("Location: ../inventario.html");
            break;

            case "3": 
                header("Location: ../index.html");
            ;
          }
    }
  } else {
    echo "0 results";
  }
  
  mysqli_close($conn);
?>