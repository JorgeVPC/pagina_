<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="ancho = ancho del dispositivo, escala inicial = 1.0">
    <!-- ancho = ancho del dispositivo, escala inicial = 1.0 -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="css/carousel.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/carousel.js"></script>
    <!-- deslizador -->
    <link rel="stylesheet" href="arriba.css">
    <script src="arriba.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>

    <title>Viceministerio Lucha Contra el Contrabando</title>
    <link rel="icon" href="img/log_vlcc.png" type="image/png" />
</head>

<body class="" style="background-repeat: no-repeat;" background="img/fondo1.jpg">
    <div class="container bg-light rounded-lg">
        <!-- permite deslizar -->
        <span title="ir arriba" class="ir-arriba point-up"> <img src="img/subir.ico" > </span>
        <section class="container">
            <!-- para el encabezado-->
            <div class="mx-auto center container embed-responsive-item" style="height: 105px">
                <!--background-color: lightskyblue-->
                <img src="img/logo_min.png" class="rounded float-left embed-responsive-item" alt="100" height="100">
                <img src="img/log_vlcc.png" class="rounded float-right embed-responsive-item" alt="100" height="100">
                <p class="text-center text; text-uppercase font-italic font-weight-bold font-size text-primary h3"
                    style=" font-family: Gungsuh">Viceministerio de
                    <br></p>
                <p class="text-center text; text-uppercase font-italic font-weight-bold font-size text-primary h3"
                    style=" font-family: Gungsuh">
                    lucha contra el contrabando
                </p>

                <img src="img/cinta.png" class="img-fluid style=" margin-left: 50%;margin-right: 10%;">
            </div>
            <br>

          <!--EMPIEZA LA BARRA DE NAVEGACION-->

          <nav class="navbar navbar-expand-md navbar-light bg-light container embed-responsive-item">
            <a class="navbar-brand pb-2" href="index.html">INICIO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> INSTITUCION </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="objetivosFunciones.php">Objetivo y Funciones</a>
                            </li>
                            <li><a class="dropdown-item" href="leyes.php">Marco Legal</a></li>
                            <li><a class="dropdown-item" href="organigrama.php">Organigrama VLCC</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> UNIDADES </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="unidadGestion.php">Unidad de
                                    Gestion</a></li>
                            <li><a class="dropdown-item" href="unidadCoordinacion.php">Unidad de
                                    Coordinacion <br> Interinstitucional</a></li>
                            <li><a class="dropdown-item" href="unidadInformacion.php">Unidad de
                                    Informacion y <br> Comunicacion Especializada</a></li>
                            <li><a class="dropdown-item" href="unidadSupervision.php">Unidad de
                                    Supervision y <br> Lucha Contra el Contrabando</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link"
                            href="https://www.google.com/maps/place/Banco+Bcp/@-16.5013288,-68.1233781,45m/data=!3m1!1e3!4m5!3m4!1s0x0:0x546a02adf86708c3!8m2!3d-16.5012158!4d-68.1230121?hl=es-419"
                            target="_blank">MAPA</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> MARCO LEGAL </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="constitucion.php">Constitucion Politica
                                    <br>
                                    del Estado</a></li>
                            <li><a class="dropdown-item" href="leyes.php">Leyes</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> PRENSA </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="">Revista informativa</a></li>
                            <li><a class="dropdown-item" href="videos.php">Videos</a></li>
                            <li><a class="dropdown-item" href="galeria.php">Galeria de fotos</a></li>
                            <li><a class="dropdown-item" href="noticias.php">Noticias</a></li>
                            <li><a class="dropdown-item" href="hemeroteca.php">Hemeroteca</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- termina la barra de navegacion-->

            <!--para el carrusel de imagenes -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div id="demo" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <li data-target="#demo" data-slide-to="0" class="active"></li>
                                <li data-target="#demo" data-slide-to="1"></li>
                                <li data-target="#demo" data-slide-to="2"></li>
                            </ul>
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/mov1.jpg" alt="al">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/mov2.jpg" alt="Chicago">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/mov3.jpg" alt="New York">
                                </div>
                            </div>
                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#demo" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <nav class="navbar navbar-light bg-light">
                            <a class="navbar-brand">
                                <img src="img/ubicacion.jpg" width="30" height="30" class="d-inline-block align-top"
                                    alt="">
                                Ubicacion
                            </a>
                        </nav>
                        <!--Google map-->
                        <div id="map-container-google-3" class="z-depth-1-half map-container-3">

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d790.7510452050452!2d-68.12399937083268!3d-16.501257613418876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f218a76210af9%3A0x55705a59ac630547!2sViceministerio%20de%20Lucha%20Contra%20el%20Contrabando!5e1!3m2!1ses-419!2sbo!4v1588119680280!5m2!1ses-419!2sbo"
                                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                        <div class="text-center content">

                            <a class="navbar-brand"
                                href="https://www.facebook.com/ministeriodedefensa.estadoplurinacionaldebolivia/"
                                target="_blank">
                                <img src="img/facebook.png" width="30" height="30" class="d-inline-block align-top"
                                    alt="">
                            </a>
                            <a class="navbar-brand" href="https://twitter.com/mindefbolivia" target="_blank">
                                <img src="img/twitter.png" width="30" height="30" class="d-inline-block align-top"
                                    alt="">
                            </a>
                            <a class="navbar-brand" href="https://www.youtube.com/channel/UCSi4YowPO7bJTqNExTEaggw"
                                target="_blank">
                                <img src="img/youtube.png" width="30" height="30" class="d-inline-block align-top"
                                    alt="">
                            </a>
                            <a class="navbar-brand" href="index.html">
                                <img src="img/inicio.png" width="30" height="30" class="d-inline-block align-top"
                                    alt="">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <hr>

            <!-- para la 3ra párte-->
            <div class="container">
                <div class="row">
                    <div class="col text-justify " style="">


                        <p class="font-weight-light">
                        <p class="h4 font-weight-bold text-center .titulo"> REVISTA INFORMATIVA</p>
                        <ul>
                            <li>Fortalecer los mecanismos y los medios de lucha contra el contrabando para hacerlos más
                                eficientes y eficaces.</li>
                            <li>Frenar la guerra económica y el desangramiento económico que sufre Bolivia por el
                                contrabando.</li>
                            <li>Reducir al mínimo el ingreso de mercadería ilegal.</li>
                        </ul>
                        <div class="container text-center">
                            <a href="doc/revista.pdf" target="_blank">
                                <img title="CLICK PARA ABRIR DOCUMENTO" class="img-fluid img-rounded" src="img/portada.jpg" alt="">
                            </a>

                        </div>


                        </p>

                    </div>
                    <!--revistas-->
                    <div class=" card width" style=" width: 10rem;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <p class="font-italic text-center">Revista</p>
                                <a class="font-italic  center" href="doc/revista.pdf" target="_blank">
                                    <img src="img/portada.jpg" class="rounded img-rounded float-right"
                                        alt="Cinque Terre" width="110%" height="50%">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--instituciones-->
                    <div class=" card width" style=" width: 10rem;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <p class="font-italic text-center">Instituciones</p>
                                <a class="font-italic  center" href="https://www.aduana.gob.bo/aduana7/"
                                    target="_blank">
                                    <img src="img/aduan.jpg" class="rounded img-rounded float-right" alt="Cinque Terre"
                                        width="110%" height="50%">
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a class="font-italic  center" href="http://www.senasag.gob.bo/" target="_blank">
                                    <img src="img/senasag.png" class="rounded img-rounded float-right"
                                        alt="Cinque Terre" width="110%" height="50%">
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a class="font-italic  center" href="https://www.asfi.gob.bo/" target="_blank">
                                    <img src="img/asfi.png" class="rounded img-rounded float-right" alt="Cinque Terre"
                                        width="110%" height="50%">
                                </a>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>

            <hr>
            <!-- video e imagenes -->
            <?php
                 
                 include "./pie_pagina.php";

                 ?>
        </section>
    </div>
</body>

</html>