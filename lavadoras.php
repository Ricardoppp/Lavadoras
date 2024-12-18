<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metachart -->
    <meta charset="UTF-8">
    <meta name="viewport"   content="width=device-width, initial-scale=1.0">
    <meta name="keywords"   content="lavadoras, repuestos, mantenimieto">
    <meta name="author"     content="Maria Jose Diaz, Gabriel Leal, Ricardo Prieto">
    <meta name="copyright"  content="Backend; Maria Jose Diaz, Gabriel Leal. Frontend; Ricardo Prieto">
    <!-- Links  -->
    <!-- Carpeta de CSS -->
    <link rel="stylesheet" href="css/layout.css"> <!-- Carpeta de css-->
    <link rel="stylesheet" href="css/lavadoras.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css    "> <!-- Esto trae el JS de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> <!-- Esto trae los iconos de Bootstrap -->
    <!-- Titulo de la pagina -->
    <title>Lavadoras Felices</title>
    <link rel="icon" type="image/png" sizes="32x32" href="Images/FAVICONS/favicon-32x32.png"><!-- Imagen al lado del Titulo -->
</head>
<body>
    <!-- Script para el correcto funcionamieto de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js    "></script>

    <header>
        <div class="logo">
            <a href="index.php">
                <img src="Images/este.png" alt="logo"  width="80px" height="150px">
            </a>
            <h2>Lavadoras Felices</h2>
        </div>
        <div class="busqueda">
            <input type="search" class="buscar">
            <button type="submit"><i class="bi bi-search"></i></button>
        </div>
        <div class="principales">
            <a href="favoritos.html"><i class="bi bi-heart"></i></a>
            <a href="carrito.html"><i class="bi bi-cart"></i></a>
            <a href="login2.0.php"><i class="bi bi-person-circle"></i></a>
        </div>
        
    </header>
    <nav>
        <ul class="nav justify-content-center">
            <li class="nav-item">
            <a class="nav-link" href="lavadoras.php">Lavadoras</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="secadoras.html">Secadoras</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="centros_lavados.html">Centros de lavados</a>
            </li>
            <!-- <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li> -->
            <!--TODO No se si se necesite este todo o que pero lo dejo mientras tanto  -->
            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Informacion</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Info #1</a></li>
                    <li><a class="dropdown-item" href="#">Info #2</a></li>
                    <li><a class="dropdown-item" href="#">Info #3</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Info #4</a></li>
                </ul>
            </li> -->
        </ul>
    </nav>


    <div class="container">
        <div class="filters">
            <h3>Filtros</h3>
            <div>
                <h4>Marca</h4>
                <label><input type="checkbox"> Samsung</label><br>
                <label><input type="checkbox"> LG</label>
                <label><input type="checkbox"> Whirpool</label>
                <label><input type="checkbox"> Mabe</label>

            </div>
            <div>
                <h4>Capacidad</h4>
                <label><input type="checkbox"> 6-10kg</label><br>
                <label><input type="checkbox"> 11-15kg</label><br>
                <label><input type="checkbox"> 16-20kg</label>
            </div>
        </div>
        
        <div class="products">
            <!-- Producto 1 -->
            <div class="product">
                <div class="product-image" style="background-image: url('Images/lavadora1.jpg');"></div>
                <div class="product-info">
                    <h2>Lavadora Secadora Bespoke AI Laundry Combo™, 26Kg</h2>
                    <p>Color: Gris</p>
                    <p>2 en 1 - Lava y seca. Ahorra espacio, tiempo y energía.</p>
                    <div class="product-price">$ 8.999.900</div>
                    <a href="#" class="button">Más información</a>
                </div>
            </div>
            
            <!-- Producto 2 -->
            <div class="product">
                <div class="product-image" style="background-image: url('Images/lavadora2.jpg');"></div>
                <div class="product-info">
                    <h2>WA90CG4240BVCO Lavadora con Dual Storm™, 9kg</h2>
                    <p>Color: Gris</p>
                    <p>Digital Inverter - Ahorro de energía & 20 años de garantía en el motor.</p>
                    <div class="product-price">$ 1.399.900</div>
                    <a href="#" class="button">Agregar al carrito</a>
                </div>
            </div>
            
            <!-- Producto 3 -->
            <div class="product">
                <div class="product-image" style="background-image: url('Images/lavadora3.jpg');"></div>
                <div class="product-info">
                    <h2>Lavadora LG TWINWash™ con TurboWash3D™, 15kg</h2>
                    <p>Color: Blanco</p>
                    <p>TurboWash3D™ - Ahorra agua y tiempo. 10 años de garantía en el motor Inverter Direct Drive.</p>
                    <div class="product-price">$ 2.499.900</div>
                    <a href="#" class="button">Agregar al carrito</a>
                </div>
            </div>
            
            <!-- Producto 4 -->
            <div class="product">
                <div class="product-image" style="background-image: url('Images/lavadora4.jpg');"></div>
                <div class="product-info">
                    <h2>Lavadora Samsung AddWash™ con EcoBubble™, 22kg</h2>
                    <p>Color: Negro</p>
                    <p>EcoBubble™ y tecnología AddWash™ para una limpieza eficiente. 20 años de garantía en el motor Digital Inverter.</p>
                    <div class="product-price">$ 3.199.900</div>
                    <a href="#" class="button">Agregar al carrito</a>
                </div>
            </div>
        </div>
    </div>

    <!--* Whatsapp de la empresa y/o contacto directo -->
    <a href="#" class="float" target="_blank"><i class="bi bi-whatsapp"></i></a>
    <!--* Informacion de la parte de abajo -->
    <section>
        <div class="informacion">
            <h3>Productos</h3>
                <li><a href="#">Lavadoras</a></li>
                <li><a href="#">Secadoras</a></li>
                <li><a href="#">Lavadoras secadoras</a></li>
                <li><a href="#">Centros de lavado</a></li>
        </div>
        <div class="informacion">
            <h3>Servicios y Soporte</h3>
                <li><a href="#">Servicios prestados</a></li>
                <li><a href="#">PQR</a></li>
                <li><a href="#">Facturación</a></li>
        </div>
        <div class="informacion"> <!--! La idea de esta es que lo envie a una misma pagina, solo que se despliegue a la parte de donde se necesita la informacion-->
            <h3>Acerca de Lavadoras Felices</h3>
                <li><a href="#">¿Quienes somos?</a></li>
                <li><a href="#">Términos y condiciones</a></li>
                <li><a href="#">Politica de Cookies</a></li>
                <li><a href="#">Ley de proteccion de datos</a></li>
        </div>
        <div class="informacion">
            <h3>Atención al cliente</h3>
            <h5>Servicion tecnico</h5>
            <p>serviciotecnnico@lavadoras.com</p> <!-- FIXME: en este acuerdese que se puede hacer un mailto, para que lo redireccione a un correo real-->
            <br>
            <h5>WhatsApp</h5>
            <p>(+57)304 12345678</p>
        </div>
        <div class="informacion">
            <h5>Linea Bogotá</h5>
            <p>601 213451</p>
            <br>
            <h5>Linea Nacional</h5>
            <p>01800045124</p>
            <br>
            <h5>Dirección tienda física</h5>
            <p>Cra 100 #4-20 </p>
        </div>
    </section>
    <div class="separacion">
        <h2>Medios de pago</h2>
    </div>
    <section class="imagenes_pago">
        <img src="Images/MASTERCARD.png" alt="Mastercard">
        <img src="Images/VISA.png" alt="VISA">
        <img src="Images/AMERICAN.png" alt="American Express">
        <img src="Images/DINERS.png" alt="Diner Club">
        <img src="Images/SISTECREDITO.png" alt="Sistecredito">
        <img src="Images/PSE.png" alt="PSE">
        <img src="Images/logo-1.png" alt="Codensa">
    </section>
    
    <section class="industrias">
        <img src="Images/INDUSTRIA.png" alt="Industria y Comercio">
        <img src="Images/CAMARA.png" alt="Camara de Comercion ">
    </section>

    <footer>
        <div class="logo">
            <a href="index.php">
                <img src="Images/este.png" alt="logo">
            </a>
            <h2>Lavadoras Felices</h2>
            <div class="redes">
                <i class="bi bi-facebook"></i>
                <i class="bi bi-instagram"></i>
                <i class="bi bi-youtube"></i>
                <i class="bi bi-tiktok"></i>
            </div>
            <p>© Copyright 2024 Lavadoras Felices, Bogotá, Colombia. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>