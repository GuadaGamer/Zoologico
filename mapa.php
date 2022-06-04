<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zoologico</title>
    <script src="https://kit.fontawesome.com/7a93f8c7d6.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
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
                            <span class="visually-hidden">Anteior</span>
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
                                        <li><a class="dropdown-item" href="#">Sabaana</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div id="medio" class="row">
            <div class="col-8">
                <section>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3731.5414959615073!2d-103.3091602855502!3d20.728835303326345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b1d5eed11331%3A0x9cf40bdcb60e44c9!2sZool%C3%B3gico%20Guadalajara!5e0!3m2!1ses-419!2smx!4v1645725687461!5m2!1ses-419!2smx" width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </section>
            </div>
            <div class="col-4">
                <aside>
                    <div class="card">

                        <img src="/zoologico/images/entrada.jpg" class="card-img-top" alt="Búho Nival">
                        <div class="card-body">
                            <h5 class="card-title">Entrada Zoologico</h5>
                            <p>Imagen de la entrada del zoologico.</p>
                            <h5>Dirección</h5>
                            <p class="card-text">Paseo del Zoológico No. 600 y Calzada Independencia No.4510. Col. Huentitán el Alto, C.P. 44390.</p>
                            <a href="https://wa.me/524641005647" class="cardx"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </aside>
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
                                        <li class="list-group-item d-flex justify-content-center"><a href="tel:4621234567">4621234567</a></li>
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
