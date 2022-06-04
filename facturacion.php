<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Zoologico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                <main>
                    <div class="py-5 text-center">
                        <h2>Facturación</h2>
                        <p class="lead">“De acuerdo con el artículo 29-A fracción I y IV de CFF los Comprobantes Fiscales Digitales por Internet (CFDI) deberán contener como requisito el nombre o razón social tanto del emisor como del receptor, adicional a los ya conocidos Código Postal y Régimen Fiscal, los cuales podrá obtener de tu Constancia de Situación Fiscal, por lo que si realizas CFDI con la versión 4.0 del Anexo 20 este será el nuevo criterio que considerar.”</p>
                    </div>

                    <div class="row g-5">
                        <div class="col">
                            <h4 class="mb-3">Por favor completa tus datos.</h4>
                            <form class="needs-validation" novalidate>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label for="firstName" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                        <div class="invalid-feedback">
                                            El nombre es requerido.
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="lastName" class="form-label">Apellido</label>
                                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                        <div class="invalid-feedback">
                                            El apellido es requerido.
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="rfc" class="form-label">RFC (fisica o moral)</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text">!</span>
                                            <input type="text" class="form-control" id="rfc" placeholder="RFC" required>
                                            <div class="invalid-feedback">
                                                Tu RFC es requerido.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="email" class="form-label">Correo electronico.</label>
                                        <input type="email" class="form-control" id="email" placeholder="tucorreo@deejemplo.com">
                                        <div class="invalid-feedback">
                                            Por favor introdusca un correo valido.
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="address" class="form-label">Dirección</label>
                                        <input type="text" class="form-control" id="address" placeholder="Tu direccion #123 col. tu colonia" required>
                                        <div class="invalid-feedback">
                                            Por favor introduce tu dirección.
                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <label for="country" class="form-label">Ciudad</label>
                                        <select class="form-select" id="country" required>
                                            <option value="">Selecciona...</option>
                                            <option>México</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Por favor selecciona una dirección.
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="state" class="form-label">Estado</label>
                                        <select class="form-select" id="state" required>
                                            <option value="">Selecciona...</option>
                                            <option>Guanajuato</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Por favor selecciona un estado valido.
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <label for="zip" class="form-label">Codigo postal</label>
                                        <input type="text" class="form-control" id="zip" placeholder="" required>
                                        <div class="invalid-feedback">
                                            Codigo postal requerido.
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-3">

                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="same-address">
                                    <label class="form-check-label" for="same-address">La dirección de envío es la misma que mi dirección de facturación</label>
                                </div>

                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="save-info">
                                    <label class="form-check-label" for="save-info">Guardar la información para una proxima vez.</label>
                                </div>

                                <hr class="my-3">

                                <button class="w-100 btn btn-primary btn-lg" type="submit">Enviar</button>
                                <hr class="my-3">
                            </form>
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
