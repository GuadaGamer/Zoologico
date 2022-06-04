<?php
    $alumnos = array(   0 => array("no_control"=>"19030053","nombre"=>"Guadalupe"),
                        1 => array("no_control"=>"19030634","nombre"=>"Omar"),
                        2 => array("no_control"=>"19030645","nombre"=>"Sandra"));
    foreach ($alumnos as $alumno){
            echo $alumno["nombre"].' '.$alumno["no_control"]."<br>";
    }
    echo '<br>Numero de alumnos: '.count($alumnos);
    $atracciones = array();
    $myfile = fopen("atracciones.txt", "r") or die("Unable to open file!");
    // Output one line until end-of-file
    while(!feof($myfile)) {
        $linea = fgets($myfile);
        $atraccion = explode("|",$linea);
        array_push($atracciones,$atraccion);
    }
    fclose($myfile);

    foreach($atracciones as $atraccion){
        echo "<h1> $atraccion[0] </h1>";
        echo '<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14926.17043419238!2d'.$atraccion[2].'!3d'.$atraccion[1].'!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1646159919077!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';
    }
?>