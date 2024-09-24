<?php
    // Jaider es un ESTUPIDO, se tenia que decir y se dijo
    // Gracias por su atencion!!
?>
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
    <link rel="stylesheet" href="css/layout.css"> <!-- Contiene el css del; Header, Navbar, whatsapp Informacion legal con las imagenes de medios de pago y Footer. Este es ya que va en la mayoria de HTML's creados  -->
    <link rel="stylesheet" href="css/indexxx.css"> <!-- Contiene el css de; los 3 circulos de las lavadoras, servicios, lavadoras mas vendidas, marcas que creen en nosotros(imagene que se mueven)  -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css    "> <!-- Esto trae el JS de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> <!-- Esto trae los iconos de Bootstrap -->
    <!-- Titulo de la pagina -->
    <title>Lavadoras Felices</title>
    <link rel="icon" type="image/png" sizes="32x32" href="/Lavadoras/Images/FAVICONS/favicon-32x32.png"><!-- Imagen al lado del Titulo -->
</head>
<body>
    <!--? Script para el correcto funcionamieto de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js    "></script>
    <!--? Header, es la parte de arriba que contiene 3 partes; el logo con la imagen (parte izquierda), barra de busqueda (parte central) y los 3 iconos (favoritos, carrito de compra y perfil) -->
    <header>
        <div class="logo">  <!-- Imagen con el nombre de la empresa (Izquieda) -->
            <a href="index.html">
                <img src="Images/este.png" alt="logo">
            </a>
            <h2>Lavadoras Felices</h2>
        </div>
        <div class="busqueda"> <!-- Barra de busqueda (centro)-->
            <input type="search" class="buscar">
            <button type="submit"><i class="bi bi-search"></i></button>
        </div>
        <div class="principales"> <!--  3 iconos en orden desendente (favoritos, carro y perfil ) -->
            <a href="favoritos.html"><i class="bi bi-heart"></i></a>
            <a href="carrito.html"><i class="bi bi-cart"></i></a>
            <a href="login.html"><i class="bi bi-person-circle"></i></a>
            <!-- TODO: Esta linea de codigo de abajo muestra un menu desplegable  (NO TOCAR, TRABAJAR DESPUES) -->
            <!-- <div class="dropdown">    
                <button><i class="bi bi-person-circle"></i></button>
                <div class="dropdown-content">
                <a href="https://blog.hubspot.com/">Blog</a>
                <a href="https://academy.hubspot.com/">Academy</a>
                <a href="https://www.youtube.com/user/hubspot">YouTube</a>
                </div>
            </div> -->
        </div>
        
    </header>
    
    <!--? Barra de navegacion -->
    <nav>
        <ul class="nav justify-content-center"> <!-- indica que la barra este en el centro  -->
            <li class="nav-item"> <!-- Esto crea un nuevo item -->
            <a class="nav-link" href="lavadoras.html">Lavadoras</a> <!-- Link del html para lavadoras  -->
            </li>
            <li class="nav-item"> <!-- Esto crea un nuevo item -->
            <a class="nav-link" href="secadoras.html">Secadoras</a> <!-- Link del html para secadoras  -->
            </li>
            <li class="nav-item"> <!-- Esto crea un nuevo item -->
            <a class="nav-link" href="centros_lavados.html">Centros de lavados</a> <!-- Link del html para centros de lavados  -->
            </li>
            <!-- TODO Este item de abajo es para si se neceita otro item nuevo. ÓJÓ, Si se necesita, avisar al Ing Ricarcardo-->
            <!-- <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li> -->
            <!--TODO No se si se necesite este todo o que, pero lo dejo mientras tanto  -->
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

    <!--? Slide de imagenes  -->
    <div class="slide-imagenes"> <!-- Esto crea el div para el slide -->
        <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true"> <!--  Para que el slide se mueva-->
            <div class="carousel-indicators"> <!-- Indica que va ha hacer el carrusel cuando aprete el boton de derecha o izquierda -->
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner"> <!-- crea el 'espacio' para las imagenes del carrusel -->
                <div class="carousel-item active">
                    <img src="Images/slide_01.jpg" class="d-block w-100" alt="cero" width="20px" sizes="1366x326">
                </div>
                <div class="carousel-item">
                    <img src="Images/slide_02.webp" class="d-block w-100" alt="uno" width="20px" sizes="1366x326">
                </div>
                <div class="carousel-item">
                    <img src="Images/slide_03.webp" class="d-block w-100" alt="dos" width="20px" sizes="1366x326">
                </div>
            </div>
            <!-- Esto indica que los botones de adelante o atras se muestren y si se da siguiente o previa imagen    -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!--? Ciculos de imagenes-->
    <div class="circulos_Lavadoras">  <!-- Crean donde el div donde iran las 3 imagenes en forma de ciculo, cada imagen, sera redirigido a la pagina correspondiente -->
        <a href="/Lavadoras/lavadoras.html"> <!-- Crea un link al HTML respectivo  -->
            <img src="Images/LAVADORAS_CIRCULO_MABE.png" alt="lavadora_circulo" height="350px" width="350px"> <!-- Esto es la imagen, para que pueda ser una imagen con link, ya sea a un HTML o pagina externa  -->
        </a>
        <a href="/Lavadoras/secadoras.html">
            <img src="Images/SECADORAS_CICULO_MABE.png" alt="secadora_circulo" height="350px" width="350px">
        </a>
        <a href="/Lavadoras/centros_lavados.html">
            <img src="Images/CENTROS_CICULO_MABE.png" alt="centro_circulo" height="350px" width="350px">
        </a>
    </div>
    <!--? Servicios  -->
    <div class="servicios"> <!-- Esto crea un div con la informacion que brindara la pagina o la empresa -->
         <h1 style="color: red;">SERVICIOS</h1>
         <p>Ofrecemos una amplia gama de productos de alta calidad, que incluyen lavadoras, secadoras y centros de lavado de las mejores marcas del mercado, garantizando durabilidad y eficiencia en cada uso. Además, contamos con repuestos originales para asegurar el correcto funcionamiento y prolongar la vida útil de tus electrodomésticos. Nuestro equipo de expertos está listo para brindarte asesoría personalizada y ayudarte a encontrar el producto ideal para tus necesidades.También ofrecemos un servicio especializado de mantenimiento y reparación, respaldado por técnicos certificados y capacitados para trabajar con las marcas más reconocidas. Garantizamos un servicio rápido y eficaz para que tus electrodomésticos funcionen de manera óptima. ¡Confía en nosotros para mantener tu hogar funcionando al 100%!</p>
    </div>

    <br> <!--  Para separara un poco los div, no tiene importancia-->

    <!--? Lavadoras mas vendidas -->
    <h1> Nuestras lavadoras mas vendidas</h1> 
    <section class="mas_vendidas"> <!-- Crea una seccion donde iran las lavadoras mas vendias y la informacion de estas, el porque son las mas vendias  -->
        <div class="card" style="width: 18rem;"> <!-- Crea el div con el espacio para ingresar el producto -->
            <img src="Images/0.jpg" class="card-img-top" alt="..." height="270px" width="200px"> <!-- Imagen del pruducto -->
            <div class="card-body"> <!-- Esto es para crear la informacion que tendra el pruccto (valor, referencias, etc...) -->
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="cart-favorites">
                    <a href="#" class="btn-btn-primary"><i class="bi bi-cart"></i></a>  <!-- Esto es el boton de  carro (boton azul)-->
                    <a href="#" class="btn-btn-secondary"><i class="bi bi-heart"></i></a> <!-- Esto es el boton de favoritos (boton rojo) -->
                </div>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="Images/1.png" class="card-img-top" alt="..." height="270px" width="200px">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="cart-favorites">
                    <a href="#" class="btn-btn-primary"><i class="bi bi-cart"></i></a> 
                    <a href="#" class="btn-btn-secondary"><i class="bi bi-heart"></i></a>
                </div>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="Images/2.jpg" class="card-img-top" alt="..." height="270px" width="200px">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="cart-favorites">
                    <a href="#" class="btn-btn-primary"><i class="bi bi-cart"></i></a> 
                    <a href="#" class="btn-btn-secondary"><i class="bi bi-heart"></i></a>
                </div>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="Images/1.png" class="card-img-top" alt="..." height="270px" width="200px">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="cart-favorites">
                    <a href="#" class="btn-btn-primary"><i class="bi bi-cart"></i></a> 
                    <a href="#" class="btn-btn-secondary"><i class="bi bi-heart"></i></a>
                </div>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="Images/0.jpg" class="card-img-top" alt="..." height="270px" width="200px">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="cart-favorites">
                    <a href="#" class="btn-btn-primary"><i class="bi bi-cart"></i></a> 
                    <a href="#" class="btn-btn-secondary"><i class="bi bi-heart"></i></a>
                </div>
            </div>
        </div>
        <!--* Texto de lavadoras mas vendidas -->
        <div class="texto_mas"> 
            <h1>Nuestras lavadoras mas vendidas</h1>
            <br>
            <H4>Los modelos de lavadoras que se muestran en la imagen representan los más vendidos del mercado, destacándose por su eficiencia, durabilidad y capacidad para adaptarse a las necesidades    del hogar. Cada uno de estos modelos ha sido reconocido por su excelente desempeño y funcionalidad, ofreciendo soluciones prácticas y confiables a los consumidores.</H4>
        </div>
    </section>

    <!--? Imagenes de marcas aliadas -->
    <div class="marcas"> <!-- Crea el div de las imagenes que confian en nostros (imagenes en gris que recorren la pagina de iquierda a derecha)-->
        <h1>Marcas que creen en Lavadoras Felices</h1>
        <marquee behavior="#" direction="left"> <!-- Etiqueta para crear el movimiento -->
            <img src="Images/samsumg.png" alt="gfg" height="150px" width="200px" id="negros">
            <img src="Images/LG.png" alt="gfg" height="150px" width="150px" id="negros">
            <img src="Images/whirpool.png" alt="gfg" height="150px" width="250px" id="negros">
            <img src="Images/Challenger.png" alt="gfg" height="150px" width="150px" id="negros">
            <img src="Images/elextrolux.png" alt="gfg" height="150px" width="250px" id="negros">
            <img src="Images/haceb.png" alt="gfg" height="150px" width="250px" id="negros">
            <img src="Images/kalley.png" alt="gfg" height="150px" width="250px" id="negros">
            <img src="Images/Hisense.png" alt="gfg" height="50px" width="350px" id="negros">
            <!-- coloco doble es para que no quede un espacio vacio feo -->
            <img src="Images/samsumg.png" alt="gfg" height="150px" width="200px" id="negros">
            <img src="Images/LG.png" alt="gfg" height="150px" width="150px" id="negros">
            <img src="Images/whirpool.png" alt="gfg" height="150px" width="250px" id="negros">
            <img src="Images/Challenger.png" alt="gfg" height="150px" width="150px" id="negros">
            <img src="Images/elextrolux.png" alt="gfg" height="150px" width="250px" id="negros">
            <img src="Images/haceb.png" alt="gfg" height="150px" width="250px" id="negros">
            <img src="Images/kalley.png" alt="gfg" height="150px" width="250px" id="negros">
            <img src="Images/Hisense.png" alt="gfg" height="50px" width="350px" id="negros">
            <!-- coloco doble es para que no quede un espacio vacio feo -->
            <img src="Images/samsumg.png" alt="gfg" height="150px" width="200px" id="negros">
            <img src="Images/LG.png" alt="gfg" height="150px" width="150px" id="negros">
            <img src="Images/whirpool.png" alt="gfg" height="150px" width="250px" id="negros">
            <img src="Images/Challenger.png" alt="gfg" height="150px" width="150px" id="negros">
            <img src="Images/elextrolux.png" alt="gfg" height="150px" width="250px" id="negros">
            <img src="Images/haceb.png" alt="gfg" height="150px" width="250px" id="negros">
            <img src="Images/kalley.png" alt="gfg" height="150px" width="250px" id="negros">
            <img src="Images/Hisense.png" alt="gfg" height="50px" width="350px" id="negros">
        </marquee>
    </div>

    <!--? Whatsapp de la empresa y/o contacto directo -->
    <a href="#" class="float" target="_blank"><i class="bi bi-whatsapp"></i></a> <!-- TODO: tengo que poner un numero o el link de redireccion y quitar el (#) -->
    

    <!--? Informacion de la empresa y legalidad -->
    <section> <!-- Crea la seccion para meter toda la informacion -->
        <div class="informacion"> <!-- FIXME: Productos, depronto lo quito -->
            <h3>Productos</h3>
                <li><a href="/Lavadoras/lavadoras.html">Lavadoras</a></li>
                <li><a href="/Lavadoras/secadoras.html">Secadoras</a></li>
                <li><a href="/Lavadoras/centros_lavados.html">Centros de lavado</a></li>
        </div>
        <div class="informacion"> <!-- Servicios y soporte al cliente -->
            <h3>Servicios y Soporte</h3>
                <li><a href="informacion.html">Servicios prestados</a></li>
                <li><a href="informacion.html">PQR</a></li>
                <li><a href="informacion.html">Facturación</a></li>
        </div>
        <div class="informacion"> <!-- Informacion legal -->
            <!-- TODO: La idea de esta es que lo envie a una misma pagina, solo que se despliegue a la parte de donde se necesita la informacion-->
            <h3>Acerca de Lavadoras Felices</h3>
                <li><a href="informacion.html">¿Quienes somos?</a></li>
                <li><a href="informacion.html">Términos y condiciones</a></li>
                <li><a href="informacion.html">Politica de Cookies</a></li>
                <li><a href="informacion.html">Ley de proteccion de datos</a></li>
        </div>
        <div class="informacion"> <!-- Links de localizacion google TODO: (¿creo que se puede hacer facil?) y arreglar el mail y el whatsapp -->
            <h3>Atención al cliente</h3>
            <h5>Servicion tecnico</h5>
            <p>serviciotecnnico@lavadoras.com</p> <!-- FIXME: ESTE ES UN MAILTO, para que lo redireccione a un correo real-->
            <br>
            <h5>WhatsApp</h5>
            <p>(+57)304 12345678</p> <!-- FIXME: REDIRECCION DE WHATSAPP-->
        </div>
        <div class="informacion"> <!-- Mas informacion   -->
            <h5>Linea Bogotá</h5>
            <p>601 213451</p>
            <br>
            <h5>Linea Nacional</h5>
            <p>01800045124</p>
            <br>
            <h5>Dirección tienda física</h5>
            <p>Cra 100 #4-20</p>
        </div>
    </section>
    <div class="separacion"> <!--  No se porque hice un div, pero ya esta hahaha solo en un h2 dentro de un div-->
        <h2>Medios de pago</h2>
    </div>
    <section class="imagenes_pago"> <!-- Imagenes de las empresas que se reciben los medios de pago -->
        <img src="Images/MASTERCARD.png" alt="Mastercard">
        <img src="Images/VISA.png" alt="VISA">
        <img src="Images/AMERICAN.png" alt="American Express">
        <img src="Images/DINERS.png" alt="Diner Club">
        <img src="Images/SISTECREDITO.png" alt="Sistecredito">
        <img src="Images/PSE.png" alt="PSE">
        <img src="Images/logo-1.png" alt="Codensa">
    </section>
    
    <section class="industrias"> <!-- Imagenes de las super Industria de comercion y camara de comercio  -->
        <img src="Images/INDUSTRIA.png" alt="Industria y Comercio">
        <img src="Images/CAMARA.png" alt="Camara de Comercion ">
    </section>
    
    <!--? La parte maaaaas abajo del todo, solo lleva la imagen de la empresa, el logo, el links de las redes sociales y los derechos de autor creados por los 3 programadores -->
    <footer> 
        <div class="logo">
            <a href="index.html">
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