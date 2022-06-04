<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Zoologico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7a93f8c7d6.js" crossorigin="anonymous"></script>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
   <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check" viewBox="0 0 16 16">
            <title>Check</title>
            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
    </svg>
    <div id="wrapper" class="container-fluid">
        <div class="row">
            <div class="col">
                <header>

                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/Animales/img1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/Animales/img2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/Animales/img3.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Siguiente</span>
                        </button>
                    </div>
                </header>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="mapa.php">Mapa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="costos.php">Costos</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Atracciones
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Acuario</a></li>
                                        <li><a class="dropdown-item" href="#">Zafari</a></li>
                                        <li><a class="dropdown-item" href="#">Sabahana</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div id="medio" class="row">
            <div class="col">
                <main class="container">
                    <div class="row g-5">
                        <div class="col-md-8">
                            <h1 class="pb-4 mb-4 fst-italic border-bottom">
                                Preguntas frecuentes.
                            </h1>

                            <article class="blog-post">
                                <h2 class="blog-post-title">¿Cuáles son las medidas sanitarias en esta contingencia?</h2>
                                <p class="blog-post-meta">Febrero 28, 2022</p>

                                <p>Actualmente tenemos un aforo permitido del 70% de nuestra capacidad, aproximadamente 6000 personas, por lo que te recomendamos llegar temprano. El horario es de martes a domingo de 10 de la mañana a 6 de la tarde.</p>
                                <hr>
                                <p>Las atracciones están funcionando excepto el museo interactivo CIA, los talleres de Rancho Veterinario y la alimentación de jirafas en el safari. </p>
                                <p>
                                    Dentro de las instalaciones se deberán seguir las medidas sanitarias utilizadas en espacios públicos que son el uso correcto y constante del cubrebocas mientras permaneces en nuestras instalaciones, lavado de manos constante con agua y jabón, uso de alcohol en gel cada vez que te lo soliciten y toma de temperatura al ingresar. Para más información sobre nuestros paquetes y atracciones, te invitamos a que visite nuestra <a href="index.php">página.</a></p>
                                <h2>¿Qué precio tiene la entrada al zoológico?</h2>
                                <blockquote class="blockquote">
                                    <p>Consulta los precios de tus entradas al zoológico en la página de <a href="costos.php">boletos.</a></p>
                                </blockquote>
                                <h3>¿Que me ofrecen los paquetes?</h3>
                                <div class="table-responsive">
                                    <table class="table text-center">
                                        <thead>
                                            <tr>
                                                <th style="width: 34%;"></th>
                                                <th style="width: 22%;">General</th>
                                                <th style="width: 22%;">VIP</th>
                                                <th style="width: 22%;">Diamante</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row" class="text-start">Entrada General</th>
                                                <td><svg class="bi" width="24" height="24">
                                                        <use xlink:href="#check" />
                                                    </svg></td>
                                                <td><svg class="bi" width="24" height="24">
                                                        <use xlink:href="#check" />
                                                    </svg></td>
                                                <td><svg class="bi" width="24" height="24">
                                                        <use xlink:href="#check" />
                                                    </svg></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-start">Rancho Veterinarios</th>
                                                <td><svg class="bi" width="24" height="24">
                                                        <use xlink:href="#check" />
                                                    </svg></td>
                                                <td><svg class="bi" width="24" height="24">
                                                        <use xlink:href="#check" />
                                                    </svg></td>
                                                <td><svg class="bi" width="24" height="24">
                                                        <use xlink:href="#check" />
                                                    </svg></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-start">Arena de crianza</th>
                                                <td><svg class="bi" width="24" height="24">
                                                        <use xlink:href="#check" />
                                                    </svg></td>
                                                <td><svg class="bi" width="24" height="24">
                                                        <use xlink:href="#check" />
                                                    </svg></td>
                                                <td><svg class="bi" width="24" height="24">
                                                        <use xlink:href="#check" />
                                                    </svg></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-start">Herpetario</th>
                                                <td><svg class="bi" width="24" height="24">
                                                        <use xlink:href="#check" />
                                                    </svg></td>
                                                <td><svg class="bi" width="24" height="24">
                                                        <use xlink:href="#check" />
                                                    </svg></td>
                                                <td><svg class="bi" width="24" height="24">
                                                        <use xlink:href="#check" />
                                                    </svg></td>
                                            </tr>
                                        </tbody>

                                        <tbody>
                                            <tr>
                                                <th scope="row" class="text-start">Maravillas del Kalahari</th>
                                                <td></td>
                                                <td><svg class="bi" width="24" height="24">
                                                        <use xlink:href="#check" />
                                                    </svg></td>
                                                <td><svg class="bi" width="24" height="24">
                                                        <use xlink:href="#check" />
                                                    </svg></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-start">Visita al Acuario Guadalajara</th>
                                                <td></td>
                                                <td><svg class="bi" width="24" height="24">
                                                        <use xlink:href="#check" />
                                                    </svg></td>
                                                <td><svg class="bi" width="24" height="24">
                                                        <use xlink:href="#check" />
                                                    </svg></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-start">Recorrido en el Safari Masai Mara</th>
                                                <td></td>
                                                <td><svg class="bi" width="24" height="24">
                                                        <use xlink:href="#check" />
                                                    </svg></td>
                                                <td><svg class="bi" width="24" height="24">
                                                        <use xlink:href="#check" />
                                                    </svg></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-start">Recorrido en el Tren Panorámico</th>
                                                <td></td>
                                                <td><svg class="bi" width="24" height="24">
                                                        <use xlink:href="#check" />
                                                    </svg></td>
                                                <td><svg class="bi" width="24" height="24">
                                                        <use xlink:href="#check" />
                                                    </svg></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-start">Ingreso a Antártida</th>
                                                <td></td>
                                                <td><svg class="bi" width="24" height="24">
                                                        <use xlink:href="#check" />
                                                    </svg></td>
                                                <td><svg class="bi" width="24" height="24">
                                                        <use xlink:href="#check" />
                                                    </svg></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-start">Reino de los pingüinos</th>
                                                <td></td>
                                                <td><svg class="bi" width="24" height="24">
                                                        <use xlink:href="#check" />
                                                    </svg></td>
                                                <td><svg class="bi" width="24" height="24">
                                                        <use xlink:href="#check" />
                                                    </svg></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-start">Viaje en el SkyZoo</th>
                                                <td></td>
                                                <td></td>
                                                <td><svg class="bi" width="24" height="24">
                                                        <use xlink:href="#check" />
                                                    </svg></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </article>

                        </div>

                        <div class="col-md-4">
                            <div class="position-sticky" style="top: 2rem;">
                                <div class="p-4 mb-3 bg-light rounded">
                                    <h4 class="fst-italic">Información</h4>
                                    <p class="mb-0">Aqui podra encontrar las preguntas que con mayor frecuencia nos llegan a todas nuestras redes sociales y redes sociales.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div class="row">
                <div class="col">
                    <footer>
                        <div class="row">
                            <div class="col-4">
                                <nav class="menuinferior">
                                   <h3>Enlaces rapidos</h3>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-center"><a href="preguntas.php">Preguntas Frecuentes</a></li>
                                        <li class="list-group-item d-flex justify-content-center"><a href="facturacion.php">Facturación</a></li>
                                        <li class="list-group-item d-flex justify-content-center"><a href="docs/Art8-II-D_Los_reglamentos_federales,_estatales_y_municipales.pdf" target="_blank">Reglamento</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-4">
                                <nav class="menuinferior">
                                    <h3>Contacto</h3>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-center">
                                            <a href="tel:4621234567">4621234567</a>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-center"><a href="mailto:uncorreo@correo.com"> uncorreo@tucorreo.com</a></li>
                                        <li class="list-group-item d-flex justify-content-center"><a href="#">Paseo del Zoológico No. 600 y Calzada Independencia No.4510. Col. Huentitán el Alto, C.P. 44390.</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-4">
                                <h3>Redes Sociales</h3>
                                <a id="face" href="https://es-la.facebook.com/" class="redess"><i class="fab fa-facebook"></i></a>
                                <a id="whats" href="https://wa.me/524641005647" class="redess"><i class="fab fa-whatsapp"></i></a>
                                <a id="insta" href="https://www.instagram.com/?hl=es-la"><span class="rainbow-lr"><i class="fab fa-instagram"></i></span></a>
                                <br>
                                <a id="youtube" href="https://www.youtube.com/" class="redess"><i class="fab fa-youtube"></i></a>
                                <a id="tiktok" href="https://www.tiktok.com/es/" class="redess"><i class="fab fa-tiktok"></i></a>
                                <a id="twiter" href="https://twitter.com/?lang=es" class="redess"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </div>

</body>

</html>
