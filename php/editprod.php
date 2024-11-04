<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuario</title>
    <link rel="icon" type="image/png" sizes="32x32" href="images/FAVICONS/favicon-32x32.png">
    <style>
          * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-image: url(/Lavadoras/Images/Fondo_Negro_5.webp);
    }

    .form-register {
      width: 400px;
      background: #adb0b2;
      padding: 30px;
      margin: auto;
      margin-top: 100px;
      border-radius: 8px; /* Aumenta el radio para bordes más suaves */
      color: white;
      box-shadow: 7px 13px 37px #000;
    }

    .form-register h4 {
      font-size: 22px;
      margin-bottom: 20px;
    }

    .form-register {
      display: flex;
      flex-direction: column; /* Asegúrate de que los elementos se alineen en columna */
      align-items: center; /* Centra los elementos horizontalmente */
      width: 400px;
      background: #adb0b2;
      padding: 30px;
      margin: auto;
      margin-top: 100px;
      border-radius: 8px;
      color: white;
      box-shadow: 7px 13px 37px #000;
    }

    .controls {
      width: 100%;
      background: #14202b;
      padding: 10px;
      border-radius: 4px;
      margin-bottom: 16px;
      border: 1px solid #1f53c5;
      font-size: 16px;
      color: white;
      
    }

    .form-register p {
      height: 40px;
      text-align: center;
      font-size: 18px;
      line-height: 40px;
    }

    .form-register a {
      color: white;
      text-decoration: none;
    }

    .form-register a:hover {
      text-decoration: underline;
    }

    .form-register .botons {
      width: 100%;
      background: #1f53c5;
      border: none;
      padding: 12px;
      color: white;
      margin: 16px 0;
      font-size: 16px;
      border-radius: 4px; /* Añadir bordes redondeados */
    }

    </style>
</head>
<body>

<?php

include "validar.php";


$id = $_POST["id"];


$sql = "SELECT * FROM productos WHERE id='$id' ";
$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {

?>



<main class="form-register">   
        <form action="inserteditprod.php" method="post">
            <h3>Nombre </h3>
            <input class="controls" type='text' name='marca' id='marca' value="<?php echo $row['marca']; ?>" required >
            <h3>Apellido </h3>
            <input class="controls" type='text' name='tipo' id='tipo' value="<?php echo $row['tipo']; ?>" required >
            <h3>Email</h3>
            <input class="controls" type='text' name='serial' id='serial' value="<?php echo $row['serial']; ?>" required >
            <h3>Tipo De Usuario</h3>
            <input class="controls" type='text' name='color' id='color' value="<?php echo $row['color']; ?>" required >
            <h3>Telefono del usuario</h3>
            <input class="controls" type='text' name='cantidad' id='cantidad' value="<?php echo $row['cantidad']; ?>" required >
            <input class="controls" type='hidden' name='id' id='id' value="<?php echo $row["id"]; ?>" >
            <input class="botons" type="submit" value="Actualizar">
          </form>
  </section>  
</main>


<?php
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

?>


</body>
</html>
