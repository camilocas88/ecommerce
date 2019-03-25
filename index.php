<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link href="css/fontawesome/css/all.css" rel="stylesheet">
    <title>La Licorera 2.0</title>
</head>

<body>
    <header>
        <div class="loader">
            <div class="load"><img src="img/loader/loader.gif" alt=""></div>
        </div>
        <nav class="bgnav">
            <a href="" class="bgnav_space"></a><span class="bgnav_span"></span><a href=""><i class="fal fa-phone"></i> (1) 756 0060</a><span class="bgnav_span"></span>
            <a href=""><i class="fal fa-phone"></i> 300 203 5430</a><span class="bgnav_span"></span>
            <a href=""><i class="fab fa-whatsapp"></i> 304 484 8594</a><span class="bgnav_span"></span><a class="bgnav_space" href=""></a>
        </nav>

        <nav class="menu">
            <div class="menu-left">
                <ul>
                    <li class="open-slide"><a onclick="openSlideMenu()">
                    <div class="menu-btn">
                        <div class="btn-line"></div>
                        <div class="btn-line"></div>
                        <div class="btn-line"></div>
                    </div>
                    <span class="menu_title">Menú</span></a></li>
                    <li><div class="bar"></div></li>
                    <li><a href="extend/login.php"><i class="fal fa-user-circle _user"></i></a></li>
                    <li><a href="#"><i class="fal fa-search fa-2x"></i><span class="menu_title--left">Buscar</span></a></li>
                </ul>
            </div>
            <a href="#">
                <picture>
                    <source class="licorera_logo" type="img/logos/logo.svg" srcset="pyramid.svg">
                    <source class="licorera_logo" type="img/logos/logo.webp" srcset="pyramid.webp">
                    <img class="licorera_logo" src="img/logos/logo.png" alt="Logo La Licorera">
                </picture>
            </a>
            <div class="menu-right">
                <ul>
                    <li><a href="#"><span class="menu_title--left">Buscar</span><i class="fal fa-search"></i></a></li>
                    <li><div class="bar"></div></li>
                    <li><a href="#"><span class="menu_title--left">Tiempo</span><i class="fal fa-clock"></i></a></li>
                    <li><div class="bar"></div></li>                    
                    <li><a href="#"><span class="menu_title--left">Carrito</span><i class="fal fa-shopping-cart"></i></a></li>
                </ul>

            </div>
        </nav>
        <!-- Menu desplegable -->

        <div id="side-menu" class="side-nav">
            <!-- Location Menu -->
            <ul class="side-menu-ul location">
                <li class="location"><a href="#"><i class="fal 
                fa-map-marker-alt"></i> Ciudad <i class="fal fa-chevron-right"></i></a>
                    <ul>
                        <li><a href="#">Bucaramanga</a></li>
                        <li><a href="#">Cartagena</a></li>
                        <li><a href="#">Cali</a></li>
                        <li><a href="#">Medellín</a></li>
                        <li><a href="#">Santa Marta</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Login menu -->
            <ul class="side-menu__login">
                <li><a class="btn-close" onclick="closeSlideMenu()"><i class="fal fa-bars fa-2x"></i>Menú</a></li>
                <li><a href="#" class="btn-close"><i class="fal fa-user-circle fa-2x"></i></a></li>
                <li>Hola Camilo Mi Cuenta Cerrar Cesion</li>
            </ul>

            <ul>
                <!-- ariculos -->
                <li class="side-menu-ul"><a href="#"><i class="fal fa-list-ul"></i> Productos <i class="fal fa-chevron-right"></i></a>
                    <ul>
                        <li><a class="list" href="">Aguardiente</a></li>
                        <li><a class="list" href="">Brandy-Cognac</a></li>
                        <li><a class="list" href="">Cerveza</a></li>
                        <li><a class="list" href="">Champaña</a></li>
                        <li><a class="list" href="">Chocolates</a></li>
                        <li><a class="list" href="">Cócteles listos</a></li>
                        <li><a class="list" href="">Especiales</a></li>
                        <li><a class="list" href="">Ginebra</a></li>
                        <li><a class="list" href="">Juegos de Mesa</a></li>
                        <li><a class="list" href="">Ron</a></li>
                        <li><a class="list" href="">Tequila</a></li>
                        <li><a class="list" href="">Vino</a></li>
                        <li><a class="list" href="">Vodka</a></li>
                        <li><a class="list" href="">Whisky</a></li>
                        <hr>
                        <li><a class="list --right" href="">No Alcohólicas</a></li>
                        <li><a class="list --right" href="">Otros Productos</a></li>
                        <li><a class="list --right" href="">Utensilios</a></li>
                        <li><a class="list --right" href="">Snaks</a></li>
                        <li><a class="list --right" href="">Cigarrillos</a></li>
                    </ul>
                <li><a href="#"><i class="fal fa-thumbs-up"></i> Experiencias <i class="fal fa-chevron-right"></i> </a></li>
                <li><a href="#"><i class="fal fa-cocktail"></i> Recetas de Cócteles <i class="fal fa-chevron-right"></i> </a></li>
                <li><a href="#"><i class="fal fa-gift"></i> Regalos <i class="fal fa-chevron-right"></i> </a></li>
                <li><a href="#"><i class="fal fa-tags"></i> Promociones <i class="fal fa-chevron-right"></i> </a></li>
                <li><a href="#"><i class="fal fa-envelope"></i> Contacto <i class="fal fa-chevron-right"></i> </a></li>
            </ul>

            <ul class="side-menu__bottom">
                <li><a href="#"><i class="fal fa-question-circle fa-2x"></i> Preguntas Frecuentes</a></li>
                <li><a href="#"><i class="fal fa-address-card fa-2x"></i> Políticas</a></li>
            </ul>
        </div>
    </header>

    <main class=container>
        <section class="banner">
            <img src="img/Banner1.jpg" style="width:100%" alt="">
        </section>
        <section class="banner_bottom">
            <h1>Lorem, ipsum dolor.</h1>
        </section>

        <h1>Contenido</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro qui praesentium inventore laboriosam officia autem, commodi placeat expedita hic minima, nemo doloribus recusandae numquam provident iusto voluptates, adipisci cumque veniam.
            Eum dolores doloribus eligendi quis distinctio rem minus ut necessitatibus, nulla magni doloremque inventore nisi sint ex ducimus sed exercitationem veritatis voluptatum voluptatibus, beatae possimus recusandae est itaque vero? Quod.
            Atque, optio? Fugiat laboriosam nam porro itaque, minus, animi aspernatur est quas, magnam enim assumenda labore vel sequi nostrum rerum iusto eveniet doloribus? Excepturi explicabo dolores corrupti mollitia cupiditate atque.
            Harum officia sed labore quaerat voluptatem consequatur nulla facere perferendis inventore repudiandae beatae aspernatur deleniti aliquam blanditiis omnis minus sit voluptate qui dolores, alias tempora vitae veritatis veniam? Explicabo, quidem.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro qui praesentium inventore laboriosam officia autem, commodi placeat expedita hic minima, nemo doloribus recusandae numquam provident iusto voluptates, adipisci cumque veniam.
            Eum dolores doloribus eligendi quis distinctio rem minus ut necessitatibus, nulla magni doloremque inventore nisi sint ex ducimus sed exercitationem veritatis voluptatum voluptatibus, beatae possimus recusandae est itaque vero? Quod.
            Atque, optio? Fugiat laboriosam nam porro itaque, minus, animi aspernatur est quas, magnam enim assumenda labore vel sequi nostrum rerum iusto eveniet doloribus? Excepturi explicabo dolores corrupti mollitia cupiditate atque.
            Harum officia sed labore quaerat voluptatem consequatur nulla facere perferendis inventore repudiandae beatae aspernatur deleniti aliquam blanditiis omnis minus sit voluptate qui dolores, alias tempora vitae veritatis veniam? Explicabo, quidem.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro qui praesentium inventore laboriosam officia autem, commodi placeat expedita hic minima, nemo doloribus recusandae numquam provident iusto voluptates, adipisci cumque veniam.
            Eum dolores doloribus eligendi quis distinctio rem minus ut necessitatibus, nulla magni doloremque inventore nisi sint ex ducimus sed exercitationem veritatis voluptatum voluptatibus, beatae possimus recusandae est itaque vero? Quod.
            Atque, optio? Fugiat laboriosam nam porro itaque, minus, animi aspernatur est quas, magnam enim assumenda labore vel sequi nostrum rerum iusto eveniet doloribus? Excepturi explicabo dolores corrupti mollitia cupiditate atque.
            Harum officia sed labore quaerat voluptatem consequatur nulla facere perferendis inventore repudiandae beatae aspernatur deleniti aliquam blanditiis omnis minus sit voluptate qui dolores, alias tempora vitae veritatis veniam? Explicabo, quidem.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro qui praesentium inventore laboriosam officia autem, commodi placeat expedita hic minima, nemo doloribus recusandae numquam provident iusto voluptates, adipisci cumque veniam.
            Eum dolores doloribus eligendi quis distinctio rem minus ut necessitatibus, nulla magni doloremque inventore nisi sint ex ducimus sed exercitationem veritatis voluptatum voluptatibus, beatae possimus recusandae est itaque vero? Quod.
            Atque, optio? Fugiat laboriosam nam porro itaque, minus, animi aspernatur est quas, magnam enim assumenda labore vel sequi nostrum rerum iusto eveniet doloribus? Excepturi explicabo dolores corrupti mollitia cupiditate atque.
            Harum officia sed labore quaerat voluptatem consequatur nulla facere perferendis inventore repudiandae beatae aspernatur deleniti aliquam blanditiis omnis minus sit voluptate qui dolores, alias tempora vitae veritatis veniam? Explicabo, quidem.</p>

    </main>

    <!-- -------------comienza el footer----------------------------- -->

    <footer id="desktop" class="footer">
        <div class="footer-container">

            <ul class="footer-nav">
                <h3>HORARIOS BOGOTÁ</h3>
                <li><a href="#">Lunes a Jueves | 9am a 10pm</a></li>
                <li><a href="#">Viernes | 9am a 4am</a></li>
                <li><a href="#">Sabado | 11am a 12am</a></li>
                <li><a href="#">Domingo | 2pm a 9pm</a></li>

            </ul>
            <ul class="footer-secondary-nav">
                <h3>TIEMPO DE ENTREGA</h3>
                <li><a href="#">Pago contra entrega: 30 minutos</a></li>
                <li><a href="#">Pago Onlin: 2 días</a></li>
            </ul>
            <ul class="footer-secondary-nav">
                <h3>ACERCA DE </h3>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Franquicias</a></li>
                <li><a href="#">Términos y Condiciones</a></li>
                <li><a href="#">Preguntas Frecuentes</a></li>
            </ul>
            <ul class="footer-secondary-nav">
                <h3>COBERTURA</h3>
                <li><a href="#">Cobertura Bogotá</a></li>
                <li><a href="#">Cobertura Medellín</a></li>
                <li><a href="#">Cobertura Cartagena</a></li>
                <li><a href="#">Cobertura Resto del País</a></li>

            </ul>
            <div class="social-networks">
                <h3>CONTACTO</h3>
                <!-- <li><a href="#">Formulario  </a></li> -->
                <!-- <div class="text-input">
                <form action="post">
                    <input type="email" name="Enter Your Email Address" size="20">
                    <input type="submit" value="Submit">
                </form>
                </div> -->
                <div class="facebook">
                    <i class="fab fa-facebook fa-2x"></i>
                </div>
                <div class="twitter">
                    <i class="fab fa-twitter fa-2x"></i>
                </div>
                <div class="instagram">
                    <i class="fab fa-instagram fa-2x"></i>
                </div>
                <div class="youtube">
                    <i class="fab fa-youtube fa-2x"></i>
                </div>

            </div><!-- .social-networks-->
        </div><!-- .footer-container -->
    </footer><!-- .footer -->

    <!-- Mobile -->
    <footer id="fmobile">
        <div class="footer_mobile">
            <ul class="menu-footer despegable">
                <li><a><i class="icon left fal fa-calendar-alt"></i> Horarios Bogota <i class="icon right fal fa-chevron-right"></i></a>
                    <ul>
                        <li>Lunes a Jueves | 9:00am - 10:00pm</li>
                        <li>Viernes | 9:00am - 4:00am</li>
                        <li>Sabado | 11:00am - 12:00am</li>
                        <li>Domingo | 2:00pm - 8:00am</li>
                    </ul>
                </li>

                <li><a><i class="icon left fal fa-clock"></i>Tiempo de entrega <i class="icon right fal fa-chevron-right"></i></a>
                    <ul>
                        <li>Pago contra entrega 30 min</li>
                        <li>Pago Online 2 dias</li>
                    </ul>
                </li>

                <li><a><i class="icon left fal fa-globe"></i>Cobertura <i class="icon right fal fa-chevron-right"></i></a>
                    <ul>
                        <img src="img/mapa.png" alt="">
                    </ul>
                </li>
            </ul>
            <ul class="menu-footer">
                <li><a class="text-white" href="">Blog</a></li>
                <li><a class="text-white" href="">Nosotros</a></li>
                <li><a class="text-white" href="">Franqucias</a></li>
                <li><a class="text-white" href="">Terminos y Condiciones</a></li>
                <li><a class="text-white" href="">Preguntas Frecuentes</a></li>
                <div class="social">
                    <a class="text-white" href=""><i class="fab fa-facebook fa-2x"></i></a>
                    <a class="text-white" href=""><i class="fab fa-twitter fa-2x"></i></a>
                    <a class="text-white" href=""><i class="fab fa-instagram fa-2x"></i></a>
                    <a class="text-white" href=""><i class="fab fa-youtube fa-2x"></i></a>
                </div>
            </ul>
        </div>
    </footer>
    <!-- Mobile -->

    <!-- .bottom-line -->
    <div class="bottom-line">
        <p>Prohibido el expendio de licores a menores de edad </p>
        <div class="legal">
            <a href="#">PayU</a>
            <a href="#">MasterCard</a>
            <a href="#">Visa</a>
        </div>
    </div><!-- .bottom-line -->





    <script src="js/loader.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/menu.js"></script>
    <!--JavaScript at end of body for optimized loading-->
    <!-- <script type="text/javascript" src="js/materialize.min.js"></script> -->


    <!-- //pops ups -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</body>

</html> 