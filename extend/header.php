<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/main.css">
    <link href="../css/fontawesome/css/all.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>La Licorera 2.0</title>
</head>

<body>
    <header>
        <div class="loader">
            <div class="load"><img src="../img/loader/loader.gif" alt=""></div>
        </div>
        <nav class="bgnav">
            <a href="" class="bgnav_space"></a><span class="bgnav_span"></span><a href=""><i class="fal fa-phone"></i> (1) 756 0060</a><span class="bgnav_span"></span>
            <a href=""><i class="fal fa-phone"></i> 300 203 5430</a><span class="bgnav_span"></span>
            <a href=""><i class="fab fa-whatsapp"></i> 304 484 8594</a><span class="bgnav_span"></span><a class="bgnav_space" href=""></a>
        </nav>

        <nav class="menu">
            <div class="menu-left">
                <ul>
                    <li class="open-slide"><a onclick="openSlideMenu()"><i class="fal fa-bars fa-2x"></i><span class="menu_title">Menú</span></a></li>
                    <li><a href="extend/login.php"><i class="fal fa-user-circle"></i></a></li>
                    <li><a href="#"><i class="fal fa-search fa-2x"></i><span class="menu_title--left">Buscar</span></a></li>
                </ul>
            </div>
            <a href="../index.php">
                <picture>
                    <source class="licorera_logo" type="../img/logos/logo.svg" srcset="pyramid.svg">
                    <source class="licorera_logo" type="../img/logos/logo.webp" srcset="pyramid.webp">
                    <img class="licorera_logo" src="../img/logos/logo.png" alt="Logo La Licorera">
                </picture>
            </a>
            <div class="menu-right">
                <ul>

                    <li><a href="#"><i class="far fa-search fa-2x --left"></i><span class="menu_title--left">Buscar</span></a></li>
                    <li><a href="#"><i class="far fa-clock fa-2x --left"></i><span class="menu_title--left">Tiempo</span></a></li>
                    <li><a href="#"><i class="far fa-shopping-cart fa-2x --left"></i><span class="menu_title--left">Carrito</span></a></li>
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
                <li><a href="#"><i class="fal fa-cocktail"></i></a></li>
                <li>Hola Camilo Mi asdasdasdasCuenta Cerrar Cesion</li>
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
                <li><a href="#"><i class="fas fa-glass-martini"></i> Recetas de Cócteles <i class="fal fa-chevron-right"></i> </a></li>
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

    