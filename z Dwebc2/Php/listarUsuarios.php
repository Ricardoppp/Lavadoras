<?php
 include 'conexion.php';
 ?>

<!DOCTYPE html>
<html>
    <title>Mi Web</title>
    <head>
        <meta charset="utf-8"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins&display=swap" rel="stylesheet">
        <link href="../Css/estilos.css"  rel="stylesheet">
    
    </head>
    <body>
        <header>
             <img class="image_header" src="../Imagenes/cambio-climatico.jpg">
        </header>
        <section>
            <p class="titulo_page">Cambio Climático</p>
        </section>
        <nav>
            <ul>
                <li>Opción 1</li>
                <li>Opción 2</li>
                <li>Opción 3</li>
                <li>Opción 4</li>
            </ul>
        </nav>
        <section>
            <article class="article4">
                <img src="../Imagenes/511506.png">
            </article>
            <article class="article4">
                <p class="titulo_article">Listar Usuarios </p>
            
            <?php

           


            $sql = "SELECT * FROM usuarios";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "nombre Usuario: " . $row["nombresUsuario"]. " - Apellidos Usuario: " . $row["apellidosUsuario"]. " - Tipo Usuario " . $row["tipoUsuario"]. "<br>";
        
            }
            } else {
            echo "0 results";
            }

            mysqli_close($conn);




            ?>
                
            </article>

          
            
        </section>
        <footer>    
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d994.1528843011838!2d-74.05633008347222!3d4.66315083562091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a433607e0cd%3A0x7f49014fe7203f21!2sUniversidad%20Ean!5e0!3m2!1ses!2sco!4v1714090197146!5m2!1ses!2sco" class="image_article" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>

        </footer>
    </body>
</html>