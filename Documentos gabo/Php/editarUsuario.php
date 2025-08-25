<?php

include "conexion.php";


$id = $_POST["idUsuario"];

$sql = "SELECT * FROM usuarios WHERE idUsuario='$id' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "nombre Usuario: " . $row["nombresUsuario"]. " - Apellidos Usuario: " . $row["apellidosUsuario"]. "Tipo Usuario " . $row["tipoUsuario"]. "<br>";
    ?>
     <form action="insertarEditarUsuario.php" method="post">
        <input type="text" name="nombresUsuario" id="apellidosUsuario" value="<?php echo $row["nombresUsuario"]?>" required><br>
        <input type="text" name="apellidosUsuario" id="apellidosUsuario" value="<?php echo $row["apellidosUsuario"]?>" required><br>
        <input type="number" name="edadUsuario" id="edadUsuario" value="<?php echo $row["edadUsuario"]?>" required><br>
        <select name="generoUsuario">
            <option value="F">Femenino</option>
            <option value="M">Masculino</option>
            <option value="O">Otros</option>
        </select><br>
        <!-- El campo idUsuario agregamos el atributo readonly para no ser modificado  -->
        <input type="text" name="idUsuario" id="idUsuario" value="<?php echo $row["IdUsuario"]?>" required readonly><br>
       
        <input type="password" name="passUsuario" id="passUsuario" value="<?php echo $row["passUsuario"]?>" required><br>
        <input type="email" name="emailUsuario" id="emailUsuario" value="<?php echo $row["emailUsuario"]?>" required><br>
        <select name="tipoUsuario">
            <option value="1">Administrador</option>
            <option value="2">Catalogador</option>
            <option value="3">Visitantes</option>
        </select><br>
        <input type="submit" value="Enviar"><br>
    </form>




<?php
  }
} else {
  echo "0 results";
}

mysqli_close($conn);




?>







