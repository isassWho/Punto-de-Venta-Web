<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="estilos-carrito.css">
    <!--fuente logo-->
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Giga&display=swap" rel="stylesheet">
    <!--fuentes para h4-->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">


    <!--Carrusel-->
    <link rel="stylesheet" href="../Owl/owl.carousel.min.css">
    <link rel="stylesheet" href="../Owl/owl.theme.default.min.css">


    <title>Carrito</title>

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
                            <li><a href="logica/salir.php">Cerrar Sesión</a></li>
                        </div>
                        <div>
                            <img src="imagenes/carrito-de-compras.png" alt="" style="width: 30px;">
                            <li><a href="carrito.php">Mi Carrito</a></li>
                        </div>
                    </ul>
                </nav>

            </div>
        </div>

        <div class="juegos">
            <nav style="background: rgb(45, 181, 190);">
                <ul>
                    <li><a href="ps4.php">PS4</a></li>
                    <li><a href="xbox.php">Xbox One</a></li>
                    <li><a href="nintendo.php">Nintendo</a></li>
                    <li><a href="funko.php">Funko</a></li>

                </ul>
            </nav>
            <div>

                <div>
                    <h3>Mi carrito</h3>
                </div>
                <div class="contenedor">
                    <div class="carrito">
                        <div class="encabezado">
                            <div>Nombre</div>
                            <div>IdProducto</div>
                            <div>Descripción</div>
                            <div>Precio</div>
                        </div>
                        <div></div>
                    </div>
                    <div class="total-de-carrito">
                        <div class="logos">
                            <div class="logo-icono">
                                <!--imagen del logo-->
                            </div>
                            <div class="marca">
                                <p>Lyon Games</p>
                                
                            </div>
                        </div>
                        <div class="costo">
                            <button>Eliminar articulo seleccionado</button>
                            <p>Articulos: 2</p>
                            <p>Total a pagar: <strong>1998 mxn</strong> </p>
                            <form action="">
                                <input type="submit" value="Comprar">
                            </form>
                        </div>
                    </div>

                </div>

            </div>
            




        </div>

    </header>


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

    </script>

</body>

</html>