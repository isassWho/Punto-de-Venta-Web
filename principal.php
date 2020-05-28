<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="estilos-index.css">
    <!--fuente logo-->
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Giga&display=swap" rel="stylesheet">
    <!--fuentes para h4-->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <!--Bootstrap-->
    <!--
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    -->
    <!--Carrusel-->
    <link rel="stylesheet" href="../Owl/owl.carousel.min.css">
    <link rel="stylesheet" href="../Owl/owl.theme.default.min.css">
    <title>Lyon Games</title>
</head>

<body>
        <?php
            session_start(); 
            $correo = $_SESSION['email'];

            //si no hay variable de sesion se reedirige a el login
            if(!isset($correo)){
                header("location: cuenta.html");
            }
        ?>
    <header>
        <div class="menu">
            <div class="contenedor">

                <div class="logos">
                    <a href="principal.php" name="inicio">
                        <div class="logo-imagen"></div>
                    </a>
                    <a href="principal.php">
                        <p class="logo" style="color: white;">LYON GAMES</p>
                    </a>

                </div>

                <nav>
                    <ul>
                        <div>
                            <img src="imagenes/account.png" alt="">
                            <li><a href="logica/salir.php">Cerrar sesión</a></li>
                        </div>
                        <div>
                            <img src="imagenes/carrito-de-compras.png" alt="" style="width: 30px;">
                            <li><a href="carrito.php">Mi Carrito</a></li>
                        </div>
                    </ul>
                </nav>

            </div>
        </div>

        <div class="juegos sticky-top" style="background: rgb(94, 126, 185);">
            <nav>
                <ul>
                    <li><a href="ps4.php">PS4</a></li>
                    <li><a href="xbox.php">Xbox One</a></li>
                    <li><a href="nintendo.php">Nintendo</a></li>
                    <li><a href="funko.php">Funko</a></li>

                </ul>
            </nav>
        </div>

        <div class="portada" ;>
            <div id="carrusel-principal" class="owl-carousel owl-theme"">

                <div id=" portada-1">
                <img src="imagenes/portada-3.JPG" alt="">
            </div>
            <!--
            <div id="portada-1">
                <img src="imagenes/portada-2.JPG" alt="">
            </div>
            <div id="portada-1">
                <img src="imagenes/portada-3.JPG" alt="">
            </div>
            <div id="portada-1">
                <img src="imagenes/portada-4.JPG" alt="">
            </div>
            -->


        </div>

        </div>

    </header>


    <section id="populares">
        <div class="contenedor">
            <h3>Populares</h3>
            <!--Nintendo-->
            <div class="seccion-popular" id="nintendo">
                <hr>
                <h4><a style="color: red;" href="nintendo.html">Nintendo</a></h4>
                <div id="carrusel-productos-nintendo" class="owl-carousel owl-theme">

                    <div class="item">

                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/populares-nintendo-1.jpg" alt=""></a>
                        </div>

                        <div class="info-producto">
                            <ul>
                                <li>Mario Kart Deluxe 8</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>

                                <form action="logica/anadir_a_carrito.php" method="POST">
                                    <?php $_SESSION['descripcion_articulo'] = "Mario Kart 8"?>
                                    <?php $_SESSION['precio_articulo'] = "999"?>
                                    <input type="submit" name="anadir_a_carrito" value="Añadir al carrito">
                                </form>

                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/populares-nintendo-2.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                                <li>Luigi Mansion 3</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>

                                <form action="logica/anadir_a_carrito.php?descripcion=Luigi Mansion 3" method="POST">
                                    <input type="submit" name="anadir_a_carrito" value="Añadir al carrito">
                                </form>

                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/populares-nintendo-3.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                                <li>Zelda Breath of the Wild</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                                <form action="logica/anadir_a_carrito.php?descripcion=Zelda Breath of the Wild" method="POST">
                                    <input type="submit" name="anadir_a_carrito" value="Añadir al carrito">
                                </form>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/populares-nintendo-4.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                                <li>FIFA 20</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                                <form action="logica/anadir_a_carrito.php?descripcion=FIFA 20" method="POST">
                                    <input type="submit" name="anadir_a_carrito" value="Añadir al carrito">
                                </form>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/populares-nintendo-5.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                                <li>New Super Mario Bros U Deluxe</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                                <form action="logica/anadir_a_carrito.php?descripcion=New Super Mario Bros U Deluxe" method="POST">
                                    <input type="submit" name="anadir_a_carrito" value="Añadir al carrito">
                                </form>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/populares-nintendo-6.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                            <li>Zelda Links Awakening</li>
                            <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                                <form action="logica/anadir_a_carrito.php?descripcion=Zelda Links Awakening" method="POST">
                                    <input type="submit" name="anadir_a_carrito" value="Añadir al carrito">
                                </form>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/populares-nintendo-7.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                            <li>Super Smash Bros</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                                <form action="logica/anadir_a_carrito.php?descripcion=Super Smash Bros" method="POST">
                                    <input type="submit" name="anadir_a_carrito" value="Añadir al carrito">
                                </form>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/populares-nintendo-8.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                            <li>Pokemon Shield</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                                <form action="logica/anadir_a_carrito.php?descripcion=Pokemon Shield" method="POST">
                                    <input type="submit" name="anadir_a_carrito" value="Añadir al carrito">
                                </form>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/populares-nintendo-9.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                                <li>Super Mario Odyssey</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                                <form action="logica/anadir_a_carrito.php?descripcion=Super Mario Odyssey" method="POST">
                                    <input type="submit" name="anadir_a_carrito" value="Añadir al carrito">
                                </form>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/populares-nintendo-10.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                                <li>Super Mario Maker 2</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                                <form action="logica/anadir_a_carrito.php?descripcion=Super Mario Maker 2" method="POST">
                                    <input type="submit" name="anadir_a_carrito" value="Añadir al carrito">
                                </form>
                            </ul>
                        </div>
                    </div>




                </div>
            </div>
            <hr>
            <!--Nintendo-->

            <!--Playstation-->
            <div class="seccion-popular" id="playstation">
                <h4><a style="color: rgb(37, 37, 216);" href="ps4.html">Playstation</a></h4>
                <div id="carrusel-productos-playstation" class="owl-carousel owl-theme">

                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/populares-playstation-1.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                                <li>Mario Kart Deluxe 8</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/populares-playstation-2.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                                <li>Mario Kart Deluxe 8</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/populares-playstation-3.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                                <li>Mario Kart Deluxe 8</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/populares-playstation-4.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                                <li>Mario Kart Deluxe 8</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/populares-playstation-5.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                                <li>Mario Kart Deluxe 8</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/populares-playstation-6.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                                <li>Mario Kart Deluxe 8</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/populares-playstation-7.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                                <li>Mario Kart Deluxe 8</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/populares-playstation-8.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                                <li>Mario Kart Deluxe 8</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/populares-playstation-9.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                                <li>Mario Kart Deluxe 8</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/populares-playstation-10.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                                <li>Mario Kart Deluxe 8</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                            </ul>
                        </div>
                    </div>




                </div>
            </div>
            <hr>
            <!--Playstation-->


            <!--Xbox One-->
            <div class="seccion-popular" id="xbox-one">

                <h4><a style="color: rgb(0, 126, 31);" href="xbox.html">Xbox One</a></h4>
                <div id="carrusel-productos-xbox-one" class="owl-carousel owl-theme">

                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/populares-xboxone-1.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                                <li>Mario Kart Deluxe 8</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/populares-xboxone-2.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                                <li>Mario Kart Deluxe 8</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/populares-xboxone-3.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                                <li>Mario Kart Deluxe 8</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/populares-xboxone-4.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                                <li>Mario Kart Deluxe 8</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/populares-xboxone-5.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                                <li>Mario Kart Deluxe 8</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/populares-xboxone-6.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                                <li>Mario Kart Deluxe 8</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/populares-xboxone-7.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                                <li>Mario Kart Deluxe 8</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/populares-xboxone-8.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                                <li>Mario Kart Deluxe 8</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/populares-xboxone-9.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                                <li>Mario Kart Deluxe 8</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/populares-xboxone-10.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                                <li>Mario Kart Deluxe 8</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                            </ul>
                        </div>
                    </div>




                </div>
            </div>
            <hr>
            <!--XboxOne-->

            <!--Xbox One-->
            <div class="seccion-popular" id="coleccionables">

                <h4><a href="funko.html">Coleccionables</a></h4>
                <div id="carrusel-productos-coleccionables" class="owl-carousel owl-theme">

                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/funko-1.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                                <li>Mario Kart Deluxe 8</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/funko-2.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                                <li>Mario Kart Deluxe 8</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/funko-3.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                                <li>Mario Kart Deluxe 8</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/funko-4.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                                <li>Mario Kart Deluxe 8</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/funko-5.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                                <li>Mario Kart Deluxe 8</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/funko-6.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                                <li>Mario Kart Deluxe 8</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/funko-7.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                                <li>Mario Kart Deluxe 8</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/funko-8.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                                <li>Mario Kart Deluxe 8</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/funko-9.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                                <li>Mario Kart Deluxe 8</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-producto">
                            <a href="www.google.com"><img src="imagenes/funko-10.jpg" alt=""></a>
                        </div>
                        <div class="info-producto">
                            <ul>
                                <li>Mario Kart Deluxe 8</li>
                                <li>Nuevo</li>
                                <li>$999 <sup>.99</sup></li>
                            </ul>
                        </div>
                    </div>




                </div>
            </div>
            <hr>
            <!--XboxOne-->




        </div>
    </section>




    <section id="boton-inicio">
        <div></div>
        <p><a href="#inicio">Inicio de página</a></p>
        </div>
    </section>

    <footer>
        <div class="contenedor" id="informacion">
            <div>
                <ul>
                    <h4>INFORMACION SERVICIO AL CLIENTE</h4>
                    <li><a href="">Sobre Nosotros</a></li>
                    <li><a href="">Trabaja con Nosotros</a></li>
                    <li><a href="">Clasificación ESRB</a></li>
                </ul>

            </div>

            <div>
                <ul>
                    <h4>SERVICIO AL CLIENTE</h4>
                    <li><a href="">Facturación Electrónica</a></li>
                    <li><a href="">Consulta de Gitcard</a></li>
                </ul>


            </div>
            <ul>
                <h4>AYUDA</h4>
                <li><a href="">Raestro de Pedidos en Línea</a></li>
                <li><a href="">Ver tus Preventas</a></li>
                <li><a href="">Devoluciones</a></li>
                <li><a href="">Más ayuda</a></li>
            </ul>
            <div id="redes">
                <h4>REDES SOCIALES</h4>
                <ul>
                    <li><a href=""><img src="imagenes/facebook.png" alt=""></a></li>
                    <li><a href=""><img src="imagenes/github.png" alt=""></a></li>
                    <li><a href=""><img src="imagenes/medium.png" alt=""></a></li>

                </ul>
            </div>

            <div>
                <h4>FORMAS DE PAGO</h4>
                <div id="img-formas-de-pago">

                </div>


            </div>



        </div>
        <div class="contenedor" id="final">
            <p>Términos y Condiciones | Aviso de Privacidad © 2020 Lyon Games. Todos los Derechos Reservados.</p>
        </div>
    </footer>








    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
        </script>
    <script src="../Owl/owl.carousel.min.js"></script>

    <script>

        $('#carrusel-productos-nintendo').owlCarousel({
            loop: false,
            margin: 10,
            nav: true,
            dots: false,
            responsive: {
                0: { // En moviles sólo muestra una imagen a la vez
                    items: 1
                },
                600: { // En tablets muestra 3 imagenes a la vez
                    items: 3
                },
                1000: { // En escritorio muestra 4
                    items: 6
                }
            }
        })

    </script>

    <script>

        $('#carrusel-productos-playstation').owlCarousel({
            loop: false,
            margin: 10,
            nav: true,
            dots: false,
            responsive: {
                0: { // En moviles sólo muestra una imagen a la vez
                    items: 1
                },
                600: { // En tablets muestra 3 imagenes a la vez
                    items: 3
                },
                1000: { // En escritorio muestra 4
                    items: 6
                }
            }
        })

    </script>

    <script>

        $('#carrusel-productos-xbox-one').owlCarousel({
            loop: false,
            margin: 10,
            nav: true,
            dots: false,
            responsive: {
                0: { // En moviles sólo muestra una imagen a la vez
                    items: 1
                },
                600: { // En tablets muestra 3 imagenes a la vez
                    items: 3
                },
                1000: { // En escritorio muestra 4
                    items: 6
                }
            }
        })

    </script>

    <script>

        $('#carrusel-productos-coleccionables').owlCarousel({
            loop: false,
            margin: 10,
            nav: true,
            dots: false,
            responsive: {
                0: { // En moviles sólo muestra una imagen a la vez
                    items: 1
                },
                600: { // En tablets muestra 3 imagenes a la vez
                    items: 3
                },
                1000: { // En escritorio muestra 4
                    items: 6
                }
            }
        })

    </script>

    <!--Carrusel para ventana principal-->
    <script>

        $('#carrusel-principal').owlCarousel({
            loop: false,
            margin: 10,
            nav: true,
            dots: false,
            responsive: {
                0: { // En moviles sólo muestra una imagen a la vez
                    items: 1
                },
                600: { // En tablets muestra 3 imagenes a la vez
                    items: 1
                },
                1000: { // En escritorio muestra 4
                    items: 1
                }
            }
        })

    </script>

</body>

</html>