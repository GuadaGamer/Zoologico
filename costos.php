<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Zoologico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7a93f8c7d6.js" crossorigin="anonymous"></script>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

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
                <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                    <h1 class="display-4 fw-normal">Precios</h1>
                    <p class="fs-5 text-muted">Compara los diferentes precios que tenemos para ti, junto con todos los beneficios que cada uno de ellos te ofrece haciendo cada visita inolvidable.</p>
                </div>
            </div>
        </div>
        <div id="medio" class="row">
            <div class="col">
                <section>
                    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                        <div class="col">
                            <div class="card mb-4 rounded-3 shadow-sm">
                                <div class="card-header py-3">
                                    <h4 class="my-0 fw-normal">General</h4>
                                </div>
                                <div class="card-body">
                                    <h2 class="card-title pricing-card-title">$110<small class="text-muted fw-light">/adulto</small></h2>
                                    <h2 class="card-title pricing-card-title">$70<small class="text-muted fw-light">/niños</small></h2>
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li>Ingreso al zoologico</li>
                                        <li>Rancho Veterinarios</li>
                                        <li>Arena de crianza</li>
                                        <li>Herpetario</li>
                                    </ul>
                                    <button type="button" class="w-100 btn btn-lg btn-outline-primary">Adquierelos aqui!</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card mb-4 rounded-3 shadow-sm">
                                <div class="card-header py-3">
                                    <h4 class="my-0 fw-normal">VIP</h4>
                                </div>
                                <div class="card-body">
                                    <h2 class="card-title pricing-card-title">$305<small class="text-muted fw-light">/adulto</small></h2>
                                    <h2 class="card-title pricing-card-title">$210<small class="text-muted fw-light">/niños</small></h2>
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li>Ingreso al zoologico</li>
                                        <li>Rancho Veterinarios</li>
                                        <li>Arena de crianza</li>
                                        <li>Herpetario</li>
                                        <li>Maravillas del Kalahari</li>
                                        <li>Visita al Acuario Guadalajara</li>
                                        <li>Recorrido en el Safari Masai Mara</li>
                                        <li>Recorrido en el Tren Panorámico</li>
                                        <li>Ingreso a Antártida</li>
                                        <li>Reino de los pingüinos</li>
                                    </ul>
                                    <button type="button" class="w-100 btn btn-lg btn-primary">Adquierelos aqui!</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card mb-4 rounded-3 shadow-sm border-primary">
                                <div class="card-header py-3 text-white bg-primary border-primary">
                                    <h4 class="my-0 fw-normal">Diamante</h4>
                                </div>
                                <div class="card-body">
                                    <h2 class="card-title pricing-card-title">$355<small class="text-muted fw-light">/adulto</small></h2>
                                    <h2 class="card-title pricing-card-title">$270<small class="text-muted fw-light">/niños</small></h2>
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li>Ingreso al zoologico</li>
                                        <li>Rancho Veterinarios</li>
                                        <li>Arena de crianza</li>
                                        <li>Herpetario</li>
                                        <li>Maravillas del Kalahari</li>
                                        <li>Visita al Acuario Guadalajara</li>
                                        <li>Recorrido en el Safari Masai Mara</li>
                                        <li>Recorrido en el Tren Panorámico</li>
                                        <li>Ingreso a Antártida</li>
                                        <li>Reino de los pingüinos</li>
                                        <li>Viaje en el SkyZoo</li>
                                    </ul>
                                    <button type="button" class="w-100 btn btn-lg btn-primary">Adquierelos aqui!</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 class="display-6 text-center mb-4">Comparar paquetes.</h2>

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
                    <div class="col justify-content-center">
                        <p class="fs-8 text-muted ">Niños de 3 a 11 años pagan boleto NIÑO. De 12 en adelante pagan boleto ADULTO. Tercera edad pagan boleto NIÑO. DEBIDO A LA EMERGENCIA SANITARIA DEL COVID19 LA ALIMENTACIÓN A JIRAFAS EN SAFARI Y LOS TALLERES DE RANCHO VETERINARIO QUEDAN FUERA DE SERVICIO HASTA NUEVO AVISO. ESTAS MEDIDAS SON PARA SALVAGUARDAR LA SALUD DE NUESTROS VISITANTES, COLABORADORES Y ANIMALES. AGRADECEMOS MUCHO SU COMPRENSIÓN.</p>

                    </div>
                </section>
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
