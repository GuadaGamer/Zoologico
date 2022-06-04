<?php
    require_once('class/atracciones.class.php');
    $atracciones = $ATRACCION->read();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Zoologico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7a93f8c7d6.js" crossorigin="anonymous"></script>
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
                                        <?php
                                            foreach($atracciones as $atraccion){
                                                echo '<li><a class="dropdown-item" href="atracciones.php">'.$atraccion["atraccion"].'</a></li>';
                                            }
                                        ?>
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
                <div class="container">
                    <?php
                    $renglon=1;
                    $columna=0;
                   foreach($atracciones as $atraccion):
                   ?>
                    <?php
                        if($renglon % 3 == 1 or $renglon ==1):
                        $columna=1;
                    ?>
                    <div class="row">
                        <?php
                            endif;
                        ?>
                        <div class="col-lg-4">
                            <?php $columna++ ?>
                            <img class="rounded-circle" src="<?php echo $atraccion["foto"] ?>" alt="" width="200" height="200">

                            <h2><?php echo $atraccion["atraccion"] ?></h2>
                            <p><?php echo $atraccion["descripcion"] ?></p>
                            <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                        </div><!-- /.col-lg-4 -->
                        <?php
                        if($columna % 3 == 1):
                    ?>
                    </div>
                    <?php
                            endif;
                        ?>
                    <?php
                        $renglon++;
                        endforeach;
                    
                   ?>
                </div>
            </div>
            <h2>Otras atracciones</h2>
            <p id="demo"></p>
            <script>
                var xmlhttp = new XMLHttpRequest();
                let text = "";
                xmlhttp.onload = function() {
                    const myJSON = JSON.parse(this.responseText);
                    const myObj = JSON.parse(myJSON);
                    for(let i in myObj.atraccion) {
                         text += myObj[i].atraccion + ",";
                    }
                    document.getElementById("demo").innerHTML = text;
                }
                xmlhttp.open("GET", "ws/atracciones.php", true);
                xmlhttp.send();

            </script>
            <div class="row" id="abajo">
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
